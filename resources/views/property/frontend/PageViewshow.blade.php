@extends('layouts.frontend.layouts')

@section('landingPage-nav')
@include('includes.homePageNavigation')
  
@endsection

@section('title')
property show page
@endsection

@section('content')

<!-- <section id="page-title" class="page-title bg-overlay bg-overlay-dark2">
    <div class="bg-section">
        <img src="assets/images/page-titles/1.jpg" alt="Background" />
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                <div class="title title-1 text-center">
                    <div class="title--content">
                        <div class="title--heading">
                            <h1>Single Property</h1>
                        </div>
                        <ol class="breadcrumb">
                            <li><a href="{{route('landingPage')}}">Home</a></li>
                            <li class="active">Single Property</li>
                        </ol>
                    </div>
                    <div class="clearfix"></div>
                </div>
            
            </div>
           
        </div>
       
    </div>
 
</section> -->

<section id="property-single-gallery" class="property-single-gallery">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="property-single-gallery-info">
                    <div class="property--info clearfix">
                        <div class="pull-left">
                            {{-- <h5 class="property--title">1220 Petersham Town</h5> --}}
                            <h5 class="property--title">{{$data[0]['city']->name ??""}} ,  {{$data[0]['country']->name ??""}}</h5>
                            <p class="property--location"><i class="fa fa-map-marker"></i>{{$data[0]['location']->address ?? ""}} ,{{$data[0]['city']->name ??""}} , - {{$data[0]['country']->name}}</p>
                        </div>
                        <div class="pull-right">
                            <span class="property--status">{{$data[0]['propertyOption']->name ?? ""}}</span>
                            <p class="property--price">{{$data[0]['currency']->symbol ?? "Ksh"}} {{$data[0]['property']->price ??"NULL"}}</p>
                        </div>
                    </div>
                    <!-- .property-info end -->
                    <div class="property--meta clearfix">
                        <div class="pull-left">
                            <ul class="list-unstyled list-inline mb-0">
                                <li>
                                    Property ID:<span class="value">{{$data[0]['property']->id ??""}}</span>
                                </li>
                                <li>
                                    Add to favorites:<span class="value"> <i class="fa fa-heart-o"></i></span>
                                </li>
                            </ul>
                        </div>
                        <div class="pull-right">
                            <div class="property--meta-share">
                                <span class="share--title">share</span>
                                <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                                <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                                <a href="#" class="pinterest"><i class="fa fa-pinterest-p"></i></a>
                            </div>
                            <!-- .property-meta-share end -->
                        </div>
                    </div>
                    <!-- .property-info end -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-8">
                <div class="property-single-carousel inner-box">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="heading">
                                <h2 class="heading--title">Gallery</h2>
                            </div>
                        </div>
                        <!-- .col-md-12 end -->
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="property-single-carousel-content">
                                <div class="carousel carousel-thumbs slider-navs" data-slide="1" data-slide-res="1" data-autoplay="true" data-thumbs="true" data-nav="true" data-dots="false" data-space="30" data-loop="true" data-speed="800" data-slider-id="1">
                                    <?php
                                    $images = explode('|',$data[0]['property']->image);
                                    $p_count = count($images);
                                   ?>
                                   @foreach($images as $image)
                                    <img src="{{URL::to($image)}}" alt="property image" class="img-responsive"  >
                                   @endforeach




                                </div>
                                <!-- .carousel end -->
                                <div class="owl-thumbs thumbs-bg py-4" data-slider-id="1">

                                 <div class="row">
                                    @foreach ($images as $image )
                                     <div class="col-md-4">
                                        <img src="{{URL::to($image)}}" alt="property image" class="img-responsive" style="height: 100px" >
                                     </div>
                                     @endforeach
                                 </div>








                                </div>
                            </div>
                            <!-- .col-md-12 end -->
                        </div>
                    </div>
                    <!-- .row end -->
                </div>
                <!-- .property-single-desc end -->
                <div class="property-single-desc inner-box">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="heading">
                                <h2 class="heading--title"> Property Description</h2>
                            </div>
                        </div>
                        <!-- feature-panel #1 -->


                        <!-- feature-panel end -->
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="property--details">
                               <div class="row">

                                    {{-- <div class="col-md-4">
                                        <ul>

                                        </ul>
                                    </div> --}}

                               </div>
                                {{$data[0]['property']->description ?? ""}}

                            </div>
                            <!-- .property-details end -->
                        </div>
                        <!-- .col-md-12 end -->
                    </div>
                    <!-- .row end -->
                </div>
                <!-- .property-single-desc end -->


                <div class="property-single-features inner-box">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="heading">
                                <h2 class="heading--title">Community Feutures <small></small></h2>
                            </div>
                        </div>
                        <!-- feature-item #1 -->

                       @foreach($data[0]['feauture_communities'] as $feauture)
                        <div class="col-xs-6 col-sm-4 col-md-4">
                            <div class="feature-item">

                                <p>
                                    @foreach($feauture['real_c_feautures'] as $cf)
                                     {{$cf->c_feautures ?? ""}}
                                    @endforeach
                                </p>
                            </div>
                        </div>
                       @endforeach

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="heading">
                        <h2 class="heading--title">Exterior Features <small></small></h2>
                    </div>
                </div>

                    @forelse ($data[0]['exterior_feautures'] as $feauture )
                    <div class="col-xs-6 col-sm-4 col-md-4">
                        <div class="feature-item">

                            <p>
                                @forelse ( $feauture['real_ext_feautures'] as $ext_feauture )
                                {{$ext_feauture->exterior_features ??""}}

                                @empty
                                    N/A
                                @endforelse

                            </p>
                        </div>
                    </div>

                    @empty

                   @endforelse



                   <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="heading">
                        <h2 class="heading--title">Utility Data Features <small></small></h2>
                    </div>
                </div>

                    @foreach($data[0]['utilities_data'] as $feauture)
                    <div class="col-xs-6 col-sm-4 col-md-4">
                        <div class="feature-item">

                            <p>
                                @foreach($feauture['real_utilities_data_feautures'] as $utility_data_feauture)
                                {{$utility_data_feauture->utilities_data}}

                                @endforeach
                            </p>
                        </div>
                    </div>
                   @endforeach


                   <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="heading">
                        <h2 class="heading--title">Garage Feautures<small></small></h2>
                    </div>
                </div>

                    @foreach($data[0]['garage_data_feautures'] as $feauture)
                    <div class="col-xs-6 col-sm-4 col-md-4">
                        <div class="feature-item">

                            <p>
                                @foreach($feauture['real_garage_data_feautures'] as $garage_data_feauture)
                                {{$garage_data_feauture->garage_feautures ?? ""}}

                                @endforeach
                            </p>
                        </div>
                    </div>
                   @endforeach










                    </div>


                    <!-- .row end -->
                </div>

                <!-- .property-single-features end -->

                <div class="property-single-location inner-box">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="heading">
                                <h2 class="heading--title">Location</h2>
                            </div>
                        </div>
                        <!-- .col-md-12 end -->
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <ul class="list-unstyled mb-20">
                                <li><span>Address:</span>{{$data[0]['location']->address ?? ""}}</li>
                                <li><span>City:</span>{{$data[0]['city']->name ??""}}</li>
                                <li><span>Country:</span>{{$data[0]['country']->name ??""}}</li>
                                {{-- <li><span>State:</span>Newcastle</li> --}}
                                <li><span>Zip/Postal code:</span>{{$data[0]['city']->postalCode ??""}}</li>
                            </ul>
                        </div>
                        <!-- .col-md-12 end -->

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div id="googleMap" style="width:100%;height:380px;"></div>
                        </div>
                        <!-- .col-md-12 end -->
                    </div>
                    <!-- .row end -->
                </div>
                <!-- .property-single-location end -->

                <div class="property-single-design inner-box">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="heading">
                                <h2 class="heading--title">Floor Plans</h2>
                            </div>
                        </div>
                        <!-- .col-md-12 end -->
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="accordion accordion-1" id="accordion01">
                                <!-- Panel 01 -->
                                <div class="panel">
                                    <div class="panel--heading clearfix">
                                        <div class="pull-left">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion01" href="#collapse01-1">First Floor</a>
                                        </div>
                                        <div class="pull-right">
                                            <ul class="list-unstyled list-inline mb-0">
                                                <li><span>Size:</span>635 sq ft</li>
                                                <li><span>Rooms:</span>3</li>
                                                <li><span>Baths:</span>1</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div id="collapse01-1" class="panel--body panel-collapse collapse in">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercit ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in volupte velit esse cillum dolore eu fugiat.</p>
                                        <img src="assets/images/property-single/1.png" alt="img" class="img-responsive">
                                    </div>
                                </div>
                                <!-- .panel end -->
                                <!-- Panel 02 -->
                                <div class="panel">
                                    <div class="panel--heading clearfix">
                                        <div class="pull-left">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion01" href="#collapse01-2">Second Floor</a>
                                        </div>
                                        <div class="pull-right">
                                            <ul class="list-unstyled list-inline mb-0">
                                                <li><span>Size:</span>635 sq ft</li>
                                                <li><span>Rooms:</span>3</li>
                                                <li><span>Baths:</span>1</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div id="collapse01-2" class="panel--body panel-collapse collapse">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercit ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in volupte velit esse cillum dolore eu fugiat.</p>
                                        <img src="assets/images/property-single/1.png" alt="img" class="img-responsive">
                                    </div>
                                </div>
                                <!-- .panel end -->
                            </div>
                            <!-- End .Accordion-->
                        </div>
                        <!-- .col-md-12 end -->
                    </div>
                    <!-- .row end -->
                </div>

                <div class="property-single-reviews inner-box">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="heading">
                                <h2 class="heading--title">3 Reviews</h2>
                            </div>
                        </div>
                        <!-- .col-md-12 end -->
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <ul class="property-review">
                                <li class="review-comment">
                                    <div class="avatar">R</div>
                                    <div class="comment">
                                        <h6>Ryan Printz</h6>
                                        <div class="date">Feb 12, 2018</div>
                                        <div class="property-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectet adipisicing elit, sed eiusmod tempor incididun ut labore dolor magna aliqua enim minim veniam, quis nostrud.</p>
                                    </div>
                                </li>
                                <!-- comment end -->
                                <li class="review-comment">
                                    <div class="avatar">S</div>
                                    <div class="comment">
                                        <h6>Steve Martin</h6>
                                        <div class="date">Jan 16, 2018</div>
                                        <div class="property-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectet adipisicing elit, sed eiusmod tempor incididun ut labore dolor magna aliqua enim minim veniam, quis nostrud.</p>
                                    </div>
                                </li>
                                <!-- comment end -->
                                <li class="review-comment">
                                    <div class="avatar">N</div>
                                    <div class="comment">
                                        <h6>Nicole Smith</h6>
                                        <div class="date">Nov 25, 2017</div>
                                        <div class="property-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectet adipisicing elit, sed eiusmod tempor incididun ut labore dolor magna aliqua enim minim veniam, quis nostrud.</p>
                                    </div>
                                </li>
                                <!-- comment end -->
                            </ul>
                            <!-- .comments-list end -->
                        </div>
                        <!-- .col-md-12 end -->
                    </div>
                    <!-- .row end -->
                </div>
                <!-- .property-single-reviews end -->

                <div class="property-single-leave-review inner-box">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="heading">
                                <h2 class="heading--title">Leave a Review</h2>
                            </div>
                        </div>
                        <!-- .col-md-12 end -->
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <form id="post-comment" class="mb-0">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <label for="review-name">Your Name*</label>
                                            <input type="text" class="form-control" name="review-name" id="review-name" required>
                                        </div>
                                    </div>
                                    <!-- .col-md-4 end -->
                                    <div class="col-xs-12 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <label for="review-email">Your Email*</label>
                                            <input type="email" class="form-control" name="review-email" id="review-email" required>
                                        </div>
                                    </div>
                                    <!-- .col-md-4 end -->
                                    <!-- .col-md-4 end -->
                                    <div class="col-xs-12 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <label>Rating*</label>
                                            <div class="property-rating">
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- .col-md-4 end -->

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label for="review-comment">Review*</label>
                                            <textarea class="form-control" id="review-comment" rows="2" required></textarea>
                                        </div>
                                    </div>
                                    <!-- .col-md-12 -->
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <button type="submit" class="btn btn--primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- .col-md-12 end -->
                    </div>
                    <!-- .row end -->
                </div>
                <!-- .property-single-leave-review end -->
            </div>
            <!-- .col-md-8 -->
            <div class="col-xs-12 col-sm-12 col-md-4">
                <!-- widget property agent
