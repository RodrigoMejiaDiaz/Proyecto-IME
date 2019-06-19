@extends('layouts.app')

@section('content')

<div class="container w-100">

	<nav aria-label="breadcrumb">
	  <ol class="breadcrumb">
	    <li class="breadcrumb-item active" aria-current="page">Todos</li>
	    @foreach($categorias_articulos as $categoria_articulo)
	    <li class="breadcrumb-item"><a href="{{ action('ArticuloController@categorias_articulos', $categoria_articulo->nom_cat) }}">{{$categoria_articulo->nom_cat}}</a></li>
	     @endforeach
	  </ol>
	</nav>
</div>

<div class="container bg-white">

		<div class="row">
			@foreach($articulos as $articulo)
			<div class="col-lg-3 col-md-4 col-sm-6 col-6">
				<div class="card-deck h-100 rounded">
					<div class="card">
					  <img src="{{ asset('images/' . $articulo->img) }}" class="card-img-top" alt="...">
					  <div class="card-body bg-white">
					    <a href="{{ action('ArticuloController@show', $articulo->id) }}"><h4 class="card-title text-dark">{{ $articulo->nom_art  }} <span class="badge badge-pill badge-secondary">S/. {{$articulo->precio}}</span></h4></a>
					    <p class="card-text">{{ $articulo->des_art }}</p>
					    <div class="text-center">
					    	 <a href="{{ action('ArticuloController@show', $articulo->id) }}" class="btn btn-success btn-lg">Comprar</a>
					    </div>
					   
					  </div>
					</div>
				</div>
				
			</div>
		  
		  @endforeach
</div>
@endsection