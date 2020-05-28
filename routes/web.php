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

Route::get('/', 'WelcomeController@index')->name('index');
Route::get('/index', 'WelcomeController@indexVue');
// Route::post('/index', 'WelcomeController@indexVue');


Auth::routes();


Route::resource('posts', 'PostController')->except('index');
Route::get('/posts', 'WelcomeController@index')->name('post.index');
Route::get('/notification', 'NotificationController@index')->name('notification.index');


Route::get('/profile/{user}', 'ProfileController@index')->name('profile.index');
Route::get('/profile/{user}/edit', 'ProfileController@edit')->name('profile.edit');
Route::patch('/profile/{user}', 'ProfileController@update')->name('profile.update');


Route::get('/search', 'ProfileController@searchView')->name('searchView');

Route::post('/search', 'ProfileController@search')->name('search');
// Route::get('/searchuser', 'ProfileController@search')->name('search');
Route::get('/searchuser/{user}', 'ProfileController@search')->name('search');


Route::post('follow/{user}', 'FollowController@store');

Route::post('/like/{post}', 'LikesController@store')->name('like');

Route::post('comments/{post}', 'CommentsController@store')->name('comments.store');
Route::get('comments/{post}', 'CommentsController@show')->name('comments.show');

Route::get('/back', 'RedirectController@backPg')->name('back');

Route::get('x/{post}', 'LikesController@x');
