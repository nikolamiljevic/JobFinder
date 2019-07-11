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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//show all jobs
Route::get('/', 'JobController@index');

//show one job page
Route::get('/jobs/{id}/{job}','JobController@show')->name('jobs.show');

//company page
Route::get('/company/{id}/{company}','CompanyController@index')->name('company.index');

//user profile
Route::get('user/profile','UserController@index');

//update user profile experience bio address
Route::post('user/profile/create','UserController@store')->name('profile.create');

//update coverletter 
Route::post('user/coverletter','UserController@coverletter')->name('cover.letter');

//update resume
Route::post('user/resume','UserController@resume')->name('resume');

//update avatar
Route::post('user/avatar','UserController@avatar')->name('avatar');