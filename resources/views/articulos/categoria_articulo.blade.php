@extends('layouts.app')

@section('content')

<div class="container mb-4 w-100">
    <div class="btn-group w-100" role="group">
    	 <button type="button" class="btn btn-secondary w-25 rounded border-dark font-weight-bold text-dark" style="background-color: #CDBAB6"><a href="{{ url('/') }}">Todos</a></button>
    	@foreach($categorias_articulos as $categoria_articulo)
        <button type="button" class="btn btn-secondary w-25 rounded border-dark font-weight-bold text-dark" style="background-color: #CDBAB6"><a href="{{ action('ArticuloController@categorias_articulos', $categoria_articulo->nom_cat) }}">{{$categoria_articulo->nom_cat}}</a></button>

        @endforeach
    </div>                     
</div>


<div class="container">
		<div class="row w-100">
			@foreach($articulos as $articulo)
			<div class="col-md-4">
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