=============================-->
                <div class="widget widget-property-agent">
                    <div class="widget--title">
                        <h5>About Agent</h5>
                    </div>
                    <div class="widget--content">
                        <a href="#">
                            <div class="agent--img">
                                <img src="assets/images/agents/grid/7.jpg" alt="agent" class="img-responsive">
                            </div>
                            <div class="agent--info">
                                <h5 class="agent--title">Matt Peters</h5>
                            </div>
                        </a>
                        <!-- .agent-profile-details end -->
                        <div class="agent--contact">
                            <ul class="list-unstyled">
                                <li><i class="fa fa-phone"></i>(950) 491-570-180</li>
                                <li><i class="fa fa-envelope-o"></i>support@example.com</li>
                                <li><i class="fa fa-link"></i>modernhouse.com</li>
                            </ul>
                        </div>
                        <!-- .agent-contact end -->
                        <div class="agent--social-links">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                        <!-- .agent-social-links -->
                    </div>
                </div>
                <!-- . widget property agent end -->

                <!-- widget request
=============================-->
                <div class="widget widget-request">
                    <div class="widget--title">
                        <h5>Request a Showing</h5>
                    </div>
                    <div class="widget--content">
                        <form class="mb-0">
                            <div class="form-group">
                                <label for="contact-name">Your Name*</label>
                                <input type="text" class="form-control" name="contact-name" id="contact-name" required>
                            </div>
                            <!-- .form-group end -->
                            <div class="form-group">
                                <label for="contact-email">Email Address*</label>
                                <input type="email" class="form-control" name="contact-email" id="contact-email" required>
                            </div>
                            <!-- .form-group end -->
                            <div class="form-group">
                                <label for="contact-phone">Phone Number</label>
                                <input type="text" class="form-control" name="contact-phone" id="contact-phone" placeholder="(optional)">
                            </div>
                            <!-- .form-group end -->
                            <div class="form-group">
                                <label for="message">Message*</label>
                                <textarea class="form-control" name="contact-message" id="message" rows="2" placeholder="(optional)"></textarea>
                            </div>
                            <!-- .form-group end -->
                            <input type="submit" value="Send Request" name="submit" class="btn btn--primary btn--block">
                        </form>
                    </div>
                </div>
                <!-- . widget request end -->

                <!-- widget featured property
