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
    return view('categorias.create');
});

//Creando rutas de recurso paracrearel Crud

Route::resource(
    //nombre del recurso que se mostrara en la ruta del navegador , en este caso seria "http://127.0.0.1:8000/categorias/   create"
    'categorias',
    //llamando al controlador que tiene los recursos CRUD
    'CategoriasController'    
);