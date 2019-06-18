<?php

Route::get('/', 'ArticuloController@index');

Route::get('/producto/{id}','ArticuloController@show')->name('articulo');

Route::get('/categorias/{nom_cat}','ArticuloController@categorias_articulos')->name('categorias');

Route::get('/carro','UserController@compras')->name('carro');

Route::post('compras','CompraController@store');

Auth::routes();

Route::get('/home', 'ArticuloController@index')->name('home');
