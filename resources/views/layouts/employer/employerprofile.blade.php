
@extends('layouts.employer.employernavbar')

@section('title', 'Page Title')

@section('content')
<div class="py-5 text-dark" >
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img class="d-block img-fluid my-3" src="https://cdn1.iconfinder.com/data/icons/business-charts/512/customer-512.png"> </div>
        <div class="col-md-6">
          <h1>Profile</h1>
          <div class="row">
            <div class="col-md-12">
              <div class="row">
                <div class="col-md-6">
                  <p class="lead judul">Name</p>
                </div>
                <div class="col-md-6">
                  <p class="lead">{{$name}}</p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="row">
                <div class="col-md-6">
                  <p class="lead judul">Email</p>
                </div>
                <div class="col-md-6">
                  <p class="lead">{{$username}}</p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="row">
                <div class="col-md-6">
                  <p class="lead judul">Phone</p>
                </div>
                <div class="col-md-6">
                  <p class="lead">{{$phone_number}}</p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="row">
                <div class="col-md-6">
                  <p class="lead judul">Gender</p>
                </div>
                <div class="col-md-6">
                  <p class="lead">Male</p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="row">
                <div class="col-md-12">
                  <a class="btn btn-danger fa fa-pencil pull-right" href="#">Edit Profile</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <b>
        <hr> </b>
      <div class="row">
        <div class="col-md-12">
          <h1>Status</h1>
          <div class="row">
            <div class="col-md-12">
              <div class="row">
                <div class="col-md-6">
                  <p class="lead judul">Job Taken</p>
                </div>
                <div class="col-md-6">
                  <p class="lead">10</p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="row">
                <div class="col-md-6">
                  <p class="lead judul">Level</p>
                </div>
                <div class="col-md-6">
                  <p class="lead">Amateur</p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="row">
                <div class="col-md-6">
                  <p class="lead judul">Rating</p>
                </div>
                <div class="col-md-6">
                  <p class="lead">8.5</p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="row">
                <div class="col-md-6">
                  <p class="lead judul">Deposit</p>
                </div>
                <div class="col-md-6">
                  <p class="lead">Rp.0</p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="row">
                <div class="col-md-6">
                  <p class="lead judul">Commision</p>
                </div>
                <div class="col-md-6">
                  <p class="lead">Male</p>
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

