@extends('auth/auth_layout')

@section('content')

<form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
    {{ csrf_field() }}
    <div class="wrap-input100 validate-input m-b-26" data-validate="Email is required">
        <span class="label-input100">Email</span>
        <input class="input100" type="email" name="email" placeholder="Enter email" autocomplete="off" value="{{ old('email') }}" required >
        <span class="focus-input100"></span>
        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
    </div>

    <div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
        <span class="label-input100">Password</span>
        <input class="input100" type="password" name="password" placeholder="Enter password" required>
        <span class="focus-input100"></span>
        @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
    </div>

    <div class="flex-sb-m w-full p-b-30">
        <div class="contact100-form-checkbox">
            <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me" {{ old('remember') ? 'checked' : '' }}>
            <label class="label-checkbox100" for="ckb1">
                Remember me
            </label>
        </div>

        <div>
            <a class="btn btn-link" href="{{ route('password.request') }}">
                Forgot Your Password?
            </a>
        </div>
    </div>

    <div class="container-login100-form-btn">
        <button class="login100-form-btn">
            Login
        </button>
        <a href="/register" class="login100-form-btn" style="margin-left: 6%;cursor: pointer;color: white;background-color: #4e51b3;">
            SignUp
        </a>
    </div>
</form>
@endsection
