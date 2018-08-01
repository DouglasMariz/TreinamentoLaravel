<?php


//Route::get('/teste','IndexController@index')->name('softcom.teste');

Route::resource('index', 'IndexController');
Route::resource('aluno', 'AlunoController');
