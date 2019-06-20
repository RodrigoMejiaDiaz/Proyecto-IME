<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous"> 
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Iconos -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <!-- Boostrap core CSS-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">
      <div class="sticky-top">
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
                 <a class="navbar-brand" href="{{ url('/') }}">
                   <img src="{{ asset('logo/' . 'Logo.png') }}" width="100" height="70" class="d-inline-block align-top" alt="Logo">
                 </a>
                 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                   <span class="navbar-toggler-icon"></span>
                 </button>

                 <div class="collapse navbar-collapse offcanvas-collapse" id="navbarSupportedContent">
                    
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav w-100 pl-auto">
                        <form class="form-inline w-100 " action="/search" method="POST" role="search">
                            @csrf
                            <input class="form-control  w-75" type="text" placeholder="Buscar artículo" name="q" aria-label="Search">
                            <button class="btn btn-light m-2" type="submit">Buscar</button>
                        </form>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link  text-white" href="{{ route('login') }}">{{ __('Ingresar') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link  text-white" href="{{ route('register') }}">{{ __('Registrar') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle  text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right bg-secondary" aria-labelledby="navbarDropdown">
                                   <a class="dropdown-item  text-white" href="{{ route('logout') }}"
                                      onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                       {{ __('Logout') }}
                                   </a>
                                   <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                       @csrf
                                   </form>
                                   <a class="dropdown-item  text-white" href="{{route('user.edit',['id'->Auth::user()->id'])}}">Editar Usuario</a>

                               </div>
                           </li>
                       @endguest



                        
                    </ul>

                    <a  href="{{ route('carro') }}">
                         <span class='fas fa-shopping-cart text-white' style='font-size:50px'></span>   
                     </a>
                </div>
               
            

        </nav>

      </div>


        <main class="py-4 bg-light text-dark" >
                
            
            @yield('content')
        </main>
        <footer class="container-fluid bg-info">
          <div class="row w-100">
              <div class="col-fluid py-3 px-5">
                    <img src="{{ asset('logo/' . 'Logo.png') }}" width="100" height="70" class="d-inline-block align-top" alt="Logo">
              </div>
              <div class="col-fluid m-2 pr-5">
                <h4>IME</h4>
                <a href="" class="text-reset text-decoration-none">Sobre nosotros</a><br>
                <a href="" class="text-reset text-decoration-none">Ubícanos</a><br>
                <a href="" class="text-reset text-decoration-none">Contacto</a><br>
              </div>
              <div class="col-fluid m-2 pr-5">
                <h4>Horario</h4>
                <p>Lunes a viernes 9:00 a 19:30 h Ininterrumpido</p>
              </div>
              <div class="col-fluid m-2 pr-5">
                  <h4>Información</h4>
                  <a href="" class="text-reset text-decoration-none">Condiciones</a><br>
                  <a href="" class="text-reset text-decoration-none">Comerciales</a><br>
                  <a href="" class="text-reset text-decoration-none">Pilítica de privacidad</a><br>
              </div>
          </div>
        </footer>
    </div>
</body>
</html>
