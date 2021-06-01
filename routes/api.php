<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/custom-login', [LoginController::class,'custom_login']);
Route::post('/register',[RegisterController::class,'register']);

Route::middleware('auth:api')->group(function () {
    Route::get('/getUsers',[UserController::class,'getUsers']);
    Route::get('/getSubscriptions',[SubscriptionController::class,'getSubscriptions']);
    Route::get('checkAdmin',[UserController::class,'checkAdmin']);
    Route::prefix('product')->group(function () {
        Route::post('store',[ProductController::class,'store']);
        Route::get('getProductData',[ProductController::class,'getProductData']);
        Route::get('getUserProduct',[ProductController::class,'getUserProduct']);
        Route::get('getUserProductDrafted',[ProductController::class,'getUserProductDrafted']);
   
    });
    Route::post('/createSubscription',[SubscriptionController::class,'store']);

    
});
Route::view('/home-page','layout');
