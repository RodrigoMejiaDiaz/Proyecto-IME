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

	


@endsection