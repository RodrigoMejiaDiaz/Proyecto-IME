<?php

Route::get('/', 'ArticuloController@index');

Auth::routes();

Route::get('/home', 'ArticuloController@index')->name('home');
