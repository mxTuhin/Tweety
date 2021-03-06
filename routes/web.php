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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::middleware('auth')->group(function (){
    Route::post('/tweets', 'TweetController@store');
    Route::get('/tweets', 'TweetController@index')->name('home');
    Route::post('/profile/{user:name}/follow', 'FollowController@store');
    Route::get('/profile/{user:name}/edit', 'ProfileController@edit')->name('editProfile');
});

Route::get('/profile/{user:name}', 'ProfileController@show')->name('profile');

