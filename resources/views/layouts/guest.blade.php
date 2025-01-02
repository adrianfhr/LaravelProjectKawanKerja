@extends('adminlte::auth.auth-page', ['auth_type' => 'login'])

@section('auth_header')
    @yield('auth_header')
@endsection

@section('auth_body')
    @yield('auth_body')
@endsection

@section('auth_footer')
    @yield('auth_footer')
@endsection
