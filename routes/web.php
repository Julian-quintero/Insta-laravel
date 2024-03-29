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

use App\Image;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile/{id}', 'userController@profile')->name('profile');
Route::get('/user/avatar/{fileName}', 'userController@getImage')->name('user.avatar');
Route::post('/user/avatar/upload', 'userController@uploadAvatar')->name('user.avatar.upload');
