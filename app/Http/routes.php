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
    return view('welcome');
});


Route::resource('apply', 'JobApplication');
Route::resource('options', 'JobOptionsController');
Route::resource('skills', 'SkillsController');
Route::resource('positions', 'PositionsController');
Route::resource('gender', 'ControllerGender');
Route::resource('marital', 'MaritalGender');



