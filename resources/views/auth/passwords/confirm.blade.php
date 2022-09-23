@extends('layouts.frontend')

@section('title', 'Confirm Password')

@section('content')
    <div class="row">
        <div class="col-md-12 p-5">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Confirm Password</h1>
            </div>

            {{ __('Please confirm your password before continuing.') }}

            <form class="user" method="POST" action="{{ route('password.confirm') }}">
                @csrf

                <div class="row mb-3 justify-content-center">
                    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control form-control-user @error('password') is-invalid @enderror"
                            name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-0 justify-content-center">
                    <div class="col-md-8 offset-md-4">
                        <button type="submit" class="btn btn-primary btn-user">
                            {{ __('Confirm Password') }}
                        </button>

                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
