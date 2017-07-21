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


// Routes linked to Posts

// Create
Route::get('/posts/create', 'PostsController@create');
Route::post('/posts', 'PostsController@store');
// Read
Route::get('/posts', 'PostsController@index');
Route::get('/posts/{post}', 'PostsController@show');
// Update
Route::get('/posts/{post}/edit', 'PostsController@edit');
Route::put('/posts/{post}', 'PostsController@update');
// Delete
Route::delete('/posts/{post}', 'PostsController@destroy');


// Routes linked to Comments

// Create
Route::post('/posts/{post}/comment', 'CommentsController@store');


// Routes linked to Users

// Create
Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');
Route::get('/login', [ 'as' => 'login', 'uses' => 'SessionsController@create']);
Route::post('/login', 'SessionsController@store');
// Update
Route::get('/settings', 'UsersController@settings');
Route::put('/settings', 'UsersController@update');
// Delete
Route::get('/logout', 'SessionsController@destroy');


// Routes linked to Widgets

// Create
Route::get('/widgets/create', 'WidgetsController@create');
Route::post('/widgets/create', 'WidgetsController@store');
// Read
Route::get('/widgets', 'WidgetsController@index');
Route::get('/widgets/{widget}', 'WidgetsController@show');
// Update
Route::get('/widgets/{widget}/edit', 'WidgetsController@edit');
Route::put('/widgets/{widget}', 'WidgetsController@update');
// Delete
Route::delete('/widgets/{widget}', 'WidgetsController@destroy');


// Routes linked to Topics

// Read
Route::get('/topic', 'TopicsController@index');
Route::post('/topic', 'TopicsController@redirect');
Route::get('/topic/{topic}', 'TopicsController@show');


// API 
Route::get('/api/{username}', 'APIController@show');


// Route for displaying users
Route::get('/{username}', 'UsersController@show');