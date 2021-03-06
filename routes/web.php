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


Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);

Route::get('page/{slug}', ['as' => 'page', 'uses' => 'PageController@index']);

Route::get('news/{id}', ['as' => 'news', 'uses' => 'NewController@index']);
Route::get('new/{id}', ['as' => 'new', 'uses' => 'NewController@show']);


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
