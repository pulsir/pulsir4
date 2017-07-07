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
    return view('index');
})->middleware('guest');


Route::get('/posts', 'PostsController@index');
Route::get('/posts/create', 'PostsController@create');
Route::get('/posts/{post}', 'PostsController@show');
Route::post('/posts', 'PostsController@store');
Route::get('/posts/{post}/delete', 'PostsController@destroy');

Route::post('/posts/{post}/comment', 'CommentsController@store');


Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');

Route::get('/widgets', 'WidgetsController@index');
Route::get('/widgets/create', 'WidgetsController@create');
Route::post('/widgets/create', 'WidgetsController@store');
Route::get('/widgets/{widget}', 'WidgetsController@show');
Route::get('/widgets/{widget}/edit', 'WidgetsController@editview');
Route::get('/widgets/{widget}/delete', 'WidgetsController@destroy');
Route::post('/widgets/{widget}/edit', 'WidgetsController@edit');

Route::get('/login', [ 'as' => 'login', 'uses' => 'SessionsController@create']);
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');


Route::get('/settings', 'UsersController@settings');
Route::post('/settings', 'UsersController@update');


Route::get('/topic', 'TopicsController@index');
Route::post('/topic', 'TopicsController@redirect');
Route::get('/topic/{topic}', 'TopicsController@show');

// This must be placed here, after all the routes are covered
Route::get('/{username}', 'UsersController@show');