@extends('backend.master.master')

@section('content')

    <section id="about">
        <div class="container">
            <div class="about-info">
                <h2>Employee Form</h2>
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
                <form action="{{route('updateEmployee')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <input type="hidden" name="id" value="{{ $employee->id }}">
                    <h2><small>Basic Information</small></h2>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{$employee->name}}" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">DOB</label>
                            <input type="date" class="form-control" id="dob" name="dob" value="{{$employee->dob}}">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Age</label>
                            <input type="number" class="form-control" id="age" name="age" value="{{$employee->age}}" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Sex</label>
                            <select id="sex" name="sex" class="form-control">
                                <option selected>{{$employee->sex}}</option>
                                <option>Male</option>
                                <option>Female</option>
                                <option>Other</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Nationality</label>
                            <input type="text" class="form-control" id="nationality" name="nationality" value="{{$employee->nationality}}" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Present Address</label>
                            <input type="text" class="form-control" id="present_address" name="present_address" value="{{$employee->present_address}}" required>
                        </div>
                    </div>
                    <h2><small>Credentials</small></h2>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="">Academic Qualification</label>
                            <input type="text" class="form-control" id="academic_qualification" name="academic_qualification" value="{{$employee->academic_qualification}}" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Japanese Language</label>
                            <input type="text" class="form-control" id="japanese_language" name="japanese_language" value="{{$employee->japanese_language}}" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Other Languages</label>
                            <input type="text" class="form-control" id="other_language" name="other_language" value="{{$employee->other_language}}">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Industry</label>
                            <input type="text" class="form-control" id="industry" name="industry" value="{{$employee->industry}}">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Skill Exam</label>
                            <input type="text" class="form-control" id="skill_exam" name="skill_exam" value="{{$employee->skill_exam}}">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Work Experience</label>
                            <input type="text" class="form-control" id="work_experience" name="work_experience" value="{{$employee->work_experience}}">
                        </div>
                    </div>

                    <h2><small>Computer Skills</small></h2>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="">MS. Office</label>
                            <input type="range" class="form-control" id="ms_office_skill" name="ms_office_skill" value="{{$employee->ms_office_skill}}" min="0" max="10">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Graphics Design and Other Computing Skills</label>
                            <input type="range" class="form-control" id="graphics_design_other" name="graphics_design_other" value="{{$employee->graphics_design_other}}" min="0" max="10">
                        </div>
                    </div>

                    <h2><small>Desire and Condition</small></h2>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="">Salary Per Year</label>
                            <input type="text" class="form-control" id="salary_per_year" name="salary_per_year" value="{{$employee->salary_per_year}}">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Working Area</label>
                            <input type="text" class="form-control" id="working_area" name="working_area" value="{{$employee->working_area}}">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Company's Room</label>
                            <input type="text" class="form-control" id="apartment" name="apartment" value="{{$employee->apartment}}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Work Time</label>
                            <input type="text" class="form-control" id="work_time" name="work_time" value="{{$employee->work_time}}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Possible Shifts</label>
                            <select class="form-control" id="possible_shift" name="possible_shift">
                                <option selected>{{ $employee->possible_shift }}</option>
                                <option>Day</option>
                                <option>Night</option>
                                <option>Any</option>
                            </select>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="">Able to Work From</label>
                            <input type="date" class="form-control" id="able_to_join" name="able_to_join" value="{{$employee->able_to_join}}" required>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="">Status</label>
                            <select id="status" name="status" class="form-control">
                                    <option selected value="{{ $employee->status }}">---- Change Status ----</option>
                                    <option value="1">Active</option>
                                    <option value="0">Complete</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                <a href="{{route('deleteEmployee', $employee->id)}}" class="btn btn-danger mb-2" style="float: right" type="submit" onclick="confirm('Are you sure you want to delete this item?')">Delete</a>
            </div>
        </div>
    </section>

@stop
