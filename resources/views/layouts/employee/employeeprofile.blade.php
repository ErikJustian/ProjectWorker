
@extends('layouts.employee.employeenavbar')

@section('title', 'Profile')

@section('content')
<div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-4 mb-2">
          <img class="img-fluid d-block img-thumbnail" src="{{ asset('images/profilesample.jpg') }}" width="400" height="400">
        </div>
        <div class="col-md-8">
          <div class="row">
            <div class="col-md-6">
              <h1 class="">{{ $fullname }}</h1>
            </div>
            <div class="col-md-6">
              <div class="row">
                <div class="col text-info" style="transition: all 0.25s;">
                  <p class="lead text-info float-right"><i class="fa fa-map-marker"></i>&nbsp;Medan, Indonesia</p>
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
              <p class="lead"> {{ $rating}} </p>
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
                        <p> {{ $phone }} </p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <p> Address:</p>
                      </div>
                      <div class="col-md-6">
                        <p> {{ $address }}</p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <p> Email:</p>
                      </div>
                      <div class="col-md-6">
                        <p> {{ $email }} </p>
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
                        <p>
                          @if ($gender == 'M')
                            Male
                          @else
                            Female
                          @endif
                        </p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <p> Birthday: </p>
                      </div>
                      <div class="col-md-6">
                        <p>{{$birthdate}} </p>
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
