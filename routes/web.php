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

Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix' => 'admin'], function() {
    // ニュースのルーティング
    Route::get('news/create', 'Admin\NewsController@add')->middleware('auth');
    
    // プロフィールのルーティング
    Route::get('profile/create','Admin\ProfileController@add')->middleware('auth');
    Route::get('profile/edit','Admin\ProfileController@edit')->middleware('auth');
    Route::get('profile/index','Admin\ProfileController@index');
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
