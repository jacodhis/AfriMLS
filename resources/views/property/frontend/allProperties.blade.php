@extends('layouts.frontend.layouts')
@section('landingPage-nav')
@include('includes.homePageNavigation')
  
@endsection

@section('title')
    All Properties
@endsection
@livewireStyles
    @section('content')
     @livewire('property-data')
    @livewireScripts
@endsection
