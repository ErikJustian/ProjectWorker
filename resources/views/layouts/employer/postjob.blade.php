
@extends('layouts.app')

@section('title', 'Page Title')

@section('content')
<div class="py-5 text-dark" >
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="text-dark">Post a Job</h1>
          <form>
            <div class="form-group">
              <label for="InputName" class="text-dark">Job Title</label>
              <input type="text" class="form-control" id="InputName" placeholder="Job Title"> </div>
            <div class="form-group">
              <label for="InputName" class="text-dark">Job Category</label>
              <select class="form-control">
                <option>Category</option>
                <option>Category1</option>
                <option>Category2</option>
                <option>Category3</option>
              </select>
            </div>
            <div class="form-group">
              <label for="InputEmail1" class="text-dark">Contact Number</label>
              <input type="email" class="form-control" id="InputEmail1" placeholder="Contact Number"> </div>
            <div class="form-group">
              <label for="InputEmail1" class="text-dark">Salary</label>
              <input type="email" class="form-control" id="InputEmail1" placeholder="Salary"> </div>
            <div class="form-group">
              <label for="Textarea" class="text-dark">Requirement</label>
              <textarea class="form-control" id="Textarea" rows="3" placeholder="Requirement"></textarea>
            </div>
            <div class="form-group">
              <label for="Textarea" class="text-dark">Detail</label>
              <textarea class="form-control" id="Textarea" rows="3" placeholder="Detail"></textarea>
            </div>
            <button type="submit" class="btn btn-secondary">Post</button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection