
@extends('layouts.employer.employernavbar')

@section('title', 'Page Title')

@section('content')
<div class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="card border-primary">
          <div class="card-body">
            <h4 class="card-title lead text-primary" style="font-weight:bold;">Personal Driver</h4>
            <hr>
            <p>Need of a personal driver for duration of 3 days. Address is located in Jl. Anggur No.1A.</p>
            <!-- Requirements -->
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-1">Requirements: </h6>
              </div>
              <div class="col-sm-9">
                <h6> {{$job['requirement']}} </h6>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-1">Detail: </h6>
              </div>
              <div class="col-sm-9">
                <h6> {{$job['detail']}}</h6>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-1">Due Date: </h6>
              </div>
              <div class="col-sm-9">
                <h6> {{$job['due_date']}} </h6>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-1">Category: </h6>
              </div>
              <div class="col-sm-9">
                <h6 class="mb-3"> {{$job['category']['category_name']}} </h6>
              </div>
            </div>
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1 lead text-primary">IDR {{number_format($job['salary'], 2)}}</h5>
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
                <th>Phone Number</th>
                <th>Rating</th>
                <th>Job Taken</th>
                <th>Birthdate</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <!-- List -->
              @foreach($employeerequest as $e)
              <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$e['employeerel']['fullname']}}</td>
                <td>{{$e['employeerel']['phone_number']}}</td>
                <td>{{$e['employeerel']['rating']}}</td>
                <td>{{$e['employeerel']['job_taken']}}</td>
                <td>{{$e['employeerel']['birthdate']}}</td>
                <td>
                  <button onclick="requestAccept({{$e['employeerel']['user_id']}},{{$job['id']}})" class="btn btn-outline-success">Accept</button>
                  <button onclick="requestDecline({{$e['employeerel']['user_id']}},{{$job['id']}})" class="btn btn-outline-danger">Decline</button>
                </td>
              </tr>
              @endforeach
              <!-- End List -->
            </tbody>
          </table>
          <div class="row mt-1">
            <div class="col-6 m-auto">
              {{ $employeerequest->links() }}
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
var jobid = "<?php echo $job['id'] ?>";
function requestAccept(userid) {
        form = document.createElement('form');
        // url
        form.action = '/employer/applicants/accept';
        form.method = 'POST';
        form.innerHTML = '@csrf<input name="job_id" value="'+jobid+'"/> <input name=employee_id value="'+userid+'"/>';

        // the form must be in the document to submit it
        document.body.append(form);

        form.submit();
}

function requestDecline(userid) {
        form = document.createElement('form');
        // url
        form.action = '/employer/applicants/decline';
        form.method = 'POST';
        form.innerHTML = '@csrf<input name="job_id" value="'+jobid+'"/> <input name=employee_id value="'+userid+'"/>';

        // the form must be in the document to submit it
        document.body.append(form);

        form.submit();
}
</script>
@endpush

