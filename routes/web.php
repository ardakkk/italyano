<?php

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
// Route::get('/home',function(){
//     return 'works';
// });
Route::get('/', 'ProductController@getPizza')->name('home');
Route::post('/order','OrderController@postCheckout')->name('checkout');
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::prefix('user')->group(function(){
    Route::middleware('guest')->group(function(){
        Route::post('/signin','UserController@postSignIn')->name('user.signin');
        Route::get('/signin','UserController@getSignIn')->name('user.signin');
        Route::get('/signup','UserController@getSignup')->name('user.signup');
        Route::post('/signup','UserController@postSignUp')->name('user.signup');
        
    });
    Route::middleware('auth')->group(function(){
        Route::get('/logout', 'UserController@logout')->name('user.logout');
        Route::post('/order','OrderController@authOrder')->name('user.order');
        Route::post('/profile/edit','UserController@profileEdit')->name('profile.edit');
        Route::get('/gift','OrderController@getGift')->name('gift');
    });
});
