<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MuestraController;
use App\Http\Controllers\EncuestaController;
use App\Http\Controllers\UsuarioController;

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

/*Route::get('/', function () {
    //return view('welcome');
    return view('user');
    //echo "<h1>Hola soy  Jeyson </h1>";
    
});

Route::get('/mostrar-fecha', function () {
    return view ('mostra-fecha');
});
*/

Route::get('/muestra',[MuestraController::class,'index']);
Route::resource('usuario', UsuarioController::class);


Route::get('/encuesta/{pagina?}',[EncuestaController::class,'index'])->name('encuesta.list');
Route::get('/detalle', [EncuestaController::class,'detalle'])->name('detalle');

Route::get('/formulario', [EncuestaController::class,'formulario'])->name('formulario');
Route::post('/recibir', [EncuestaController::class,'recibir'])->name('recibir');


