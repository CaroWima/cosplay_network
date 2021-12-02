@extends('layouts.layout')

@section('content')
<div class="row d-flex p-3">
    <div class="col-sm-8 offset-sm-2 my-5 d-flex justify-content-center" style="height: 72vh; flex-direction: column">
        <form method="post" action="{{ route('register.perform') }}">
            @csrf
            <h1 class="mb-5">Join us!</h1>

            <div class="form-group form-floating mb-3">
                <input type="text" id="firstname" class="form-control" name="firstname" value="{{ old('firstname') }}" placeholder="First Name" required="required" autofocus>
                <label for="firstname">First Name</label>
                @if ($errors->has('firstname'))
                    <span class="text-danger text-left">{{ $errors->first('firstname') }}</span>
                @endif
            </div>

            <div class="form-group form-floating mb-3">
                <input type="text" id="lastname" class="form-control" name="lastname" value="{{ old('lastname') }}" placeholder="Last Name" required="required" autofocus>
                <label for="lastname">Last Name</label>
                @if ($errors->has('lastname'))
                    <span class="text-danger text-left">{{ $errors->first('lastname') }}</span>
                @endif
            </div>

            <div class="form-group form-floating mb-3">
                <input type="email" id="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" required="required" autofocus>
                <label for="email">Email </label>
                @if ($errors->has('email'))
                    <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                @endif
            </div>

            <div class="form-group form-floating mb-3">
                <input type="text" id="username" class="form-control" name="username" value="{{ old('username') }}" placeholder="Username" required="required" autofocus>
                <label for="username">Username</label>
                @if ($errors->has('username'))
                    <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                @endif
            </div>
            
            <div class="form-group form-floating mb-3">
                <input type="password" id="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password" required="required" autofocus>
                <label for="password">Password</label>
                @if ($errors->has('password'))
                    <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                @endif
            </div>

            <div class="form-group form-floating mb-3">
                <input type="password" id="confirmPassword" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="Confirm Password" required="required" autofocus>
                <label for="confirmPassword">Confirm Password</label>
                @if ($errors->has('password_confirmation'))
                    <span class="text-danger text-left">{{ $errors->first('password_confirmation') }}</span>
                @endif
            </div>

            <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
        </form>
    </div>
</div>
@endsection