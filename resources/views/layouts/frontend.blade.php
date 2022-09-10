<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', config('app.name', 'Laravel'))</title>

    <!-- Scripts -->
    <script src="{{ asset(mix('js/app.js')) }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset(mix('css/app.css')) }}" rel="stylesheet">

    <style>
        body {
            background-image: url('{{ url('images/login-bg.jpg') }}');
            background-size: cover;
            width: 100%;
            height: 100%;
            z-index: -1;
        }
    </style>

    @yield('styles')

</head>

<body>

    <body>
        <div id="app">
            <div class="container" class="mx-auto my-2">
                <div class="row justify-content-center" style="margin-top:15%">
                    <div class="col col-sm-8">
                        @include('partials.messages')
                    </div>
                    @yield('content')
                </div>
            </div><!-- container -->
        </div><!-- #app -->
    </body>
</body>

</html>
