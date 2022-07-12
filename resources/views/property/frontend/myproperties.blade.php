@extends('layouts.frontend.layouts')

@section('landingPage-nav')
@include('includes.homePageNavigation')
  
@endsection

@section('content')
  <!-- Page Title #1
============================================ -->
<section id="page-title" class="page-title bg-overlay bg-overlay-dark2">
    <div class="bg-section">
        <img src="assets/images/page-titles/1.jpg" alt="Background" />
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                <div class="title title-1 text-center">
                    <div class="title--content">
                        <div class="title--heading">
                            <h1>my properties</h1>
                        </div>
                        <ol class="breadcrumb">
                            <li><a href="{{route('newhome')}}">Home</a></li>
                            <li class="active">my properties</li>
                        </ol>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <!-- .title end -->
            </div>
            <!-- .col-md-12 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- #page-title end -->

<!-- #my properties
============================================= -->
<section id="my-properties" class="my-properties properties-list">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="edit--profile-area">
                    <ul class="edit--profile-links list-unstyled mb-0">
                        <li><a href="user-profile.html" class="active">Edit Profile</a></li>
                        <li><a href="social-profile.html">Social Profiles</a></li>
                        <li><a href="my-properties.html">My Properties</a></li>
                        <li><a href="favourite-properties.html">Favorite Properties</a></li>
                        <li><a href="{{route('addProperty')}}">Add Property</a></li>
                    </ul>
                </div>
            </div>
            <!-- .col-md-4 -->
            <div class="col-xs-12 col-sm-8 col-md-8">
                <!-- .property-item #1 -->
                <div class="property-item">
                    <div class="property--img">
                        <a href="#">
                <img src="assets/images/properties/4.jpg" alt="property image" class="img-responsive">
                <span class="property--status">For Sale</span>
                </a>
                    </div>
                    <div class="property--content">
                        <div class="property--info">
                            <h5 class="property--title"><a href="#">House in Sheffleld Ave</a></h5>
                            <p class="property--location">2003 Sheffield Ave, Anderson, IN 46011</p>
                            <p class="property--price">$115,000</p>
                        </div>
                        <!-- .property-info end -->
                        <div class="property--features">
                            <ul>
                                <li><span class="feature">Beds:</span><span class="feature-num">4</span></li>
                                <li><span class="feature">Baths:</span><span class="feature-num">2</span></li>
                                <li><span class="feature">Area:</span><span class="feature-num">2500 sq ft</span></li>

                            </ul>
                            <a href="#" class="edit--btn"><i class="fa fa-edit"></i>Edit</a>
                        </div>
                        <!-- .property-features end -->
                    </div>
                </div>
                <!-- .property item end -->

                <!-- .property-item #2 -->
                <div class="property-item">
                    <div class="property--img">
                        <a href="#">
                <img src="assets/images/properties/5.jpg" alt="property image" class="img-responsive">
                <span class="property--status">For Rent</span>
                </a>
                    </div>
                    <div class="property--content">
                        <div class="property--info">
                            <h5 class="property--title"><a href="#">2750 House in Urban St.</a></h5>
                            <p class="property--location">2750 Urban Street Dr, Anderson, IN 46011</p>
                            <p class="property--price">$1,550<span class="time">month</span></p>
                        </div>
                        <!-- .property-info end -->
                        <div class="property--features">
                            <ul>
                                <li><span class="feature">Beds:</span><span class="feature-num">2</span></li>
                                <li><span class="feature">Baths:</span><span class="feature-num">1</span></li>
                                <li><span class="feature">Area:</span><span class="feature-num">1390 sq ft</span></li>
                                <li class="pull-right"><a href="#" class="edit--btn"><i class="fa fa-edit"></i>Edit</a></li>
                            </ul>
                        </div>
                        <!-- .property-features end -->
                    </div>
                </div>
                <!-- .property item end -->

                <!-- .property-item #3 -->
                <div class="property-item">
                    <div class="property--img">
                        <a href="#">
                <img src="assets/images/properties/6.jpg" alt="property image" class="img-responsive">
                <span class="property--status">For Rent</span>
                </a>
                    </div>
                    <div class="property--content">
                        <div class="property--info">
                            <h5 class="property--title"><a href="#">Apartment For Rent</a></h5>
                            <p class="property--location">1609 N Richmond St, Chicago, IL 60647</p>
                            <p class="property--price">$900<span class="time">month</span></p>
                        </div>
                        <!-- .property-info end -->
                        <div class="property--features">
                            <ul>
                                <li><span class="feature">Beds:</span><span class="feature-num">1</span></li>
                                <li><span class="feature">Baths:</span><span class="feature-num">1</span></li>
                                <li><span class="feature">Area:</span><span class="feature-num">500 sq ft</span></li>
                                <li class="pull-right"><a href="#" class="edit--btn"><i class="fa fa-edit"></i>Edit</a></li>
                            </ul>
                        </div>
                        <!-- .property-features end -->
                    </div>
                </div>
                <!-- .property item end -->

                <!-- .property-item #4 -->
                <div class="property-item">
                    <div class="property--img">
                        <a href="#">
                <img src="assets/images/properties/7.jpg" alt="property image" class="img-responsive">
                <span class="property--status">For Rent</span>
                </a>
                    </div>
                    <div class="property--content">
                        <div class="property--info">
                            <h5 class="property--title"><a href="#">House in Miami Town</a></h5>
                            <p class="property--location">415 E North Water, Miami 60611</p>
                            <p class="property--price">$210,000</p>
                        </div>
                        <!-- .property-info end -->
                        <div class="property--features">
                            <ul>
                                <li><span class="feature">Beds:</span><span class="feature-num">2</span></li>
                                <li><span class="feature">Baths:</span><span class="feature-num">2</span></li>
                                <li><span class="feature">Area:</span><span class="feature-num">1370 sq ft</span></li>
                                <li class="pull-right"><a href="#" class="edit--btn"><i class="fa fa-edit"></i>Edit</a></li>
                            </ul>
                        </div>
                        <!-- .property-features end -->
                    </div>
                </div>
                <!-- .property item end -->
                <div class="mt-50 text--center">
                    <ul class="pagination">
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">...</a></li>
                        <li>
                            <a href="#" aria-label="Next">
                    <span aria-hidden="true"><i class="fa fa-angle-right"></i></span>
                </a>
                        </li>
                    </ul>
                </div>
                <!-- .pagination end -->
            </div>
            <!-- .col-md-8 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- #my properties  end -->

<!-- cta #1
============================================= -->
<section id="cta" class="cta cta-1 text-center bg-overlay bg-overlay-dark pt-90">
    <div class="bg-section"><img src="assets/images/cta/bg-1.jpg" alt="Background"></div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                <h3>Join our professional team & agents to start selling your house</h3>
                <a href="#" class="btn btn--primary">Contact</a>
            </div>
            <!-- .col-md-6 -->
        </div>
        <!-- .row -->
    </div>
    <!-- .container -->
</section>
<!-- #cta1 end -->


@endsection
