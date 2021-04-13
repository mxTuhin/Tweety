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
})->name('landingPage');

Auth::routes();

Route::middleware('auth')->group(function (){
    //Tweet Controller
    Route::post('/store_tweets', 'TweetController@store')->name('store_tweets');
    Route::get('/tweets', 'TweetController@index')->name('home');

    //Ajax Calls
    Route::post('/add_like', [\App\Http\Controllers\TweetController::class, 'add_like'])->name('add_like');


    Route::get('/profile/{user:name}/edit', 'ProfileController@edit')->name('editProfile');

    //Follow Controller
    Route::post('/follow_user', 'FollowController@store')->name('follow_user');

});

Route::get('/timeline', 'HomeController@timeline')->name('timeline_user');

Route::get('/profile/{user:name}', 'ProfileController@show')->name('profile');

Route::post('/signup', 'ProfileController@store')->name('store_user');
Route::post('/user_login', 'ProfileController@login')->name('login_user');







