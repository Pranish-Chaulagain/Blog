@extends('layouts.authLayout')

@section('content')

<div class="d-flex align-items-center justify-content-center h-100">
    <div class="col-lg-4">
        <a class="navbar-brand text-center" href="/">
            <h2>BLOG.</h2>
        </a>
        <p class="text-center">{{ __('Reset your password') }}</p>
        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $token }}">

            <div class="mb-3">
                <label for="email" class="ms-2 mb-1">{{ __('Email Address') }}</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="row">
                <div class="col-lg-6 col-12 mb-3">
                    <label for="password" class="ms-2 mb-1">{{ __('Password') }}</label>
                    <div class="password-group">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        <span class="toggle-password" id="togglePassword">
                            <i class="bi bi-eye-slash"></i>
                        </span>
                    </div>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col-lg-6 col-12 mb-3">
                    <label for="password-confirm" class="ms-2 mb-1">{{ __('Confirm Password') }}</label>
                    <div class="password-group">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        <span class="toggle-password" id="togglePassword">
                            <i class="bi bi-eye-slash"></i>
                        </span>
                    </div>
                </div>
            </div>

            <div class="mb-5">
                <button type="submit" class="btn btn-dark d-flex w-100 align-items-center justify-content-center">
                    {{ __('Reset password') }}
                </button>
            </div>

            <p class="text-center text-muted" style="font-size: 14px;">Copyright &copy; 2023 BLOG, Inc</p>
        </form>
    </div>
</div>
@endsection
