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
    Route::get('test',function(){
        $url = "https://api.havenondemand.com/1/api/sync/analyzesentiment/v1?text=fucking+awesome+video&apikey=9994f920-f0bb-4554-baa3-1e86c3501658";
        $curl = curl_init($url);

        curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

        $json_response = curl_exec($curl);

        curl_close($curl);

        dd(json_decode($json_response));
    });
});

Route::get('/',['uses' => 'PagesController@home' , 'as' => 'home']);
Route::get('login', ['uses' => 'PagesController@login', 'as' => 'login']);

Route::get('prueba', ['uses' => 'AnalyticsController@meme']);

Route::get('auth/google', 'Auth\AuthController@redirectToProvider');
Route::get('auth/google/callback', 'Auth\AuthController@handleProviderCallback');
