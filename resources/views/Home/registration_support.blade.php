@extends('layouts.app')

@section('content')

<!-- {{--    <section class="text-justify mt-4 container">--}}
{{--        <h2 class="text-center mt-0">@lang('content.registration_topic')</h2>--}}
{{--        <hr class="divider" /><br>--}}
{{--        <p>@lang('content.registration_content_before')</p><br>--}}
{{--        <img class="mx-auto d-block img-fluid" src="{{ asset('images/registration.png') }}" alt=""><br>--}}
{{--        <p>@lang('content.registration_content_after')</p><br>--}}
{{--        <h3 class="text-center mt-0">@lang('content.registration_difference')</h3><br>--}}
{{--        <p>@lang('content.registration_table_header')</p><br>--}}
{{--        <p>@lang('content.registration_table')</p><br>--}}
{{--        <p>@lang('content.registration_table_footer')</p><br>--}}
{{--    </section>--}} -->

    <style>
        #news {
            background-image: url("images/registration-background.jpg");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
        }
        .shade{
            width: 100%;
            height: 100%;
            background: rgba(251, 255, 251, 0.9);
        }
    </style>
    <section class="text-justify mt-5 pb-5 container" id="news">
        <div style="padding: 30px;">
            <h2 class="text-center m-auto font-weight-bold col-md-10 p-3 mb-0 topic text-light">@lang('content.registration_topic')</h2><br>
            <div class="col-md-10 p-4 m-auto shade">
                <p>@lang('content.registration_content_before')</p><br>
                <img class="mx-auto d-block img-fluid" src="{{ asset('images/registration.png') }}" alt=""><br>
                <p>@lang('content.registration_content_after')</p><br>
                <!-- <h3 class="text-center mt-0">@lang('content.registration_difference')</h3><br>
                <p>@lang('content.registration_table_header')</p><br>
                <p>@lang('content.registration_table')</p><br>
                <p>@lang('content.registration_table_footer')</p><br> -->
                <div class="col-md-12 p-4 m-auto">
                    <h5 class="text-center">@lang('content.registration_video')</h5>
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/EDkT7ioeibA">
                    </iframe>
                </div>
            </div>
        </div>
    </section>
@endsection
