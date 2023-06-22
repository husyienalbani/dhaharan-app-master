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
                RESET PASSWORD
            </div>
            <form method="POST" action="{{ route('password.update') }}">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">
                <div class="form-group">
                    <label for="email" class="sr-only">Email</label>
                    <div class="position-relative has-icon-right">
                        <input type="email" id="email" style="font-size: small"
                            class="form-control input-shadow@error('email') is-invalid @enderror" name="email"
                            value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus
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
                <button type="submit" class="btn btn-light btn-block">
                    Sign In
                </button>
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