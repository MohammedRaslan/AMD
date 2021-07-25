<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

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

// Route::get('createAdmin',function(){
//     User::create([
//        'first_name' => 'Admin',
//        'last_name'  => 'Mophx',
//        'user_name' => 'AdminMophx',
//        'email'      => 'admin@mophx.com',
//        'password'   => bcrypt('123456789'),
//        'phone'      => '01245784512',
//        'address'    => 'Address',
//        'type' => 1,
//        'role' => 0,
//    ]);
// });
Route::get('/{any?}/{title?}', function () {
    if(str_contains(request()->fullUrl(),'admin')){
        return view('admin');
    }elseif(str_contains(request()->fullUrl(),'demo')){
        return view('layout');
    }
    return view('soon');
});
