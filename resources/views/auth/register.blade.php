@extends('layouts.guest')

@section('auth_header', __('Register a new account'))

@section('auth_body')
    <form action="{{ route('register.post') }}" method="post">
        @csrf
        <!-- Input for Username -->
        <div class="input-group mb-3">
            <input type="text" name="username" class="form-control" placeholder="Username" required>
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-user"></span>
                </div>
            </div>
        </div>
        <!-- Input for Password -->
        <div class="input-group mb-3">
            <input type="password" name="password" class="form-control" placeholder="Password" required>
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                </div>
            </div>
        </div>
        <!-- Input for Confirm Password -->
        <div class="input-group mb-3">
            <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password" required>
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                </div>
            </div>
        </div>
        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary btn-block">Register</button>
    </form>
@endsection

@section('auth_footer')
    <p class="mb-0">
        <a href="{{ route('login') }}" class="text-center">Already have an account? Sign in</a>
    </p>
@endsection
