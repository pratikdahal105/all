@extends('backend.master.master')

@section('content')
    <div class="container-fluid">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active">Employee Request List</li>
        </ol>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif
        @if(session()->has('error'))
            <div class="alert alert-danger">
                {{ session()->get('error') }}
            </div>
        @endif
        <div class="col-md-12">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>S.N.</th>
                    <th>Name</th>
                    <th>Applied To</th>
                    <th>Status</th>
                    <th>Detail</th>
                </tr>
                </thead>
                <tbody>
                @foreach($employees as $key=>$employee)
                    <tr>
                        <td>{{++$key}}</td>
                        <td>{{$employee->name}}</td>
                        <td>{{$employee->employer->company_name}}</td>
                        @if($employee->status == 0)
                            <td>Pending</td>
                        @elseif($employee->status == 1)
                            <td>Confirmed</td>
                        @else
                            <td>Complete</td>
                        @endif
                        <td>
                            <a href="{{route('employeeRequestEdit', $employee->id)}}" class="btn btn-success btn-xs"><i class="fa fa-newspaper"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

@stop
