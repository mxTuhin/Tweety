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


    Route::get('/profile/{user:username}/edit', 'ProfileController@edit')->name('editProfile');

    //Follow Controller
    Route::post('/follow_user', 'FollowController@store')->name('follow_user');
    Route::post('/send_anger', [\App\Http\Controllers\FollowController::class, 'send_anger'])->name('send_anger');


});

Route::get('/timeline', 'HomeController@timeline')->name('timeline_user');

Route::get('/profile/{user:username}', 'ProfileController@show')->name('profile');
Route::get('/profile/{user:username}/about', 'ProfileController@about')->name('about');
Route::get('/profile/{user:username}/friends', 'ProfileController@friends')->name('friends');
Route::get('/profile/{user:username}/photos', 'ProfileController@photos')->name('photos');

Route::post('/add_opinion', [\App\Http\Controllers\OpinionController::class, 'store'])->name('add_opinion');
Route::post('/opinion_like', [\App\Http\Controllers\OpinionController::class, 'opinion_like'])->name('opinion_like');




Route::post('/signup', 'ProfileController@store')->name('store_user');
Route::post('/user_login', 'ProfileController@login')->name('login_user');

Route::get('/profile/sweet_memories/{img}', [\App\Http\Controllers\SweetMemoriesController::class, 'add_memory'])->name('add_sweet_memory');

Route::post('/timeline/upload_todo', [\App\Http\Controllers\ToDoListController::class, 'store'])->name('store_todo_list');
Route::post('/timeline/close_todo/', [\App\Http\Controllers\ToDoListController::class, 'delete'])->name('close_todo_list');

Route::post('/fetch_msg', [\App\Http\Controllers\ChatHistoryController::class, 'fetch'])->name('fetch_msg');
Route::post('/store_msg', [\App\Http\Controllers\ChatHistoryController::class, 'store'])->name('store_msg');









