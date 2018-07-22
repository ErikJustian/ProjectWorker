
@extends('layouts.employee.employeenavbar')

@section('title', 'Job Taken')

@section('content')
<div class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="row">
          <div class="col">
            <h1 class="text-primary text-center">Job Taken</h1>
            <hr>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class "table-responsive-md">
              <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th class="align-middle">#</th>
                    <th class="align-middle">Job Title</th>
                    <th class="align-middle">Job Detail</th>
                    <th class="align-middle">Employer</th>
                    <th class="align-middle">Contact Number</th>
                    <th class="align-middle">Status</th>
                    <th class="align-middle">Due Date</th>
                    <th class="align-middle">Action</th>
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
                      <a class="mt-1 ml-1 mr-1 btn btn-primary" href="{{ route('viewemployer', $job->employer_id) }}" style="width:75%;">
                        <i class="fa fa-address-card"></i>
                      </a>
                      <form action='jobtaken/cancel' method="POST">
                        @csrf
                        <input type='hidden' name="request_id" value="{{$job->request_id}}"> @if ($job->job_status == "Awaiting Request")
                        <button type='submit' class="mt-1 ml-1 mr-1 mb-1 btn btn-danger" href="#" style="width:75%;">
                          <i class="fa fa-times"></i>
                        </button>
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
  </div>
</div>
@endsection
@push('scripts')
<script>
$(document).ready(function() {
});
</script>
@endpush

