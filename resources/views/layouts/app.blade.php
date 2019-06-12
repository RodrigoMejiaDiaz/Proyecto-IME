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
<body class="bg-primary">
    <div id="app">

        <nav class="navbar sticky-top navbar-expand-lg navbar-light " style="background-color: #e3f2fd;">
          <a class="navbar-brand" href="{{ url('/') }}">
            <img src="https://lh3.googleusercontent.com/4um9ZFTEq_zdLkiCJrqACIcDJ0MrXpmCiBbRugFP-Fg1lBg2lHF-pCKvYeYodAQCdDp4rgxuiqMObrDaa18lYmBVTvVq0Hs3haLTvQjxpVn61uHltU0N-YFaqWOZCPPGhejvolLlij3scfhADxzkTi8tK71qkAHnHalM4QtPjqsH8_DNJ5BUoCBlYCbEQa3Js1uf4iVKelssAEorjqtS6yUgvuzU7C4ngiec2QNUrnAslSqV4cZ6jlxH5hf5HvZ_2tteRO-ckw4liaVubUvQ7nbmyinLZgLXitJdJ7was_6V0Fzg9yT4qE7JebLqJukuMd-c2KiUTHTkt-MYt-RCzxV2JSivXYqZJ1iXdyoj3WyM_Auv3xnQuuTYWEu6Uu-mZe38R2GQZodfRNuBCA2e8BfvzQqLpfFgWiisiFDg8cq0_U8otYAbop9zgdOZPfUzLFSuvnjEPb_ehEaVbVe6LAK0uBzFi6YjVHxG8lY0pWnpGCnmTJJ1LzAHPdD8eK20dzBILpkZ90W_qz4sr3jfR72-a4Fwra2Pixixn4ikE_vkJj-Dkl0IBMKno9rG4r7D27S59sdmG1FtZsGTQDL7koSKNeZTf7hVCIe1h3CAwuAYeFlP6FJSq0ILJoxb8lxmXpV99vY4aCp8iHWx47C_1O49BmLeIg=w1038-h657-no" width="100" height="70" class="d-inline-block align-top" alt="Logo">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse offcanvas-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav ml-auto ">

                <form class="form-inline">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                  </form>
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
        </nav>

        <main class="py-4" >
            @yield('content')
        </main>
    </div>
</body>
</html>
