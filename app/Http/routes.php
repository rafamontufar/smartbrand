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

Route::group(['middleware' => ['web']], function () {
    Route::get('getChannels','GoogleController@getChannels');
    Route::get('getVideosByChannel','GoogleController@getVideosByChannel');
    Route::get('getCommentsByVideo/{video}','GoogleController@getCommentsByVideoId');
    Route::get('getFeelingsByVideo/{video_id}','AnalyticsController@getFeelingsByVideoId');
});

Route::get('auth/logout', ['uses' => 'Auth\AuthController@getLogout', 'as' => 'logout']);

Route::post('auth/login/{provider}',['uses' => 'Auth\AuthController@redirectToProvider', 'as' => 'redirect.auth.provider']);
Route::get('auth/callback/linkedin',['uses' => 'Auth\AuthController@handleLinkedinCallback', 'as' => 'handle.linkedin.callback']);
Route::get('auth/callback/facebook',['uses' => 'Auth\AuthController@handleFacebookCallback', 'as' => 'handle.facebook.callback']);
Route::get('auth/callback/google',['uses' => 'Auth\AuthController@handleGoogleCallback', 'as' => 'handle.google.callback']);

Route::get('/',['uses' => 'PagesController@home' , 'as' => 'home']);
Route::get('login', ['uses' => 'PagesController@login', 'as' => 'login']);

Route::get('prueba', ['uses' => 'AnalyticsController@meme']);

Route::get('auth/google', 'Auth\AuthController@redirectToProvider');
Route::get('auth/google/callback', 'Auth\AuthController@handleProviderCallback');
