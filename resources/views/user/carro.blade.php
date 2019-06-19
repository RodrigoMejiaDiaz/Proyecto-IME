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

<div class="container-fluid">
	<div class="row">
        <div class="col">
            <div class="container-fluid bg-white m-auto">
                <h4 class="mt-4">Productos similares</h4>
                    @foreach($user->compras as $compra)
                <a href="" class="text-reset text-decoration-none">
                <div class="card mb-3 w-100 ">
              <div class="row no-gutters p-2">
                <div class="col-4 col-sm-4 col-md-3 col-lg-2">
                  <img src="{{ asset('images/' . $compra->img) }}" class="card-img w-100 h-100" alt="{{$compra->nom_art}}">
                </div>
                <div class="col-8 col-sm-8 w-100 h-auto col-md-9 col-lg-8">
                  <div class="card-body w-100 h-auto">
                    <h6 class="card-title">{{ $compra->nom_art  }}</h6>
                    <p>S/.{{ $compra->precio }}</p>
                  </div>
                </div>
              </div>
            </div>
            </a>
             @endforeach
            </div>
        </div>
    </div>
</div>

	


@endsection