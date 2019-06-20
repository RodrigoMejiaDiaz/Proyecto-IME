@extends('layouts.app')

@section('content')
  <nav class="nav nav-tabs m-3">
  <li class="nav-item">
      <a class="flex-sm-fill text-sm-center nav-link active" href="{{ route('home') }}">Todos</a>
  </li> 
  <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Categorías</a>
      
      <div class="dropdown-menu">
          @foreach($categorias_articulos as $categoria_articulo)
          <a class="dropdown-item" href="{{ action('ArticuloController@categorias_articulos', $categoria_articulo->nom_cat) }}">{{$categoria_articulo->nom_cat}}</a>
           @endforeach
      </div>

     
      
  </li>
 
 
</nav>
<div class="container-fluid bg-white m-auto">
  <p>Filtrado por:<b> {{ $query }} </b></p>
		@foreach($articulos as $articulo)
	<a href="{{ action('ArticuloController@show', $articulo->id) }}" class="text-reset text-decoration-none">
	<div class="card mb-3 w-100 ">
  <div class="row no-gutters p-1">
    <div class="col-4 col-sm-4 col-md-3 col-lg-2">
      <img src="{{ asset('images/' . $articulo->img) }}" class="card-img img-fluid py-4 pl-2" alt="{{$articulo->nom_art}}">
    </div>
    <div class="col-8 col-sm-8 w-100 h-auto col-md-9 col-lg-8">
      <div class="card-body w-100 h-auto">
        <h6 class="card-title">{{ $articulo->nom_art  }}</h6>
        <p>S/.{{ $articulo->precio }}</p>
      </div>
    </div>
  </div>
</div>
</a>
 @endforeach
</div>


		
@endsection