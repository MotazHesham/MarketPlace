@extends('auth/auth_layout')

@section('content')

<form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
    {{ csrf_field() }}

    <div class="wrap-input100 validate-input m-b-26{{ $errors->has('name') ? ' has-error' : '' }}" data-validate="Name is required">
        <span class="label-input100">Name</span>
        <input class="input100" type="text" name="name" placeholder="Enter fullname" autocomplete="off" value="{{ old('name') }}" required >
        <span class="focus-input100"></span>
        @if ($errors->has('name'))
            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif
    </div>

    <div class="wrap-input100 validate-input m-b-26{{ $errors->has('email') ? ' has-error' : '' }}" data-validate="Username is required">
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

    <div class="wrap-input100 validate-input m-b-18" data-validate = "Confirm-Password is required">
        <span class="label-input100">Confirm Password</span>
        <input class="input100" type="password" name="password_confirmation" placeholder="Confirm password" required>
        <span class="focus-input100"></span>
    </div>

    <div class="wrap-input100 validate-input m-b-18 row" style="border-bottom:0;">
        <div class="col">
            <input type="radio" id="customer" name="role" value="0" style="display: inline;" checked=""><label style="display: inline;" for="seller"> Customer</label >
        </div>
        <div class="col">
            <input type="radio" id="seller" name="role" value="1"><label style="display: inline;" for="seller"> Seller</label>
        </div>
    </div>

    <div class="container-login100-form-btn">
        <button class="login100-form-btn btn-block" style="background-color: #5943af">
            Register
        </button>
    </div>
</form>


@endsection
