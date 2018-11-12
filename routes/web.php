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
Route::get('/getComments','CommentsController@getComments'); //get last 5 comments from database
Route::post('/addComments','CommentsController@addComments'); // add new comments to database
Route::get('/updateComments','CommentsController@updateComments'); // updata notification if its seen by user
Route::get('/postComment','CommentsController@postComment'); // return post comment view
