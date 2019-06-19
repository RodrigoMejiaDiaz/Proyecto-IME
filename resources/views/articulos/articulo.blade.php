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
	
<div class="container bg-white">
	
	<div class="row bg-white">

		<div class="col-md-4 p-3">
			 <img src="{{ asset('images/' . $articulo->img) }}" class="card-img-top" alt="...">
		</div>
		<div class="col-lg-4 p-3 bg-white">
			<h2>{{ $articulo->nom_art }}</h2>
			<p>{{ $articulo->des_art }}</p>
			<h4><strong>Stock: {{ $articulo->stock }}</strong></h4>
		</div>
		<div class="col p-3 bg-white">
			<div class="card border-secondary bg-white">
				<div class="card-body bg-white">
					<h4 class="text-center">S./ {{ $articulo->precio }}</h4>
					<div class="text-center">
					<form action="{{ action('CompraController@store')}}" method="POST">
					@csrf
					<input type="hidden" name="id_art" value="{{ $articulo->id }}">
					<button type="submit" class="btn btn-lg btn-success">Comprar</button>
					</form>
					</div>
					
				</div>
			</div>

		</div>
		
	</div>
</div>

<div class="container w-100 bg-white">
	<h4>Productos similares</h4>
	<div class="card-group w-100 ">
		@foreach ($articulos as $articulo)
		<div class="card">
			<img src="{{ asset('images/' . $articulo->img) }}" class="card-img-top" alt="...">
				<div class="card-body bg-white">
					<a href="{{ action('ArticuloController@show', $articulo->id) }}"><h4 class="card-title text-dark">{{ $articulo->nom_art  }} <span class="badge badge-pill badge-secondary">S/. {{$articulo->precio}}</span></h4></a>
					<p class="card-text">{{ $articulo->des_art }}</p>
					<form action="{{ action('CompraController@store')}}" method="POST">
					@csrf
					<input type="hidden" name="id_art" value="{{ $articulo->id }}">
					<button type="submit" class="btn btn-lg btn-success">Comprar</button>
					</form>
					
				</div>
		</div>
		@endforeach
	</div>

</div>

	


@endsection