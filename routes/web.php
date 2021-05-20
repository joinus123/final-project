<?php

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



Route::namespace('App\Http\Controllers\frontend')->group(function() {

    // Front END
    Route::get('/','AppController@homepage')->name('home-page');

    // LOgin
    Route::get('/login','LoginController@login')->name('login');
    Route::post('/Dashboard', 'LoginController@admindashboard')->name('admin-login');
    // Admin
    Route::group(['prefix'=>'admin'], function(){

        Route::get('/dashboard','AdminController@dashboard')->name('admin-dashboard');
        Route::get('/aboutus','AdminController@aboutus')->name('aboutus');
        Route::get('/userprofile','AdminController@userprofile')->name('user-profile');

        Route::get('/sitesetting', 'AdminController@sitesetting')->name('site-setting');
        Route::post('/submitsitesetting/form', 'AdminController@submitsitesetting')->name('submit-sitesetting');

         Route::get('/homepage', 'AdminController@home')->name('home');

    });

});
