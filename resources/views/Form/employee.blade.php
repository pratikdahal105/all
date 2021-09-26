@extends('layouts.app')

@section('content')

    <section id="about">
        <div class="container">
            <div class="about-info">
                <h2><small>{{ __('content.employee_application_contact') }}</small></h2>
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
                <form action="{{route('employeeForm')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <input type="hidden" value="{{ $id }}" name="id">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}" placeholder="{{ __('content.employer_application_name') }}" required>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" id="incharge" name="incharge" value="{{old('incharge')}}" placeholder="{{ __('content.employer_application_incharge') }}" required>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" id="url" name="url" value="{{old('url')}}" placeholder="{{ __('content.employer_application_url') }}">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" id="industry" name="industry" value="{{old('industry')}}" placeholder="{{ __('content.employer_application_industry') }}" required>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" id="location" name="location" value="{{old('location')}}" placeholder="{{ __('content.employer_application_location') }}" required>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" id="phone" name="phone" value="{{old('phone')}}" placeholder="{{ __('content.employer_application_phone') }}" required>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}" placeholder="{{ __('content.employer_application_email') }}" required>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" id="subject" name="subject" value="{{old('subject')}}" placeholder="{{ __('content.employer_application_subject') }}" required>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="">{{ __('content.employer_application_message') }}</label>
                            <textarea type="text" class="form-control" id="message" name="message" required>{{ old('message') }}</textarea>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required>
                            <label class="form-check-label" for="flexCheckDefault">
                                {{ __('content.privacy_policy_notice') }}<a href="{{ route('privacy_policy') }}" class="font-weight-bold">{{ __('content.privacy_policy_link') }}</a>
                            </label>
                          </div>
                    </div><br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </section>

@endsection
