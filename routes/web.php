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

Route::get('/', 'App\Http\Controllers\TopPageController@show');

Route::get('/about', 'App\Http\Controllers\AboutPageController@show');

Route::get('/bbs', "App\Http\Controllers\BbsEntryController@index");
Route::post('/create', "App\Http\Controllers\BbsEntryController@create");