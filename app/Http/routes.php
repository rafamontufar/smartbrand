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
});

Route::get('/',['uses' => 'PagesController@home' , 'as' => 'home']);

Route::get('prueba', ['uses' => 'AnalyticsController@meme']);

Route::get('auth/google', 'Auth\AuthController@redirectToProvider');
Route::get('auth/google/callback', 'Auth\AuthController@handleProviderCallback');
