<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\Http\Controllers\CouponController;

Route::get('/', function ()
{
    return view('index');
});

Route::post('/coupon', 'CouponController@storeEmails');

/*Route::get('/rom2wot4yl', 'Admin');*/
Route::get('/rom2wot4yl/login', 'Auth\AuthController@showLoginForm');
Route::post('/rom2wot4yl/login', 'Auth\AuthController@login');
Route::get('/rom2wot4yl/logout', 'Auth\AuthController@out');

Route::get('/rom2wot4yl/', 'AdminPanel@index');
Route::get('/rom2wot4yl/emails', 'AdminPanel@emails');


Route::get('/home', 'HomeController@index');
