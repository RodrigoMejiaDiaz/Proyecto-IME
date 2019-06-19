@extends('layouts.app')

@section('content')

<div class="container mb-4 w-100">
    <div class="btn-group w-100 text-reset text-decoration-none" role="group">
    	<a href="{{ url('/') }}" class="btn btn-secondary w-25 rounded border-dark text-dark"style="background-color: #CDBAB6;">
    	Todos</a>
    	@foreach($categorias_articulos as $categoria_articulo)
        <a href="{{ action('ArticuloController@categorias_articulos', $categoria_articulo->nom_cat) }}" class="btn btn-secondary w-25 rounded border-dark text-dark"style="background-color: #CDBAB6">
        	{{$categoria_articulo->nom_cat}}</a>
        @endforeach
    </div>                     
</div>

<div class="container">
	
</div>

	


@endsection