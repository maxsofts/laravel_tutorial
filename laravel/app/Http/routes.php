<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password'=>'Auth\PasswordController'
]);
Route::get('/register','Auth\AuthController@create');
Route::get('/contact','Controller@contact');
Route::get('/gioithieu','obout@about1');
Route::get('/aboutme','PageController@abloutme');
Route::get('/category','CategoriesController@category');
Route::get('/create','CreateController@create');
Route::get('/articles','ArticlesController@articles');
Route::post('/create_post','ArticlesController@store');

Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('/posts','PostController@view');
Route::get('/addpost','PostController@newpost');
Route::post('/newpost','PostController@addpost');
Route::get('/post/{id}/edit','PostController@editpost');
Route::get('/post/{id}/delete','PostController@delpost');
Route::post('/post/update/','PostController@update');
