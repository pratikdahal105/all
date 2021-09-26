@extends('backend.master.master')

@section('content')
    <div class="container-fluid">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active">Employee Pending Request List</li>
        </ol>
        @include('backend.layouts.message')
        <div class="col-md-12">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>S.N.</th>
                    <th>Name</th>
                    <th>Applied To</th>
                    <th>Detail</th>
                </tr>
                </thead>
                <tbody>
                @foreach($employees as $key=>$employee)
                    <tr>
                        <td>{{++$key}}</td>
                        <td>{{$employee->name}}</td>
                        <td>{{$employee->employer->company_name}}</td>
                        <td>
                            <a href="{{route('employeeRequestEdit', $employee->id)}}" class="btn btn-success btn-xs"><i class="fa fa-newspaper"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

@stop
