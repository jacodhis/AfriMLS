

@extends('auth.layouts.auth')
@section('title')
{{ __('Reset Password') }}
@endsection
@section('content')
@include('includes.auth.email')
@endsection