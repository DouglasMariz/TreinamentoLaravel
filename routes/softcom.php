<?php


//Route::get('/teste','IndexController@index')->name('softcom.teste');

Route::resource('index', 'IndexController');


Route::get('aluno/inativos', 'AlunoController@inativos');
Route::get('aluno/{id}/restore', 'AlunoController@restore')->name('restore');
Route::resource('aluno', 'AlunoController');


