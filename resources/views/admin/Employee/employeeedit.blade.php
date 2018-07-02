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
        <form method='POST' action='/admin/employee/edit'>
          @csrf
          <!-- Username -->
          <div class="form-group">
            <label for="username" class="text-dark">Username/Email</label>
            <input type="email" class="form-control" id="username" name="username" placeholder="Username" required value={{$username}}>
          </div>
          <!-- Password -->
          <div class="form-group">
            <label for="password" class="text-dark">Password(Jangan di isi kalau tidak diubah)</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
          </div>
          <!-- Fullname -->
          <div class="form-group">
            <label for="fullname" class="text-dark">FullName</label>
            <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Fullname" required  value={{$fullname}} >
          </div>
          <!-- Phone Number -->
          <div class="form-group">
            <label for="phone_number" class="text-dark">Phone Number</label>
            <input type="text"  class="form-control" id="phone_number" name="phone_number" placeholder="Phone Number" title="Number Only" required  value={{$phone_number}}>
          </div>
          <!-- Gender -->
          <div class="form-group">
            <label for="gender" class="text-dark">Gender</label>
            <select class="form-control" id="gender" name="gender">
              @if($gender == 'M')
              <option value="M">M</option>
              <option value="F">F</option>
              @else
              <option value="F">F</option>
              <option value="M">M</option>
              @endif
            </select>
          </div>
          <input type=hidden name='id' value={{$id}}/>
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