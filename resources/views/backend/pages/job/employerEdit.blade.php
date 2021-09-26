@extends('backend.master.master')

@section('content')

    <section id="about">
        <div class="container">
            <div class="about-info">
                <h2>Employer Form</h2>
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
                <form action="{{route('updateEmployer')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <h2><small>Basic Information</small></h2>
                    <div class="form-row">
                        <input type="hidden" class="form-control" id="id" name="id" value="{{$employer->id}}">
                        <div class="form-group col-md-4">
                            <label for="">Job Title</label>
                            <input type="text" class="form-control" id="job_title" name="job_title" value="{{$employer->job_title}}" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Job Description</label>
                            <input type="text" class="form-control" id="job_description" name="job_description" value="{{$employer->job_description}}" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Working Hours</label>
                            <input type="text" class="form-control" id="working_hours" name="working_hours" value="{{$employer->working_hours}}" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Working Days</label>
                            <input type="text" class="form-control" id="working_days" name="working_days" value="{{$employer->working_days}}" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Break Time</label>
                            <input type="text" class="form-control" id="break_time" name="break_time" value="{{$employer->break_time}}" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Overtime Monthly Average</label>
                            <input type="text" class="form-control" id="overtime_average_monthly" name="overtime_average_monthly" value="{{$employer->overtime_average_monthly}}" required>
                        </div>
                    </div>
                    <h2><small>Company Information</small></h2>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="">Company Name</label>
                            <input type="text" class="form-control" id="company_name" name="company_name" value="{{$employer->company_name}}" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Industry</label>
                            <input type="text" class="form-control" id="industry" name="industry" value="{{$employer->industry}}" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Business Content</label>
                            <input type="text" class="form-control" id="business_content" name="business_content" value="{{$employer->business_content}}" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Company Address</label>
                            <input type="text" class="form-control" id="company_address" name="company_address" value="{{$employer->company_address}}" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Total Workers</label>
                            <input type="text" class="form-control" id="total_workers" name="total_workers" value="{{$employer->total_workers}}" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Contact</label>
                            <input type="text" class="form-control" id="contact" name="contact" value="{{$employer->contact}}" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Fax</label>
                            <input type="text" class="form-control" id="fax" name="fax" value="{{$employer->fax}}">
                        </div>
                    </div>

                    <h2><small>Payment Information</small></h2>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="">Salary</label>
                            <input type="text" class="form-control" id="salary" name="salary" value="{{$employer->salary}}">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Salary Increase</label>
                            <input type="text" class="form-control" id="salary_increase" name="salary_increase" value="{{$employer->salary_increase}}">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Salary Day</label>
                            <input type="date" class="form-control" id="salary_day" name="salary_day" value="{{$employer->salary_day}}">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Company Room</label>
                            <input type="date" class="form-control" id="company_room" name="company_room" value="{{$employer->company_room}}">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Travel Expenses</label>
                            <input type="date" class="form-control" id="travel_expenses" name="travel_expenses" value="{{$employer->travel_expenses}}">
                        </div>
                    </div>

                    <h2><small>Social Insurances</small></h2>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="">Health Insurance</label>
                            <input type="text" class="form-control" id="health_insurance" name="health_insurance" value="{{$employer->health_insurance}}">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Pension</label>
                            <input type="text" class="form-control" id="pension" name="pension" value="{{$employer->pension}}">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Work Insurance</label>
                            <input type="text" class="form-control" id="work_insurance" name="work_insurance" value="{{$employer->work_insurance}}">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Income Tax</label>
                            <input type="text" class="form-control" id="income_tax" name="income_tax" value="{{$employer->income_tax}}">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">City Tax</label>
                            <input type="text" class="form-control" id="city_tax" name="city_tax" value="{{$employer->city_tax}}">
                        </div>
                    </div>

                    <h2><small>Other Expenses</small></h2>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="">Room Rent</label>
                            <input type="text" class="form-control" id="room_rent" name="room_rent" value="{{$employer->room_rent}}">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Internet</label>
                            <input type="text" class="form-control" id="internet" name="internet" value="{{$employer->internet}}">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Uniform</label>
                            <input type="text" class="form-control" id="uniform" name="uniform" value="{{$employer->uniform}}">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Transportation</label>
                            <input type="text" class="form-control" id="transportation" name="transportation" value="{{$employer->transportation}}">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Other</label>
                            <input type="text" class="form-control" id="other" name="other" value="{{$employer->other}}">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="">Status</label>
                            <select id="status" name="status" class="form-control">
                                <option selected value="{{ $employer->status }}">---- Change Status ----</option>
                                <option value="1">Active</option>
                                <option value="0">Complete</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
                <a href="{{route('deleteEmployer', $employer->id)}}" class="btn btn-danger mb-2" style="float: right" type="submit" onclick="confirm('Are you sure you want to delete this item?')">Delete</a>
            </div>
        </div>
    </section>


@stop
