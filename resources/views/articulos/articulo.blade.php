@extends('layouts.app')

@section('content')

<div class="container mb-4 w-100">
    <div class="btn-group w-100" role="group">
    	 <button type="button" class="btn btn-secondary w-25 rounded border-dark font-weight-bold text-dark" style="background-color: #CDBAB6"><a href="{{ url('/') }}">Todos</a></button>
    	@foreach($categorias_articulos as $categoria_articulo)
        <button type="button" class="btn btn-secondary w-25 rounded border-dark font-weight-bold text-dark" style="background-color: #CDBAB6"><a href="{{ action('ArticuloController@categorias_articulos', $categoria_articulo->nom_cat) }}">{{$categoria_articulo->nom_cat}}</a></button>

        @endforeach
    </div>                     
</div>
	
<div class="container">


		
	<div class="row">

		<div class="col-md-4 p-3">
			 <img src="{{ asset('images/' . $articulo->img) }}" class="card-img-top" alt="...">
		</div>
		<div class="col-lg-4 p-3">
			<h2>{{ $articulo->nom_art }}</h2>
			<p>{{ $articulo->des_art }}</p>
			<h4><strong>Stock: {{ $articulo->stock }}</strong></h4>
		</div>
		<div class="col p-3">
			<div class="card">
				<div class="card-body">
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

<div class="container w-75">
	<h4>Productos similares</h4>
	<div class="card-group">
		@foreach ($articulos as $articulo)
		<div class="card">
			<img src="{{ asset('images/' . $articulo->img) }}" class="card-img-top" alt="...">
				<div class="card-body bg-info">
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