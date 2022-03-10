@extends('layouts.frontend.layouts')
@section('otherLandingPages-nav')
  @include('includes.otherpagesnavigation')
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
                            <h1>Agent Profile</h1>
                        </div>
                        <ol class="breadcrumb">
                            <li><a href="{{route('landingPage')}}">Home</a></li>
                            <li class="active">Agent Profile</li>
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


<!-- agent-profile
============================================= -->
<section id="agent-profile" class="agent-profile bg-white">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-5 col-md-5">
                <div class="agent--profile-img">
                    <img src="assets/images/agents/single/1.jpg" alt="agent" />
                </div>
            </div>
            <!-- .col-md-5 end -->
            <div class="col-xs-12 col-sm-6 col-md-5 col-md-offset-1">
                <div class="agent--profile-content">
                    <div class="agent--info">
                        <h5 class="agent--title">Steve Martin</h5>
                        <p class="agent--position">Buying Agent</p>
                    </div>
                    <!-- .agent-info end -->
                    <div class="agent--profile-details">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercit.</p>
                    </div>
                    <!-- .agent-profile-details end -->
                    <div class="agent--profile-contact">
                        <ul class="list-unstyled mb-20 clearfix">
                            <li><span>Phone:</span>(950) 491-570-180</li>
                            <li><span>Email:</span>support@example.com</li>
                            <li><span>Mobile:</span>(+20) 220-145-6330</li>
                            <li><span>Website:</span>modernhouse.com</li>
                            <li><span>Fax:</span>(+44) 161-430-1620</li>
                        </ul>
                    </div>
                    <!-- .agent-profile-contact end -->
                    <div class="agent--social-links">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-pinterest-p"></i></a>
                    </div>
                    <!-- .agent-social-links end -->
                </div>
            </div>
            <!-- .col-md-5 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container -->
</section>
<!-- #agent-profile  end  -->

<!-- properties-carousel
============================================= -->
<section id="properties-carousel" class="properties-carousel">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="heading heading-2  mb-70">
                    <h2 class="heading--title">My Properties</h2>
                </div>
                <!-- .heading-title end -->
            </div>
            <!-- .col-md-12 end -->
        </div>
        <!-- .row end -->
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="carousel carousel-dots" data-slide="3" data-slide-rs="2" data-autoplay="false" data-nav="false" data-dots="true" data-space="25" data-loop="true" data-speed="800">

                    <!-- .property-item #1 -->
                    <div class="property-item">
                        <div class="property--img">
                            <a href="#">
                            <img src="assets/images/properties/1.jpg" alt="property image" class="img-responsive">
                            <span class="property--status">For Sale</span>
</a>
                        </div>
                        <div class="property--content">
                            <div class="property--info">
                                <h5 class="property--title"><a href="#">House in Kent Street</a></h5>
                                <p class="property--location">127 Kent Street, Sydney, NSW 2000</p>
                                <p class="property--price">$130,000</p>
                            </div>
                            <!-- .property-info end -->
                            <div class="property--features">
                                <ul class="list-unstyled mb-0">
                                    <li><span class="feature">Beds:</span><span class="feature-num">2</span></li>
                                    <li><span class="feature">Baths:</span><span class="feature-num">2</span></li>
                                    <li><span class="feature">Area:</span><span class="feature-num">587 sq ft</span></li>
                                </ul>
                            </div>
                            <!-- .property-features end -->
                        </div>
                    </div>
                    <!-- .property item end -->

                    <!-- .property-item #2 -->
                    <div class="property-item">
                        <div class="property--img">
                            <a href="#">
                            <img src="assets/images/properties/2.jpg" alt="property image" class="img-responsive">
                            <span class="property--status">For Rent</span>
</a>
                        </div>
                        <div class="property--content">
                            <div class="property--info">
                                <h5 class="property--title"><a href="#">Villa in Oglesby Ave</a></h5>
                                <p class="property--location">1035 Oglesby Ave, Chicago, IL 60617</p>
                                <p class="property--price">$130,000<span class="time">month</span></p>
                            </div>
                            <!-- .property-info end -->
                            <div class="property--features">
                                <ul class="list-unstyled mb-0">
                                    <li><span class="feature">Beds:</span><span class="feature-num">4</span></li>
                                    <li><span class="feature">Baths:</span><span class="feature-num">3</span></li>
                                    <li><span class="feature">Area:</span><span class="feature-num">800 sq ft</span></li>
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
                            <img src="assets/images/properties/3.jpg" alt="property image" class="img-responsive">
                            <span class="property--status">For Sale</span>
</a>
                        </div>
                        <div class="property--content">
                            <div class="property--info">
                                <h5 class="property--title"><a href="#">Apartment in Long St.</a></h5>
                                <p class="property--location">34 Long St, Jersey City, NJ 07305</p>
                                <p class="property--price">$70,000</p>
                            </div>
                            <!-- .property-info end -->
                            <div class="property--features">
                                <ul class="list-unstyled mb-0">
                                    <li><span class="feature">Beds:</span><span class="feature-num">2</span></li>
                                    <li><span class="feature">Baths:</span><span class="feature-num">1</span></li>
                                    <li><span class="feature">Area:</span><span class="feature-num">200 sq ft</span></li>
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
                            <img src="assets/images/properties/1.jpg" alt="property image" class="img-responsive">
                            <span class="property--status">For Sale</span>
