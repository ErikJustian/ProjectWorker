@extends('adminlte::page')

@section('title', 'Admin')

@section('content_header')

@stop

@section('content')
<div class="py-5 text-dark">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="text-dark">Register Employee</h1>
        <form method='POST' action='register'>
          @csrf
          <!-- Username -->
          <div class="form-group">
            <label for="username" class="text-dark">Username/Email</label>
            <input type="email" class="form-control" id="username" name="username" placeholder="Username" required>
          </div>
          <!-- Password -->
          <div class="form-group">
            <label for="password" class="text-dark">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
          </div>
          <!-- Fullname -->
          <div class="form-group">
            <label for="fullname" class="text-dark">FullName</label>
            <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Fullname" required>
          </div>
          <!-- Phone Number -->
          <div class="form-group">
            <label for="phone_number" class="text-dark">Phone Number</label>
            <input type="text"  class="form-control" id="phone_number" name="phone_number" placeholder="Phone Number" title="Number Only" required>
          </div>
          <!-- Gender -->
          <div class="form-group">
            <label for="gender" class="text-dark">Gender</label>
            <select class="form-control" id="gender" name="gender">
              <option value="M">M</option>
              <option value="F">F</option>
            </select>
          </div>
          <!-- Birthdate -->
          <div class="form-group">
            <label for="birthdate" class="text-dark">Birthdate</label>
            <input type='date' class="form-control" id="birthdate" name="birthdate" required>
          </div>
          <!-- Address -->
          <div class="form-group">
            <label for="address" class="text-dark">Address</label>
            <Textarea class="form-control" id="address" name="address" placeholder="Fill address here" required>
            </Textarea>
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