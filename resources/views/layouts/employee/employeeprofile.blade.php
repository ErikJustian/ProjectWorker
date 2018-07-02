
@extends('layouts.employee.employeenavbar')

@section('title', 'Page Title')

@section('content')
<div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img class="img-fluid d-block" src="{{ asset('images/profilesample.jpg') }}"> </div>
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-6">
              <h1 class="">Joe Max&nbsp;</h1>
            </div>
            <div class="col-md-6">
              <div class="row">
                <div class="col-md-3 text-info" style="transition: all 0.25s;">
                  <i class="fa fa-map-marker fa-2x d-inline pull-right"></i>
                </div>
                <div class="col-md-9" style="transition: all 0.25s;">
                  <p class="lead text-info">Medan, Indonesia</p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <p class="lead text-primary">Experienced Worker</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <p class="lead text-info">Ratings</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <p class="lead">8,6</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <ul class="nav nav-tabs">
                <li class="nav-item">
                  <a href="" class="active nav-link" data-toggle="tab" data-target="#tabone">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="" data-toggle="tab" data-target="#tabtwo">History</a>
                </li>
              </ul>
              <div class="tab-content mt-2">
                <div class="tab-pane fade show active" id="tabone" role="tabpanel">
                  <div class="container">
                    <div class="row">
                      <p class="lead text-info text-uppercase">
                        <b>Contact Information</b>
                      </p>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <p> Phone: </p>
                      </div>
                      <div class="col-md-6">
                        <p> +0082109830821 </p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <p> Address:</p>
                      </div>
                      <div class="col-md-6">
                        <p> Jl. Krakatau No.29</p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <p> Email:</p>
                      </div>
                      <div class="col-md-6">
                        <p> kutu@gmail.com</p>
                      </div>
                    </div>
                    <div class="row">
                      <p class="lead text-info text-uppercase">
                        <b>BASIC INFORMATION</b>
                      </p>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <p> Gender: </p>
                      </div>
                      <div class="col-md-6">
                        <p> Male</p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <p> Birthday: </p>
                      </div>
                      <div class="col-md-6">
                        <p> January 1, 1992</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
@push('scripts')
<script>
$(document).ready(function() {
});
</script>
@endpush