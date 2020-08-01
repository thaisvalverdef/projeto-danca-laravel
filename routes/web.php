<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/perfil', function () {
    return view('perfil');
});

//Listando professores
Route::get('/lista-usuario', 'ProfessorController@index');

//Criando perfil
Route::get('/cadastro', 'ProfessorController@add');
Route::post('/cadastro', 'ProfessorController@create');

//Alterando cards
Route::get('/edicao-perfil/{id}', 'ProfessorController@edit');
Route::put('/edicao-perfil/{id}', 'ProfessorController@update');

//Deletando cards
Route::delete('/professor/remove/{id}', 'ProfessorController@delete');

//Pesquisando cards - filtro de busca
Route::get('/professor/search', 'ProfessorController@search');

Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');
Route::get('/home', 'HomeController@index')->name('home');
