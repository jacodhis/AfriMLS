@php(extract($data))
@extends('layouts.frontend.newlayout')
@section('content')
<section class="py-4">
    <div class="container">

        <span><h4><b>{{$data[0]['property']->name}}</b></h4></span>
        <div class="row g-5">
            <div class="col-md-8">
                <div class="">
                            <div class="col-md-12">
                                <img class="w-100 h-25 img-fluid" src="{{asset('assets/images/properties/house1.jpg')}}" alt="">
                            </div>
                        </div>

                <div class="row mx-0 item bg-white shadow-sm mb-1 py-1">
                    <div class="col-md-12">
                        <div class="align-self-center">
                            <h5 class="text-primary my-1"><b>Ksh. {{number_format($data[0]['property']->price)}}</b></h5>
                            <h5>{{$data[0]['property']->name}}</h5>

                            <div class="d-flex justify-content-between">
                                <div class="w-75 mt-1">
                                    <span><img src="https://img.icons8.com/ios-filled/15/000000/bed.png" class="mx-0"/>{{$data[0]['property']->number_bedroom}}</span>
                                    <span><img src="https://img.icons8.com/ios-filled/15/000000/bath.png" class="mx-2"/>{{$data[0]['property']->number_bathroom}}</span>
                                </div>
                                <div class="w-25">
                                    <small class="text-muted mb-1 pb-1">
                                        <img src="https://img.icons8.com/ios-filled/15/000000/place-marker.png" class=""/> Karen
                                    </small>
                                </div>
                            </div>
                            <p style="font-size:small; padding-top: 4px">{{$data[0]['property']->description}}</p>

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
            </div>
            <div class="col-md-4">

            </div>
        </div>
    </div>
  </section>
@endsection
