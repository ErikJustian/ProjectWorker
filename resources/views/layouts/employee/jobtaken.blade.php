
@extends('layouts.employee.employeenavbar')

@section('title', 'Job Taken')

@section('content')
<div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="text-dark">Job Taken</h1>
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Job Title</th>
                  <th>Job Detail</th>
                  <th>Employer</th>
                  <th>Contact Number</th>
                  <th>Status</th>
                  <th>Due Date</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
              @foreach ($jobs as $job)
              <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $job->title }}</td>
                  <td>{{ $job->detail }}</td>
                  <td>{{ $job->employer_name }}</td>
                  <td>{{ $job->phone_number }}</td>
                  <td>{{ $job->job_status }}</td>
                  <td>{{ $job->due_date }}</td>
                  <td class="">
                    <a class="mt-1 ml-1 mr-1 btn btn-primary" href="{{ route('viewemployer', $job->employer_id) }}" style="width:75%;"><i class="fa fa-address-card"></i></a>
                    <form action='jobtaken/cancel' method="POST">
                      @csrf
                      <input type='hidden' name="request_id" value="{{$job->request_id}}">
                      
                      @if ($job->job_status == "Awaiting Request")
                        <button type='submit' class="mt-1 ml-1 mr-1 mb-1 btn btn-danger" href="#" style="width:75%;"><i class="fa fa-times"></i> </button>
                      @endif

                    </form>
                  </td>
                </tr>
              @endforeach
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

