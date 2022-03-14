@extends('layouts.backend.layout')


@section('title')
   add {{$propertyType->name}}
@endsection

@section('content')

<div class="card">
    <form action="{{route('property.store')}}" method="post" enctype="multipart/form-data">
        @csrf

          @if(session()->has('success'))
          <span style="color: blue">{{session('success')}}</span></br>
          @elseif(session()->has('delete'))
          <span style="color:red">{{session('delete')}}</span></br>
          @endif

      <p class="col-md-6">
          <label for="pname">property name </label>
          <input type="text" name = "pname" class="form-control">
      </p>

      <p class="col-md-6">
          <label for="pname">property image</label>
          <input type="file" name="property_images[]" class="form-control" multiple>
      </p>

      <p class="col-md-6">
          <select name="option_id" id="" class="form-control">Type
              <option value="" disabled>select option</option>
              @foreach ($options as $option)
                  <option value="{{$option->id}}">{{$option->name}}</option>
              @endforeach
          </select>
      </p>

      <p class="col-md-6">
          <label for="description">Description</label>
          <textarea name="description" id="" cols="20" rows="5" class="form-control"></textarea>
      </p >
      <input type="hidden" value="{{$propertyType->id}}" name ="propertyTypeId">

      <p class="col-md-6">

          <input type="submit" class="form-control btn btn-primary" >
      </p>

    </form>
</div>

@endsection
