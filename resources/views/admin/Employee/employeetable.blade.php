@extends('adminlte::page')

@section('title', 'Admin')

@section('content_header')
<h1>
Employee List
<a type="button" class='btn btn-success pull-right' href="employee/new"><i class='fa fa-plus'></i> Add New User</a></Button>
</h1>
@stop

@section('content')
<table id="myTable" class="display">
    <thead>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Fullname</th>
            <th>Gender</th>
            <th>Phone Number</th>
            <th>Deposit</th>
            <th>Commission</th>
            <th>Action</th>
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
            url: '{!!route('employeedata')!!}',
            dataSrc: ''
        },
        columns: [
            {'data': 'id', name: 'id' },
            { 'data': 'username', name: 'username' },
            { 'data': 'employee.fullname', name: 'fullname' },
            { 'data': 'employee.gender', name: 'gender' },
            { 'data': 'employee.phone_number', name: 'phone_number' },
            { 'data': 'employee.deposit_tab', name: 'deposit_tab' },
            { 'data': 'employee.commission', name: 'commission' },
            {
                'render' : function ( data, type, row ) {
                    console.log(row['id']);
                    return '<a href="employee/edit/'+row['id']+'" class="btn btn-warning">Edit</a> <form method="POST" action="employee/delete"> <input type=hidden name="id" value='+row['id']+'>@csrf <button type=submit class="btn btn-danger">Delete</button></form>';
                },
                "data": null,
                'name': 'action'
            },
        ]
      });
    });
    function deleteUser($id) {
        var data = new FormData;
        data.append('id');
        data.submit()
    }
</script>
@stop