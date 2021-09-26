@extends('backend.master.master')

@section('content')
    <div class="container-fluid">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active">Employee Request Edit</li>
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
                <form action="{{route('employeeRequestEdit', $employee->id)}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <input type="hidden" value="" name="id">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{$employee->name}}" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Phone</label>
                            <input type="text" class="form-control" id="phone" name="phone" value="{{$employee->phone}}" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{$employee->email}}" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Address</label>
                            <input type="text" class="form-control" id="present_address" name="present_address" value="{{$employee->present_address}}" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Nationality</label>
                            <input type="text" class="form-control" id="nationality" name="nationality" value="{{$employee->nationality}}" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Subject</label>
                            <input type="text" class="form-control" id="subject" name="subject" value="{{$employee->subject}}" required>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="">Message</label>
                            <textarea type="text" class="form-control" id="message" name="message" required>{{ $employee->message }}</textarea>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="">Status</label>
                            <select id="status" name="status" class="form-control">
                                <option selected value="{{ $employee->status }}">---- Change Status ----</option>
                                <option value="0">Pending</option>
                                <option value="1">Confirmed</option>
                                <option value="2">Complete</option>
                            </select>
                        </div>
                    </div><br>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form><br>

            <hr><h3>Applied For</h3><br>
        <table class="table table-bordered">
            <tr>
                <th><a href="{{route('employerEdit', $employee->employer)}}">Company Name: {{$employee->employer->company_name}}</a></th>
                <th>Job Title: {{$employee->employer->job_title}}</th>
            </tr>
            <tr>
                <th>Contact: {{$employee->employer->contact}}</th>
                <th>Address: {{$employee->employer->company_address}}</th>
            </tr>
        </table>

@stop
