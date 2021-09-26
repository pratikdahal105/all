@extends('layouts.app')

@section('content')

    <section id="about">
        <div class="container">
            <div class="about-info">
                <h1>@lang('content.employee_detail_topic')</h1>
                <hr>
                <h2><small>@lang('content.emploee_detail_c4')</small></h2>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        @lang('content.emploee_detail_c7'): {{$employee->dob}}
                    </div>
                    <div class="form-group col-md-4">
                        @lang('content.emploee_detail_c8'): {{$employee->age}}
                    </div>
                    <div class="form-group col-md-4">
                        @lang('content.emploee_detail_c9'): {{$employee->sex}}
                    </div>
                    <div class="form-group col-md-4">
                        @lang('content.emploee_detail_c10'): {{$employee->nationality}}
                    </div>
                </div>
                <h2><small>@lang('content.emploee_detail_e4')</small></h2>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        @lang('content.emploee_detail_e5'): {{$employee->academic_qualification}}
                    </div>
                    <div class="form-group col-md-4">
                        @lang('content.emploee_detail_e6'): {{$employee->japanese_language}}
                    </div>
                    <div class="form-group col-md-4">
                        @lang('content.emploee_detail_e7'): {{$employee->other_language}}
                    </div>
                    <div class="form-group col-md-4">
                        @lang('content.emploee_detail_e8'): {{$employee->skill_exam}}
                    </div>
                    <div class="form-group col-md-4">
                        @lang('content.emploee_detail_e9'): {{$employee->work_experience}}
                    </div>
                </div>

                <h2><small>@lang('content.emploee_detail_g4')</small></h2>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="">@lang('content.emploee_detail_g5')</label><br>
                        <input type="range" value="{{ $employee->ms_office_skill }}" min="0" max="10">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">@lang('content.emploee_detail_g6')</label><br>
                        <input type="range" value="{{ $employee->graphics_design_other }}"  min="0" max="10">
                    </div>
                </div>

                <h2><small>@lang('content.emploee_detail_i4')</small></h2>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        @lang('content.emploee_detail_i5'): {{$employee->salary_per_year}}
                    </div>
                    <div class="form-group col-md-4">
                        @lang('content.emploee_detail_i6'): {{$employee->working_area}}
                    </div>
                    <div class="form-group col-md-4">
                        @lang('content.emploee_detail_i7'): {{$employee->apartment}}
                    </div>
                    <div class="form-group col-md-4">
                        @lang('content.emploee_detail_i8'): {{$employee->work_time}}
                    </div>
                    <div class="form-group col-md-4">
                        @lang('content.emploee_detail_i9'): {{$employee->possible_shift}}
                    </div>
                    <div class="form-group col-md-4">
                        @lang('content.emploee_detail_i10'): {{$employee->able_to_join}}
                    </div>
                </div>

                <a href="{{ route ('employee', $employee->id) }}"><button class="btn btn-primary">@lang('content.employee_apply')</button></a>
            </div>
        </div>
    </section>

@endsection
