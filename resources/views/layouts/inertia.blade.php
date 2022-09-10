<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- csrf token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="app_name" content="{{ config('app.name') }}">

    <!-- fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="dns-prefetch" href="https://cdnjs.cloudflare.com">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <!-- styles -->
    <link href="{{ asset(mix('css/app.css')) }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('vendor/datatables.net/datatables.min.css') }}" />

    <!-- inertia scripts -->
    @inertiaHead

    <!-- scripts -->
    <script src="{{ asset(mix('js/app.js')) }}"></script>
    <script src="{{ asset('vendor/datatables.net/datatables.min.js') }}"></script>

    @if ($print ?? false)
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
    @endif

    @routes
    <script src="{{ asset(mix('js/inertia.js')) }}" defer></script>

</head>

<body class="app header-fixed sidebar-fixed aside-menu-off-canvas sidebar-lg-show">

    <!-- header -->
    @include('partials.app.header')

    <div class="app-body">

        <!-- side bar -->
        @include('partials.app.sidebar')

        <!-- main content -->
        <main class="main">

            <!-- content -->
            <div class="container-fluid">
                <div class="animated fadeIn">
					<div class="mt-3">
						@include('partials.messages')
						@inertia
                    </div>
                </div>
            </div>
        </main>

    </div>

</body>

</html>
