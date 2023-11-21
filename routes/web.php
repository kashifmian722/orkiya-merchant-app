<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CategoryController;

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function (Request $request) {
	$emailConfirm = $request->merchantRegistrationCompleted;
	if($emailConfirm == 1){
		$request->session()->flash('success', 'Thanks for confirming your email. You can login now.');
	}
    return view('welcome');
});

// Login Routes
Route::get('/login', [UserController::class, 'login']);
Route::post('/login', [UserController::class, 'postLogin']);

// Signup Routes
Route::get('/signup', [UserController::class, 'signup']);
Route::post('/signup', [UserController::class, 'postSignup']);


// logout Route
Route::get('/logout', [UserController::class, 'logout']);

// Term and Condition
Route::get('/terms-and-conditions', function(){
	return view('terms-and-conditions');
});

// Reset Password
Route::get('/forgot-password', [UserController::class, 'forgotPassword']);
Route::post('/forgot-password', [UserController::class, 'forgotPasswordPost']);
Route::get('/reset-password/merchant/{toke}', [UserController::class, 'resetPassword']);
Route::post('/reset-password', [UserController::class, 'resetPasswordPost']);


// Auth Routes
Route::group(['middleware' => ['merchant_auth']], function(){

	// Dashboard Routes
	Route::get('/dashboard', [DashboardController::class, 'index']);

	// Products Routes
	Route::get('/products', [ProductController::class, 'index']);
	Route::get('/products/add', [ProductController::class, 'add']);
	Route::post('products/add', [ProductController::class, 'postAddProduct']);
	Route::get('/products/edit/{id}', [ProductController::class, 'update']);
	Route::post('/products/edit/{id}', [ProductController::class, 'postUpdateProduct']);
	Route::post('/products/bluk-upload', [ProductController::class, 'blukUpload']);
	Route::get('/products/delete/{id}', [ProductController::class, 'deleteProduct']);
	Route::get('/products/generate-qrcode/{id}', [ProductController::class, 'generateQRCode']);

	// Order Routes
	Route::get('/orders', [OrderController::class, 'index']);
	Route::get('/orders/{id}', [OrderController::class, 'view']);
	Route::get('/orders/paid/{id}', [OrderController::class, 'markPaid']);
  	Route::get('/orders/cancel/{id}', [OrderController::class, 'markCancel']);
	Route::get('/orders/done/{id}', [OrderController::class, 'markDone']);
	Route::get('/pos-orders', [OrderController::class, 'pos_index']);
	Route::get('/pos-orders/{id}', [OrderController::class, 'pos_view']);

	// Account Routes
	Route::get('/profile', [UserController::class, 'profile']);
	Route::post('/porfile', [UserController::class, 'update']);
	Route::get('/info', [UserController::class, "info"]);
	Route::post('/info', [UserController::class, "updateInfo"]);
	Route::get('/email', [UserController::class, "email"]);
	Route::post('/email', [UserController::class, "updateEmail"]);
	Route::get('/password', [UserController::class, "password"]);
	Route::post('/password', [UserController::class, "updatePassword"]);


	// Ajax Call
	Route::get('/get_subcategories/{id}', [CategoryController::class, 'getSubCategories']);
});

