@extends('layouts.app')

@section('content')

    <style>
        #news {
            background-image: url("images/company-background.jpg");
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        .shade{
            width: 100%;
            height: 100%;
            background: rgba(251, 255, 251, 0.9);
        }
    </style>
    <section class="mt-5 pb-5 container" id="news">
        <div style="padding: 30px;">
            <h2 class="text-center m-auto font-weight-bold col-md-10 p-3 mb-0 topic text-light">@lang('content.company_topic')</h2><br>
            <div class="col-md-10 p-4 m-auto shade">
                <div class="col-lg-12 col-xl-12">
                    <h3 class="mt-0">@lang('content.company_japan')</h3>
                    <hr class="divider" /><br>
                    @lang('content.company_japan_content')

                </div>

                <div class="col-lg-12 col-xl-12">
                    <h3 class="mt-0">@lang('content.company_main')</h3>
                    <hr class="divider" /><br>
                    @lang('content.company_main_content')

                </div>
            </div>
        </div>
    </section>

@endsection
