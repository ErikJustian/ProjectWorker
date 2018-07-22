@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="py-5 text-center" style="background-image: url(&quot;https://pingendo.github.io/templates/sections/assets/cover_event.jpg&quot;);">
            <div class="container py-5">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="display-3 mb-4 text-primary" style="font-weight:400">Join Us Today</h1>
                        <p class="lead mb-5" style="font-weight:400">The Best Place to Find Worker</p>
                        <a class="btn btn-lg btn-primary" href="{{ route('register') }}">Join Now</a>
                        <p class="lead mb-0" style="font-weight:400">Or</p>
                        <a class="btn btn-lg btn-success" href="{{ route('login') }}">Sign In</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-5 text-center" style="background-color:  #495057;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="text-light">Why Us</h1>
                                <p class="text-light">We provide you with top quality worker. The worker will be working according to your desire. Just post a job, wait the request, and choose the worker you want.
                                    The worker is interviewed and background checked by our Human Resource Department. Just choose the worker you desire.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-5" style="background-image: url('https://content-static.upwork.com/blog/uploads/sites/3/2016/11/09112036/Hiring-Guide_content-writing-job-description_h.jpg');background-size:cover;background-repeat:no-repeat;">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md-7">
                        <h2 class="text-white" style="font-weight:  400;text-align:  justify;">Need a job?</h2>
                        <p class="text-white" style="font-weight:  400;text-align:  justify;">
                            You want to work casually? Just join us. C'Employer will provide you a place to 
                            find a casual job faster and better. You can apply and work directly. You can choose your own 
                            employer. All you have to do is come to our office and apply as an employee
                        </p>
                    </div>
                    <div class="col-md-5 align-self-center">
                        <img class="img-fluid" src="https://upload.wikimedia.org/wikipedia/commons/0/0e/Iris_Gr%C3%A4%C3%9Fler.jpg"> </div>
                </div>
            </div>
        </div>
        <div class="py-5 text-center bg-secondary">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="text-light">Be a Employee</h1>
                                <p class="text-light">Become a employee and earn money when you have time !</p>
                            </div>
                        </div>
                        <a href="#" class="btn btn-lg btn-success">Be a employee
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