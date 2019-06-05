<?php

Route::get('/', 'ArticuloController@index');

Route::get('/producto/{id}','ArticuloController@show')->name('articulo');

Auth::routes();

Route::get('/home', 'ArticuloController@index')->name('home');
