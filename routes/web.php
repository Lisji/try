<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\WritingController;
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


// blog

Route::get('/','SiteController@getIndex');
Route::get('/blog','SiteController@renderBlogPage');
Route::get('/blog/{post}','SiteController@renderPostPage');
Route::get('/contact','ContactController@display');
Route::get('/myInfo','MyInfoController@display');
Route::post('/contact/send','ContactController@leaveMessage');
Route::post('/search','SearchController@search');
Route::post('/subscribe','SubscribeController@storeSubscriber');
Route::Post('post/comment', 'PostController@requestComment');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
