<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/','App\Http\Controllers\IndexController@Resume');
//Route::get('/resume','App\Http\Controllers\IndexController@Resume');
Route::get('/show','App\Http\Controllers\IndexController@Show');
Route::get('/query1','App\Http\Controllers\IndexController@GetPersonsWithAge');
Route::get('/query2','App\Http\Controllers\IndexController@GetPersonsWithPosition');
Route::get('/query3','App\Http\Controllers\IndexController@getAllResume');
Route::get('/query4','App\Http\Controllers\IndexController@getPositionsInResume');
Route::get('/add','App\Http\Controllers\IndexController@add');

Route::post('/add',
            'App\Http\Controllers\IndexController@store')->name('resumeStore');
Route::get('/delete/{person}',
'App\Http\Controllers\IndexController@delete_resume');
