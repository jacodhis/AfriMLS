@extends('layouts.frontend.layouts')
@section('otherLandingPages-nav')
    @include('includes.otherpagesnavigation')
@endsection

@section('title')
    All Properties
@endsection
@livewireStyles
    @section('content')
     @livewire('property-data')
    @livewireScripts
@endsection
