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
    return view('hallmark.home');
});

Route::get('/matricula/{id}', [
    'uses' => 'HallmarksController@getTag',
]);

Route::get('/matricula', [
    'uses' => 'HallmarksController@show',
]);

Route::get('/info', function () {
    return view('hallmark.info');
});