</a>
                        </div>
                        <div class="property--content">
                            <div class="property--info">
                                <h5 class="property--title"><a href="#">House in Kent Street</a></h5>
                                <p class="property--location">127 Kent Street, Sydney, NSW 2000</p>
                                <p class="property--price">$130,000</p>
                            </div>
                            <!-- .property-info end -->
                            <div class="property--features">
                                <ul class="list-unstyled mb-0">
                                    <li><span class="feature">Beds:</span><span class="feature-num">2</span></li>
                                    <li><span class="feature">Baths:</span><span class="feature-num">2</span></li>
                                    <li><span class="feature">Area:</span><span class="feature-num">587 sq ft</span></li>
                                </ul>
                            </div>
                            <!-- .property-features end -->
                        </div>
                    </div>
                    <!-- .property item end -->

                    <!-- .property-item #5 -->
                    <div class="property-item">
                        <div class="property--img">
                            <a href="#">
                            <img src="assets/images/properties/2.jpg" alt="property image" class="img-responsive">
                            <span class="property--status">For Rent</span>
</a>
                        </div>
                        <div class="property--content">
                            <div class="property--info">
                                <h5 class="property--title"><a href="#">Villa in Oglesby Ave</a></h5>
                                <p class="property--location">1035 Oglesby Ave, Chicago, IL 60617</p>
                                <p class="property--price">$130,000<span class="time">month</span></p>
                            </div>
                            <!-- .property-info end -->
                            <div class="property--features">
                                <ul class="list-unstyled mb-0">
                                    <li><span class="feature">Beds:</span><span class="feature-num">4</span></li>
                                    <li><span class="feature">Baths:</span><span class="feature-num">3</span></li>
                                    <li><span class="feature">Area:</span><span class="feature-num">800 sq ft</span></li>
                                </ul>
                            </div>
                            <!-- .property-features end -->
                        </div>
                    </div>
                    <!-- .property item end -->

                    <!-- .property-item #6 -->
                    <div class="property-item">
                        <div class="property--img">
                            <a href="#">
                            <img src="assets/images/properties/3.jpg" alt="property image" class="img-responsive">
                            <span class="property--status">For Sale</span>
</a>
                        </div>
                        <div class="property--content">
                            <div class="property--info">
                                <h5 class="property--title"><a href="#">Apartment in Long St.</a></h5>
                                <p class="property--location">34 Long St, Jersey City, NJ 07305</p>
                                <p class="property--price">$70,000</p>
                            </div>
                            <!-- .property-info end -->
                            <div class="property--features">
                                <ul class="list-unstyled mb-0">
                                    <li><span class="feature">Beds:</span><span class="feature-num">2</span></li>
                                    <li><span class="feature">Baths:</span><span class="feature-num">1</span></li>
                                    <li><span class="feature">Area:</span><span class="feature-num">200 sq ft</span></li>
                                </ul>
                            </div>
                            <!-- .property-features end -->
                        </div>
                    </div>
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

<!-- Contact #2
============================================= -->
<section id="contact2" class="contact contact-2 bg-white">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="heading heading-2 mb-50">
                    <h2 class="heading--title">Contact Us</h2>
                </div>
            </div>
            <!-- .col-md-12 end -->
        </div>
        <!-- .row end -->
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <form class="mb-0">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-4">
                            <div class="form-group">
                                <label for="contact-name">Your Name*</label>
                                <input type="text" class="form-control" name="contact-name" id="contact-name" required>
                            </div>
                        </div>
                        <!-- .col-md-4 end -->
                        <div class="col-xs-12 col-sm-12 col-md-4">
                            <div class="form-group">
                                <label for="contact-email">Email Address*</label>
                                <input type="email" class="form-control" name="contact-email" id="contact-email" required>
                            </div>
                        </div>
                        <!-- .col-md-4 end -->
                        <div class="col-xs-12 col-sm-12 col-md-4">
                            <div class="form-group">
                                <label for="phone-number">Phone Number</label>
                                <input type="text" class="form-control" name="phone-number" id="phone-number" placeholder="(optional)">
                            </div>
                        </div>
                        <!-- .col-md-4 end -->
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <label for="message">Message*</label>
                                <textarea class="form-control" name="contact-message" id="message" rows="2" required></textarea>
                            </div>
                        </div>
                        <!-- .col-md-12 end -->
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <input type="submit" value="Send Message" name="submit" class="btn btn--primary">
                        </div>
                        <!-- .col-md-12 -->
                    </div>
                </form>
            </div>
            <!-- .col-md-12 end -->
        </div>
        <!-- .row end -->
    </div>
</section>
<!-- #contact2  end -->

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
