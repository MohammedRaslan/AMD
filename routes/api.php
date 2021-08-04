<?php

use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Enums\ProductCondition;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\BestOfferController;
use App\Http\Controllers\BidController;
use App\Http\Controllers\CmsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\WishlistController;
use App\Models\Cms;
use App\Repositories\NotificationRepository;

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
    Route::get('/getFaqs',[FaqController::class,'getFaqs']);
    Route::get('/getAbouts',[AboutController::class,'getAbouts']);
    Route::get('/getCategories',[CategoryController::class,'getCategories']);
    Route::get('/getSubscriptions',[SubscriptionController::class,'getSubscriptions']);
    Route::get('checkAdmin',[UserController::class,'checkAdmin']);

    Route::prefix('about')->group(function(){
        Route::post('store',[AboutController::class,'store']);
        Route::get('changeStatus/{id}',[AboutController::class,'changeStatus']);
        Route::get('getAllAbout',[AboutController::class,'getAllAbout']);
    });

    Route::prefix('cms')->group(function(){
        Route::post('store',[CmsController::class,'store']);
        Route::get('getAllCms',[CmsController::class,'getAllCms']);
        Route::get('getSingleCms/{type}',[CmsController::class,'getSingleCms']);
    });

    Route::prefix('faq')->group(function(){
        Route::post('store',[FaqController::class,'store']);
        Route::get('changeStatus/{id}',[FaqController::class,'changeStatus']);
        Route::get('getAllFaqs',[FaqController::class,'getAllFaqs']);
    });
    
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
        Route::get('getUserProductActive',[ProductController::class,'getUserProductActive']);  
        Route::get('getAllProductDataToUpdate/{id?}',[ProductController::class,'getAllProductDataToUpdate']);
    });

    Route::prefix('bid')->group(function(){
        Route::post('store',[BidController::class,'store']);
    });

    Route::prefix('wishlist')->group(function (){
        Route::get('getWishlist/{type}',[WishlistController::class,'getWishlist']); 
        Route::delete('remove/{id?}',[WishlistController::class,'destroy']);
    });
    Route::prefix('shop')->group(function() {
        Route::get('getProduct/{id?}',[ProductController::class,'getProduct']);
    });

    Route::prefix('notification')->group(function(){
        Route::get('new',[NotificationController::class,'new']);
        Route::get('markAllAsRead',[NotificationController::class,'markAllAsRead']);
    });

    Route::prefix('user')->group(function(){
        Route::get('getUserInfo/{id}',[UserController::class,'getUserInfo']);
        Route::post('edit/{id}',[UserController::class,'edit']);
        Route::get('getUserId',[UserController::class,'getUserId']);
        Route::post('sellerDefault',[UserController::class,'sellerDefault']);
        Route::get('getSellerDetails',[UserController::class,'getSellerDetails']);
        Route::post('createFromAdmin',[UserController::class,'addNewUserFromAdmin']);
    });

    Route::prefix('offer')->group(function(){
        Route::post('makeOffer',[BestOfferController::class,'makeOffer']);
        Route::get('getOffers/{id}',[BestOfferController::class,'getOffers']);
        Route::get('markAsView/{id}',[BestOfferController::class,'markAsView']);
        Route::get('declineOffer/{id}',[BestOfferController::class,'decline']);
        Route::get('accept/{id}',[BestOfferController::class,'accept']);

    });
    Route::prefix('cart')->group(function() {
        Route::post('add/{productId}',[CartController::class,'add']);
        Route::post('remove/{productId}',[CartController::class,'remove']);
        Route::get('checkIfExist/{id}',[CartController::class,'checkIfExist']);
        Route::get('getCartCount',[CartController::class,'getCartCount']);
        Route::get('getCartProducts',[CartController::class,'getCartProducts']);
        Route::get('calculate',[CartController::class,'calculate']);
        Route::get('bestOfferCheckUser/{productId}',[CartController::class,'bestOfferCheckUser']);
    });

    Route::prefix('dashboard')->group(function(){
        Route::get('AdminDashboard',[DashboardController::class,'AdminDashboard']);
    });
    Route::post('/createSubscription',[SubscriptionController::class,'store']);

    
});
Route::get('category/get',[CategoryController::class,'get']);
Route::get('guest/getCategoryProducts/{id?}',[CategoryController::class,'categoryProducts']);
Route::get('getCountries',[RegisterController::class,'getCountries']);
Route::get('getProducts',[ProductController::class,'getProducts']);


Route::get('product/random',[ProductController::class,'randomProducts']);

Route::view('/home-page','layout');
