@php(extract($data))
@extends('layouts.frontend.newlayout')
@section('content')
<section class="py-4">
    <div class="container">

        <span><h5><b>Search Results</b></h5></span>
        <div class="row g-5">
            <div class="col-md-8">
                <span><h6><b>County: </b> {{$search_county}} <b>Property Type: </b> {{$search_property_type}} <b>Category: </b> {{$search_category}}</h6></span>
                @if(count($properties) >= 1)
                    @foreach($properties as $property)
                        <div class="row mx-0 item bg-white shadow-sm mb-1 py-1">
                            <div class="col-md-5">
                                <img src="https://imgs.search.brave.com/q0S9RCJHS77w3UbbflKz4WPPmt7p-v5staJ2vmRUi3o/rs:fit:1024:684:1/g:ce/aHR0cDovL3d3dy5y/ZWFsZXN0YXRlc3Ry/dWN0dXJlZC5jb20v/d3AtY29udGVudC91/cGxvYWRzLzIwMTgv/MDkvUmVhbC1Fc3Rh/dGUtaXMtdGhlLUJl/c3QtSW5kdXN0cnkt/VGhlcmUtaXMtMTAy/NHg2ODQuanBn" alt="" class="w-100">
                            </div>
                            <div class="col-md-7">
                                <div class="align-self-center">
                                    <h5><a href="{{route('show', $property->id)}}" style="color: black; text-decoration: none">{{$property->name}}</a></h5>
                                    <h6 class="text-danger my-1"><b>Ksh. {{number_format($property->price)}}</b></h6>
                                    <div class="d-flex justify-content-between">
                                        <div class="w-75 mt-1">
                                            <span><img src="https://img.icons8.com/ios-filled/15/000000/bed.png" class="mx-0"/>{{$property->number_bedroom}}</span>
                                            <span><img src="https://img.icons8.com/ios-filled/15/000000/bath.png" class="mx-2"/>{{$property->number_bathroom}}</span>
                                        </div>
                                        <div class="w-25">
                                            <small class="text-muted mb-1 pb-1">
                                                <img src="https://img.icons8.com/ios-filled/15/000000/place-marker.png" class=""/> Karen
                                            </small>
                                        </div>
                                    </div>
                                    <p style="font-size:small; padding-top: 4px">{{$property->description}}</p>

                                </div>

                                <div class="d-flex justify-content-between">
                                    <div class="left">
                                        <img src="https://i.pinimg.com/originals/c2/9b/d0/c29bd095d495c6aa7d068080a13c7038.png" alt="" class="client-logo">
                                    </div>
                                    <div class="float-end">
                                        <img src="https://img.icons8.com/ios-filled/20/25d366/whatsapp.png" class="mx-2"/>
                                        <img src="https://img.icons8.com/ios-filled/20/dc3545/phone.png" class="mx-2"/>
                                        <img src="https://img.icons8.com/ios-filled/20/dc3545/mail.png" class="mx-2"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="row mx-0 item bg-white shadow-sm mb-1 py-1">
                        <div class="col-md-12">
                            <div class="align-self-center">
                                <h5>Sorry! No results found for your search query</h5>


                            </div>


                        </div>
                    </div>
                @endif

            </div>
            <div class="col-md-4">
                @include('pages.side-menu')
            </div>
        </div>
    </div>
  </section>
  <!-- <section class="bg-dark py-4">
    <div class="container">
      <div class="d-flex justify-content-around mx-auto w-75">
      <h3 class="text-white"><b>Stay in Touch! Join our Newsletter</b>
    </h3>
      <button class="form-control btn-danger w10">SUBSCRIBE NOW</button>

      </div>
    </div>
  </section> -->
  <section class="bg-black py-4">
    <div class="container">

      <div class="text-center mx-auto w-50 mt-4">
      <h3 class="text-white"><b>Join our professional team & agents to start selling your house</b>
    </h3>
      <button class="form-control btn-danger w10 mt-3 mx-auto">CONTACT</button>

      </div>
    </div>
  </section>
@endsection
