@extends('layouts.guest')

@section('content')
    <div class="p-5">
        <div class="text-center mb-5">
            <a href="{{ url('/') }}" class="text-dark font-size-22 font-family-secondary">
                <i class="mdi mdi-alpha-x-circle"></i> <b>SHABAB</b>
            </a>
        </div>
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <h1 class="h5 mb-1">Welcome Back!</h1>
        <p class="text-muted mb-4">Enter your email address and password to access admin
            panel.</p>
        <form class="user" method="post" action="{{ route('login') }}">
            @csrf

            <div class="form-group">
                <input type="email" name="email" class="form-control form-control-user" id="email" required
                    autofocus autocomplete="email" placeholder="Email Address">
                @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif

            </div>
            <div class="form-group">
                <input type="password" required autocomplete="current-password" name="password"
                    class="form-control form-control-user" id="password" placeholder="Password">
                @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif

            </div>
            <button type="submit" class="btn btn-success btn-block waves-effect waves-light"> Log In </button>
        </form>

        <div class="row mt-4">
            <div class="col-12 text-center">
                <p class="text-muted mb-2"><a href="{{ route('password.request') }}"
                        class="text-muted font-weight-medium ml-1">Forgot
                        your
                        password?</a></p>
                <p class="text-muted mb-0">Don't have an account? <a href="{{ route('register') }}"
                        class="text-muted font-weight-medium ml-1"><b>Sign Up</b></a>
                </p>
            </div> <!-- end col -->
        </div>
        <!-- end row -->
    </div> <!-- end .padding-5 -->
@endsection
