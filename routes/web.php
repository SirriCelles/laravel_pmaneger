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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/companies', 'CompaniesController@index');
//Route::get('/companies/{company_id}', 'CompaniesController@show');

Route::resource('companies','CompaniesController');
Route::resource('comment','CommentController');
Route::resource('project','ProjectController');
Route::resource('role','RoleController');
Route::resource('user','UserController');
Route::resource('task','TaskController');

