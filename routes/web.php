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

Route::get('/home', function () {
    return view('home');
});

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// Route::get('{provider}', 'Auth\SocialController@redirect')->where('provider', '(github|facebook|twitter|google)');
// Route::get('{provider}/callback', 'Auth\SocialController@callback')->where('provider', '(github|facebook|twitter|google)');

Route::get('login/github', 'Auth\LoginController@redirectToProviderGithub');
Route::get('login/github/callback', 'Auth\LoginController@handleProviderCallbackGithub');

Route::get('login/facebook', 'Auth\LoginController@redirectToProviderFacebook');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallbackFacebook');

Route::get('login/twitter', 'Auth\LoginController@redirectToProviderTwitter');
Route::get('login/twitter/callback', 'Auth\LoginController@handleProviderCallbackTwitter');