=============================-->
                <div class="widget widget-featured-property">
                    <div class="widget--title">
                        <h5>Featured Properties</h5>
                    </div>
                    <div class="widget--content">
                        <div class="carousel carousel-dots" data-slide="1" data-slide-rs="1" data-autoplay="true" data-nav="false" data-dots="true" data-space="25" data-loop="true" data-speed="800">
                            <!-- .property-item #1 -->
                            @foreach($data[0]['feautured_properties'] as $featured_property)
                                <div class="property-item">
                                    @php
                                     $images = explode('|',$featured_property->image);
                                     @endphp

                                    <a href="{{route('propertyShow',[$featured_property->id])}}">
                                        <div class="property--img">
                                            <img src="{{URL::to($images[0])}}" alt="property image" class="img-responsive">
                                            <span class="property--status">{{$featured_property->option->name ?? ""}}</span>
                                        </div>
                                    </a>

                                    <div class="property--content">
                                        <div class="property--info">
                                            <h5 class="property--title">{{$featured_property->name ??""}}</h5>
                                            <p class="property--location">{{$featured_property->location->address ?? ""}}, {{$featured_property->city->name ?? ""}}, {{$featured_property->city->country->name ?? ""}}</p>
                                            <p class="property--price">${{$featured_property->price ?? ""}}</p>
                                        </div>
                                        <!-- .property-info end -->
                                    </div>
                                </div>
                            @endforeach



                        </div>
                        <!-- .carousel end -->
                    </div>
                </div>
                <!-- . widget featured property end -->

                <!-- widget mortgage calculator
