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

Route::get('welcome', function () {
    return view('welcome');
});
Route::get('Helloworld', function(){ 
    return '<h1>Hello World Moises</h1>'; 
});
Route::get('Miprimerlayouts', function(){ 
    return view('layouts.app'); 
});
Route::get('vista', function(){ 
    return view('vista'); 
});
Route::get('alumno', 'alumnos@index');