@extends('layouts.app')

@section('content')
    <div class="container-fluid p-4" style="background-color: white;">
        <div class="col-md-12">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">{{$employees->count()}} employees are available for hire!</li>
            </ol>
{{--            <a class="btn btn-primary mb-2" href="{{route('employee')}}">Submit My Information</a>--}}
            <table class=" display" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>@lang('content.job_seeker_id')</th>
                   {{-- <th>@lang('content.job_seeker_name')</th> --}}
                    <th>@lang('content.job_seeker_age')</th>
                    <th>@lang('content.job_seeker_sex')</th>
                    <th>@lang('content.job_seeker_nationality')</th>
                    <th>@lang('content.job_seeker_language')</th>
                    <th>@lang('content.job_seeker_looking')</th>
                    <th>@lang('content.job_seeker_details')</th>
                </tr>
                </thead>
                <tbody>
                @foreach($employees as $key=>$employee)
                <tr>
                    <td>{{++$key}}</td>
                   {{-- <td>{{$employee->name}}</td> --}}
                    <td>{{$employee->age}}</td>
                    <td>{{$employee->sex}}</td>
                    <td>{{$employee->nationality}}</td>
                    <td>{{$employee->japanese_language}}</td>
                    <td>{{$employee->industry}}</td>
                    <td>
                        <a href="{{route('employeeDetail', $employee)}}" class="btn btn-success btn-xs"><i class="fa fa-newspaper"></i></a>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
        <script>
            $(document).ready( function () {
                $('#dataTable').DataTable();
            } );
        </script>
@stop
