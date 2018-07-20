
@extends('layouts.employee.employeenavbar')

@section('title', 'Page Title')

@section('content')
<div class="py-4">
    <div class="container">
        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <form action="referrence" method='post'>
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title top-title" id="exampleModalLongTitle">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <h5 class="lead text-primary middle-title">Personal Driver</h5>
                            <p class='detail-job'> Need of a personal driver for duration of 3 days. Address is located in Jl.Anggur No.1A.</p>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">@</span>
                                </div>
                                <input type="text" id='username' class="form-control" placeholder="#UserID" aria-label="Username" aria-describedby="basic-addon1" name='username'>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" id="btn-referral" onclick="sendReferrence(this)" class="btn btn-primary">Send Referral</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <!-- Modal End -->
        @if ($errors->has('username'))
        <div class="alert alert-danger">
            {{ $errors->first('username') }}
        </div>
        @endif
        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif
        <!-- Filter -->
        <div class="row">
            <div class="col">
                <h1 class="text-primary">Promoted Jobs</h1>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="list-group">
                @if (count($promotedjobs) == 0)
                    <h5 class="text-center">No promoted jobs to display</h5>
                @else
                    @foreach($promotedjobs as $job)
                        <!-- List -->
                        <a class="mt-2 list-group-item list-group-item-action flex-column align-items-start">
                            <div class="mt-1 d-flex w-100 justify-content-between">
                                <h4 class="lead text-primary" style="font-weight:bold;">
                                    {{$job['title']}} &nbsp; 
                                    <span class="badge badge-primary">Promoted</span>
                                </h4>
                                <small>
                                    @php
                                    $date = new Carbon\Carbon($job->created_at);
                                    $now = Carbon\Carbon::now();
                                    echo $date->diffForHumans($now);
                                    @endphp
                                </small>
                            </div>
                            <hr class="mt-1">
                            <p>{{$job['detail']}}</p>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-1">Employer: </h6>
                                </div>
                                <div class="col-sm-9">
                                    <h6> {{$job['user']['name']}} </h6>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-1">Requirements: </h6>
                                </div>
                                <div class="col-sm-9">
                                    <h6> {{$job['requirement']}}</h6>
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
                                    <h6>{{$job['due_date']}}</h6>
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
                            <hr class="mt-1 mb-1">
                            <div class="d-flex justify-content-between">
                                <h5 class="mt-1 mb-1 lead text-primary">IDR {{number_format($job['salary'], 2)}}</h5>
                                <button class="ml-auto btn btn-success" onClick="requestJob({{$job['id']}})">Request</button>
                                <button class="ml-1 btn btn-dark" data-target="#exampleModalCenter" data-toggle="modal" onclick='showModal({!!$job!!})' > Refer to </button>
                                <button class="ml-1 btn btn-primary" onclick='viewProfile({{$job}})'> View Profile </button>
                            </div>
                        </a>
                    @endforeach
                @endif
                </div>
            </div>
        </div>
        <!-- Lists end -->
        <div class="row mt-1 mb-2">
            <div class="col-6 m-auto">
                
            </div>
        </div>

        <div class="row">
            <div class="col">
                <h1 class="text-primary">Job List</h1>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <select class="form-control" id="category" name="category" onchange="changeCategory(this)">
                        <option selected="true" value="">All Category</option>
                        @foreach($categories as $category)
                        @if(app('request')->get('category') == $category->id )
                        <option value="{{$category->id}}" selected=true>{{$category->category_name}}</option>
                        @else
                        <option value="{{$category->id}}">{{$category->category_name}}</option>
                        @endif                        
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <select class="form-control" id="location" name="location" onchange="changeLocation(this)">
                        <option selected="true" value ="">All Location</option>
                        @foreach($locations as $location)
                        @if(app('request')->get('location') == $location->id )
                        <option value="{{$location->id}}" selected=true>{{$location->location}}</option>
                        @else
                        <option value="{{$location->id}}">{{$location->location}}</option>
                        @endif
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <!-- Filter End -->
        <!-- Lists -->
        <div class="row">
            <div class="col-md-12">
                <div class="list-group">
                @foreach($jobs as $job)
                    <!-- List -->
                    <a class="mt-2 list-group-item list-group-item-action flex-column align-items-start">
                        <div class="mt-1 d-flex w-100 justify-content-between">
                            <h4 class="lead text-primary" style="font-weight:bold;">
                                {{$job['title']}} &nbsp;
                                @if($job->promoted == true)
                                    <span class="badge badge-primary">Promoted</span>   
                                @endif
                            </h4>
                            <small>
                                @php
                                $date = new Carbon\Carbon($job->created_at);
                                $now = Carbon\Carbon::now();
                                echo $date->diffForHumans($now);
                                @endphp
                            </small>
                        </div>
                        <hr class="mt-1">
                        <p>{{$job['detail']}}</p>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-1">Employer: </h6>
                            </div>
                            <div class="col-sm-9">
                                <h6> {{$job['user']['name']}} </h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-1">Requirements: </h6>
                            </div>
                            <div class="col-sm-9">
                                <h6> {{$job['requirement']}}</h6>
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
                                <h6>{{$job['due_date']}}</h6>
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
                        <hr class="mt-1 mb-1">
                        <div class="d-flex justify-content-between">
                            <h5 class="mt-1 mb-1 lead text-primary">IDR {{number_format($job['salary'], 2)}}</h5>
                            <button class="ml-auto btn btn-success" onClick="requestJob({{$job['id']}})">Request</button>
                            <button class="ml-1 btn btn-dark" data-target="#exampleModalCenter" data-toggle="modal" onclick='showModal({!!$job!!})' > Refer to </button>
                            <button class="ml-1 btn btn-primary" onclick='viewProfile({{$job}})'> View Profile </button>
                        </div>
                    </a>
                @endforeach
                </div>
            </div>
        </div>
        <!-- Lists end -->
        <div class="row mt-1">
            <div class="col-6 m-auto">
                {{ $jobs->links() }}
            </div>
        </div>
        
    </div>
