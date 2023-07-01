@extends('layout.master_admin.create')
@section('title')
<title>Register</title>
<!-- Favicons -->
<link href="{{ asset('/assets/user/img/favicon.png') }}" rel="icon" />
<link href="{{ asset('/assets/user/img/apple-touch-icon.png') }}" rel="apple-touch-icon" />
@endsection
@section('adddata')


<div class="card card-authentication1 mx-auto my-4">
    <div class="card-body">
        <div class="card-content p-2">
            <div class="text-center">
                <img src="{{ asset('/assets/admin/images/logo-icon.png') }}" alt="logo icon" />
            </div>
            <div class="card-title text-uppercase text-center py-3">
                Sign Up
            </div>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group">
                    <label for="name" class="sr-only">Name</label>
                    <div class="position-relative has-icon-right">
                        <input type="text" id="name" style="font-size: small"
                            class="form-control input-shadow @error('name') is-invalid @enderror" name="name"
                            value="{{ old('name') }}" required autocomplete="name" autofocus
                            placeholder="Enter Your Name">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <div class="form-control-position">
                            <i class="icon-user"></i>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="sr-only">Email</label>
                    <div class="position-relative has-icon-right">
                        <input type="email" id="email" style="font-size: small"
                            class="form-control input-shadow @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" required autocomplete="email" placeholder="Enter Your Email">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <div class="form-control-position">
                            <i class="icon-envelope-open"></i>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="role" class="sr-only">Role</label>
                    <div class="position-relative has-icon-right">
                        <select name="role" class="form-control input-shadow form-select" style="font-size: small;"
                            aria-label="Default select example">
                            <option selected>select role</option>
                            <option value="1" disabled>Admin</option>
                            <option value="2">User</option>
                        </select>
                        @error('role')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="sr-only">Password</label>
                    <div class="position-relative has-icon-right">
                        <input type="password" id="password"
                            class="form-control input-shadow @error('password') is-invalid @enderror" name="password"
                            required autocomplete="new-password" placeholder="Enter Password">
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
                <div class="form-group">
                    <label for="password-confirm" class="sr-only">Password Confirm</label>
                    <div class="position-relative has-icon-right">
                        <input type="password" id="password-confirm" class="form-control input-shadow"
                            name="password_confirmation" required autocomplete="new-password"
                            placeholder="Enter Password Confirmation">
                        <div class="form-control-position">
                            <i class="icon-lock"></i>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-light btn-block waves-effect waves-light">
                    Sign Up
                </button>

            </form>
        </div>
    </div>
    <div class="card-footer text-center py-3">
        <p class="text-warning mb-0">
            Already have an account? <a href="{{ route('login') }}"> Sign In here</a>
        </p>
    </div>
</div>

@endsection