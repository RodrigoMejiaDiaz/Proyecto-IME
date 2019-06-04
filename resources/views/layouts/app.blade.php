<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <div class="navbar-left">
                    <a class="navbar-logo" href="{{ url('/') }}">
                    <img src="https://lh3.googleusercontent.com/05_Yu84LVg8uTC2eWXLcxCOwSP3TZM90Gksf_aPPer93NpWOMjU9tKOLCwpje2v6I0sk07cTCSNQ32xqBCD7WFo1GwV8znvf7BldF2pH78RAaZXhEYo0lG0FodpyelmXFsEyewK8E8HzQykcjzISaKYBHhpTd2GOkuXDWSLRQLOFoxfanQyZkdRxordvI7h7rCqJVXDKS2RROx0Q7f6bI2TMdBE64h0irmQO6PMBLgoSfoy5Gcr7Ciu8wL2mUrrNbbvfCnTiq5OyjWK1q5S-JU5qdSmd5jQ6Oo7-MqGLHT3K-t6og5Z_zdS8J42DRzu2lY4fmvpiewtmlH4YCkf-TBech4sqqGdONLR7fT9xbSep4GQot2mZZfNTbPoYzw7zR-T4od7xlLhSdokCpUukO4J4gZCS-cVsmS9GqfVdaCVazNDfq1nfQ1p-gTYFyy2TYHOrvDwEvL8sXvIK_6B73f9xKLu-mJnsvgNu6lWhsq4l106NrSry2mXKNrkcSsbSeHZPWl5MbNLnI5BFEXwKE6NRqzuC9YhmVNuIAxm2xDdbGaKWtqSNrvHbwGSEI2AbuN9kRl9JZQGIJNjFZSsMUEyr2b3zEy7Yxb6vu2wBBri0Nqetsmmq5fde_uCxCa59S2oZ2A26KMizO1E1yCmIkrw_okz9ig=w1246-h789-no" alt="Logo" class="rounded float-left" style="float:left;width:10%;height:12%;">
                </a>
                </div>
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
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
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
