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
                  @include('includes.homepageform-search')
                {{-- </div> --}}


                <!-- .col-md-12 end -->
            </div>
            <!-- .row end -->
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="carousel carousel-dots" data-slide="3" data-slide-rs="2" data-autoplay="true"
                        data-nav="false" data-dots="true" data-space="25" data-loop="true" data-speed="800">
                        <!-- .property-item #1 -->
                        @include('includes.feautured-listing')
                        <!-- .property-features end -->
                    </div>
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
