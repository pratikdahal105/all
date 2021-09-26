@extends('layouts.app')

@section('content')

    <section class="text-justify mt-5 pb-5 container" style="background-color: white">
        <div class="m-auto" style="padding: 30px;">
            <h2 class="text-center m-auto font-weight-bold col-md-10 p-3 mb-0 topic text-light">{{ __('content.nav_recruitment'.$no) }}</h2><br>
            @if(Config::get('app.locale') == 'en')
                <div class="col-lg-6 m-auto p-4 d-flex justify-content-center">
                    <img src="{{asset('images/recruitment/en/'. $no . '.jpg')}}" alt="">
                </div>
            @else
                <div class="col-lg-6 m-auto p-4 d-flex justify-content-center">
                    <img src="{{asset('images/recruitment/jp/'. $no . '.jpg')}}" alt="">
                </div>
            @endif
        </div>
    </section>

@endsection
