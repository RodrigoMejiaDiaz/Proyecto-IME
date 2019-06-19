@extends('layouts.app')

@section('content')

<div class="container-fluid bg-white m-auto">
		@foreach($articulos as $articulo)
	<a href="{{ action('ArticuloController@show', $articulo->id) }}" class="text-reset text-decoration-none">
	<div class="card mb-3 w-100 ">
  <div class="row no-gutters p-1">
    <div class="col-4 col-sm-4 col-md-3 col-lg-2">
      <img src="{{ asset('images/' . $articulo->img) }}" class="card-img w-100 h-100" alt="{{$articulo->nom_art}}">
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