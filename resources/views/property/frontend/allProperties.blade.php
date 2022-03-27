@extends('layouts.frontend.layouts')
@section('otherLandingPages-nav')
    @include('includes.otherpagesnavigation')
@endsection

@section('title')
    properties show page
@endsection
@livewireStyles
@section('content')
  @livewire('property-data')
@livewireScripts
@endsection
