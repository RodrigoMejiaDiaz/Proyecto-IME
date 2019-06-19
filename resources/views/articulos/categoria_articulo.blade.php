@extends('layouts.app')

@section('content')

<div class="container mb-4 w-100">
    <div class="btn-group w-100 text-reset text-decoration-none" role="group">
    	<a href="{{ url('/') }}" class="btn btn-secondary w-25 rounded border-dark font-weight-bold text-dark"style="background-color: #CDBAB6;">
    	Todos</a>
    	@foreach($categorias_articulos as $categoria_articulo)
        <a href="{{ action('ArticuloController@categorias_articulos', $categoria_articulo->nom_cat) }}" class="btn btn-secondary w-25 rounded border-dark font-weight-bold text-dark"style="background-color: #CDBAB6">
        	{{$categoria_articulo->nom_cat}}</a>
        @endforeach
    </div>                     
</div>

<div class="container bg-white">
		<div class="row">
			@foreach($articulos as $articulo)
			<div class="col-md-3">
				<div class="card-deck h-100 rounded">
					<div class="card rounded">
					  <img src="{{ asset('images/' . $articulo->img) }}" class="card-img-top" alt="...">
					  <div class="card-body bg-white">
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