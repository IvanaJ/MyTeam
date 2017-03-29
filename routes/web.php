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

Route::get('/', 'ProjectsController@index');
Route::get('/projects', 'ProjectsController@show');
Route::get('/projects/{project}', 'ProjectsController@project');
Route::get('/register', 'RegistrationsController@create');
Route::post('/register', 'RegistrationsController@store');
Route::get('/login', 'SessionsController@create')->name('login');
Route::post('/login', 'SessionsController@store');
Route::group(['middleware' => 'auth'], function () {

    // All my routes that needs a logged in user
    Route::get('/add-project', 'ProjectsController@create');
    Route::post('/projects', 'ProjectsController@store');
    Route::get('/logout', 'SessionsController@destroy');
    Route::get('/my-projects','UserController@index');
    Route::get('/my-projects/{project}','UserController@show');
    Route::get('/apply/{id}', 'ProjectApplicationController@apply');
    Route::get('/accept/{id}/{project}', 'ProjectApplicationController@accept');
    Route::get('/reject/{id}/{project}', 'ProjectApplicationController@reject');
});
