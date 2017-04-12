<?php

use SocialNorm\Exceptions\ApplicationRejectedException;
use SocialNorm\Exceptions\InvalidAuthorizationCodeException;

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
    return view('welcome');
});

Route::get('google/login', function() {
    try {
        SocialAuth::login('google');
    } catch (ApplicationRejectedException $e) {
        // User rejected application
    } catch (InvalidAuthorizationCodeException $e) {
        // Authorization was attempted with invalid
        // code,likely forgery attempt
    }

    // Current user is now available via Auth facade
    $user = Auth::user();

    return Redirect::intended();
});

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::resource('apply', 'JobApplication');

// Error Pages
//Route::get('pagenotfound', ['as' => 'notfound', 'uses' => 'JobApplication']);

// CRUD
Route::group(['prefix' => 'dashboard', 'middleware' => 'auth'], function() {
    Route::resource('home', 'HomeController');
    Route::resource('options', 'JobOptionsController');
    Route::resource('skills', 'SkillsController');
    Route::resource('positions', 'PositionsController');
    Route::resource('gender', 'ControllerGender');
    Route::resource('marital', 'MaritalGender');
    Route::resource('users', 'UsersController');

});



