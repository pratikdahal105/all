@extends('layouts.app')

@section('content')

{{--    <section class="text-justify mt-4 container">--}}
{{--        <h2 class="text-center mt-0">@lang('content.about_title')</h2>--}}
{{--        <hr class="divider" /><br>--}}
{{--        <p>@lang('content.about_content')</p><br>--}}
{{--        <p class="text-center">@lang('content.about_image_heading')</p><br>--}}
{{--        <img class="mx-auto d-block img-fluid" src="{{ asset('images/about.png') }}" alt="">--}}
{{--    </section>--}}
    <style>
        #news {
            background-image: url("images/about-background.jpg");
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
            <h2 class="text-center m-auto font-weight-bold col-md-10 p-3 mb-0 topic text-light">@lang('content.about_title')</h2><br>
            <div class="col-md-10 p-4 m-auto shade" >
                <p>@lang('content.about_content')</p><br>
                <p class="text-center">@lang('content.about_image_heading')</p><br>
                <img class="mx-auto d-block img-fluid" src="{{ asset('images/about.png') }}" alt=""><br><br>
                <p>@lang('content.about_image_footer')</p><br>
            </div>
        </div>
    </section>
@endsection
