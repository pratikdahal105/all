@extends('layouts.app')

@section('content')
    <section id="about">
        <div class="container">
            <div class="about-info">
                <h1>@lang('content.employer_detail_topic')</h1>
                <hr>
                <h2><small>@lang('content.employer_detail_b21')</small></h2>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        @lang('content.employer_detail_b23'): {{$employer->job_title}}
                    </div>
                    <div class="form-group col-md-4">
                        @lang('content.employer_detail_b24'): {{$employer->job_description}}
                    </div>
                    <div class="form-group col-md-4">
                        @lang('content.employer_detail_b25'): {{$employer->working_hours}}
                    </div>
                    <div class="form-group col-md-4">
                        @lang('content.employer_detail_b26'): {{$employer->working_days}}
                    </div>
                    <div class="form-group col-md-4">
                        @lang('content.employer_detail_b27'): {{$employer->break_time}}
                    </div>
                    <div class="form-group col-md-4">
                        @lang('content.employer_detail_b28'): {{$employer->overtime_average_monthly}}
                    </div>
                </div>
                <h2><small>@lang('content.employer_detail_e21')</small></h2>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        @lang('content.employer_detail_e23'): {{$employer->business_content}}
                    </div>
                    <div class="form-group col-md-4">
                        @lang('content.employer_detail_e25'): {{$employer->total_workers}}
                    </div>
                </div>

                <h2><small>@lang('content.employer_detail_g21')</small></h2>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        @lang('content.employer_detail_g22'): {{$employer->salary}}
                    </div>
                    <div class="form-group col-md-4">
                        @lang('content.employer_detail_g23'): {{$employer->bonous}}
                    </div>
                    <div class="form-group col-md-4">
                        @lang('content.employer_detail_g24'): {{$employer->salary_increase}}
                    </div>
                    <div class="form-group col-md-4">
                        @lang('content.employer_detail_g25'): {{date('d-m', strtotime($employer->salary_day))}}
                    </div>
                    <div class="form-group col-md-4">
                        @lang('content.employer_detail_g26'): {{$employer->company_room}}
                    </div>
                    <div class="form-group col-md-4">
                        @lang('content.employer_detail_g28'): {{$employer->travel_expenses}}
                    </div>
                </div>

                <h2><small>@lang('content.employer_detail_i21')</small></h2>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        @lang('content.employer_detail_i22'): {{$employer->health_insurance}}
                    </div>
                    <div class="form-group col-md-4">
                        @lang('content.employer_detail_i23'): {{$employer->pension}}
                    </div>
                    <div class="form-group col-md-4">
                        @lang('content.employer_detail_i24'): {{$employer->work_insurance}}
                    </div>
                    <div class="form-group col-md-4">
                        @lang('content.employer_detail_i25'): {{$employer->income_tax}}
                    </div>
                    <div class="form-group col-md-4">
                        @lang('content.employer_detail_i26'): {{$employer->city_tax}}
                    </div>
                </div>

                <h2><small>@lang('content.employer_detail_k21')</small></h2>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        @lang('content.employer_detail_k22'): {{$employer->room_rent}}
                    </div>
                    <div class="form-group col-md-4">
                        @lang('content.employer_detail_k23'): {{$employer->internet}}
                    </div>
                    <div class="form-group col-md-4">
                        @lang('content.employer_detail_k24'): {{$employer->uniform}}
                    </div>
                    <div class="form-group col-md-4">
                        @lang('content.employer_detail_k25'): {{$employer->transportation}}
                    </div>
                    <div class="form-group col-md-4">
                        @lang('content.employer_detail_k26'): {{$employer->others}}
                    </div>
                </div>

                <a href="{{ route ('employer', $employer->id) }}"><button class="btn btn-primary">@lang('content.employer_apply')</button></a>
            </div>
        </div>
    </section>
@endsection
