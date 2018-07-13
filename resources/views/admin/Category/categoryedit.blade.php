@extends('adminlte::page')

@section('title', 'Admin-Category')

@section('content_header')

@stop

@section('content')
<div class="py-5 text-dark">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="text-dark">Edit Category</h1>
        <form method='POST' action='/admin/category/{{$id}}'>
          @csrf
          @method('PUT')
          <!-- Category Name -->
          <div class="form-group">
            <label for="category_name" class="text-dark">Name</label>
            <input type="text" class="form-control" id="category_name" name="category_name" placeholder="Username" required value="{{$category_name}}">
          </div>
          <input type=hidden name='id' value={{$id}}/>
          <button type="submit" class="btn btn-secondary">Edit</button>
        </form>
      </div>
    </div>
  </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop