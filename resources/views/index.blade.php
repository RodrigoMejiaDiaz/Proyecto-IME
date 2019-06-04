@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="card" style="width: 18:rem;">
			@foreach ($articulos as $articulo)
				<article id=" {{ $articulo->id }}">	
				<a href="" >
					<img src="{{ asset('images/'. $articulo->img) }}" class="card-img-top" alt="Artículo">
				</a>	
				<div class="card-body">
				<a href="" >
					<h4 class="card-title">{{ $articulo->nom_art }}</h4>
				</a>
				<p class="card-text">Ejemplo</p>
				<a href="" class="btn btn-primary">Ir al producto</a>
				</div>				
				</article>
			@endforeach
		</div>
	</div>
</div>
@endsection