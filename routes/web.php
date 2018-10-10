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

Route::get('login/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('login/{provider}/callback', 'Auth\LoginController@handleProviderCallback');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/contents/{repo}','ComponentsController@contents');
Route::get('/new','GithubController@index');
Route::get('/commits_made/{repo}','ComponentsController@commits_made');
Route::get('/edit/{repo}','ComponentsController@edit');

Route::get('/branches/{repo}','ComponentsController@branches');
