@extends('adminlte::page')

@section('title', 'Admin')

@section('content_header')
<h1>
Admin
<a type="button" class='btn btn-success pull-right' href="add/new"><i class='fa fa-plus'></i></a></Button>
</h1>
@stop

@section('content')
<table id="myTable" class="display">
    <thead>
        <tr>
            <th>ID</th>
            <th>Username</th>
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
            url: '{!!route('admindata')!!}',
            dataSrc: ''
        },
        columns: [
            {'data': 'id', name: 'id' },
            { 'data': 'username', name: 'username' },
            {
                'render' : function ( data, type, row ) {
                    console.log(row['id']);
                    return '<form method="POST" action=add/delete> <input type=hidden name="id" value='+row['id']+'>@csrf <button type=submit class="btn btn-danger">Delete</button></form>';
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