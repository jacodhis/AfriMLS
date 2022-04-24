
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
           @include('includes.feautured-listing')
        </div>
        <!-- .row end -->
        <center>
            {{$data[0]['properties']->links()}}
        </center>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- #blog  end -->



    </div>


@endsection
