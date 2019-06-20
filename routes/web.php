<?php
use App\Articulo;
use App\Categoria_Articulo;
use Illuminate\Support\Facades\Input;

Route::get('/', 'ArticuloController@index');

Route::get('/producto/{id}','ArticuloController@show')->name('articulo');

Route::get('/categorias/{nom_cat}','ArticuloController@categorias_articulos')->name('categorias');

Route::get('/carro','UserController@compras')->name('carro');

Route::post('compras','CompraController@store');

Route::any('/search', function() {
	$categorias_articulos = Categoria_Articulo::all();
	$q = Input::get('q');
	$articulo = Articulo::where('nom_art','like','%'.$q.'%')->orWhere('nom_cat','like','%'.$q.'%')->get();
	if(count($articulo) > 0)
		return view('Busqueda', compact('categorias_articulos'))->withDetails($articulo)->withQuery($q);
	else
		return view('index', compact('categorias_articulos'))->withMessage('Sin coincidencias.');
});

Auth::routes();

Route::get('/home', 'ArticuloController@index')->name('home');

Route::get('/user/{id}/edituser', 'UserController@edit')->name('user.edit');

Route::post('/user/{id}', 'UserController@update')->name('user.update');

Route::delete('/user/{id}', 'UserController@destroy')->name('user.destroy');

Route::get('/carro', 'CarroController@delete')->name('delete.compra');