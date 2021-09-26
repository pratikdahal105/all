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
                <form action="{{route('newEmployee')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <h2><small>Basic Information</small></h2>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">DOB</label>
                            <input type="date" class="form-control" id="dob" name="dob" value="{{old('dob')}}">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Age</label>
                            <input type="number" class="form-control" id="age" name="age" value="{{old('age')}}" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Sex</label>
                            <select id="sex" name="sex" class="form-control" required>
                                @if(old('sex'))
                                    <option selected>{{old('sex')}}</option>
                                @else
                                    <option disabled selected>-- Select Sex --</option>
                                @endif
                                <option>Male</option>
                                <option>Female</option>
                                <option>Other</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Nationality</label>
                            <input type="text" class="form-control" id="nationality" name="nationality" value="{{old('nationality')}}" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Present Address</label>
                            <input type="text" class="form-control" id="present_address" name="present_address" value="{{old('present_address')}}" required>
                        </div>
                    </div>
                    <h2><small>Credentials</small></h2>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="">Academic Qualification</label>
                            <input type="text" class="form-control" id="academic_qualification" name="academic_qualification" value="{{old('academic_qualification')}}" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Japanese Language</label>
                            <input type="text" class="form-control" id="japanese_language" name="japanese_language" value="{{old('japanese_language')}}" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Other Languages</label>
                            <input type="text" class="form-control" id="other_language" name="other_language" value="{{old('other_language')}}">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Industry</label>
                            <input type="text" class="form-control" id="industry" name="industry" value="{{old('industry')}}">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Skill Exam</label>
                            <input type="text" class="form-control" id="skill_exam" name="skill_exam" value="{{old('skill_exam')}}">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Work Experience</label>
                            <input type="text" class="form-control" id="work_experience" name="work_experience" value="{{old('work_experience')}}">
                        </div>
                    </div>

                    <h2><small>Computer Skills</small></h2>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="">MS. Office</label>
                            <input type="range" class="form-control" id="ms_office_skill" name="ms_office_skill" value="{{old('ms_office_skill')}}" min="0" max="10">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Graphics Design and Other Computing Skills</label>
                            <input type="range" class="form-control" id="graphics_design_other" name="graphics_design_other" value="{{old('graphics_design_other')}}" min="0" max="10">
                        </div>
                    </div>

                    <h2><small>Desire and Condition</small></h2>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="">Salary Per Year</label>
                            <input type="text" class="form-control" id="salary_per_year" name="salary_per_year" value="{{old('salary_per_year')}}">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Working Area</label>
                            <input type="text" class="form-control" id="working_area" name="working_area" value="{{old('working_area')}}">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Company's Room</label>
                            <input type="text" class="form-control" id="apartment" name="apartment" value="{{old('apartment')}}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Work Time</label>
                            <input type="text" class="form-control" id="work_time" name="work_time" value="{{old('work_time')}}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Possible Shifts</label>
                            <select class="form-control" id="possible_shift" name="possible_shift">
                                @if(old('possible_shift'))
                                    <option selected>{{ old('possible_shift') }}</option>
                                @else
                                    <option selected disabled>-- Select Possible Shift --</option>
                                @endif
                                <option>Day</option>
                                <option>Night</option>
                                <option>Any</option>
                            </select>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="">Able to Work From</label>
                            <input type="date" class="form-control" id="able_to_join" name="able_to_join" value="{{old('able_to_join')}}" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </section>

@stop
