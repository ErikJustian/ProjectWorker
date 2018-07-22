
@extends('layouts.employee.employeenavbar')

@section('title', 'Page Title')

@section('content')
<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col">
                        <h1 class="text-primary text-center">Reffered Job List</h1>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive-md">
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th class="align-middle">#</th>
                                        <th class="align-middle">Job Title</th>
                                        <th class="align-middle">Description</th>
                                        <th class="align-middle">Employer</th>
                                        <th class="align-middle">Referrer</th>
                                        <th class="align-middle" id="action_column">Action</th>
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
                                    @else @foreach ($referrences as $referrence)
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
                                    @endforeach @endif
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
