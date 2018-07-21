
@extends('layouts.employer.employernavbar')

@section('title', 'Edit Profile')

@section('content')
<div class="py-4">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="text-primary">Edit Profile</h1>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <form action="{{route('submitemployerprofile')}}" method="POST" class="needs-validation" novalidate>
                    <div class="row">
                    @csrf
                        <div class="col-md-4 mb-2">
                            <img class="mr-auto ml-auto img-fluid d-block img-thumbnail" src="{{ asset('images/line.png') }}" width="400" height="400">
                            <div class="mt-1 mb-2 custom-file">
                                <input type="file" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group row">
                                <label for="inputFullName" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="fullname" id="inputFullName" value="{{$name}}" placeholder="Enter Full Name" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                    <div class="invalid-feedback">
                                        Please enter a username.
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputDetails" class="col-sm-2 col-form-label">Company Profile</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="inputDetails" name="detail" placeholder="Enter short description">
                                        {{$detail}}
                                    </textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPhone" class="col-sm-2 col-form-label">Phone</label>
                                <div class="col-sm-10">
                                    <input type="tel" class="form-control" value="{{$phone_number}}" id="inputPhone" name="phone_number" placeholder="Enter Phone Number" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                    <div class="invalid-feedback">
                                        Please enter a phone number.
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputAddress" class="col-sm-2 col-form-label">Address</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputAddress" name="address" placeholder="Enter Address" value="{{$address}}" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                    <div class="invalid-feedback">
                                        Please enter a address.
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mt-4 d-flex justify-content-end">
                                        <button type="submit" class="mr-1 btn btn-primary">Save Changes</button>
                                        <button type="button" class="ml-1 btn btn-danger" onclick="window.location.reload()">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection 
@push('scripts')
<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
$(document).ready(function() {
});
</script>
@endpush

