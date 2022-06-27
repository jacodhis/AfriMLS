@extends('layouts.frontend.layouts')

@section('title')
 Afri MLS
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





    <section id="properties-carousel" class="properties-carousel pt-90 pb-90">
        <div class="container">
            <div class="row">
                {{-- <div class="container " id="search-container"> --}}

                {{-- </div> --}}

               <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="heading heading-2 text-center mb-20">
                        <h2 class="heading--title">Featured Listing</h2>
                        <!-- <p class="heading--desc">Duis aute irure dolor in reprehed in volupted velit esse dolore</p>-->
                    </div>
                    <!-- .heading-title end -->
                </div>
                <!-- .col-md-12 end -->
            </div>
            <!-- .row end -->
            <div class="row">
                <div class="col-xs-8 col-sm-8 col-md-8">
                    @include('includes.feautured-listing')
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4">
                    @include('includes.newhomepageform-search')
                </div>
                <!-- .property item end -->

            </div>
            <!-- .carousel end -->
        </div>
        <!-- .col-md-12 -->

        <!-- .container -->
    </section>
    <!-- #properties-carousel  end  -->


    </div>

    <section id="cta" class="cta cta-1 text-center bg-overlay bg-overlay-dark pt-90">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-1">
                    <h3>Stay in Touch! Join our Newsletter</h3>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-5 widget--newsletter">
                    <div class="widget--content">
                        <a href="#" class="btn btn--primary">Subsribe Now</a>
                    </div>
                    <!-- .col-md-6 -->
                </div>
                <!-- .row -->
            </div>
        </div>
        <!-- .container -->
    </section>
@endsection
