@extends('backend.master.master')

@section('content')
    <div class="container-fluid">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active">Employer Pending Request List</li>
        </ol>
        @include('backend.layouts.message')
        <div class="col-md-12">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>S.N.</th>
                    <th>Company</th>
                    <th>Wish To Hire</th>
                    <th>Detail</th>
                </tr>
                </thead>
                <tbody>
                @foreach($employers as $key=>$employer)
                    <tr>
                        <td>{{++$key}}</td>
                        <td>{{$employer->name}}</td>
                        <td>{{$employer->employee->name}}</td>
                        <td>
                            <a href="{{route('employerRequestEdit', $employer->id)}}" class="btn btn-success btn-xs"><i class="fa fa-newspaper"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

@stop
