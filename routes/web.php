<?php

//Rutas del proyecto

Route::get('/', 'AlumnoController@index')->name('home');
Route::get('/crear', 'AlumnoController@create')->name('crear');
Route::post('crear', 'AlumnoController@store')->name('crear.store');
Route::patch('crear/{id}/actualiza', 'AlumnoController@update')->name('crear.update');

Route::get('crear/{id}', 'AlumnoController@edit')->name('crear.edit');
Route::delete('crear/{id}', 'AlumnoController@destroy')->name('crear.destroy');
/*

Route::patch('crear/{id}/actualiza', 'CrearController@update')->name('crear.update');






/*
Route::resource('/', 'HomeController');
Route::resource('/crear', 'CrearController');
Route::resource('/venta', 'VentaController');
*/
