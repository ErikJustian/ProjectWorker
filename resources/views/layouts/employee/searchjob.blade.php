
@extends('layouts.employee.employeenavbar')

@section('title', 'Page Title')

@section('content')
<div class="py-5">
    <div class="container">
        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <form action="referrence" method='post'>
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle title-job">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <h5 class="lead text-primary">Personal Driver</h5>
                            <p> Need of a personal driver for duration of 3 days. Address is located in Jl.Anggur No.1A.</p>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">@</span>
                                </div>
                                <input type="text" class="form-control" placeholder="#UserID" aria-label="Username" aria-describedby="basic-addon1" name='username'>
                                <input type="hidden" name="job_id" id="job_id">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Send Referral</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <!-- Modal End -->
        <!-- Filter -->
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
                    <a class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-between">
                            <h4 class="lead text-primary" style="font-weight:bold;">{{$job['title']}}</h4>
                            <small>3 days ago</small>
                        </div>
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
                        <div class="d-flex justify-content-between">
                            <h5 class="mb-1 lead text-primary">IDR {{number_format($job['salary'], 2)}}</h5>
                            <button class="ml-auto btn btn-success">Request</button>
                            <button class="ml-1 btn btn-dark" data-target="#exampleModalCenter" data-toggle="modal" onclick="modal_data"> Refer to </button>
                            <button class="ml-1 btn btn-primary"> View Profile </button>
                        </div>
                    </a>
                @endforeach
                </div>
            </div>
        </div>
        <!-- Lists end -->
        {{ $jobs->links() }}
    </div>
</div>
@endsection
@push('scripts')
<script>
$(document).ready(function() {
});
var url="search";
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

</script>
@endpush
