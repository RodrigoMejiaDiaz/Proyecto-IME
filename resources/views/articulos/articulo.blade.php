@extends('layouts.app')

@section('content')

<div class="container w-100">


	
<div class="container bg-white">

	<div class="row bg-white">

		<div class="col-lg-5 col-md-7 p-3">
			 <img src="{{ asset('images/' . $articulo->img) }}" class="card-img-top" alt="...">
		</div>
		<div class="col-md-4 p-3 bg-white">
			<h3>{{ $articulo->nom_art }}</h3>
			<p>{{ $articulo->des_art }}</p>
			<h4><strong>Stock: {{ $articulo->stock }}</strong></h4>
		</div>
		<div class="col-lg-3 col-md-12 pl-3 bg-white">
			<div class="text-center">
				<div class="card border-secondary bg-white">
					<div class="card-body bg-white">
						<h4 class="text-center text-justify">S./ {{ $articulo->precio }}</h4>
						<div class="text-center text-justify">
						<form action="{{ action('CompraController@store')}}" method="POST">
						@csrf
						<input type="hidden" name="id_art" value="{{ $articulo->id }}">
						<input type="hidden" name="nom_art" value="{{ $articulo->nom_art }}">
						<input type="hidden" name="img" value="{{ $articulo->img }}">
						<input type="hidden" name="precio" value="{{ $articulo->precio }}">
						<button type="submit" class="btn btn-lg" style="background-color: #ffcc00;">Comprar</button>
						</form>
						</div>
						
					</div>
				</div>
			</div>
			

		</div>
		
	</div>
</div>

<div class="container-fluid bg-white m-auto">
	<h4 class="mt-4">Productos similares</h4>
		@foreach($articulos as $articulo)
	<a href="{{ action('ArticuloController@show', $articulo->id) }}" class="text-reset text-decoration-none">
	<div class="card mb-3 w-100 ">
  <div class="row no-gutters p-1">
    <div class="col-4 col-sm-4 col-md-3 col-lg-2">
      <img src="{{ asset('images/' . $articulo->img) }}" class="card-img img-fluid py-4 pl-2" alt="{{$articulo->nom_art}}">
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