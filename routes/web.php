<?php

use App\Http\Controllers\HomeController;
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



Route::get('/', 'HomeController@index');

Route::get('/programs', 'HomeController@programs');
Route::get('/crews', 'HomeController@crews');
Route::get('/about', 'HomeController@about');

//oprec
Route::get('/oprec','OprecController@index');

//onair
Route::get('/onair', 'HomeController@onAir');
Route::get('/onair/oprec', 'HomeController@onAir_oprec');