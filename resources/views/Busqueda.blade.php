@extends('layouts.app')

@section('content')

<div class="container-fluid bg-white m-auto">
 	@if(isset($details))
 		<p>Los resultados de la búsqueda <b> {{ $query }} </b>son:</p>

 		<div class="row no-gutters p-2">
 				@foreach($details as $articulo)
 				<div class="col-12 col-sm-6 col-md-4 col-lg-3">
 					<div class="card-deck h-100 rounded">
 						<a href="{{ action('ArticuloController@show', $articulo->id) }}" class="text-reset text-decoration-none">
 						<div class="card rounded">
 							<div class="col-auto col-sm-auto col-md-auto col-lg-auto w-100">
 								<img src="{{ asset('images/' . $articulo->img) }}" class="card-img-top img-fluid" alt="...">
 							</div>
 							<div class="col-auto col-sm-auto col-md-auto col-lg-auto">
 								<div class="card-body col-lg-auto bg-white" >
 								  <h5 class="card-title text-dark">{{ $articulo->nom_art  }}</h5>
 								  <p>S/.{{ $articulo->precio }}</p>
 								  <div class="text-center">
 								  	 <a href="{{ action('ArticuloController@show', $articulo->id) }}" class="btn btn-lg"style="background-color: #f7c68a;">Comprar</a>
 								  </div>
 								</div>
 							</div> 						  
 						</div>
 						</a>
 					</div>
 					
 				</div>
 			  
 			  @endforeach
 		</div>
 	@endif

 	 </div>



@endsection