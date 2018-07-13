@extends('adminlte::page')

@section('title', 'Admin-Category')

@section('content_header')
<h1>
Location List
<a type="button" class='btn btn-success pull-right' href="location/create"><i class='fa fa-plus'></i> Add New Location</a></Button>
</h1>
@stop

@section('content')
<table id="myTable" class="display">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
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
            url: '{!!route('locationdata')!!}',
            dataSrc: ''
        },
        columns: [
            {'data': 'id', name: 'id' },
            { 'data': 'location', name: 'location' },
            {
                'render' : function ( data, type, row ) {
                    return '<a href="location/'+row['id']+'/edit" class="btn btn-warning ">Edit</a>';
                },
                "data": null,
                'name': 'action'
            },
        ]
      });
    });
</script>
@stop