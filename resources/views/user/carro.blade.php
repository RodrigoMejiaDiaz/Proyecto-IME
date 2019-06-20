@extends('layouts.app')

@section('content')

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
                     @endforeach
                </div>
                
              </tbody>
            </table>
        </div>
    </div>
</div>

	


@endsection