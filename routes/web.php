<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::prefix('admin')->middleware('termos')->group(function() {
    Route::get('aluno/inativos', 'AlunoController@inativos');
    Route::get('aluno/{id}/restore', 'AlunoController@restore')->name('restore');
    Route::resource('aluno', 'AlunoController');
});
