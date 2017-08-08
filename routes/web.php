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

Route::get('/', 'HomeController@index');

Route::get('/todos', 'TodosController@index'); // show todos for the authenticated user

Route::get('/todos/create', 'TodosController@create'); //get view for creating todo
Route::post('/todos/create', 'TodosController@store'); //store the created todo to the database

Route::post('/todos/{id}', 'TodosController@delete'); // delete todo

Route::get('/todos/edit/{id}', 'TodosController@edit');  // get edit view
Route::post('/todos/edit/{id}', 'TodosController@update'); // update a todo

Route::get('/register', 'RegistrationController@create'); // get register view
Route::post('/register', 'RegistrationController@store'); // register a new user

Route::get('/login', 'SessionsController@create');   // get login view
Route::post('/login', 'SessionsController@store');   // login a user

Route::get('/logout', 'SessionsController@destroy');  // logout a user