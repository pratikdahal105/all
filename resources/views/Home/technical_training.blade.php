@extends('layouts.app')

@section('content')

    <style>
        #news {
            background-image: url("images/technical-background.jpg");
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
            <h2 class="text-center m-auto font-weight-bold col-md-10 p-3 mb-0 topic text-light">@lang('content.technical_topic')</h2><br>
            <div class="col-md-10 p-4 m-auto shade">
                <p>@lang('content.technical_content')</p><br>
                <h3 class="text-center mt-0">@lang('content.technical_status_of_residence')</h3><br>
                <p>@lang('content.technical_residence_content')</p><br>
                <h3 class="text-center mt-0">@lang('content.technical_joining_procedure')</h3><br>
                <img class="mx-auto d-block img-fluid" src="{{ asset('images/technical0.png') }}" alt=""><br>
                <h4 class="mt-0">@lang('content.technical_follow')</h4><br>
                <h4 class="mt-0">@lang('content.technical_japanese_side')</h4>
                <hr class="divider" /><br>
                <p>@lang('content.technical_japanese_list')</p><br>
                <h4 class="mt-0">@lang('content.technical_nepalese_side')</h4>
                <hr class="divider" /><br>
                <p>@lang('content.technical_nepalese_list')</p><br>
                <h3 class="text-center mt-0">@lang('content.technical_select_trainees')</h3><br>
                <img class="mx-auto d-block img-fluid" src="{{ asset('images/technical1.png') }}" alt=""><br>
                <p>@lang('content.technical_trainees_content')</p><br>
                <h3 class="text-center mt-0">@lang('content.technical_image')</h3><br>
                <img class="mx-auto d-block img-fluid" src="{{ asset('images/technical2.png') }}" alt=""><br><br>
                <h3 class="text-center mt-0">@lang('content.why_us_feature')</h3><br>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 mb-2 card">
                            <div class="">
                                <img
                                    src="{{asset('images/why_us/why_us1.png')}}"
                                    class="card-img-top p-4"
                                    width="120" height="260"
                                    alt="..."
                                />
                                <div class="card-body">
                                    <p class="card-text">
                                        @lang('content.why_us_feature1')
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-2 card">
                            <div class="">
                                <img
                                    src="{{asset('images/why_us/why_us2.png')}}"
                                    class="card-img-top p-4"
                                    width="120" height="260"
                                    alt="..."
                                />
                                <div class="card-body">
                                    <p class="card-text">
                                        @lang('content.why_us_feature2')
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-2 card">
                            <div class="">
                                <img
                                    src="{{asset('images/why_us/why_us3.png')}}"
                                    class="card-img-top p-4"
                                    width="120" height="260"
                                    alt="..."
                                />
                                <div class="card-body">
                                    <p class="card-text">
                                        @lang('content.why_us_feature3')
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-2 card">
                            <div class="">
                                <img
                                    src="{{asset('images/why_us/why_us4.png')}}"
                                    class="card-img-top p-4"
                                    width="120" height="260"
                                    alt="..."
                                />
                                <div class="card-body">
                                    <p class="card-text">
                                        @lang('content.why_us_feature4')
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-2 card">
                            <div class="">
                                <img
                                    src="{{asset('images/why_us/why_us5.png')}}"
                                    class="card-img-top p-4"
                                    width="120" height="260"
                                    alt="..."
                                />
                                <div class="card-body">
                                    <p class="card-text">
                                        @lang('content.why_us_feature5')
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-2 card">
                            <div class="">
                                <img
                                    src="{{asset('images/why_us/why_us6.png')}}"
                                    class="card-img-top p-4"
                                    width="120" height="260"
                                    alt="..."
                                />
                                <div class="card-body">
                                    <p class="card-text">
                                        @lang('content.why_us_feature6')
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 p-4 m-auto">
                    <h5 class="text-center">@lang('content.technical_video')</h5>
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/TYOZOxrF2KE">
                    </iframe>
                </div>
            </div>
        </div>
    </section>

@endsection
