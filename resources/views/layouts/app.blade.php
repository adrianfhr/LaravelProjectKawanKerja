@extends('adminlte::page')

@section('title', 'App Title')

@section('content_header')
    @yield('content_header')
@endsection

@section('content')
    @yield('content')
@endsection

@section('footer')
    @include('partials.footer')
@endsection

