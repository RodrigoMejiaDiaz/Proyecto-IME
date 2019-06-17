@extends('layouts.app')

@section('content')
<div class="container">

		<div class="row">
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