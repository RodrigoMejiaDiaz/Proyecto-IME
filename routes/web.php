<?php

Route::get('/', 'ArticuloController@index');

Route::get('/producto/{id}','ArticuloController@show')->name('articulo');

Route::get('/categorias/{nom_cat}','ArticuloController@categorias_articulos')->name('categorias');

Auth::routes();

Route::get('/home', 'ArticuloController@index')->name('home');
