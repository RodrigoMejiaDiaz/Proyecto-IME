@extends('layouts.app')

@section('content')

<div class="container bg-white ">
	<div class="row">
		<div class="col-md-4 p-3">
			 <img src="{{ asset('images/' . $articulo->img) }}" class="card-img-top" alt="...">
		</div>
		<div class="col-lg-4 p-3">
			<h2>{{ $articulo->nom_art }}</h2>
			<p>{{ $articulo->des_art }}</p>
		</div>
		<div class="col p-3">
			<div class="card">
				<div class="card-body">
					<h4 class="text-center">S./ {{ $articulo->precio }}</h4>
					<div class="text-center">
					<button type="button" class="btn btn-success btn-lg w-75 p-3">Comprar</button>	
					</div>
					
				</div>
			</div>

		</div>
		
	</div>

</div>
@endsection