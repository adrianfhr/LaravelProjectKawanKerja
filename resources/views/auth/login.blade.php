@extends('layouts.guest')

@section('auth_header', __('Sign in to start your session'))

@section('auth_body')
    <form action="{{ route('login') }}" method="post">
        @csrf
        <div class="input-group mb-3">
            <input type="text" name="username" class="form-control" placeholder="Username" required>
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-user"></span>
                </div>
            </div>
        </div>
        <div class="input-group mb-3">
            <input type="password" name="password" class="form-control" placeholder="Password" required>
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
    </form>
@endsection

@section('auth_footer')
    <p class="mb-0">
        <a href="{{ route('register') }}" class="text-center">Register a new account</a>
    </p>
@endsection
