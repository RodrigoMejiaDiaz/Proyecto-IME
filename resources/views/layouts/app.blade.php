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
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body style="background-color: #e3f2fd;">
    <div id="app">
        <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-primary">
                 <a class="navbar-brand" href="{{ url('/') }}">
                   <img src="https://lh3.googleusercontent.com/xFaBKQQ8VJYWNtYvamzxHPChZ5r1JtfDbpCxbLfxAu6ahOpF65aIncQaCfx57WOWyZ9aDCngiQpveTzE2qNvy91IKWnONO4QNMlN3JBeh9EL37-lgmGjZXUdkmrI1HTwSafGs2sh9jGs71tp_psr71flL0jiSVOmAHku0vCrzejRDlCSGXLAWjng5Kd3olJU78yF78KtyYAK4caz3huMlgIMMphES_4ZOSFLnmtxIKcDnf5-Z7TAQ06anfLSBNzbID7XuRXUnB3g5DEprvFh85FNWtLx5NNhVJ6PhsGJsrkNA_1olTl8sTWx_a7dbZ2gHhMDH6cokBbYblZQom35cRtAUsnVifbm7u4dVvXHOCaUwZ-fpyktEPfLDccqqif2x7PzALPyCpJRzAj8WTe-a-vuDyyWkEn0AuQFEAwgBHuMWXn5Ia2gFdzagETbYNfU7hYzBnPztb4saQxKPag2u19FDMe1nKGLN6RduxSfGuS8l7jOUNohplNEIbdoQD4Je9y7t-rlnkSOaA1MCHCYDYOFs7YmrABG3oJLQS5CqQcCNPvku9LCb3cD-iTI9Wb8gvDfxLp9QI_hQQVemLMToUj7zGKLYUJu_A0=s1038-w1038-h657-no" width="100" height="70" class="d-inline-block align-top" alt="Logo">
                 </a>
                 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                   <span class="navbar-toggler-icon"></span>
                 </button>

                 <div class="collapse navbar-collapse offcanvas-collapse" id="navbarSupportedContent">
                    
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <form class="form-inline">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                                    </form>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                               
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Ingresar') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrar') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                   <a class="dropdown-item" href="{{ route('logout') }}"
                                      onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                       {{ __('Logout') }}
                                   </a>
                                   <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                       @csrf
                                   </form>
                                   <a class="dropdown-item" href="">Editar Usuario</a>

                               </div>
                           </li>
                       @endguest


                        
                    </ul>
                </div>

            </div>
        </nav>

        <main class="py-4" >
            @yield('content')
        </main>
    </div>
</body>
</html>
