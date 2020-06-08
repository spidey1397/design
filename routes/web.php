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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/','TempController@index');
Route::get('template/about','NavController@nav1');
Route::get('template/service','NavController@nav2');
Route::get('template/portfolio','NavController@nav3');
Route::get('template/contact','NavController@nav4');
