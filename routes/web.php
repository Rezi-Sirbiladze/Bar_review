<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstablecimientoController;
use App\Http\Controllers\ValoracionController;

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
    return view('entrada');
});

Route::get('/entrada', function () {
    return view('entrada');
})->name('entrada');

/*     prueba si funciona login  */

Route::get('/entrar', function () {
    return view('login');
});

Route::get('/establecimientos', [EstablecimientoController::class, 'indexAll'])->name('establecimientos')->middleware(['auth']);
Route::get('/establecimientos_ranking', [EstablecimientoController::class, 'indexRanking'])->name('establecimientos_ranking')->middleware(['auth']);

Route::resource('/mis_establecimientos', EstablecimientoController::class)->middleware(['auth']);

Route::get('/valorar/{id}', [ValoracionController::class, 'indexValorar'])->name('valorar_establecimiento')->middleware(['auth']);

Route::resource('/mis_valoraciones', ValoracionController::class)->middleware(['auth']);


/* **************************    */

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
