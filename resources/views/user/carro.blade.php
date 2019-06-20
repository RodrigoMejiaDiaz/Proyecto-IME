@extends('layouts.app')

@section('content')
  <nav class="nav m-3 nav-tabs">
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
<div class="container-fluid">
	<div class="row">


        <div class="col ">
            <h4>Carrito de compras</h4>
            <table class="table table-responsive">
              <thead class="thead-light">
                <tr>
                  <th>Imágen</th>
                  <th>Artículo</th>
                  <th>Precio</th>
                </tr>
              </thead>
              <tbody>
                <div>
                    @foreach($user->compras as $compra)
                    <tr>
                      <div><td  class="w-25"> <img src="{{ asset('images/' . $compra->img) }}"  alt="{{$compra->nom_art}}" class="img-fluid"></td></div>
                      <div><td>{{ $compra->nom_art  }}</td></div>
                      <div><td>S/.{{ $compra->precio }}</td></div>
                    </tr>
                    <form action="{{ route('delete.compra', ['id'=>$compra->id]) }}" method='POST'>
                      @csrf
                      <input type="hidden" name="_method" value="DELETE">
                      <input type="submit" name="btn btn-danger" value="Delete">
                    </form>
                     @endforeach
                </div>
                
              </tbody>
            </table>
        </div>
    </div>
</div>

	


@endsection