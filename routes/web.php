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

Route::get('home', 'Controller@index');

Route::get('pet', 'Controller@pet');
Route::get('activity', 'Controller@activity');
Route::get('activityDetail', 'Controller@activityDetail');
