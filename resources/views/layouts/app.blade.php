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
                   <img src="https://lh3.googleusercontent.com/lnmhwcxgoq4MaoWsJaB86u5j8JMk2zPEIyYblgo_ydwzlthy6UWppzyzXH7QCW1OlDTRTm7jSxt2ra97lv7S_RmwsksD9ZLkaNwWbSmQSr3Z6JkXcZzoMDXClEhOSaeZNDZ1nz9t5J83L7jMHHSjAOmkcRc2-JMAj6I2KAW6Eshq-k5InFYxsLQhgoCEZcIMSChRoe9c4m5ZdXlY0AXWpU17W_NgRDpmbjUDcq2dPxeB17uz_C9p3tnfg8s6BoLMuXEcoq6BIltKWGVjRfYlHSPyl3o9dfp84y18AmngjjV2EvCvDHV0ZGMPs9BnwZDOaH702aetu_C9SjghzdB7LsiKt4Rsagxg_YVmX_l7Bthl4RKmPFaEe6Sow0IIzPfJscp_aydepQ-codQsIFaDpkmyGmntkOKo4Ihhqqp34jwGJhC1yxCbA294hA7nVPD32HkoAhHc2pq9Kl0gBwKtcTSt78urSkXikVkFEak2zjJuxDIwb-ckm-a-y0h-x0t9XBOl2nAaPkBeR4omW9pY4HDw9olD1DKLk6vnMqshzr3Y7Sy9OWmmQ_dLq0fzZL8aW8sHkWNZSDmMeCQLV7LCI7fgLGLL63f5DPaAwjOLeUxJX0YG8V7qplOLnleerl-Zuwkwfop7HCa7Ve1-gr1ECFHHjaIY6g=w1246-h789-no" width="100" height="70" class="d-inline-block align-top" alt="Logo">
                 </a>
                 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                   <span class="navbar-toggler-icon"></span>
                 </button>

                 <div class="collapse navbar-collapse offcanvas-collapse" id="navbarSupportedContent">
                    
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav w-100 pl-auto">
                        <form class="form-inline w-100">
                            <input class="form-control  w-75" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-light m-2" type="submit">Search</button>
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
                                   <a class="dropdown-item  text-white" href="">Editar Usuario</a>

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



        <main class="py-4 bg-white text-dark" >
                
            
            @yield('content')
        </main>
    </div>
</body>
</html>
