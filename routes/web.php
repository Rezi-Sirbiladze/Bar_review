<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstablecimientoController;
use App\Http\Controllers\ValoracionController;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\Controller;

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

Route::get('/', [EstablecimientoController::class, 'indexEntrada'])->name('entrada');
Route::get('JqueryAjax_ordenar',[AjaxController::class,'index'])->name('JqueryAjax_ordenar');


Route::get('/establecimientos', [EstablecimientoController::class, 'indexAll'])->name('establecimientos')->middleware(['auth']);
Route::get('/establecimientos_ranking', [EstablecimientoController::class, 'indexRanking'])->name('establecimientos_ranking')->middleware(['auth']);

Route::resource('/mis_establecimientos', EstablecimientoController::class)->name('*', 'mis_establecimientos')->middleware(['auth']);

Route::get('/valorar/{id}', [ValoracionController::class, 'indexValorar'])->name('valorar_establecimiento')->middleware(['auth']);

Route::resource('/mis_valoraciones', ValoracionController::class)->middleware(['auth']);


/* **************************    */

/*  **PRUEBA LISTA RESTAURANTES   */
Route::get('/lista_restaurantes', function () {
    return view('lista_restaurantes');
});

/*     prueba si funciona login  */

Route::get('/entrar', function () {
    return view('login');
});

/* **************************    */

Route::get('/dashboard', [Controller::class, 'index'])->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
