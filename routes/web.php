<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|   / ruta raiz
*/

Route::get('/', function () {
    return view('welcome');
});


//Route::get('tareas/{nombre?}', function($nombre = "usuario"){

//$nombre = strtoupper($nombre);
//return view('tareas.tareasIndex')-> with (['nombre'=> $nombre]);



//});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('tareas','TareaController'); 

Route::resource('equipo','EquipoController');
//->middleware('auth'); //solo se ´puede acceder a ellos iniciando sesion, se puede crear un construcutor en TareaController

//route::post('tarea','TareaController@store');
//route::get('tarea','TareaController@index');

