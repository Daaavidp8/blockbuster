<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeliculasControler;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    $users = \App\Models\User::get();
    return view('inicio',compact('users'));
})->name('inicio');

Route::resource('peliculas',PeliculasControler::class);

Route::post('filtro', [PeliculasControler::class,'filtro'])->name('resultado_filtro');


Route::get('filtro', function () {
    $peliculas = \App\Models\Pelicula::get();
    return view('peliculas.filtro',compact('peliculas'));
})->name('filtro_director');

