<?php

use App\Http\Controllers\ContactoController;
use App\Http\Controllers\DirectorioController;
use App\Models\Contacto;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Rutas Para Directorio

Route::get('/directorio', 
[DirectorioController::class, 'obtenerTodos'])->name('directorio.mostrar');

//Rutas Para crearEntrada
Route::get('/directorio/crearEntrada', function () {
    return view('crearEntrada');
})->name('crearEntrada.ver');

Route::get('/directorio/crearEntrada', 
[DirectorioController::class, 'crear'])->name('crearEntrada.ver');

Route::post('/directorio/crearEntrada/guardar', 
[DirectorioController::class, 'guardarDirectorio'])->name('crearEntrada.guardar');

//Rutas para buscarEntrada
Route::get('/directorio/buscarEntrada', function () {
    return view('buscar');
})->name('buscarEntrada.ver');

Route::get('/directorio/buscarContacto/{correo}', 
[DirectorioController::class, 'buscarPorCorreo'])->name('buscarContacto.ver');


//Rutas para ver contactos
Route::get('/directorio/verContactos', 
[ContactoController::class, 'verContactos'])->name('verContactos');

Route::get('/directorio/agregarContacto', function () {
    return view('agregarcontacto');
})->name('agregar');

Route::get('/directorio/agregarContacto', 
[ContactoController::class, 'crearContacto'])->name('crearContacto.ver');

Route::post('/directorio/agregarContacto/guardar', 
[ContactoController::class, 'guardarContacto'])->name('crearContacto.guardar');

Route::get('/directorio/eliminarContacto', function () {
    return view('eliminar');
})->name('eliminar');