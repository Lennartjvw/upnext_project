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

//Route::get('/games', 'GamesListController@index');
//Route::get('/games/create', 'GamesListController@create');
//Route::get('/games/{id}', 'GamesListController@show');
//Route::post('/games', 'GamesListController@store');

Route::resource('games', 'GamesListController');
//Route::get('/games/create', ['middleware' => ['auth', 'admin'], function()
//{
// return "yoy";
//}]);

Route::get('/games/create', ['middleware' => ['auth', 'admin'],'uses' => 'GamesListController@create']);

//Route::get('/user/{id}', 'UserController@show');

Route::get('/user/{id}', ['middleware' => 'auth','uses' => 'UserController@show']);
Route::get('/useredit/{id}', ['middleware' => 'auth', 'uses' => 'UserController@showProfile']);

Route::get('games/follow/{id}', 'UserController@follow');



