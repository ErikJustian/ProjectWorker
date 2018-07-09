@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="py-5 text-center" style="background-image: url(&quot;https://pingendo.github.io/templates/sections/assets/cover_event.jpg&quot;);">
            <div class="container py-5">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="display-3 mb-4 text-primary">Join Us Today</h1>
                        <p class="lead mb-5">The Best Place to Find Worker</p>
                        <a href="#" class="btn btn-lg btn-success">Join Now</a>
                        <p class="lead mb-0">Or</p>
                        <a href="#" class="btn btn-lg btn-danger">Sign In</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-5 text-center bg-secondary">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="text-light">Why Us</h1>
                                <p class="text-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                    laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                                    voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                                    non proident, sunt in culpa qui officia deserunt.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-5" style="background-image: url('/images/business.jpg');background-position:center center;background-size:cover;background-repeat:no-repeat;">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md-7">
                        <h2 class="text-primary">Article subtitle #1</h2>
                        <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                            eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                            deserunt mollit anim id est laborum. </p>
                    </div>
                    <div class="col-md-5 align-self-center">
                        <img class="img-fluid d-block w-100 img-thumbnail" src="https://pingendo.github.io/templates/sections/assets/gallery_9.jpg"> </div>
                </div>
            </div>
        </div>
        <div class="py-5 text-center bg-secondary">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="text-light">Be a Worker</h1>
                                <p class="text-light">Become a worker and earn money when you have time !</p>
                            </div>
                        </div>
                        <a href="#" class="btn btn-lg btn-success">Be a Worker
                            <br> </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-dark text-white">
            <div class="container">
                <div class="row">
                    <div class="p-4 col-md-3">
                        <h2 class="mb-4 text-secondary">Pingendo</h2>
                        <p class="text-white">A company for whatever you may need, from website prototyping to publishing</p>
                    </div>
                    <div class="p-4 col-md-3">
                        <h2 class="mb-4 text-secondary">Mapsite</h2>
                        <ul class="list-unstyled">
                            <a href="#" class="text-white">Home</a>
                            <br>
                            <a href="#" class="text-white">About us</a>
                            <br>
                            <a href="#" class="text-white">Our services</a>
                            <br>
                            <a href="#" class="text-white">Stories</a>
                        </ul>
                    </div>
                    <div class="p-4 col-md-3">
                        <h2 class="mb-4">Contact</h2>
                        <p>
                            <a href="tel:+246 - 542 550 5462" class="text-white">
                                <i class="fa d-inline mr-3 text-secondary fa-phone"></i>+246 - 542 550 5462</a>
                        </p>
                        <p>
                            <a href="mailto:info@pingendo.com" class="text-white">
                                <i class="fa d-inline mr-3 text-secondary fa-envelope-o"></i>info@pingendo.com</a>
                        </p>
                        <p>
                            <a href="https://goo.gl/maps/AUq7b9W7yYJ2" class="text-white" target="_blank">
                                <i class="fa d-inline mr-3 fa-map-marker text-secondary"></i>365 Park Street, NY</a>
                        </p>
                    </div>
                    <div class="p-4 col-md-3">
                        <h2 class="mb-4 text-light">Subscribe</h2>
                        <form>
                            <fieldset class="form-group text-white">
                                <label for="exampleInputEmail1">Get our newsletter</label>
                                <input type="email" class="form-control" placeholder="Enter email"> </fieldset>
                            <button type="submit" class="btn btn-outline-secondary">Submit</button>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mt-3">
                        <p class="text-center text-white">© Copyright 2017 Pingendo - All rights reserved. </p>
                    </div>
                </div>
            </div>
        </div>
@endsection