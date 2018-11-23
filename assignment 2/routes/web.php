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

Route::get('/','HomeController@index');
Route::get('/login','HomeController@login');
Route::get('/logout','HomeController@logout');
Route::post('loginstore', 'Homecontroller@postLogin');
Route::get('/register','HomeController@register');
Route::post('store', 'Homecontroller@store');

Route::group(['middleware' => 'checkloggedin'], function(){
       Route::get('/home','HomeController@home');

});

