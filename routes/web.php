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
Route::get('register', 'Controller@register');
Route::get('pet', 'Controller@pet');
Route::get('petDetail', 'Controller@petDetail');
Route::get('editPetDetail', 'Controller@editPetDetail');
Route::get('activity', 'Controller@activity');
Route::get('activityDetail', 'Controller@activityDetail');
Route::get('writePost', 'Controller@writePost');
Route::get('login', 'Controller@login');
Route::get('resultSearch', 'Controller@resultSearch');
Route::get('chatMessage', 'Controller@chatMessage');
Route::get('donate', 'Controller@donate');
Route::get('myPost', 'Controller@myPost');
