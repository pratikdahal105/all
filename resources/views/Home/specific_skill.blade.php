@extends('layouts.app')

@section('content')

<!-- {{--    <section class="text-justify mt-4 container">--}}
{{--        <h2 class="text-center mt-0">@lang('content.specific_title')</h2>--}}
{{--        <hr class="divider" /><br>--}}
{{--        <p>@lang('content.specific_content')</p><br>--}}
{{--        <p>@lang('content.specific_table')</p><br>--}}
{{--        <p>@lang('content.specific_table_caption')</p><br>--}}

{{--        <h3 class="text-center mt-0">@lang('content.specific_type')</h3><br>--}}
{{--        <p>@lang('content.specific_type_content')</p><br>--}}

{{--        <h3 class="text-center mt-0">@lang('content.specific_specific_skill1')</h3><br>--}}
{{--        <p>@lang('content.specific_specific_skill1_content')</p><br>--}}

{{--        <h3 class="text-center mt-0">@lang('content.specific_specific_skill12')</h3><br>--}}
{{--        <p>@lang('content.specific_specific_skill1_content2')</p><br>--}}

{{--        <h3 class="text-center mt-0">@lang('content.specific_technician')</h3><br>--}}
{{--        <p>@lang('content.specific_japan')</p>--}}
{{--        <hr class="divider" /><br>--}}
{{--        <p>@lang('content.specific_japan_content')</p><br>--}}

{{--        <p>@lang('content.specific_nepal')</p>--}}
{{--        <hr class="divider" /><br>--}}
{{--        <p>@lang('content.specific_nepal_content')</p><br>--}}

{{--    </section>--}} -->
    <style>
        #news {
            background-image: url("images/specific-background.jpg");
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
    <section  class="text-justify mt-5 pb-5 container" id="news">
        <div style="padding: 30px;">
            <h2 class="text-center m-auto font-weight-bold col-md-10 p-3 mb-0 topic text-light">@lang('content.specific_title')</h2><br>
            <div class="col-md-10 p-4 m-auto shade">
                <div class="col-lg-12 col-xl-12 text-jusify">
                    <p>@lang('content.specific_content')</p><br>
                    @lang('content.specific_table')
                    <p>@lang('content.specific_table_caption')</p><br>

                    <h3 class="text-center mt-0">@lang('content.specific_type')</h3><br>
                    <p>@lang('content.specific_type_content')</p><br>

                    <h3 class="text-center mt-0">@lang('content.specific_specific_skill1')</h3><br>
                    <p>@lang('content.specific_specific_skill1_content')</p><br>

                    <h3 class="text-center mt-0">@lang('content.specific_specific_skill12')</h3><br>
                    <p>@lang('content.specific_specific_skill1_content2')</p><br>

                    <h3 class="text-center mt-0">@lang('content.specific_technician')</h3><br>
                    <p>@lang('content.specific_japan')</p>
                    <hr class="divider" /><br>
                    <p>@lang('content.specific_japan_content')</p><br>

                    <p>@lang('content.specific_nepal')</p>
                    <hr class="divider" /><br>
                    <p>@lang('content.specific_nepal_content')</p><br>
                </div>
            </div>
        </div>
    </section>
@endsection
