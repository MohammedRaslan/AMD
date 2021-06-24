<?php

use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Enums\ProductCondition;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\WishlistController;

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
Route::get('checkUser/{email?}',[UserController::class,'checkUser']);

Route::middleware('auth:api')->group(function () {

    Route::get('/getUsers',[UserController::class,'getUsers']);
    Route::get('/getCategories',[CategoryController::class,'getCategories']);
    Route::get('/getSubscriptions',[SubscriptionController::class,'getSubscriptions']);
    Route::get('checkAdmin',[UserController::class,'checkAdmin']);

    
    Route::prefix('category')->group(function() {
        Route::post('store',[CategoryController::class,'store']);
        Route::get('changeStatus/{id?}',[CategoryController::class,'changeStatus']);
        Route::get('getCategoryProducts/{id?}',[CategoryController::class,'categoryProducts']);

    });

    Route::prefix('product')->group(function () {
        Route::post('store',[ProductController::class,'store']);
        Route::post('store/step_two',[ProductController::class,'step_two']);
        Route::post('store/step_three',[ProductController::class,'step_three']);
        Route::get('changeStatus/{id?}',[ProductController::class,'changeStatus']); 
        Route::get('AddToWishlist/{id?}',[ProductController::class,'AddToWishlist']);
        Route::get('getProductShipping/{id?}',[ProductController::class,'getProductShipping']);     
        Route::get('checkUserProduct/{id?}',[ProductController::class,'checkUserProduct']);
        Route::get('getProductData',[ProductController::class,'getProductData']);
        Route::get('getUserProduct',[ProductController::class,'getUserProduct']);
        Route::get('getUserProductDrafted',[ProductController::class,'getUserProductDrafted']);
        
    });
    Route::prefix('wishlist')->group(function (){
        Route::get('getWishlist/{type}',[WishlistController::class,'getWishlist']); 
    });
    Route::prefix('shop')->group(function() {
        Route::get('getProduct/{id?}',[ProductController::class,'getProduct']);
    });

    Route::prefix('user')->group(function(){
        Route::get('getUserInfo/{id}',[UserController::class,'getUserInfo']);
        Route::post('edit/{id}',[UserController::class,'edit']);
        Route::get('getUserId',[UserController::class,'getUserId']);
    });
    Route::prefix('cart')->group(function() {
        Route::post('add/{productId}',[CartController::class,'add']);
        Route::post('remove/{productId}',[CartController::class,'remove']);
        Route::get('checkIfExist/{id}',[CartController::class,'checkIfExist']);
        Route::get('getCartCount/{id}',[CartController::class,'getCartCount']);
        Route::get('getCartProducts',[CartController::class,'getCartProducts']);
        Route::get('calculate',[CartController::class,'calculate']);
    });
    Route::post('/createSubscription',[SubscriptionController::class,'store']);

    
});
Route::get('category/get',[CategoryController::class,'get']);
Route::get('guest/getCategoryProducts/{id?}',[CategoryController::class,'categoryProducts']);

Route::get('product/random',[ProductController::class,'randomProducts']);

Route::view('/home-page','layout');
