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

use App\Movie;

Route::get('/', function () {

	$movies = Movie::all();

	return view('welcome')->with('peliculas', $movies);
});


Route::get('movie/view/{id}', 'MovieController@view');


Route::get('actors', 'ActorController@list');

Route::get('new-movie', 'MovieController@create');

Route::post('new-movie', 'MovieController@store');

Route::get('update-movie/{id}', 'MovieController@edit');

Route::put('update-movie/{id}', 'MovieController@update');

Route::get('delete-movie/{id}', 'MovieController@delete');
Route::delete('delete-movie/{id}', 'MovieController@destroy');

Route::get('movies', 'MovieController@index');

Route::get('actors', 'ActorController@index');


Route::get('avatar', 'AvatarController@create');

Route::post('avatar-upload', 'AvatarController@store');