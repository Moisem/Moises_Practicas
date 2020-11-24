<?php
use App\alumnos; 
use Illuminate\Http\Request;
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
Route::get('Helloworld', function(){ 
    return '<h1>Hello World Moises</h1>'; 
});
Route::get('Miprimerlayouts', function(){ 
    return view('layouts.app'); 
});
Route::get('vista', function(){ 
    return view('vista'); 
});
Route::get('carrera', 'alumnos@index');


Route::get('alumnos', 'controllerjson@index');

Route::get('alumno/{id}', 'controllerjson@where');
//Route::apiResource('alumnosapi','controllerjson');

//Route::get('/miprimerarray', 'controllerjson@getAlumnos')->name('alumnos');
/*Route::get('alumnos3', function(){
    $alumno = new alumnos;

    $alumno->nombre = 'Moises';
    $alumno->apellido_paterno  = 'Lopez';
    $alumno->apellido_materno  = 'Gil';
    $alumno->Carrera  = 'DSM';
    $alumno->save();
});*/
//Route::get('alumno', 'alumnos@store');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
