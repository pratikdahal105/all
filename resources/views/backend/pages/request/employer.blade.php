@extends('backend.master.master')

@section('content')
    <div class="container-fluid">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active">Employer Request List</li>
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
                    <th>Company</th>
                    <th>Wish To Hire</th>
                    <th>Status</th>
                    <th>Detail</th>
                </tr>
                </thead>
                <tbody>
                @foreach($employers as $key=>$employer)
                    <tr>
                        <td>{{++$key}}</td>
                        <td>{{$employer->name}}</td>
                        <td>{{$employer->employee->name}}</td>
                        @if($employer->status == 0)
                            <td>Pending</td>
                        @elseif($employer->status == 1)
                            <td>Confirmed</td>
                        @else
                            <td>Complete</td>
                        @endif
                        <td>
                            <a href="{{route('employerRequestEdit', $employer->id)}}" class="btn btn-success btn-xs"><i class="fa fa-newspaper"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

@stop
