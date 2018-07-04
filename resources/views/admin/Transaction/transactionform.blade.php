@extends('adminlte::page')

@section('title', 'Admin')

@section('content_header')
@stop

@section('content')
<div class="py-5 text-dark">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="text-dark">New Transaction</h1>
        <form method='POST' action='new'>
          @csrf
          <!-- Username -->
          <div class="form-group">
            <label for="username" class="text-dark">Username</label>
            <select class="form-control select2 js-states" name="user_id" required>
            </select>
            @if ($errors->has('username'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('username') }}</strong>
            </span>
            @endif
          </div>
          <!-- Type -->
          <div class="form-group">
            <label for="type" class="text-dark">Type</label>
            <select class="form-control" id="type" name="type" required>
              <option value="Deposit">Deposit</option>
              <option value="Withdraw">Withdraw</option>
            </select>
          </div>
          <!-- Amount -->
          <div class="form-group">
            <label for="Amount" class="text-dark">Amount</label>
            <input type="number" class="form-control" id="amount" name="amount" placeholder="Amount" required>
            @if ($errors->has('amount'))
            <span class="invalid-feedback">
                <strong style="color:red;">{{ $errors->first('amount') }}</strong>
            </span>
            @endif
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
  $('.select2').select2({
    ajax: {
      url: 'userdata',
      dataType: 'json',
      placeholder: "Find Username",
      allowClear: true
      // Additional AJAX parameters go here; see the end of this chapter for the full code of this example
    }
  });
</script>
@stop