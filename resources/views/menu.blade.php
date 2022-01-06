<!doctype html>
<html lang="sk">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Covid web</title>

    <!-- Styles -->

    <link href="{{URL::asset('css/app.css')}}" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="32x32" href="{{URL::asset('favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{URL::asset('favicon-16x16.png')}}">

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
            crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
            crossorigin="anonymous"></script>

    <script src="{{ URL::asset('js/top.js') }}"></script>
    <script src="{{ URL::asset('js/cookie-message.js')}}"></script>
    <script src="{{ URL::asset('js/koment.js') }}"></script>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Covid web</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a id="polozkyMenu1" class="nav-item nav-link active" href={{ URL::to('co-je-covid') }}>Čo je covid?</a>
            <a id="polozkyMenu2" class="nav-item nav-link" href={{ URL::to('aktualne-opatrenia') }}>Aktuálne
                opatrenia</a>
            <a id="polozkyMenu3" class="nav-item nav-link" href={{ URL::to('miesta') }}>Očkovacie miesta</a>
            <a id="polozkyMenu4" class="nav-item nav-link" href={{ URL::to('posts') }}>Novinky</a>

            @auth()
                <a id="polozkyMenu5" class="nav-item nav-link" href={{ URL::to('admin/objednavky') }}>Objednávky</a>
            @endauth
            <a id="polozkyMenu6" class="nav-item nav-link" href={{ URL::to('ockovanie') }}>Očkovanie</a>
        </div>

        <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            @guest


            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Odhlásiť sa') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
    </div>

</nav>
<div class="progress-container">
    <div class="progress-bar" id="myBar"></div>
</div>


<img src="{{URL::asset('img/Header-Background.webp')}}" class="img-fluid" alt="Responsive image">

<button onclick="topFunction()" id="myBtn" title="Go to top">⬆</button>
