@if ($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible mb-0 text-center" role="alert">
        {{ $message }}
    </div>
@endif

@if ($message = Session::get('error'))
    <div class="alert alert-danger alert-dismissible mb-0 text-center" role="alert">
        {{ $message }}
    </div>
@endif

@if ($message = Session::get('warning'))
    <div class="alert alert-warning alert-dismissible mb-0 text-center" role="alert">
        {{ $message }}
    </div>
@endif

@if ($message = Session::get('info'))
    <div class="alert alert-info alert-dismissible mb-0 text-center" role="alert">
        {{ $message }}
    </div>
@endif

@if ($errors->any())
    <div class="alert alert-danger alert-dismissible mb-0 text-center" role="alert">
        Please check the form below for errors
    </div>
@endif
