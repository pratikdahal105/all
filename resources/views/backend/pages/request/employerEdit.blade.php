@extends('backend.master.master')

@section('content')
    <div class="container-fluid">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active">Employer Request Edit</li>
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
                <form action="{{route('employerRequestEdit', $employer->id)}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <input type="hidden" value="" name="id">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for=""></label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $employer->name }}" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for=""></label>
                            <input type="text" class="form-control" id="incharge" name="incharge" value="{{ $employer->incharge }}" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for=""></label>
                            <input type="text" class="form-control" id="url" name="url" value="{{ $employer->url }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for=""></label>
                            <input type="text" class="form-control" id="industry" name="industry" value="{{ $employer->industry }}" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for=""></label>
                            <input type="text" class="form-control" id="location" name="location" value="{{ $employer->location }}" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for=""></label>
                            <input type="text" class="form-control" id="phone" name="phone" value="{{ $employer->phone }}" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for=""></label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ $employer->email }}" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for=""></label>
                            <input type="text" class="form-control" id="subject" name="subject" value="{{ $employer->subject }}" required>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="">Message</label>
                            <textarea type="text" class="form-control" id="message" name="message" required>{{ $employer->message }}</textarea>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="">Status</label>
                            <select id="status" name="status" class="form-control">
                                <option selected value="{{ $employer->status }}">---- Change Status ----</option>
                                <option value="0">Pending</option>
                                <option value="1">Confirmed</option>
                                <option value="2">Complete</option>
                            </select>
                        </div>
                    </div><br>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form><br>

        <hr><h3>Want To Hire</h3><br>
        <table class="table table-bordered">
            <tr>
                <th><a href="{{route('employeeEdit', $employer->employee)}}">Name: {{$employer->employee->name}}</a></th>
                <th>Nationality: {{$employer->employee->nationality}}</th>
            </tr>
            <tr>
                <th>Industry: {{$employer->employee->industry}}</th>
                <th>Present Address: {{$employer->employee->present_address}}</th>
            </tr>
        </table>
            </div>

@stop
