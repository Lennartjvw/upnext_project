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
    return view('home');
});

Route::auth();
Route::get('/home', 'HomeController@index');


Route::resource('games', 'GamesListController');
Route::get('gamessearch', 'GamesListController@search');

Route::get('/games/create', ['middleware' => ['auth', 'admin'],'uses' => 'GamesListController@create']);


Route::get('/user/{id}', ['middleware' => 'auth','uses' => 'UserController@show']);
Route::get('/useredit/{id}', ['middleware' => 'auth', 'uses' => 'UserController@showProfile']);
Route::patch('/useredit/{id}', ['middleware' => 'auth', 'uses' => 'UserController@updateUser']);
Route::get('/useredit/{id}/delete', ['middleware' => 'auth', 'uses' => 'UserController@destroy']);

Route::get('games/follow/{id}', 'UserController@follow');
Route::get('games/unfollow/{id}', 'UserController@unfollow');



