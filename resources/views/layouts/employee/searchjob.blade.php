
@extends('layouts.employee.employeenavbar')

@section('title', 'Page Title')

@section('content')
<div class="py-5">
    <div class="container">
        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
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
                            <input type="text" class="form-control" placeholder="#UserID" aria-label="Username" aria-describedby="basic-addon1"> </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Send Referral</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <select class="form-control" id="exampleFormControlSelect2">
                        <option disabled="disabled" selected="true">Select Category</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <select class="form-control" id="exampleFormControlSelect2">
                        <option disabled="disabled" selected="true">Select Location</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="list-group">
                    <a class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-between">
                            <h4 class="lead text-primary" style="font-weight:bold;">Personal Driver</h4>
                            <small>3 days ago</small>
                        </div>
                        <p> Need of a personal driver for duration of 3 days. Address is located in Jl.Anggur No.1A.</p>
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
                        <div class="d-flex justify-content-between">
                            <h5 class="mb-1 lead text-primary">IDR 250,000.00</h5>
                            <button class="ml-auto btn btn-success"> Request </button>
                            <button class="ml-1 btn btn-dark" data-target="#exampleModalCenter" data-toggle="modal"> Refer to </button>
                            <button class="ml-1 btn btn-primary"> View Profile </button>
                        </div>
                    </a>
                    <a class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-between">
                            <h4 class="lead text-primary" style="font-weight:bold;">Housemaid</h4>
                            <small>5 days ago</small>
                        </div>
                        <p> I'm in need of a housemaid right now. Please accept my request ASAP.</p>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-1">Employer: </h6>
                            </div>
                            <div class="col-sm-9">
                                <h6> Merry Mean</h6>
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
                                <h6> 1 day</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-1">Due Date: </h6>
                            </div>
                            <div class="col-sm-9">
                                <h6> January 2, 2019</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-1">Category: </h6>
                            </div>
                            <div class="col-sm-9">
                                <h6 class="mb-3"> Labour</h6>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h5 class="mb-1 lead text-primary">IDR 200,000.00</h5>
                            <button class="ml-auto btn btn-success"> Request </button>
                            <button class="ml-1 btn btn-dark"> Refer to </button>
                            <button class="ml-1 btn btn-primary"> View Profile </button>
                        </div>
                    </a>
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
