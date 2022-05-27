<?php

use Illuminate\Support\Facades\Route;

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

/* **************************    */

/*  **PRUEBA LISTA RESTAURANTES   */
Route::get('/lista_restaurantes', function () {
    return view('lista_restaurantes');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
