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
					<button type="button" class="btn btn-success btn-lg w-75 p-3">Comprar</button>	
					</div>
					
				</div>
			</div>

		</div>
		
	</div>

	<h4>Productos similares</h4>

	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	  <ol class="carousel-indicators">
	    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	  </ol>
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	      <img src="{{ asset('images/' . $articulo->img) }}" class="d-block w-100" alt="...">
	    </div>
	    <div class="carousel-item">
	      <img src="{{ asset('images/' . $articulo->img) }}" class="d-block w-100" alt="...">
	    </div>
	    <div class="carousel-item">
	      <img src="{{ asset('images/' . $articulo->img) }}" class="d-block w-100" alt="...">
	    </div>
	  </div>
	  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>

</div>
@endsection