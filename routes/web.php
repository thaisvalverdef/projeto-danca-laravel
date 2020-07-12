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
    return view('index');
});

Route::get('/como-funciona', function () {
    return view('como-funciona');
});

Route::get('/cadastro', function () {
    return view('cadastro');
});

Route::get('/modalidades', function () {
    return view('modalidades');
});

Route::get('/edicao-perfil', function () {
    return view('edicao-perfil');
});

Route::get('/perfil', function () {
    return view('perfil');
});

Route::get('/lista-usuario', function () {
    return view('lista-usuario');
});

Route::get('/lista-categorias', function () {
    return view('lista-categorias');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
