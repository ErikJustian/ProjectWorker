@extends('adminlte::page')

@section('title', 'Admin')

@section('content_header')

@stop

@section('content')
<div class="py-5 text-dark">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="text-dark">Add admin</h1>
        <form method='POST' action='/admin/add/new'>
          @csrf
          <!-- Username -->
          <div class="form-group">
            <label for="username" class="text-dark">Username</label>
            <input type="email" class="form-control" id="username" name="username" placeholder="Username">
          </div>
          <!-- Password -->
          <div class="form-group">
            <label for="password" class="text-dark">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
          </div>

          <button type="submit" class="btn btn-secondary">Add</button>
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