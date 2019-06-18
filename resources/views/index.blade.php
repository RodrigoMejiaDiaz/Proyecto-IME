@extends('layouts.app')

@section('content')
<div class="container">
	<div class="mb-4 mr-4 w-75">
                <div class="btn-group w-100" style="width: 200px;" role="group">
                <button type="button" class="btn btn-secondary w-25 rounded border-dark font-weight-bold text-dark" style="background-color: #CDBAB6">Artículos básicos</button>
                <button type="button" class="btn btn-secondary w-25 rounded border-dark font-weight-bold text-dark" style="background-color: #CDBAB6">Suturas</button>
                <button type="button" class="btn btn-secondary w-25 rounded border-dark font-weight-bold text-dark" style="background-color: #CDBAB6">Limpieza general</button>
                <button type="button" class="btn btn-secondary w-25 rounded border-dark font-weight-bold text-dark" style="background-color: #CDBAB6">Limpieza general</button>
                </div>
            </div>

		<div class="row w-100">
			@foreach($articulos as $articulo)
			<div class="col-4">
				<div class="card-deck h-100">
					<div class="card">
					  <img src="{{ asset('images/' . $articulo->img) }}" class="card-img-top" alt="...">
					  <div class="card-body bg-info">
					    <a href="{{ action('ArticuloController@show', $articulo->id) }}"><h4 class="card-title text-dark">{{ $articulo->nom_art  }} <span class="badge badge-pill badge-secondary">S/. {{$articulo->precio}}</span></h4></a>
					    <p class="card-text">{{ $articulo->des_art }}</p>
					    <a href="{{ action('ArticuloController@show', $articulo->id) }}" class="btn btn-success">Comprar</a>
					  </div>
					</div>
				</div>
				
			</div>
		  
		  @endforeach
</div>
@endsection