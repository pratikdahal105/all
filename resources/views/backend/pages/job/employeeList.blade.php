@extends('backend.master.master')

@section('content')
    <div class="container-fluid">
        <span class="float-right m-2">
            <a href="{{ route ('bulkUploadEmployee') }}" class="btn btn-success">Upload CSV</a>
            <a href="" class="btn btn-warning">Download CSV Format</a>
            <a href="{{ route('newEmployee') }}" class="btn btn-dark">add +</a>
        </span>
        {{-- <br><br><br> --}}
        <ol class="breadcrumb">
            <li class="breadcrumb-item active">Employee List</li>
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
                    <th>Nationality</th>
                    <th>Industry</th>
                    <th>Detail</th>
                </tr>
                </thead>
                <tbody>
                @foreach($employees as $key=>$employee)
                <tr>
                    <td>{{++$key}}</td>
                    <td>{{$employee->name}}</td>
                    <td>{{$employee->nationality}}</td>
                    <td>{{$employee->industry}}</td>
                    <td>
                        <a href="{{route('employeeEdit', $employee->id)}}" class="btn btn-success btn-xs"><i class="fa fa-newspaper"></i></a>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>

@stop
