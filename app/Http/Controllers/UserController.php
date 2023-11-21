<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{

	// Show Login Form
	public function login(){
		return view('auth.login');
	}
    // Login User 
    public function postLogin(Request $request){
    	$response = Http::post(env("API_BASE_URL").'/merchant-api/v1/login', [
            'email' => $request->email,
            'password' => $request->password,
        ]);
        if($response->successful()){
            $request->session()->put("context_token", $response->json("sw-context-token"));
            $response = Http::withHeaders([
                'sw-context-token' => $response->json("sw-context-token")
            ])->get(env("API_BASE_URL").'/merchant-api/v1/profile');
            $request->session()->put('merchant', $response->json());
            return redirect('/dashboard');
        }
        else{
            $errors = $response->json("errors");
            $request->session()->flash("error", $errors[0]["detail"]);
            return redirect()->back();
        }
    }


    // Show Register Form
    public function signup(){
        $response = Http::get(env("API_BASE_URL").'/organization-api/v1/organizations');
        $data = [
            'organizations' => $response->json()
        ];
        return view('auth.register', $data);
    }

    // Register Merchant 
    public function postSignup(Request $request){
        $response = Http::post(env("API_BASE_URL").'/merchant-api/v1/register', [
            'email' => $request->email,
            'password' => $request->password,
            'publicCompanyName' => $request->company_name,
            'salesChannelId' => "b17ca2b5f3a8479f80b8297f358150d9"
        ]);
        if($response->successful()){
            
            $request->session()->flash('success', 'Successfully Register the Sodagar. Please check your email for verification link.');
            return redirect('login');
        }
        else{
            $errors = $response->json("errors");
            $request->session()->flash("error", $errors[0]["detail"]);
            return redirect()->back();
        }
    }


    //Logout 
    public function logout(Request $request){
    	$response = Http::withHeaders([
            'sw-context-token' => $request->session()->get("context_token")
        ])->post(env("API_BASE_URL").'/merchant-api/v1/logout');
        if($response->ok()){
        	$request->session()->flush();
        }
    	
    	return redirect('login');
    }

    // Show Profile
    public function profile(Request $request) {
        $response = Http::withHeaders([
            'sw-context-token' => $request->session()->get("context_token")
        ])->get(env("API_BASE_URL").'/merchant-api/v1/profile');
        $request->session()->put('merchant', $response->json());

        $shipping = false;
        $pickup = false;
        $remoteCon = false;
        $delivery = false;

        foreach($response->json('services') as $service) {
            if($service['name'] == "Shipping"){
                $shipping = true;
            }
            if($service['name'] == "Pick up"){
                $pickup = true;
            }
            if($service['name'] == "Remote consulting"){
                $remoteCon = true;
            }
            if($service['name'] == "Delivery to Home"){
                $delivery = true;
            }
        }

        if($response->ok()){
            $cat_response = Http::withHeaders([
                'sw-context-token' => $request->session()->get("context_token")
            ])->get(env("API_BASE_URL").'/merchant-api/v1/industries');
            $sub_cat_response = Http::withHeaders([
                'sw-context-token' => $request->session()->get("context_token")
            ])->get(env("API_BASE_URL").'/merchant-api/v1/sub-category',[
                'parent' => $response->json('categoryId')
            ]);
          	$sub_categories = $sub_cat_response->json();
          	if(isset($sub_categories['success']) && !$sub_categories['success']){
            	$sub_categories = array();
            }
            $country_response = Http::withHeaders([
                'sw-context-token' => $request->session()->get("context_token")
            ])->get(env("API_BASE_URL").'/merchant-api/v1/country');
            $data = [
                'pageTitle' => "Profile",
                'profile' => $response->json(),
                'categories' => $cat_response->json(),
                'sub_categories' => $sub_categories,
                'countries' => $country_response->json('data'),
                'shipping' => $shipping,
                'pickup' => $pickup,
                'remoteCon' => $remoteCon,
                'delivery' => $delivery
            ];
        }
        return view('profile.index', $data);


    }

    // Update Profile General Info 
    public function update(Request $request){

        $tags_arr = json_decode($request->tags);
        $tags = array();
        if($tags_arr){
            foreach($tags_arr as $tag){
                array_push($tags, $tag->value);
            }
        }
        
        $tags = json_encode($tags);

        $services_response = Http::withHeaders([
            'sw-context-token' => $request->session()->get("context_token")
        ])->get(env("API_BASE_URL").'/merchant-api/v1/services');

        $allServices = $services_response->json();
        $active_service = [];
        foreach ($allServices as $service) {
            if($service['name'] == "Shipping" && $request->shipping){
                
                array_push($active_service, [ "id" => $service['id']]);
            }
            if($service['name'] == "Pick up" && $request->pickup){
                
                array_push($active_service, [ "id" => $service['id']]);
            }
            if($service['name'] == "Remote consulting" && $request->remoteCon){
                
                array_push($active_service, [ "id" => $service['id']]);
            }
            if($service['name'] == "Delivery to Home" && $request->delivery){
               
                array_push($active_service, [ "id" => $service['id']]);
            }
        }

        if($request->isPublic){
            $isPublic = true;
        }
        else{
            $isPublic = false;
        }
      	if($request->hasFile('image')){

            $merchant = $request->session()->get('merchant');
            $delete_response = Http::withHeaders([
                'sw-context-token' => $request->session()->get("context_token")
            ])->delete(env("API_BASE_URL").'/merchant-api/v1/profile/media/'.$merchant['coverId']);
            
            $photo = fopen($request->file('image')->path(), 'r');

            $upload_response = Http::withHeaders([
                'sw-context-token' => $request->session()->get("context_token")
            ])->attach(
                'cover', $photo, 'photo.png'
            )->post(env("API_BASE_URL").'/merchant-api/v1/profile/media');
            
        }
        $response = Http::withHeaders([
            'sw-context-token' => $request->session()->get("context_token")
        ])->patch(env("API_BASE_URL").'/merchant-api/v1/profile', [

            'public' => $isPublic,
            'categoryId' => $request->category,
            'main_category' => $request->sub_category,
            'publicCompanyName' => $request->companyName,
            'publicOwner' => $request->owner,
            'street' => $request->street,
            'zip' => $request->zipcode,
            'city' => $request->city,
            'publicPhoneNumber' => $request->phone,
            'countryId' => $request->country,
            'services' => $active_service,
            'publicEmail' => $request->email,
            'publicWebsite' => ($request->website) ? $request->website : "",
            'publicOpeningTimes' => $request->openHours,
            'publicDescription' => $request->description,
            'availability' => (int)$request->openStatus,
            'availabilityText' => $request->openStatusNote,
            'imprint' => $request->imprint,
            'tos' => $request->tos,
            'revocation' => $request->revocation,
            'privacy' => $request->privacy,
            'radius' => $request->radius,
            'longitude' => $request->longitude,
            'latitude' => $request->latitude,
            'whatsapp' => $request->whatsapp,
            'privacy' => $request->privacy,
            'pinlocation' => $request->pinlocation,
            'googlemap' => $request->googlemap,
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
            'Tiktok' => $request->Tiktok,
            'youtube' => $request->youtube,
            'twitter' => $request->twitter,
          

            'tags' => $tags,
        ]);
        if($response->ok()){
            $request->session()->flash('success','Profile updated Successfully');
        }
        else{
            $request->session()->flash('error', "Something went wrong. Please try again.");
        }
        return redirect()->back();
    }


    // Show Info Page
    public function info(Request $request){
        $response = Http::withHeaders([
            'sw-context-token' => $request->session()->get("context_token")
        ])->get(env("API_BASE_URL").'/merchant-api/v1/profile');

        $data = [
            'pageTitle' => "Info",
            'profile' => $response->json(),
        ];
        return view('profile.info', $data);
    }

    // Update Info
    public function updateInfo(Request $request){
        $response = Http::withHeaders([
            'sw-context-token' => $request->session()->get("context_token")
        ])->patch(env("API_BASE_URL").'/merchant-api/v1/profile', [
            'firstName' => $request->firstName,
            'lastName' => $request->lastName,
        ]);

        if($response->ok()){
            $request->session()->flash('success','Info updated Successfully');
        }
        else{
            $request->session()->flash('error', "Something went wrong. Please try again.");
        }
        return redirect()->back();

    }

    // Show Change Email Form
    public function email(Request $request){
        $response = Http::withHeaders([
            'sw-context-token' => $request->session()->get("context_token")
        ])->get(env("API_BASE_URL").'/merchant-api/v1/profile');

        $data = [
            'pageTitle' => "Email",
            'profile' => $response->json(),
        ];
        return view('profile.email', $data);
    }

    // Update Email
    public function updateEmail(Request $request){
        $response = Http::withHeaders([
            'sw-context-token' => $request->session()->get("context_token")
        ])->patch(env("API_BASE_URL").'/merchant-api/v1/profile', [
            'email' => $request->newEmail
        ]);
        if($response->ok()){
            $request->session()->flash('success','Email updated Successfully');
        }
        else{
            $request->session()->flash('error', "Something went wrong. Please try again.");
        }
        return redirect()->back();
    }


    // Show Change Password Form
    public function password(Request $request){

        $data = [
            'pageTitle' => "Password",
        ];
        return view('profile.password', $data);

    }


    // Update Password
    public function updatePassword(Request $request){

        $response = Http::withHeaders([
            'sw-context-token' => $request->session()->get("context_token")
        ])->patch(env("API_BASE_URL").'/merchant-api/v1/profile', [
            'password' => $request->newPassword
        ]);

        if($response->ok()){
            $request->session()->flash('success','Password updated Successfully');
        }
        else{
            $request->session()->flash('error', "Something went wrong. Please try again.");
        }
        return redirect()->back();

    }


    // Reset Password Section

    // Show forgot password form

    public function forgotPassword(){
        return view('auth.forgot-password');
    }

    // Submit forgot form action

    public function forgotPasswordPost(Request $request){
        $response = Http::post(env("API_BASE_URL").'/merchant-api/v1/reset-password', [
            'email' => $request->email
        ]);

        if($response->ok()){
            if($response->json('success')){
                $request->session()->flash('success', "Reset Password link is Sent. Please check your email.");
            }
            else{
                $request->session()->flash('error', "Email dosen't exist.");
            }
        }
        else{
            $request->session()->flash('error', "Email is required.");
        }
        return redirect()->back();
    }

    // Display Confirm reset password Form 
    public function resetPassword($token){
        $data = [
            'token' => $token
        ];
        return view('auth.reset-password', $data);
    }

    // Submit confirm reset password form
    public function resetPasswordPost(Request $request){
        $response = Http::post(env("API_BASE_URL").'/merchant-api/v1/reset-password-confirm', [
            'token' => $request->token,
            'newPassword' => $request->newPassword
        ]);

        if($response->ok()){
            if($response->json('success')){
                $request->session()->flash('success', "Successfully reset the password. Please login.");
                return redirect('login');
            }
            else{
                $request->session()->flash('error', "Token Expired. Please request for forgot password again.");
            }
        }
        else{
            $request->session()->flash('error', "Something went Wrong. Please try again.");
        }
        return redirect()->back();
    }


}
