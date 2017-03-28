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

Route::get('/add-project', 'ProjectsController@create');

Route::post('/projects', 'ProjectsController@store');

Route::get('/projects/{project}', 'ProjectsController@project');

Route::get('/register', 'RegistrationsController@create');
Route::post('/register', 'RegistrationsController@store');

Route::get('/login', 'SessionsController@create');

Route::get('/logout', 'SessionsController@destroy');

Route::post('/login', 'SessionsController@store');
