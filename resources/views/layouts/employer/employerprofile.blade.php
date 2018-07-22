@extends('layouts.employer.employernavbar') 
 
@section('title', 'Profile') 
 
@section('content')
<div class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-4 mb-2">
        <img class="img-fluid d-block img-thumbnail" src="{{ asset('images/line.png') }}" width="400" height="400">
      </div>
      <div class="col-md-8">
        <div class="row">
          <div class="col-md-6">
            <h1>
              {{$name}}
              <a type="button" class="btn btn-outline-primary btn-sm" href="{{ route('editemployerprofile') }}">
                <i class="far fa-edit"></i>&nbsp; Edit Profile
              </a>
            </h1>
          </div>
          <div class="col-md-6">
            <div class="row">
              <div class="col text-info" style="transition: all 0.25s;">
                <p class="lead text-info float-right">
                  <i class="fas fa-map-marker-alt"></i>&nbsp;Medan, Indonesia</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <p class="lead text-primary">
              @if ($type == "Individual") Description @else Company Profile @endif
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <p class="">{{ $detail }}</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <p class="lead text-info">Number of Job Posted</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <p class="" style="font-size: 150%;">{{ $job_requested }}</p>
            <hr>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
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
                  <p> {{ $phone_number }} </p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <p> Address:</p>
                </div>
                <div class="col-md-6">
                  <p> {{ $address }} </p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <p> Email:</p>
                </div>
                <div class="col-md-6">
                  <p> {{ $username }}</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection @push('scripts')
<script>
  $(document).ready(function () {});
</script>
@endpush
