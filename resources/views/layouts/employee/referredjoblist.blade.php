
@extends('layouts.employee.employeenavbar')

@section('title', 'Page Title')

@section('content')
<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-dark">Reffered Job List</h1>
                <div class="col-md-12">
                    <div class="table-responsive-md">
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th>#</th>
                                    <th>Job Title</th>
                                    <th>Description</th>
                                    <th>Employer</th>
                                    <th>Referrer</th>
                                    <th id="action_column">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($referrences->count() == 0)    
                                    <tr>
                                        <td>-</td>
                                        <td>No job title</td>
                                        <td>No description</td>
                                        <td>No employer</td>
                                        <td>No referrer</td>
                                        <td>
                                            No Action
                                        </td>
                                    </tr>
                                @else
                                    @foreach ($referrences as $referrence)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $referrence->job->title }}</td>
                                            <td>{{ $referrence->job->detail }}</td>
                                            <td>{{ $referrence->job->user->name }}</td>
                                            <td>{{ $referrence->referrer->fullname }}</td>
                                            <td>
                                                <form action='referredjob/process' method="POST">
                                                    @csrf
                                                    <div class="form-row">
                                                        <input type='hidden' name="request_id" value="{{$referrence->id}}">
                                                        <div class="form-group col-md-6 text-right">
                                                            <button type="submit" name="decision" value="accept" class="btn btn-primary btn-outline-success" style="width:75px;">Accept</a>
                                                        </div>
                                                        <div class="form-group col-md-6 text-left">
                                                            <button type="submit" name="decision" value="decline" class="btn btn-primary btn-outline-danger" style="width:75px;">Decline</a>
                                                        </div>
                                                    </div>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
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