=============================-->
                <div class="widget widget-mortgage-calculator">
                    <div class="widget--title">
                        <h5>Mortage Calculator</h5>
                    </div>
                    <div class="widget--content">
                        <form class="mb-0">
                            <div class="form-group">
                                <label for="sale-price">Sale Price</label>
                                <input type="text" class="form-control" name="sale-price" id="sale-price" placeholder="$">
                            </div>
                            <!-- .form-group end -->
                            <div class="form-group">
                                <label for="down-payment">Down Payment</label>
                                <input type="text" class="form-control" name="down-payment" id="down-payment" placeholder="$">
                            </div>
                            <!-- .form-group end -->
                            <div class="form-group">
                                <label for="term">Term</label>
                                <input type="text" class="form-control" name="term" id="term" placeholder="years">
                            </div>
                            <!-- .form-group end -->
                            <div class="form-group">
                                <label for="interest-rate">Interest Rate</label>
                                <input type="text" class="form-control" name="interest-rate" id="interest-rate" placeholder="%">
                            </div>
                            <!-- .form-group end -->
                            <input type="submit" value="Calculate" name="submit" class="btn btn--primary btn--block">
                        </form>
                    </div>
                </div>
                <!-- . widget mortgage calculator end -->
            </div>
            <!-- .col-md-4 -->
        </div>
        <!-- .row -->
    </div>
    <!-- .container -->
