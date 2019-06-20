@extends('layouts.app')

@section('content')

<div class="container">
      <h2>Editar Usuario</h2><br/>
      <div class="container">
    </div>
      <form method="post" action="{{action('UserController@update',Auth::id())}}">
        @csrf
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Nombre">Nombre de usuario</label>
            <input type="text" class="form-control" name="username" value="{{Auth::user()->name}}">
            <label for="Nombre">Email</label>
            <input type="text" class="form-control" name="email" value="{{Auth::user()->email}}">
            <label for="Nombre">DNI</label>
            <input type="text" class="form-control" name="dni" value="{{Auth::user()->dni}}">
            <label for="Nombre">RUC</label>
            <input type="text" class="form-control" name="ruc" value="{{Auth::user()->ruc}}">
            <label for="Nombre">Dirección</label>
            <input type="text" class="form-control" name="dir" value="{{Auth::user()->dir}}">
            <label for="Nombre">Celular</label>
            <input type="text" class="form-control" name="cel" value="{{Auth::user()->cel}}">
            <label for="Nombre">Ciudad</label>
            <input type="text" class="form-control" name="ciudad" value="{{Auth::user()->ciudad}}">
             <label for="Nombre">Contraseña</label>
            <input type="password" class="form-control" name="password">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <button type="submit" class="btn btn-success">Update</button>
          </div>
        </div>

      </form>
      <div class="row">
      <div class="col-md-4"></div>
      <div class="form-group col-md-4">
      <form action="{{action('UserController@destroy', Auth::id())}}" method="post">
      	@csrf
      	<input name="_method" type="hidden" value="DELETE">
      	<button class="btn btn-danger" type="submit">Delete</button>
      </form>
  	  </div>
  	</div>

   </div>

@endsection