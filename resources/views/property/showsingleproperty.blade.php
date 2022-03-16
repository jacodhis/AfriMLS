@extends('layouts.backend.layout')


@section('title')
Afri MLS add {{$property->name}}
@endsection

@section('content')
{{--
<div class="container">
   <div class="row">
    <div class="col-md-6 mx-auto">
        <img src="{{asset('images/'.$property->image) }}" alt="property image"
                                    class="img-responsive" height = "450" width="500">
    </div>

   </div> --}}
{{$property}}
</div>
@endsection
