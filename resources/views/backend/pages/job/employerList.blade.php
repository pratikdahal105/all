@extends('backend.master.master')

@section('content')
    <div class="container-fluid">
        <span class="float-right m-2">
            <a href="{{ route ('bulkUploadEmployer') }}" class="btn btn-success">Upload CSV</a>
            <a href="" class="btn btn-warning">Download CSV Format</a>
            <a href="{{ route('newEmployer') }}" class="btn btn-dark">add +</a>
        </span>
        <ol class="breadcrumb">
            <li class="breadcrumb-item active">Employer List</li>
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
                    <th>Company Name</th>
                    <th>No of Vacancy</th>
                    <th>Industry</th>
                    <th>Detail</th>
                </tr>
                </thead>
                <tbody>
                @foreach($employers as $key=>$employer)
                    <tr>
                        <td>{{++$key}}</td>
                        <td>{{$employer->company_name}}</td>
                        <td>{{$employer->total_workers}}</td>
                        <td>{{$employer->industry}}</td>
                        <td>
                            <a href="{{route('employerEdit', $employer)}}" class="btn btn-success btn-xs"><i class="fa fa-newspaper"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@stop
