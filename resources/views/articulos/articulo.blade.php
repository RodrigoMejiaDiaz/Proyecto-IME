@extends('layouts.app')

@section('content')

<div class="container">

	<div class="float-left ">
		<div class="img-field">
			<img src="{{ asset('images/' . $articulo->img )}}" class="img-thumbnail" alt="Imagen del articulo">
		</div>
	</div>

	<div class="float-right">
		<h4>S/.{{ $articulo->precio }}</h4>
		<br>
		<h4>Stock: <small>{{ $articulo->stock }}</small> </h4>
		<br>
		<h5>{{ $articulo->nom_cat }}</h5>
		<br>
		<button class="btn btn-success btn-lg">Comprar</button>
	</div>

	<div class="mx-auto" style="width: 200px;">
		<h1 class="display-4">{{ $articulo->nom_art }}</h1>

		
		<h5>{{ $articulo->des_art }}</h5>
		<br>
		
		
	</div>




</div>




@endsection