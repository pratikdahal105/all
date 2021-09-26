@extends('layouts.app')

@section('content')

    <style>
        #news {
            background-image: url("images/tech-background.jpg");
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
            <h2 class="text-center m-auto font-weight-bold col-md-10 p-3 mb-0 topic text-light">@lang('content.nav_technology')</h2><br>
            <div class="col-md-10 p-4 m-auto shade">
                <p>@lang('content.tech_content')</p><br>
            </div>
        </div>
    </section>

@endsection
