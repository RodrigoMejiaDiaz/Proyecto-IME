@extends('layouts.app')

@section('content')

<div class="container w-100">

	<nav aria-label="breadcrumb">
	  <ol class="breadcrumb">
	    <li class="breadcrumb-item"><a href="{{ url('/') }}">Todos</a></li>
	    @foreach($categorias_articulos as $categoria_articulo)
	    <li class="breadcrumb-item"><a href="{{ action('ArticuloController@categorias_articulos', $categoria_articulo->nom_cat) }}">{{$categoria_articulo->nom_cat}}</a></li>
	     @endforeach
	  </ol>
	</nav>
</div>
	
<div class="container bg-white">

	<div class="row bg-white">

		<div class="col-lg-5 col-md-7 p-3">
			 <img src="{{ asset('images/' . $articulo->img) }}" class="card-img-top" alt="...">
		</div>
		<div class="col-md-4 p-3 bg-white">
			<h1>{{ $articulo->nom_art }}</h1>
			<p>{{ $articulo->des_art }}</p>
			<h4><strong>Stock: {{ $articulo->stock }}</strong></h4>
		</div>
		<div class="col-lg-3 col-md-12 pl-3 bg-white">
			<div class="text-center">
				<div class="card border-secondary bg-white">
					<div class="card-body bg-white">
						<h4 class="text-center">S./ {{ $articulo->precio }}</h4>
						<div class="text-center">
						<form action="{{ action('CompraController@store')}}" method="POST">
						@csrf
						<input type="hidden" name="id_art" value="{{ $articulo->id }}">
						<button type="submit" class="btn btn-lg" style="background-color: #ffcc00;">Comprar</button>
						</form>
						</div>
						
					</div>
				</div>
			</div>
			

		</div>
		
	</div>
</div>

<div class="container bg-white">
	<h4 class="mt-4">Productos similares</h4>
		<div class="row w-100">
			@foreach($articulos as $articulo)
			<div class="col-lg-3 col-md-6 col-sm-14">
				<div class="card-deck h-100 rounded">
					<div class="card">
					  <img src="{{ asset('images/' . $articulo->img) }}" class="card-img-top" alt="...">
					  <div class="card-body bg-white">
					    <a href="{{ action('ArticuloController@show', $articulo->id) }}"><h4 class="card-title text-dark">{{ $articulo->nom_art  }} <span class="badge badge-pill text-info">S/. {{$articulo->precio}}</span></h4></a>
					    <p class="card-text">{{ $articulo->des_art }}</p>
					    <div class="text-center">
					    	 <a href="{{ action('ArticuloController@show', $articulo->id) }}" class="btn btn-lg"style="background-color: #ffcc00;">Comprar</a>
					    </div>
					   
					  </div>
					</div>
				</div>
				
			</div>
		  
		  @endforeach
</div>




	


@endsection