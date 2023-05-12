@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Property</h1>
        <form method="POST" action="{{ route('properties.update', $property->id) }}">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $property->title }}">
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description">{{ $property->description }}</textarea>
            </div>

            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" class="form-control" id="price" name="price" value="{{ $property->price }}">
            </div>

            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control" id="address" name="address" value="{{ $property->address }}">
            </div>

            <button type="submit" class="btn btn-primary">Save Changes</button>
        </form>
    </div>
@endsection