</div>
@endsection
@push('scripts')
<script>
$(document).ready(function() {
});
var url="search";
    // Send Request
    function requestJob(id) {
        form = document.createElement('form');
        // url
        form.action = '/employee/search';
        form.method = 'POST';
        form.innerHTML = '@csrf<input name="job_id" value="'+id+'">';

        // the form must be in the document to submit it
        document.body.append(form);

        form.submit();
    }
    // Send Reffernce
    function sendReferrence(btn) {
        user = document.getElementById('username').value;
        if(user == "") {
            return alert("Please Fill The Username Field")
        }
        form = document.createElement('form');
        // url
        form.action = '/employee/refer';
        form.method = 'POST';
        form.innerHTML = '@csrf<input name="job_id" value="'+btn.value+'"/> <input name=username value="'+user+'"/>';

        // the form must be in the document to submit it
        document.body.append(form);

        form.submit();

    }
    // showModal
    function showModal(job) {
        console.log(job['id']);
        document.getElementsByClassName('top-title')[0].innerHTML = job['title'];
        document.getElementsByClassName('middle-title')[0].innerHTML = job['title'];
        document.getElementsByClassName('detail-job')[0].innerHTML = job['detail'];
        document.getElementById('btn-referral').value = job['id'];

    }   
    // Filter Location
    function changeLocation(locationid) {
        // Syntax List
        // urlParams.set(name, value) >>>> untuk ganti value yg udah ada
        // urlParams.append(name, value) >>>> untuk nambah value baru
        // urlParams.delete(name) >>>>>> untuk hapus value
        // urlParams.toString() >>>> untuk ambil semua query string
        // urlParams.get(name) >>>>> untuk ambil query string dengan name tertentu
        // urlParams.has(name) >>>>>>> untuk cek apakah ada atau tidak
        var urlParams = new URLSearchParams(window.location.search);
        if(locationid.value == "") {
            urlParams.delete('location')
        } else {
            // Set query string
            urlParams.set('location', locationid.value);
            // Delete jika dihapus
            // Send href
        }
        location.replace(url+"?"+urlParams.toString()); 
    }
    // Filter Category
    function changeCategory(category) {
        var urlParams = new URLSearchParams(window.location.search);
        if(category.value == "") {
            urlParams.delete('category')
        } else {
            // Set query string
            urlParams.set('category', category.value);
            // Delete jika dihapus
            // Send href
        }
        location.replace(url+"?"+urlParams.toString()); 
    }
    // viewProfile
    function viewProfile(job) {
        location.replace('employer/'+job['user']['user_id']); 
    }
</script>
@endpush
