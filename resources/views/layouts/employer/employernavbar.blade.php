<!DOCTYPE html>
<html>

<head>
    <title>Casual Worker - @yield('title')</title>

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
        <nav class="navbar navbar-expand-md navbar-dark bg-primary">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/logo.png') }}" width="145" height="35">
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('employerprofile') }}">
                        <i class="fa fa-id-card"></i> &nbsp;<b>Profile</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('postedjob') }}">
                            <i class="fa fa-suitcase"></i> &nbsp;<b>Job Posted</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('postjobform') }}">
                            <i class="fas fa-chalkboard-teacher"></i> &nbsp;<b>Post a Job</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <b>Logout</b></a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
                    </li>
                </ul>
            </div>
        </nav>
    @show

    @yield('content')
</body>
    <script src="{{ asset('js/jquery-3.2.1.slim.min.js') }}" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="{{ asset('js/popper.min.js') }}" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
    @stack('scripts')
    @stack('styles')
</html>
