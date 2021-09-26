@extends('layouts.app')

@section('content')

    <section class="text-justify mt-5 pb-5 container" style="background-color: white">
        <div class="m-auto" style="padding: 30px;">
            <h2 class="text-center m-auto font-weight-bold col-md-10 p-3 mb-0 topic text-light">@lang('content.privacy_policy_topic')</h2>
            <hr><br>
            <p class="text-align-justify">@lang('content.privacy_policy_content')</p><br>
            <span class="float-md-right">
                @lang('content.privacy_policy_footer')
            </span>
        </div>
    </section>

@endsection
