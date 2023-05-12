@php(extract($data))

@extends('layouts.backend.layout')

@section('title')
Afri MLS {{$data['propertyValue']}}s
@endsection

@section('content')

<div class="card shadow mb-4">
    <div class="card-header d-flex justify-content-between py-3">
        <h6 class="m-0 font-weight-bold text-primary">{{$data['propertyValue']}} Data</h6>
        <h6 class="m-0 font-weight-bold text-primary"><a href="{{route('addProperty', $data['propertyType'])}}" class="btn btn-primary " > Add  <span class="badge badge-primary"
                >+</span></a> </h6>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Owner</th>
                        <th>Phone</th>
                        <th>City</th>

                    </tr>
                </thead>

                <tbody>
                    @forelse ( $data['properties'] as $property  )
                    <tr>

                        <td>{{$property->name ?? ""}}</td>
                        <td>{{$property->price ?? ""}}</td>
                        <td>{{$property->owner_name ?? ""}}</td>
                        <td>{{$property->owner_phone ?? ""}}</td>
                        <td>{{$property->city->name ?? ""}}</td>
                    </tr>


                    @empty
                       No Properties Available
                    @endforelse



                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
