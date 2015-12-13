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
    return view('auth.login');
});
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
Route::get('/admin', function () {
    return view('page.admin');
});
Route::get('/user', function () {
    return view('page.user');
});


 Route::group(['prefix' => 'app','middleware'=>'auth'], function()
{

  Route::group(['prefix' => 'page'], function()
  {
        Route::get('index','HealthController@index');
        Route::get('admin','HealthController@admin');

       // Route::get('admin/{id}','App\AppController@adminUpdate');
       // Route::post('admin/{id}/update','App\AppController@update');
       // Route::get('patient','App\AppController@patient');
   });

});
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);