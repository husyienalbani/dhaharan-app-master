@extends('layout.master_admin.create')
@section('title')
<title>Login</title>
@endsection
@section('adddata')

<div class="card card-authentication1 mx-auto my-5">
    <div class="card-body">
        <div class="card-content p-2">
            <div class="text-center">
                <img src="{{ asset('/assets/admin/images/logo-icon.png') }}" alt="logo icon" />
            </div>
            <div class="card-title text-uppercase text-center py-3">
                SIGN-IN
            </div>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <label for="email" class="sr-only">Email</label>
                    <div class="position-relative has-icon-right">
                        <input type="email" id="email" style="font-size: small"
                            class="form-control input-shadow @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" required autocomplete="email" autofocus
                            placeholder="Enter Email">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <div class="form-control-position">
                            <i class="icon-social-google"></i>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="sr-only">Password</label>
                    <div class="position-relative has-icon-right">
                        <input type="password" id="password"
                            class="form-control input-shadow @error('password') is-invalid @enderror" name="password"
                            required autocomplete="current-password" placeholder="Enter Password" />
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <div class="form-control-position">
                            <i class="icon-lock"></i>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-6">
                        <div class="icheck-material-white">
                            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label for="remember">Remember me</label>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-light btn-block">
                    Sign In
                </button>

                {{-- @if (Route::has('password.request'))
                <div class="text-center">
                    <a class="btn btn-link btn-sm" style="margin-top: 10px;" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                </div>
                @endif --}}

            </form>
        </div>
    </div>
    <div class="card-footer text-center py-3">
        <p class="text-warning mb-0">
            Do not have an account? <a href="{{ route('register') }}"> Sign Up here</a>
        </p>
    </div>
</div>

@endsection