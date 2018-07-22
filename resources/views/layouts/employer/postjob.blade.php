
@extends('layouts.employer.employernavbar')

@section('title', 'Page Title')

@section('content')

<div class="py-5 text-dark" >
    <div class="container">
      <div class="row">
        <div class="col">
          @if (session('status'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>{{ session('status') }}</strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          @endif
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-8">
          <h1 class="text-primary text-center">Post a Job</h1>
          <hr>
          <form method='POST' action='postjob'>
            @csrf
            <!-- Title -->
            <div class="form-group">
              <label for="title" class="text-dark">Job Title</label>
              <input type="text" class="form-control" id="title" name="jobtitle" placeholder="Job Title">
            </div>
            <!-- Category -->
            <div class="form-group">
              <label for="InputName" class="text-dark">Job Category</label>
              <select class="form-control" name='category'>
                <option>Category</option>
              @foreach($category as $cat)
                <option value={{$cat["id"]}}>
                  {{$cat['category_name']}}
                </option>
              @endforeach
              </select>
            </div>
            <!-- Category -->
            <div class="form-group">
              <label for="InputName" class="text-dark">Job Location</label>
              <select class="form-control" name='location'>
                <option>Location</option>
              @foreach($locations as $location)
                <option value={{$location["id"]}}>
                  {{$location['location']}}
                </option>
              @endforeach
              </select>
            </div>
            <!-- Date -->
            <div class="form-group">
              <label for="duedate" class="text-dark">Due Date</label>
              <input type="date" class="form-control" id="duedate" name="due_date" placeholder="Due Date"> 
            </div>
            <!-- Salary -->
            <div class="form-group">
              <label for="Salary" class="text-dark">Salary</label>
              <input type="number" class="form-control curInput" id="salary" name="salary" placeholder="Salary"> 
            </div>
            <div class="form-group">
              <label for="reuirement" class="text-dark">Requirement</label>
              <textarea class="form-control" id="requirement" name="requirement" rows="3" placeholder="Requirement"></textarea>
            </div>
            <div class="form-group">
              <label for="detail" class="text-dark">Detail</label>
              <textarea class="form-control" id="detail" name="detail" rows="3" placeholder="Your job offer description and address"></textarea>
            </div>
            <button type="submit" class="btn btn-secondary">Post</button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
<script>
$(window).load(function() {
  $('.curInput').pcsFormatNumber({
    decimal_separator: ".",
    number_separator: ",",
  });

  $(function () {
     $('#duedate').datetimepicker({  
         minDate:new Date()
  });

 });
});

</script>