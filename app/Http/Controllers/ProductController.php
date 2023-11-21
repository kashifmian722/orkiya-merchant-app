<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProductController extends Controller
{
    // Product Home Page
    public function index(Request $request){
    	$response = Http::withHeaders([
            'sw-context-token' => $request->session()->get("context_token")
        ])->get(env("API_BASE_URL").'/merchant-api/v1/products');

        
        if($response->ok()){
        	$data = [
	    		'pageTitle' => "Products",
	    		'products' => $response->json('data')
	    	];
        }
    	
    	return view('products.index', $data);
    }

    // Show Add Product Form 
    public function add(Request $request){
        $merchant = $request->session()->get('merchant');
      	if(!isset($merchant['customFields']['main_category'])){
          	$request->session()->flash("error","Please Select Main Category first.");
        	return redirect()->back();
        }
        $sub_cat_response = Http::withHeaders([
            'sw-context-token' => $request->session()->get("context_token")
        ])->get(env("API_BASE_URL").'/merchant-api/v1/sub-category',[
            'parent' => $merchant['customFields']['main_category']
        ]);
        $deliveryTime = Http::withHeaders([
            'sw-context-token' => $request->session()->get("context_token")
        ])->get(env("API_BASE_URL").'/merchant-api/v1/delivery-time' );
        $data = [
            'pageTitle' => "Products",
            'categories' => $sub_cat_response->json(),
            'delivery_times' => $deliveryTime->json()
        ];
        return view('products.add', $data);
    }
// Store Product 
public function postAddProduct(Request $request){
    // ...

    if($request->hasFile('media')){
        $files = $request->file('media');
        foreach($files as $file){
            $mediaType = $file->getMimeType(); // Get the media type (image or video)
            $mediaExtension = $file->getClientOriginalExtension(); // Get the file extension
            
            // Check if the uploaded file is an image or video based on the media type or extension
            if (strpos($mediaType, 'image') !== false || in_array($mediaExtension, ['jpg', 'jpeg', 'png', 'gif', ])) {
                $mediaKey = 'images'; // Key for images in the API request
            } elseif (strpos($mediaType, 'video') !== false || in_array($mediaExtension, ['mp4', 'mov', 'avi'])) {
                $mediaKey = 'videos'; // Key for videos in the API request
            } else {
                // Invalid file type, handle the error as per your application's requirements
                continue;
            }
            
            $media = fopen($file->path(), 'r');
            $response = Http::withHeaders([
                'sw-context-token' => $request->session()->get("context_token")
            ])->attach(
                $mediaKey.'[0]', $media, $file->getClientOriginalName()
            )->post(env("API_BASE_URL").'/merchant-api/v1/products/'.$id);
        }
    }

    // ...
}
    // Store Product 
    public function postAddProduct(Request $request){

        $categories = [];
        if($request->category_level_3){
            $categories[] = [ 'id' => $request->category_level_3];
        }
        if($request->category_level_2){
            $categories[] = [ 'id' => $request->category_level_2];
        }
        if($request->category_level_1){
            $categories[] = [ 'id' => $request->category_level_1];
        }
      	$merchant = $request->session()->get('merchant');
        
      	$response = Http::withHeaders([
                'sw-context-token' => $request->session()->get("context_token")
        ])->post(env("API_BASE_URL").'/merchant-api/v1/products', [
          "name" => $request->name,
          "description" => $request->description,
          "price" => ($request->price) ? (int)$request->price : 0,
          "stock" => ($request->stock) ? (int)$request->stock : 0,
          "productType" => $request->type,
          "tax" => ($request->tax) ? (int)$request->tax : 0,
          "active" => $request->status,
          "category" => $categories,
          "outletId" => $merchant['customFields']['posOutletId'],
          "ean" => $request->ean,
          "delivery" => $request->delivery
        ]);
        $id  = $response->json('data')['id'];
        if($request->hasFile('images')){
            $files = $request->file('images');

            foreach($files as $file){
                $photo = fopen($file->path(), 'r');
                $response = Http::withHeaders([
                    'sw-context-token' => $request->session()->get("context_token")
                ])->attach(
                    'media[0]', $photo, 'photo.png'
                )->post(env("API_BASE_URL").'/merchant-api/v1/products/'.$id);
            }
        }

        if($response->ok()){
            $request->session()->flash('success', "Product added Successfully");
            return redirect('/products');
        }
        else{
            $errors = $response->json("errors");
            $request->session()->flash("error", $errors[0]["detail"]);
            return redirect()->back();
        }

    }

    // Show Edit Product Form
    public function update($id, Request $request){
        $merchant = $request->session()->get('merchant');
        $sub_cat_response = Http::withHeaders([
            'sw-context-token' => $request->session()->get("context_token")
        ])->get(env("API_BASE_URL").'/merchant-api/v1/sub-category',[
            'parent' => $merchant['customFields']['main_category']
        ]);
        $deliveryTime = Http::withHeaders([
            'sw-context-token' => $request->session()->get("context_token")
        ])->get(env("API_BASE_URL").'/merchant-api/v1/delivery-time' );
        $response = Http::withHeaders([
            'sw-context-token' => $request->session()->get("context_token")
        ])->get(env("API_BASE_URL").'/merchant-api/v1/products/'.$id);
        if($response->ok()){
            $data = [
                'pageTitle' => "Products",
                'product' => $response->json('data'),
                'categories' => $sub_cat_response->json(),
                'delivery_times' => $deliveryTime->json()
            ];
        }

        return view('products.edit', $data);

    }

    // Submit Edit Product From
    public function postUpdateProduct($id, Request $request){

        $categories = [];
        if($request->category_level_3){
            $categories[] = [ 'id' => $request->category_level_3];
        }
        if($request->category_level_2){
            $categories[] = [ 'id' => $request->category_level_2];
        }
        if($request->category_level_1){
            $categories[] = [ 'id' => $request->category_level_1];
        }
      	$response = Http::withHeaders([
          'sw-context-token' => $request->session()->get("context_token")
        ])->post(env("API_BASE_URL").'/merchant-api/v1/products/'.$id, [
          "name" => $request->name,
          "description" => $request->description,
          "price" => ($request->price) ? (int)$request->price : 0,
          "listing_prices" => ($request->listing_prices) ? (int)$request->listing_prices : 0,          
          "stock" => ($request->stock) ? (int)$request->stock : 0,
          "productType" => $request->type,
          "tax" => ($request->tax) ? (int)$request->tax : 0,
          "active" => $request->status,
          "category" => $categories,
          "ean" => $request->ean,
          "delivery" => $request->delivery
        ]);

        if($request->hasFile('image1')){
          
            $photo = fopen($request->file('image1')->path(), 'r');
            if($request->image1Id){
                $response = Http::withHeaders([
                    'sw-context-token' => $request->session()->get("context_token")
                ])->attach(
                    'media[0]', $photo, 'photo.png'
                )->post(env("API_BASE_URL").'/merchant-api/v1/products/'.$id , [
                    "mediaId" => $request->image1Id,
                ]);
            }
            else{
                $response = Http::withHeaders([
                    'sw-context-token' => $request->session()->get("context_token")
                ])->attach(
                    'media[0]', $photo, 'photo.png'
                )->post(env("API_BASE_URL").'/merchant-api/v1/products/'.$id );
            }
                
        }
        if($request->hasFile('image2')){
          
            $photo = fopen($request->file('image2')->path(), 'r');
            if($request->image2Id){
                $response = Http::withHeaders([
                    'sw-context-token' => $request->session()->get("context_token")
                ])->attach(
                    'media[0]', $photo, 'photo.png'
                )->post(env("API_BASE_URL").'/merchant-api/v1/products/'.$id , [
                    "mediaId" => $request->image2Id,
                ]);
            }
            else{
                $response = Http::withHeaders([
                    'sw-context-token' => $request->session()->get("context_token")
                ])->attach(
                    'media[0]', $photo, 'photo.png'
                )->post(env("API_BASE_URL").'/merchant-api/v1/products/'.$id );
            }
                
        }
        if($request->hasFile('image3')){
          
            $photo = fopen($request->file('image3')->path(), 'r');
            if($request->image3Id){
                $response = Http::withHeaders([
                    'sw-context-token' => $request->session()->get("context_token")
                ])->attach(
                    'media[0]', $photo, 'photo.png'
                )->post(env("API_BASE_URL").'/merchant-api/v1/products/'.$id , [
                    "mediaId" => $request->image3Id,
                ]);
            }
            else{
                $response = Http::withHeaders([
                    'sw-context-token' => $request->session()->get("context_token")
                ])->attach(
                    'media[0]', $photo, 'photo.png'
                )->post(env("API_BASE_URL").'/merchant-api/v1/products/'.$id );
            }
                
        }
        if($request->hasFile('image4')){
          
            $photo = fopen($request->file('image4')->path(), 'r');
            if($request->image4Id){
                $response = Http::withHeaders([
                    'sw-context-token' => $request->session()->get("context_token")
                ])->attach(
                    'media[0]', $photo, 'photo.png'
                )->post(env("API_BASE_URL").'/merchant-api/v1/products/'.$id , [
                    "mediaId" => $request->image4Id,
                ]);
            }
            else{
                $response = Http::withHeaders([
                    'sw-context-token' => $request->session()->get("context_token")
                ])->attach(
                    'media[0]', $photo, 'photo.png'
                )->post(env("API_BASE_URL").'/merchant-api/v1/products/'.$id );
            }
                
        }
        if($request->hasFile('image5')){
          
            $photo = fopen($request->file('image5')->path(), 'r');
            if($request->image5Id){
                $response = Http::withHeaders([
                    'sw-context-token' => $request->session()->get("context_token")
                ])->attach(
                    'media[0]', $photo, 'photo.png'
                )->post(env("API_BASE_URL").'/merchant-api/v1/products/'.$id , [
                    "mediaId" => $request->image5Id,
                ]);
            }
            else{
                $response = Http::withHeaders([
                    'sw-context-token' => $request->session()->get("context_token")
                ])->attach(
                    'media[0]', $photo, 'photo.png'
                )->post(env("API_BASE_URL").'/merchant-api/v1/products/'.$id );
            }
                
        }
        if($request->hasFile('image6')){
          
            $photo = fopen($request->file('image6')->path(), 'r');
            if($request->image6Id){
                $response = Http::withHeaders([
                    'sw-context-token' => $request->session()->get("context_token")
                ])->attach(
                    'media[0]', $photo, 'photo.png'
                )->post(env("API_BASE_URL").'/merchant-api/v1/products/'.$id , [
                    "mediaId" => $request->image6Id,
                ]);
            }
            else{
                $response = Http::withHeaders([
                    'sw-context-token' => $request->session()->get("context_token")
                ])->attach(
                    'media[0]', $photo, 'photo.png'
                )->post(env("API_BASE_URL").'/merchant-api/v1/products/'.$id );
            }
                
        }

        if($response->ok()){
            $request->session()->flash('success', "Product updated Successfully");
            return redirect('/products');
        }
        else{
            $errors = $response->json("errors");
            $request->session()->flash("error", $errors[0]["detail"]);
            return redirect()->back();
        }
    }

    // Bluk products add. Using CSV
    public function blukUpload(Request $request){
        $file = $request->file('products_csv');
        if($file){
            $filename = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension(); //Get extension of uploaded file
            $tempPath = $file->getRealPath();
            $fileSize = $file->getSize(); //Get size of uploaded file in bytes
            //Check for file extension and size
            if(!$this->checkUploadedFileProperties($extension, $fileSize, $request)){
                return redirect()->back();
            }

            $file = fopen($file->path(), "r");
            $importData_arr = array(); // Read through the file and store the contents as an array
            $i = 0;
            //Read the contents of the uploaded file 
            while (($filedata = fgetcsv($file, 1000, ",")) !== FALSE) {
                $num = count($filedata);
                // Skip first row (Remove below comment if you want to skip the first row)
                if ($i == 0) {
                    $i++;
                    continue;
                }
                for ($c = 0; $c < $num; $c++) {
                    $importData_arr[$i][] = $filedata[$c];
                }
                $i++;
            }
            $loop_success = true;
            $fail_message = "";
            $success_counter = 0;
            fclose($file); //Close after reading
            foreach ($importData_arr as $importData) {
                $status = true;
                if($importData[5] == "true"){
                    $status = true;
                }
                elseif($importData[5] == "false"){
                    $status = false;
                }
                $response = Http::withHeaders([
                    'sw-context-token' => $request->session()->get("context_token")
                ])->post(env("API_BASE_URL").'/merchant-api/v1/products', [
                    "name" => $importData[0],
                    "description" => $importData[1],
                    "price" => $importData[2],
                    "listing_prices" => $importData[3],                  
                    "productType" => $importData[4],
                    "tax" => $importData[5],
                     "active" => $status,
                    
                ]);

                if(!$response->ok()){
                    $loop_success = false;
                    $fail_message .= $importData[0].", ";
                    
                }
                else{
                    $success_counter++;
                }
            }

            if(!$loop_success){
                $request->session()->flash('error', "Failed to upload these file. Due to format issue. ".$fail_message);
            }
            $request->session()->flash('success', $success_counter. " Products Added Successfully");
            return redirect()->back();
        }
        else {
            $request->session()->flash('error', 'No file was uploaded');
            return redirect()->back();
        }

    }


    public function deleteProduct($id, Request $request){
        $response = Http::withHeaders([
            'sw-context-token' => $request->session()->get("context_token")
        ])->delete(env("API_BASE_URL").'/merchant-api/v1/products/'.$id);

        dd($response->json());
        if($response->ok()){
            $request->session()->flash('success', 'Product deleted Successfully');
        }
        else{
            $request->session()->flash('error', 'Something went wrong. Please try again');
        }
        return redirect()->back();
    }

    public function generateQRCode($id, Request $request){
        $response = Http::withHeaders([
            'sw-context-token' => $request->session()->get("context_token")
        ])->get(env("API_BASE_URL").'/merchant-api/v1/products/'.$id);
        if($response->ok()){
            $product = $response->json('data');

            if(isset($product['customFields']['QRcode'])){
                $request->session()->flash('success',"Successfully Generated QR Code");
                return redirect()->back();
            }
            else{
                $response = Http::get(env("API_BASE_URL").'/qrcode/v1/index/'.$id.'/product');
                $request->session()->flash('success',"Successfully Generated QR Code");
                return redirect()->back();
            }
        }
        else{
            $request->session()->flash('error',"Something went wrong. Please try again.");
            return redirect()->back();
        }
    }



    //Validate CSV file
    private function checkUploadedFileProperties($extension, $fileSize, $request)
    {
        $valid_extension = array("csv", "xlsx"); //Only want csv and excel files
        $maxFileSize = 2097152; // Uploaded file size limit is 2mb
        
        if (in_array(strtolower($extension), $valid_extension)) {
            
            if ($fileSize <= $maxFileSize) {
                
            } else {
                
                $request->session()->flash('error', 'No file was uploaded');
                return false;
            }
        } else {
            $request->session()->flash('error', 'Invalid file extension');
            return false;
        }
        return true;
    }
}
