<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Zlecenia</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700&subset=latin,latin-ext" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link href={{URL::asset('css/custom.css')}} rel="stylesheet">

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
        <!-- Branding Image -->
        <a class="navbar-brand" href="/main">
            ServeMyCar
        </a>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">

        <!-- Left Side Of Navbar -->
        <ul class="navbar-nav mr-auto my-2 my-lg-0">

            <li class="nav-item">
                <a class="nav-link" href="/main">Start</a>
            </li>            
            @auth
            <li class="nav-item">
                <a class="nav-link" href="{{URL::asset('userShow')}}">Moje zlecenia</a>
            </li>
            @endauth

        </ul>

        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav mt-2 mt-lg-0">

            @auth
            <li class="nav-item">
                <a class="nav-link" href={{URL::asset('works/create')}}>Dodaj zlecenie</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href={{URL::asset('logout')}}>Wyloguj</a>
            </li>
            @endauth

            @guest
            <li class="nav-item">
                <a class="nav-link" href={{URL::asset('login')}}>Zaloguj</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{URL::asset('register')}}">Rejestracja</a></li> 
            </li>
            @endguest

        </ul>
    </div>
    </nav>

    <!-- wrapper -->
    <div class="site-wrappper">

        <!-- .container -->
        <div class="container site-content">
            
            @yield('content')

        </div><!-- end of .container -->
        
    </div><!-- end of wrapper -->
    

    <!-- Footer -->
    <footer class="navbar fixed-bottom navbar-dark bg-dark">
        <div class="container">
            <p class="author mr-auto my-2 my-lg-0">&copy;Aplikacja zaliczeniowa</p>
        </div>
    </footer>


    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script type="text/javascript" id="www-widgetapi-script" src="https://s.ytimg.com/yts/jsbin/www-widgetapi-vflS50iB-/www-widgetapi.js" async=""></script>
    <script src="https://www.youtube.com/player_api"></script>

    <script>
        $( document ).ready(function() {
            @stack('scripts')
        });
    </script>

</body>
</html>
