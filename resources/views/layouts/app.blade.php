<html>

<head>
    <title>C Employer - @yield('title')</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/theme.css') }}" rel="stylesheet">
    <link href="{{ asset('css/personal.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/icons/css/solid.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/icons/css/regular.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/icons/css/brands.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/icons/css/fontawesome.css') }}" type="text/css">
</head>

<body>
    @section('navbar')
        <!-- <nav class="navbar navbar-expand-md sticky-top navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <i class="fa d-inline fa-lg fa-cloud"></i>
                    <b> CWorker </b>
                </a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-="" target="#navbarContent">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse text-center justify-content-end" id="navbarContent">
                    <a class="btn navbar-btn ml-2 btn-outline-secondary" href="{{ route('login') }}">Sign in</a>
                </div>
            </div>
        </nav> -->
        <nav class="navbar sticky-top navbar-expand-md navbar-dark bg-primary">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/logo.png') }}" width="145" height="35">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-center" id="navbarText">
                <a class="ml-auto btn navbar-btn btn-outline-light" href="{{ route('login') }}"><b>Sign in <i class="fa fa-sign-in-alt"></i></b></a>
            </div>
        </nav>
    @show

    @yield('content')
    
</body>
    <script src="{{ asset('js/jquery-3.2.1.slim.min.js') }}" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="{{ asset('js/popper.min.js') }}" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> -->
    <script src="{{ asset('js/app.js') }}"></script>

</html>
