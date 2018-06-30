
@extends('layouts.app')

@section('title', 'Page Title')

@section('content')
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<div class="py-5 text-dark" >
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="text-dark">Post a Job</h1>
          <form method='POST' action='/postjob'>
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
              <textarea class="form-control" id="detail" name="detail" rows="3" placeholder="Detail"></textarea>
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