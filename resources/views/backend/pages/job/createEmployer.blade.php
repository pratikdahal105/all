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
                <form action="{{route('newEmployer')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <h2><small>Basic Information</small></h2>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="">Job Title</label>
                            <input type="text" class="form-control" id="job_title" name="job_title" value="{{old('job_title')}}" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Job Description</label>
                            <input type="text" class="form-control" id="job_description" name="job_description" value="{{old('job_description')}}" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Working Hours</label>
                            <input type="text" class="form-control" id="working_hours" name="working_hours" value="{{old('working_hours')}}" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Working Days</label>
                            <input type="text" class="form-control" id="working_days" name="working_days" value="{{old('working_days')}}" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Break Time</label>
                            <input type="text" class="form-control" id="break_time" name="break_time" value="{{old('break_time')}}" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Overtime Monthly Average</label>
                            <input type="text" class="form-control" id="overtime_average_monthly" name="overtime_average_monthly" value="{{old('overtime_average_monthly')}}" required>
                        </div>
                    </div>
                    <h2><small>Company Information</small></h2>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="">Company Name</label>
                            <input type="text" class="form-control" id="company_name" name="company_name" value="{{old('company_name')}}" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Industry</label>
                            <input type="text" class="form-control" id="industry" name="industry" value="{{old('industry')}}" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Business Content</label>
                            <input type="text" class="form-control" id="business_content" name="business_content" value="{{old('business_content')}}" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Company Address</label>
                            <input type="text" class="form-control" id="company_address" name="company_address" value="{{old('company_address')}}" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Total Workers</label>
                            <input type="text" class="form-control" id="total_workers" name="total_workers" value="{{old('total_workers')}}" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Contact</label>
                            <input type="text" class="form-control" id="contact" name="contact" value="{{old('contact')}}" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Fax</label>
                            <input type="text" class="form-control" id="fax" name="fax" value="{{old('fax')}}">
                        </div>
                    </div>

                    <h2><small>Payment Information</small></h2>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="">Salary</label>
                            <input type="text" class="form-control" id="salary" name="salary" value="{{old('salary')}}">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Salary Increase</label>
                            <input type="text" class="form-control" id="salary_increase" name="salary_increase" value="{{old('salary_increase')}}">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Salary Day</label>
                            <input type="date" class="form-control" id="salary_day" name="salary_day" value="{{old('salary_day')}}">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Company Room</label>
                            <input type="date" class="form-control" id="company_room" name="company_room" value="{{old('company_room')}}">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Travel Expenses</label>
                            <input type="date" class="form-control" id="travel_expenses" name="travel_expenses" value="{{old('travel_expenses')}}">
                        </div>
                    </div>

                    <h2><small>Social Insurances</small></h2>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="">Health Insurance</label>
                            <input type="text" class="form-control" id="health_insurance" name="health_insurance" value="{{old('health_insurance')}}">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Pension</label>
                            <input type="text" class="form-control" id="pension" name="pension" value="{{old('pension')}}">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Work Insurance</label>
                            <input type="text" class="form-control" id="work_insurance" name="work_insurance" value="{{old('work_insurance')}}">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Income Tax</label>
                            <input type="text" class="form-control" id="income_tax" name="income_tax" value="{{old('income_tax')}}">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">City Tax</label>
                            <input type="text" class="form-control" id="city_tax" name="city_tax" value="{{old('city_tax')}}">
                        </div>
                    </div>

                    <h2><small>Other Expenses</small></h2>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="">Room Rent</label>
                            <input type="text" class="form-control" id="room_rent" name="room_rent" value="{{old('room_rent')}}">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Internet</label>
                            <input type="text" class="form-control" id="internet" name="internet" value="{{old('internet')}}">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Uniform</label>
                            <input type="text" class="form-control" id="uniform" name="uniform" value="{{old('uniform')}}">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Transportation</label>
                            <input type="text" class="form-control" id="transportation" name="transportation" value="{{old('transportation')}}">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Other</label>
                            <input type="text" class="form-control" id="other" name="other" value="{{old('other')}}">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </section>


@stop
