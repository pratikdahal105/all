<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/all.css') }}" rel="stylesheet" />
    <title>Allrahim</title>

    <!-- Scripts -->


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>

{{--    <script src="{{ asset('js/app.js') }}" defer></script>--}}
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
<style>
    .py-4 {
        background-image: url("images/background.jpg");
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
    }
    .nav-link{
        color: white;
        font-weight: bold;
    }
    .nav-link:hover {
        background-color: #05025e;
        -webkit-transform: scale(1.1);
        color: white;
    }
    .topic{
        width: 100%;
        height: 100%;
        background: rgba(4, 2, 61, 0.8);
    }
</style>
<div id="app">
    <a href="{{ route ('home') }}"><img src="{{ asset('images/logo.svg') }}" class="ml-5" style="margin-top: -60px;" height="300" width="300"></a>
    <span class="text-center m-4 font-weight-bold d-none d-lg-block d-xl-block" style="float: right">
        @lang('content.nav_contact_details')
    </span>
    <nav class="navbar sticky-top navbar-expand-lg static-top p-4" style="background-color: #04023d; margin-top: -60px;">
        <div class="container">
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"><i id="bars_menu" class="text-light fas fa-bars"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route ('home') }}">@lang('content.nav_home')</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route ('about') }}">@lang('content.nav_about_us')</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route ('whyUs') }}">@lang('content.nav_why_us')</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            @lang('content.nav_about')
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
{{--                            <a class="dropdown-item" href="#">@lang('content.nav_recruitment')</a>--}}
{{--                            <div class="dropdown-divider"></div>--}}
                            <a class="dropdown-item" href="{{ route ('specific_skill') }}">@lang('content.nav_specific_skill')</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route ('technology') }}">@lang('content.nav_technology')</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route ('technicalTraining') }}">@lang('content.nav_ginou')</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route ('registrationSupport') }}">@lang('content.nav_toroku')</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            @lang('content.nav_recruitment')
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{route('recruitment',1)}}">@lang('content.nav_recruitment1')</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{route('recruitment',2)}}">@lang('content.nav_recruitment2')</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{route('recruitment',3)}}">@lang('content.nav_recruitment3')</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{route('recruitment',4)}}">@lang('content.nav_recruitment4')</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{route('recruitment',5)}}">@lang('content.nav_recruitment5')</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{route('recruitment',6)}}">@lang('content.nav_recruitment6')</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{route('recruitment',7)}}">@lang('content.nav_recruitment7')</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{route('recruitment',8)}}">@lang('content.nav_recruitment8')</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{route('recruitment',9)}}">@lang('content.nav_recruitment9')</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{route('recruitment',10)}}">@lang('content.nav_recruitment10')</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{route('recruitment',11)}}">@lang('content.nav_recruitment11')</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{route('recruitment',12)}}">@lang('content.nav_recruitment12')</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{route('recruitment',13)}}">@lang('content.nav_recruitment13')</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{route('recruitment',14)}}">@lang('content.nav_recruitment14')</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route ('profile') }}">@lang('content.nav_profile')</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route ('contact') }}">@lang('content.nav_contact')</a>
                    </li>
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="{{ route ('contact') }}">@lang('content.nav_faq')</a>--}}
{{--                    </li>--}}
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="flag-icon flag-icon-{{Config::get('languages')[App::getLocale()]['flag-icon']}}"></span> {{ Config::get('languages')[App::getLocale()]['display'] }}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            @foreach (Config::get('languages') as $lang => $language)
                                @if ($lang != App::getLocale())
                                    <a class="dropdown-item" href="{{ route('lang.switch', $lang) }}"><span class="flag-icon flag-icon-{{$language['flag-icon']}}"></span> {{$language['display']}}</a>
                                @endif
                            @endforeach
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-4" id="#body" style="font-family: 'Noto Sans JP', sans-serif;">
        @yield('content')
    </main>

    <!-- Footer-->
    <footer class="footer" style="background-color: #04023d;" >
        <div class="container">
            <div class="row">
                <div class="col-lg-6 h-100 text-center text-lg-start my-auto">
                    <p class="text-light large mb-4 mb-lg-0">&copy; Allrahim Manpower Pvt. Ltd. All Rights Reserved.</p>
                </div>
                <div class="col-lg-6 h-100 text-center text-lg-end my-auto">
                    <a target="_blank" href="https://www.facebook.com/ALLHRM/"><i class="fab fa-facebook-f text-light m-2 fa-3x"></i></a>
                    <a href="#"><i class="fab fa-twitter text-light m-2 fa-3x"></i></a>
                    <a href="#"><i class="fab fa-youtube text-light m-2 fa-3x"></i></a><br>
                    {{-- <a href="#"><i class="fab fa-viber text-light m-2 fa-3x"></i></a>
                    <a href="#"><i class="fab fa-line text-light m-2 fa-3x"></i></a>
                    <a href="#"><i class="fab fa-skype text-light m-2 fa-3x"></i></a> --}}
                    <a href="http://allrahimmanpower.com/" class="btn btn-light font-weight-bold" target="_blank">@lang('content.footer_link')</a>
                    <div class="row mt-3">
                        <figure class="figure col-6">
                            <img src="{{ asset('images/line.jpg') }}" width="100" height="100" class="figure-img img-fluid rounded">
                            <figcaption class="figure-caption text-center"><a href="#"><i class="fab fa-line text-light m-2 fa-3x"></i></a></figcaption>
                          </figure>
                          <figure class="figure col-6">
                            <img src="{{ asset('images/viber.jpg') }}" width="100" height="100" class="figure-img img-fluid rounded">
                            <figcaption class="figure-caption text-center"><a href="#"><i class="fab fa-viber text-light m-2 fa-3x"></i></a></figcaption>
                          </figure>
                    </div>  
                </div>
            </div>
        </div>
    </footer>
</div>
</body>
</html>
