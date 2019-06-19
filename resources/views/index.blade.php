@extends('layouts.app')

@section('content')
 <div class="container-fluid bg-white m-auto">
 			<div class="row no-gutters p-2">
 				@foreach($articulos as $articulo)
 				<div class="col-12 col-sm-6 col-md-3 col-lg-3">
 					<div class="card-deck h-100 rounded">
 						<div class="card rounded">
 							<div class="col-auto col-sm-auto col-md-auto col-lg-auto w-100">
 								<img src="{{ asset('images/' . $articulo->img) }}" class="card-img-top" alt="...">
 							</div>
 							<div class="col-auto col-sm-auto col-md-auto col-lg-auto">
 								<div class="card-body col-lg-auto bg-white" >
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



@endsection