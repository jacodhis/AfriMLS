@extends('layouts.backend.layout')


@section('title')
   add {{$propertyType->name}}
@endsection

@section('content')
<section class="title col-md-6 mx-auto">Add a property in <strong> {{$propertyType->name}}</strong></section>
<div class="row">
    <div class="col-md-9 mx-auto">
      <form action="{{route('property.store')}}" method="post" enctype="multipart/form-data">
          @csrf

            @if(session()->has('success'))
            <span style="color: blue">{{session('success')}}</span></br>
            @elseif(session()->has('delete'))
            <span style="color:red">{{session('delete')}}</span></br>
            @endif

        <p class="col-md-6">
            <label for="pname">property name</label>
            <input type="text" name = "pname" class="form-control">
        </p>

        <p class="col-md-6">
            <label for="pname">property image</label>
            <input type="file" name="property_images[]" class="form-control" multiple>
        </p>
        <input type="hidden" value="{{$propertyType->id}}" name ="propertyId">

        <p class="col-md-6">

            <input type="submit" class="form-control btn btn-primary" >
        </p>

      </form>


    </div>
</div>
@endsection
