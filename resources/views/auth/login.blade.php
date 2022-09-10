@extends('layouts.frontend')

@section('title', 'Login')

@section('content')
    <div class="col col-sm-8 align-self-center">
        <div class="card">

            <div class="card-header px-4 py-3">
                <strong>{{ config('app.name') }}</strong>
            </div>

            <div class="card-body p-4">
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label class="form-label">Email</label>
                                <input type="text" name="email" class="form-control" placeholder="Your email address"
                                    value="{{ old('email') }}" required autofocus>
                                @error('email')
                                    <div class="is-invalid">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Password" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label class="form-label">
                                    <input type="checkbox" name="remember" value="1"
                                        {{ old('remember', 0) ? 'checked' : '' }}>
                                    Remember Me
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between mt-2">
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-lg" style="font-size: inherit">
                                Login
                            </button>
                        </div>
                        <div class="form-group">
                            <a href="{{ route('password.request') }}">
                                Forgot Password?
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
