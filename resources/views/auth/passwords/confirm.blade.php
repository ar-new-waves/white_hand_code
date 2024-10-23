@extends('layouts.app')

@section('content')
<div class="container">
<div class="row d-flex justify-content-center">
        <div class=" vh-100 d-flex align-items-center mob">
            <div class="card bg-white col-xl-5 col-lg-7 col-md-8 m-auto">
                <!-- logo -->
                <div class="bg-white mt-3">
                    <div class="d-flex justify-content-center">
                        <img src="{{ asset('assets/images/logo.png') }}" alt="logo" class="logo"
                            style="width: 150px; height: 150px;"
                        />
                    </div>
                </div>
                <div class="text-center mt-4">{{ __('Confirm Password') }}</div>

                <div class="card-body">
                    {{ __('Please confirm your password before continuing.') }}

                    <form method="POST" action="{{ route('password.confirm') }}">
                        @csrf

                        <div class="row mb-2">
                            <div class="d-flex flex-column w-100">
                                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div>
                                    <input id="password" type="password" class="form-control bg-body-tertiary @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="d-flex m-auto justify-content-center">
                                <button type="submit" class="btn btn-primary px-5 text-light border-0" style="background-color: #C93026;">
                                    {{ __('Confirm Password') }}
                                </button>

                                @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}"  style="color: #C93026;">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
