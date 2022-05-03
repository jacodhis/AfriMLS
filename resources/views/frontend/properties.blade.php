
@extends('layouts.frontend.layouts')


@section('title')
 AfriMLS
@endsection

@section('landingPage-nav')
  @include('includes.homePageNavigation')
@endsection



@section('content')

<style>
    #search-container{
        margin-top: 3.0%;
        /* background-color: blue */
    }
    section{
        margin-top: -3.5%
    }
</style>

<div class="container " id="search-container">

    @include('includes.homepageform-search')

</div>

<section id="blog" class="blog blog-grid">
    <div class="container">
        <div class="row mb-50">
          <!--  -->
          @foreach($properties as $property)

            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="blog-entry">
                    {{-- <div class="entry--img"> --}}
                        <a href="{{route('propertyShow',[$property->id])}}">
                            @php
                             $images = explode('|',$property->image);
                            @endphp
                             <img src="{{URL::to($images[0])}}" alt="property image"
                             class="img-responsive" >
                        </a>
                    {{-- </div> --}}
                    <div class="entry--content">
                        <div class="entry--meta">
                            <a href="#">{{$property->name ?? ""}}</a><a href="#">{{$property->city->name??""}}</a>
                        </div>

                        <div class="entry--bio">
                            {{$property->price ?? ""}}
                        </div>
                        <div class="entry--more">
                             <a href="{{route('propertyShow',[$property->id])}}">View<i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>

            </div>

            @endforeach


       
        <!-- .row end -->

          <!--  -->
        </div>
         <!-- .row end -->
             <div class="row mb-50">
                
                  <div class="justify-center">  {!!$properties->links()!!}</div>
                 
             </div>

       
    </div>

</section>




    </div>


@endsection