@extends('layouts.app')

@section('content')

 	<nav class="nav nav-tabs">
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
                </a>
 								  <div class="text-center">
 								  	 <form action="{{ action('CompraController@store')}}" method="POST">
                     @csrf
                     <input type="hidden" name="id_art" value="{{ $articulo->id }}">
                     <input type="hidden" name="nom_art" value="{{ $articulo->nom_art }}">
                     <input type="hidden" name="img" value="{{ $articulo->img }}">
                     <input type="hidden" name="precio" value="{{ $articulo->precio }}">
                     <!-- Button trigger modal -->
                     <button type="button" class="btn" style="background-color: #ffcc00;" data-toggle="modal" data-target="#exampleModal">
                       Comprar
                     </button>

                     <!-- Modal -->
                     <div class="modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                       <div class="modal-dialog modal-dialog-centered" role="document">
                         <div class="modal-content">
                           <div class="modal-header">
                             <h5 class="modal-title" id="exampleModalLabel">¿Seguir Comprando?</h5>
                             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                               <span aria-hidden="true">&times;</span>
                             </button>
                           </div>
                           <div class="modal-footer">
                             <button type="button" class="btn btn-secondary btn-lg" data-dismiss="modal">Si</button>
                             <button type="submit" class="btn btn-primary">Ir al carro de compras</button>
                           </div>
                         </div>
                       </div>
                     </div>
                     </form>
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