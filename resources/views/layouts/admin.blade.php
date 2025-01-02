@extends('adminlte::page')

@section('title', 'Admin Panel')

@section('content_header')
    <h1>Admin Panel</h1>
@endsection

@section('content')
    @yield('content')
@endsection

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>
