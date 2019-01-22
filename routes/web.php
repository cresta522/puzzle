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

Route::get('/', 'PuzzleController@dashboard');

Route::get('/numpre', 'NumpreController@index');
Route::get('/numpre/list', 'NumpreController@items');
Route::get('/numpre/create', 'NumpreController@create');

// ログインURL
Route::get('/auth/twitter', 'Auth\TwitterController@redirectToProvider');
// コールバックURL
Route::get('/auth/twitter/callback', 'Auth\TwitterController@handleProviderCallback');
// ログアウトURL
Route::get('/auth/twitter/logout', 'Auth\TwitterController@logout');

/*Route::get('/', function () {
    return view('welcome');
});*/
