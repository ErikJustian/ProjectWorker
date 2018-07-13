@extends('adminlte::page')

@section('title', 'Admin-Category')

@section('content_header')
@stop

@section('content')
<div class="py-5 text-dark">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="text-dark">New Category</h1>
        <form method='POST' action='/admin/category'>
          @csrf
          <!-- Name -->
          <div class="form-group">
            <label for="category_name" class="text-dark">Category</label>
            <input type="text" class="form-control" name="category_name" placeholder="Category Name"/>
          </div>
          <button type="submit" class="btn btn-secondary">Submit</button>
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
<script>

</script>
@stop