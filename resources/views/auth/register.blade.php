@extends('layouts.app')

@section('content')
    <div class="container min-vh-100 d-flex align-items-center justify-content-center">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="d-flex justify-content-center py-4">
                    <a href="{{ route('index') }}" class="logo d-flex align-items-center w-auto">
                        <img src="{{ asset('images/sib_logo.png') }}" alt="">
                        <span class="d-none d-lg-block">SIBPM</span>
                    </a>
                </div>
                <div class="card">

                    <div class="card-body">
                        <div class="pt-4 pb-2">
                            <h5 class="card-title text-center pb-0 fs-4 text-capitalize">{{ __('message.create an account') }}</h5>
                            <p class="text-center small">{{ __('message.enter your personal details to create account') }}</p>
                        </div>

                        <form method="POST" action="{{ route('register') }}" class="row g-3 needs-validation" novalidate>
                            @csrf

                            <div class="col-12">
                                <label for="yourName" class="form-label">{{ __('message.username') }}</label>
                                <div class="input-group has-validation">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="yourName" class="form-label">{{ __('message.email') }}</label>
                                <div class="input-group has-validation">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="password" class="form-label">{{ __('message.password') }}</label>
                                <div class="input-group has-validation">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="password-confirm" class="form-label">{{ __('message.confirm password') }}</label>
                                <div class="input-group has-validation">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

{{--                             <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" name="terms" type="checkbox" value=""
                                        id="acceptTerms" required>
                                    <label class="form-check-label" for="acceptTerms">I agree and accept the <a
                                            href="#">terms and conditions</a></label>
                                    <div class="invalid-feedback">You must agree before submitting.</div>
                                </div>
                            </div> --}}

                            <div class="col-12">
                                <button class="btn btn-primary w-100 text-capitalize" type="submit">{{ __('message.create an account') }}</button>
                            </div>

                            <div class="col-12">
                                <p class="small mb-0">{{ __('message.already have an account?') }} <a href="{{ route('login') }}">{{ __('message.login') }}</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
