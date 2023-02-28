<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/Home', function () {
    return view('Home');
});

Route::get('/Produtos', function () {
    return view('Produtos');
});

Route::get('/Empresa', function () {
    return view('Empresa');
});

Route::get('/Contatos', function () {
    return view('Contatos');
});
