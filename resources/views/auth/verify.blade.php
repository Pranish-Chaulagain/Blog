@extends('layouts.authLayout')

@section('content')

<div class="d-flex align-items-center justify-content-center h-100">
    <div class="col-lg-4">
        <a class="navbar-brand text-center" href="/">
            <h2>BLOG.</h2>
        </a>
        <p class="text-center">{{ __('Verify Your Email Address') }}</p>
         @if (session('resent'))
            <div class="alert alert-success" role="alert">
                {{ __('A fresh verification link has been sent to your email address.') }}
            </div>
        @endif

        {{ __('Before proceeding, please check your email for a verification link.') }}
        {{ __('If you did not receive the email') }},
        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
            @csrf
            <div class="mb-5">
                <button type="submit" class="btn btn-dark d-flex w-100 justify-content-center align-items-center">{{ __('click here to request another') }}</button>
            </div>

            <p class="text-center text-muted" style="font-size: 14px;">Copyright &copy; 2023 BLOG, Inc</p>
        </form>
    </div>
</div>
@endsection
