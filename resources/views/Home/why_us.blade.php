@extends('layouts.app')

@section('content')

    <style>
        #news {
            background-image: url("images/about-background.jpg");
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        .shade{
            width: 100%;
            height: 100%;
            background: rgba(251, 255, 251, 0.9);
        }
    </style>
    <section class="text-justify mt-5 pb-5 container" id="news">
        <div style="padding: 30px;">
            <h2 class="text-center m-auto font-weight-bold col-md-10 p-3 mb-0 topic text-light">@lang('content.why_us_title')</h2><br>
            <div class="col-md-10 p-4 m-auto shade">
                <h4 class="text-center">@lang('content.why_us_why_allrahim')</h4><br>
                <p>@lang('content.why_us_why_allrahim_content')</p><br>

                <h4 class="text-center">@lang('content.why_us_why_nepal')</h4><br>
                <p>@lang('content.why_us_why_nepal_content')</p><br>

                <!-- {{--    <h4 class="text-center">@lang('content.why_us_why_japan')</h4>--}}
                {{--      <p>@lang('content.why_us_why_japan_content')</p>--}} -->
                <img class="mx-auto d-block img-fluid" src="{{ asset('images/why_us.jpg') }}" alt=""><br><br>
                <!-- <h4 class="text-center">@lang('content.why_us_nepalese_character')</h4><br>
                <p>@lang('content.why_us_nepalese_character_content')</p><br> -->
            </div>
        </div>
    </section>

@endsection
