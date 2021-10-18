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


//UDEMYHTML
Route::get('/udemyhtml','HomeController@udemy');
//ninja ECMAScript
Route::get('/script','HomeController@ecma');
//ninja ECMAjQuery
Route::get('/jquery','HomeController@jquery');



//Laravel Looking
Route::get('/','HomeController@index');
Route::get('/{id}','WebsiteController@index');










