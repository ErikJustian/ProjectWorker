
@extends('layouts.employer.employernavbar')

@section('title', 'Page Title')

@section('content')
<div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="text-dark">Job Posted</h1>
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Job Title</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Tukang Potong Rumput</td>
                  <td>Waiting Applicants</td>
                  <td class="">
                    <a class="btn btn-primary btn-danger" href="#">Cancel
                      <br> </a>
                  </td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Supir pengganti</td>
                  <td>On Process</td>
                  <td>
                    <a class="btn btn-success" href="#">Finish</a>
                  </td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>Cashier</td>
                  <td>Waiting Applicants </td>
                  <td>
                    <a class="btn btn-primary" href="#">View Applicants </a>
                    <a class="btn btn-primary btn-danger" href="#">Cancel
                      <br> </a>
                  </td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>Waiter</td>
                  <td>Waiting</td>
                  <td>
                    <a class="btn btn-danger" href="#">Cancel</a>
                  </td>
                </tr>
                <tr>
                  <td>6</td>
                  <td>Entertaiment Pesta</td>
                  <td>Pending
                    <br> </td>
                  <td>
                    <a class="btn btn-success" href="#">Start</a>
                    <a class="btn btn-primary btn-danger" href="#">Cancel
                      <br> </a>
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

