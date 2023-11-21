<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    public function login(Request $request){
        
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
            $request->session()->put("error", $errors[0]["detail"]);
            return redirect()->back();
        }
        
    }
}