</section>


<!-- properties-carousel
============================================= -->
<section id="properties-carousel" class="properties-carousel pt-0">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="heading heading-2  mb-70">
                    <h2 class="heading--title">Similar Properties</h2>
                </div>
                <!-- .heading-title end -->
            </div>
            <!-- .col-md-12 end -->
        </div>
        <!-- .row end -->
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="carousel carousel-dots" data-slide="3" data-slide-rs="1" data-autoplay="true" data-nav="false" data-dots="true" data-space="25" data-loop="true" data-speed="800">
                    <!-- .property-item #1 -->
                   @foreach($data[0]['similar_properties'] as $simila_property)
                   {{-- {{$simila_property['similar_props']->name}} --}}
                   @php
                    $images = explode('|',$simila_property['similar_props']->image);
                   @endphp

                   <div class="property-item">
                    <div class="property--img">
                        {{-- <a href="/properties/{{$simila_property['similar_props']->id}}"> --}}
                            <a href="{{route('propertyShow',[$simila_property['similar_props']->id])}}">
                            <img src="{{URL::to($images[0])}}" alt="property image" class="img-responsive">
                            <span class="property--status">{{$simila_property['similar_props']->option->name ?? ""}}</span>
                      </a>
                    </div>
                    <div class="property--content">
                        <div class="property--info">
                            <h5 class="property--title"><a href="#"> {{$simila_property['similar_props']->name ?? ""}}</a></h5>
                            <p class="property--location">{{$simila_property['similar_props']->location->address ?? ""}},{{$simila_property['similar_props']->city->name ?? ""}} city, {{$simila_property['similar_props']->city->country->name ?? ""}}</p>
                            <p class="property--price">${{$simila_property['similar_props']->price ?? ""}}</p>
                        </div>
                        <!-- .property-info end -->
                        <div class="property--features">
                            <ul class="list-unstyled mb-0">
                                {{-- <li><span class="feature">Beds:</span><span class="feature-num">2</span></li>
                                <li><span class="feature">Baths:</span><span class="feature-num">1</span></li>
                                <li><span class="feature">Area:</span><span class="feature-num">200 sq ft</span></li> --}}
                            </ul>
                        </div>
                        <!-- .property-features end -->
                    </div>
                </div>

                   @endforeach


                            <!-- .property-features end -->
                        </div>
                    </div>
                    <!-- .property item end -->

                    <!-- .property-item #6 -->

                    <!-- .property item end -->

                </div>
                <!-- .carousel end -->
            </div>
            <!-- .col-md-12 -->
        </div>
        <!-- .row -->
    </div>
    <!-- .container -->
</section>
<!-- #properties-carousel  end  -->



@endsection
