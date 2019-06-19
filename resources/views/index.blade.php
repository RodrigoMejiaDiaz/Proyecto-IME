@extends('layouts.app')

@section('content')
 <div class="container-fluid bg-white m-auto">
 			<div class="row no-gutters p-2">
 				@foreach($articulos as $articulo)
 				<div class="col-6 col-sm-4 col-md-3 col-lg-3">
 					<div class="card-deck h-100 rounded">
 						<div class="card rounded">
 							<div class="col-9-n3">
 								<img src="{{ asset('images/' . $articulo->img) }}" class="card-img-top" alt="...">
 							</div>
 							<div class="col-auto col-md-auto col-lg-auto w-100">
 								<div class="card-body col-lg-auto bg-white w-100" >
 								  <a href="{{ action('ArticuloController@show', $articulo->id) }}"><h5 class="card-title text-dark">{{ $articulo->nom_art  }}</h5></a>
 								  <p>S/.{{ $articulo->precio }}</p>
 								  <div class="text-center">
 								  	 <a href="{{ action('ArticuloController@show', $articulo->id) }}" class="btn btn-lg"style="background-color: #f7c68a;">Comprar</a>
 								  </div>
 								</div>
 							</div>
 	
 						  
 						</div>
 					</div>
 					
 				</div>
 			  
 			  @endforeach
 	</div>
 </div>
 <div class="container-fluid bg-white m-auto">
	<h4 class="mt-4">Productos similares</h4>
		@foreach($articulos as $articulo)
	<a href="{{ action('ArticuloController@show', $articulo->id) }}" class="text-reset text-decoration-none">
	<div class="card mb-3 w-100 ">
  <div class="row no-gutters p-2">
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