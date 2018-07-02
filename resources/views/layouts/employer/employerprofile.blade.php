
@extends('layouts.employer.employernavbar')

@section('title', 'Page Title')

@section('content')
<div class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <img class="img-fluid d-block" src="{{ asset('images/line.png') }}"> </div>
      <div class="col-md-6">
        <div class="row">
          <div class="col-md-6">
            <h1 class="">Line Corp.</h1>
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
            <p class="lead text-primary">Company Profile</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <p class="">Line Corporation (stylized as LINE Corporation), located in Tokyo, is a Japanese subsidiary of the South Korean
              internet search giant Naver Corporation. The company's business is mainly associated with the development of
              mobile applications and Internet services.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <p class="lead text-info">Number of Job Posted</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <p class="" style="font-size: 150%;">10,256</p>
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
                      <p> Contact Person: </p>
                    </div>
                    <div class="col-md-6">
                      <p> Mark Jones </p>
                    </div>
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
                      <p> Jl. Jemadi No.21</p>
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

