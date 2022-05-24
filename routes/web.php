<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstablecimientoController;

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

Route::get('/entrada', function () {
    return view('entrada');
});

/*     prueba si funciona login  */

Route::get('/entrar', function () {
    return view('login');
});

Route::resource('establecimientos', EstablecimientoController::class);

/* **************************    */

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
