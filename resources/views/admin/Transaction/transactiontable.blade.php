@extends('adminlte::page')

@section('title', 'Admin')

@section('content_header')
<h1>
Employee List
<a type="button" class='btn btn-success pull-right' href="transaction/new"><i class='fa fa-plus'></i> Add New User</a></Button>
</h1>
@stop

@section('content')
<table id="myTable" class="display">
    <thead>
        <tr>
            <th>ID</th>
            <th>User</th>
            <th>Type</th>
            <th>Amount</th>
            <th>Date</th>
        </tr>
    </thead>
</table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
  console.log('Hi!');
    $(document).ready( function () {
      $('#myTable').DataTable({
        ajax: {
            url: '{!!route('transactiondata')!!}',
            dataSrc: ''
        },
        columns: [
            {'data': 'id', name: 'id' },
            { 'data': 'username', name: 'username' },
            { 'data': 'type', name: 'type' },
            { 'data': 'amount', name: 'amount' },
            {'data': 'created_at', name: 'created_at'}
        ]
      });
    });
</script>
@stop