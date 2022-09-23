@extends('layouts.frontend')

@section('title', 'Reset Password')

@section('content')
    <div class="row">
        <div class="col-md-12 p-5">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Reset Password</h1>
            </div>

            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <form class="user" method="POST" action="{{ route('password.email') }}">
                @csrf

                <div class="row mb-3 justify-content-center">
                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control form-control-user @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-0 justify-content-center">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary btn-user">
                            {{ __('Send Password Reset Link') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
