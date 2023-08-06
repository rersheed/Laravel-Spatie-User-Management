@extends('layouts.guest')

@section('content')
    <div class="p-5">
        <div class="text-center mb-5">
            <a href="{{ url('/') }}" class="text-dark font-size-22 font-family-secondary">
                <i class="mdi mdi-alpha-x-circle"></i> <b>{{ Config::get('app.name', 'Laravel Project') }}</b>
            </a>
        </div>
        <h1 class="h5 mb-1">Create an Account!</h1>
        <p class="text-muted mb-4">Don't have an account? Create your own account, it takes less than a minute</p>
        <form class="user" method="post" action="{{ route('register') }}">
            @csrf

            <div class="form-group row">
                <div class="col-sm-12 mb-3 mb-sm-0">
                    <label for="name">Full Name:</label>
                    <input type="text" class="form-control form-control-user" id="name" placeholder="Full Name"
                        name="name" required autofocus>
                    @if ($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control form-control-user" id="email" name="email" required
                    autocomplete="username" placeholder="Email Address">
                @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
            </div>
            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control form-control-user" placeholder="Password" id="password"
                        name="password" required autocomplete="new-password">
                    @if ($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                </div>
                <div class="col-sm-6">
                    <label for="d">Confirm Password:</label>
                    <input type="password" class="form-control form-control-user" placeholder="Repeat Password"
                        id="password_confirmation" name="password_confirmation" required autocomplete="new-password">
                    @if ($errors->has('password_confirmation'))
                        <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                    @endif
                </div>
            </div>
            <button type="submit" class="btn btn-success btn-block waves-effect waves-light"> Register Account </button>

        </form>

        <div class="row mt-4">
            <div class="col-12 text-center">
                <p class="text-muted mb-0">Already have account? <a href="{{ route('login') }}"
                        class="text-muted font-weight-medium ml-1"><b>Sign In</b></a></p>
            </div> <!-- end col -->
        </div>
        <!-- end row -->
    </div> <!-- end .padding-5 -->
@endsection
