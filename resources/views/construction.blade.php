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
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

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
<div id="app">

    <section class="features-icons text-center">
        <h2 class="text-center mt-3">Allrahim Manpower Pvt. Ltd.</h2>
        <hr class="divider" />
        <div class="container">
            <div class="row">
                <div class="col-lg-6 card bg-light  m-auto">
                    <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3 p-5">
                        <div class="features-icons-icon d-flex"><i class="bi-layers m-auto text-dark fas fa-magic"></i></div>
                        <h2>Under Construction!</h2>
                        <hr>
                        <h2>工事中！</h2>
{{--                        <a href="{{ route ('employeeData') }}"><button type="button" class="btn btn-primary">@lang('content.index_view')</button></a>--}}
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
</body>
</html>
