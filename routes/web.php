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
    $name = "Aca";
    $age = "35";
    return view('welcome', compact("name", "age"));
});

Route::get('/abouts', function () {
    $about = "About us";
    return view('abouts', compact("about"));
});

Route::get('/cars', 'CarsController@index' );


Route::get('/cars/{id}', 'CarsController@show' );