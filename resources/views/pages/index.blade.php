
@extends('layouts.frontend.layouts')


@section('title')
 AfriMLS
@endsection

@section('landingPage-nav')
  @include('includes.homePageNavigation')
@endsection


@section('content')

<style>
    section{
        margin-top: -4.5%
    }
</style>


<section id="blog" class="blog blog-grid  ">
    <div class="container " id="search-container">

    @include('includes.homepageform-search')

</div>
    <div class="container">
        <div class="row mb-50">
            <div class="container">
               <center>
                  <h2 class="heading--title">Featured Listing</h2>
               </center>
                </div>
               @include('includes.feautured-listing')

        </div>
        <!-- .row end -->
         <div class="row mb-50">
            <center>
                {{$data[0]['properties']->links()}}
            </center>
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- #blog  end -->



    </div>


@endsection
