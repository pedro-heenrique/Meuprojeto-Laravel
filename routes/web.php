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


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home-page');
});

Route::get('/paginadesenha', function () {
    return view('forge-password-page');
});

Route::get('/login', function () {
    return view('login-page');
});

Route::get('/minhas ocorrencias', function () {
    return view('my-ocurrences');
});

Route::get('/meu perfil', function () {
    return view('my-profile-page');
});

Route::get('/nova ocorrencia', function () {
    return view('new-ocurrence');
});

Route::get('/registro', function () {
    return view('register-page');
});


