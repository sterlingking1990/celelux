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

Route::get('/','FansController@welcomepage');



Route::get('/fans/signup', 'FansController@showsignup');

Route::get('/fans/signin', 'FansController@showsignin');

Route::get('/fans/signupmessage','FansController@showsignupmessage');

Route::get('/fans/verifysignup','FansController@showauthpage');

Route::get('/fans/page/{fan}','FansController@showfanpage');

Route::get('/fans/page/{fan}/{name_of_celeb}/celebcollections','FansController@showcelebcollections');

Route::get('/fans/page/{fan}/{name_of_celeb}/{item}/bidroom','FansController@showitembidroom');

Route::get('/fans/page/{fan}/settings','FansController@showfansettings');


//Celebrities Route Defined
Route::get('/celeb','CelebController@showcelebindex');
Route::get('/celeb/signin','CelebController@showcelebsignin');
Route::get('/celeb/{name_of_celeb}/viewuploads','CelebController@showuploads');

Route::get('/celeb/{name_of_celeb}/livebids','CelebController@showlivebids');
Route::get('/celeb/{name_of_celeb}/uploadluxury','CelebController@uploadluxuryform');

Route::get('/celeb/{name_of_celeb}/fananalytics','CelebController@showfananalytics');




