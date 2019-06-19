@extends('layouts.app')

@section('content')




<div class="bg-white m-auto">
		@foreach($articulos as $articulo)
	<a href="{{ action('ArticuloController@show', $articulo->id) }}" class="text-reset text-decoration-none">
	<div class="card mb-auto w-100">
  <div class="row no-gutters">
    <div class="col-5 col-md-4 col-sm-5 col-lg-2">
      <img src="{{ asset('images/' . $articulo->img) }}" class="card-img-top img-fluid" alt="{{$articulo->nom_art}}">
    </div>
    <div class="col-6 col-md-8 col-sm-7 col-lg-8">
      <div class="card-body">
        <h5 class="card-title">{{ $articulo->nom_art  }}</h5>
        <p class="">{{ $articulo->des_art }}</p>

      </div>
    </div>
  </div>
</div>
</a>
 @endforeach
 <div class="container">
 			<div class="row">
 				@foreach($articulos as $articulo)
 				<div class="col-md-3">
 					<div class="card-deck h-100 rounded">
 						<div class="card rounded">
 						  <img src="{{ asset('images/' . $articulo->img) }}" class="card-img-top" alt="...">
 						  <div class="card-body bg-white">
 						    <a href="{{ action('ArticuloController@show', $articulo->id) }}"><h4 class="card-title text-dark">{{ $articulo->nom_art  }} <span class="badge badge-pill badge-secondary">S/. {{$articulo->precio}}</span></h4></a>
 						    <p class="card-text text-break">{{ $articulo->des_art }}</p>
 						    <a href="{{ action('ArticuloController@show', $articulo->id) }}" class="btn btn-success">Comprar</a>
 						  </div>
 						</div>
 					</div>
 					
 				</div>
 			  
 			  @endforeach
 	</div>
 </div>
		
@endsection