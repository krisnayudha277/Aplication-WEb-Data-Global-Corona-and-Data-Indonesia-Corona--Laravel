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

Route::get('/welcome','App\Http\Controllers\Controller@index');
Route::get('/provinsi','App\Http\Controllers\Controller@provinsi');
Route::get('/rumahsakit','App\Http\Controllers\Controller@rumahsakit');
Route::get('/detail','App\Http\Controllers\Controller@detail');
Route::get('/mapsglobal','App\Http\Controllers\Controller@mapsglobal');

