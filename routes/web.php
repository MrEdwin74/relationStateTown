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

Route::resource('category','CategoryController');

Route::get('/', function () {
    return view('welcome');
});


Route::name('edit_category_path')->post('/category/{id}/edit','CategoryController@edit');

Route::name('update_category_path')->put('category/{id}','CategoryController@update');

Route::name('category_path')->get('category/{id}','CategoryController@show');

Auth::routes();

Route::group(['middleware' => 'auth'], function () {

	Route::get('/home', 'HomeController@index')->name('home');
});
