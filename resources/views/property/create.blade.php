@extends('layouts.backend.layout')


@section('title')
   add {{$propertyType->name}}
@endsection

@section('content')
<section class="title col-md-6 mx-auto">Add a property in <strong> {{$propertyType->name}}</strong></section>
<div class="row">
    <div class="col-md-9 mx-auto">
        <p class="col-md-6">
            <label for="pname">property name</label>
            <input type="text" class="form-control">
        </p>
        <p class="col-md-6">
            property location
           <select name="loation" id="" class="form-control">Location
             <option value="" >select property location</option>
            <option value="" >location one</option>
            <option value="">location two</option>
            <option value="">location three</option>
        </select>
        </p>
        <p class="col-md-6">
            <label for="pname">property image</label>
            <input type="file" class="form-control" multiple>
        </p>

        {{-- {{$propertyType->properties}} --}}

    </div>
</div>
@endsection
