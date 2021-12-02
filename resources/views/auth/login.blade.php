@extends('layouts.layout')

@section('content')
    <div class="row d-flex p-3">
        <div class="col-sm-8 offset-sm-2 my-5 d-flex justify-content-center" style="height: 72vh; flex-direction: column">
            <form method="post" action="{{ route('login.perform') }}">
                @csrf                 
                <h1 class="mb-5">Welcome back!</h1>

                @include('layouts.messages')
                <div class="form-group form-floating mb-3">
                    <input type="text" id="username" class="form-control" name="username" value="{{ old('username') }}" placeholder="Username" required="required" autofocus>
                    <label for="floatingName">Email or Username</label>
                    @if ($errors->has('username'))
                        <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                    @endif
                </div>
        
                <div class="form-group form-floating mb-3">
                    <input type="password" id="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
                    <label for="floatingPassword">Password</label>
                    @if ($errors->has('password'))
                        <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                    @endif
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
            </form>
        </div>
    </div>
    @endsection