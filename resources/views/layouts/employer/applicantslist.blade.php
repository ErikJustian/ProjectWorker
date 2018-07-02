
@extends('layouts.employer.employernavbar')

@section('title', 'Page Title')

@section('content')
<div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header"> Job Description</div>
            <div class="card-body">
              <h4 class="lead text-primary" style="font-weight:bold;">Personal Driver</h4>
              <p>Need of a personal driver for duration of 3 days. Address is located in Jl. Anggur No.1A.</p>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-1">Employer: </h6>
                </div>
                <div class="col-sm-9">
                  <h6> Junaidy </h6>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-1">Requirements: </h6>
                </div>
                <div class="col-sm-9">
                  <h6> Senior high school graduate </h6>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-1">Duration: </h6>
                </div>
                <div class="col-sm-9">
                  <h6> 2 hrs </h6>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-1">Due Date: </h6>
                </div>
                <div class="col-sm-9">
                  <h6> January 1, 2020 </h6>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-1">Category: </h6>
                </div>
                <div class="col-sm-9">
                  <h6 class="mb-3"> Others </h6>
                </div>
              </div>
              <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1 lead text-primary">IDR 250,000.00</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row" style="margin-top:5%;">
        <div class="col-md-12">
          <h4> Applicants List </h4>
          <div class="table-responsive">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Full Name</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Mark Jones</td>
                  <td>
                    <a href="#" class="btn btn-outline-success">Accept</a>
                    <a href="#" class="btn btn-outline-danger">Decline</a>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Jacob Thornton</td>
                  <td>
                    <a href="#" class="btn btn-outline-success">Accept</a>
                    <a href="#" class="btn btn-outline-danger">Decline</a>
                  </td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Larry Gird</td>
                  <td>
                    <a href="#" class="btn btn-outline-success">Accept</a>
                    <a href="#" class="btn btn-outline-danger">Decline</a>
                  </td>
                </tr>
              </tbody>
            </table>
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

