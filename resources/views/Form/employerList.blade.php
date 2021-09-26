@extends('layouts.app')

@section('content')
    <div class="container-fluid p-4" style="background-color: white;">
        <div class="col-md-12">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">{{$employers->count()}} employers are looking to hire!</li>
            </ol>
{{--            <a class="btn btn-primary mb-2" href="{{route('employer')}}">Submit Company Information</a>--}}
            <table class="display" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>@lang('content.job_data_id')</th>
                    <th>@lang('content.job_data_title')</th>
                    <th>@lang('content.job_data_area')</th>
                    <th>@lang('content.job_data_salary_month')</th>
                    <th>@lang('content.job_data_industry')</th>
                    <th>@lang('content.job_data_detail')</th>
                </tr>
                </thead>
                <tbody>
                @foreach($employers as $key=>$employer)
                    <tr>
                        <td>{{++$key}}</td>
                        <td>{{$employer->job_title}}</td>
                        <td>{{$employer->company_address}}</td>
                        <td>{{$employer->salary}}</td>
                        <td>{{$employer->industry}}</td>
                        <td>
                            <a href="{{route('employerDetail', $employer)}}" class="btn btn-success btn-xs"><i class="fa fa-newspaper"></i></a>
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
