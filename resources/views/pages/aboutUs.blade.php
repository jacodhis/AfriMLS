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
                            <h1>About</h1>
                        </div>
                        <ol class="breadcrumb">
                            <li><a href="{{route('landingPage')}}">Home</a></li>
                            <li class="active">About</li>
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

<!-- about #1
============================================= -->
<section id="about" class="about bg-white">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-5 col-md-5">
                <div class="about--img"><img class="img-responsive" src="assets/images/about/1.jpg" alt="about img"></div>
            </div>
            <!-- .col-md-5 -->
            <div class="col-xs-12 col-sm-7 col-md-6 col-md-offset-1">
                <div class="heading heading-3">
                    <h2 class="heading--title">We Provide Lovable Experiment in the Real Estate Field</h2>
                </div>
                <!-- .heading-title end -->
                <div class="about--panel">
                    <h3>Our Vision</h3>
                    <p>Propin ipsum dolor sit amet, consectetur adipisicing elited eiusmod tempore incidid ut labor et dolore magna aliquaut enim ad minim veniam.</p>
                </div>
                <!-- .about-panel end -->
                <div class="about--panel">
                    <h3>Our Goal</h3>
                    <p>Duis aute viele irure dolor in reprer volupta velite esse cilume dolore eu fugiat nulla pariatur. Excepteur sint occae cupidat non proident.</p>
                </div>
                <!-- .about-panel end -->
            </div>
            <!-- .col-md-6 -->
        </div>
        <!-- .row -->
    </div>
    <!-- .container -->
</section>
<!-- #about end -->

<!-- Feature
============================================= -->
<section id="feature" class="feature feature-left pt-90 pb-30">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="heading heading-2 text-center mb-70">
                    <h2 class="heading--title">What We Provide?</h2>
                    <p class="heading--desc">Duis aute irure dolor in reprehed in volupted velit esse dolore</p>
                </div>
                <!-- .heading-title end -->
            </div>
            <!-- .col-md-12 end -->
        </div>
        <!-- .row end -->
        <div class="row">
            <!-- feature Panel #1 -->
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="feature-panel">
                    <div class="feature--icon">
                        <img src="assets/images/features/icons/1.png" alt="icon img">
                    </div>
                    <div class="feature--content">
                        <h3>Presenting Your Property</h3>
                        <p>Duis sed odio sit amet nibh vtate cursusa sit amet mauris morbi accum ipsum velit nam nec tellus viele a odio tincidet auctor ornare odio. Sede non mauris vitae erat conquat.</p>
                    </div>
                </div>
                <!-- .feature-panel end -->
            </div>
            <!-- .col-md-6 end -->
            <!-- feature Panel #2 -->
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="feature-panel">
                    <div class="feature--icon">
                        <img src="assets/images/features/icons/2.png" alt="icon img">
                    </div>
                    <div class="feature--content">
                        <h3>Renting or Selling</h3>
                        <p>Duis sed odio sit amet nibh vtate cursusa sit amet mauris morbi accum ipsum velit nam nec tellus viele a odio tincidet auctor ornare odio. Sede non mauris vitae erat conquat.</p>
                    </div>
                </div>
                <!-- .feature-panel end -->
            </div>
            <!-- .col-md-6 end -->
            <!-- feature Panel #3 -->
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="feature-panel">
                    <div class="feature--icon">
                        <img src="assets/images/features/icons/3.png" alt="icon img">
                    </div>
                    <div class="feature--content">
                        <h3>Property Exchange</h3>
                        <p>Duis sed odio sit amet nibh vtate cursusa sit amet mauris morbi accum ipsum velit nam nec tellus viele a odio tincidet auctor ornare odio. Sede non mauris vitae erat conquat.</p>
                    </div>
                </div>
                <!-- .feature-panel end -->
            </div>
            <!-- .col-md-6 end -->
            <!-- feature Panel #4 -->
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="feature-panel">
                    <div class="feature--icon">
                        <img src="assets/images/features/icons/4.png" alt="icon img">
                    </div>
                    <div class="feature--content">
                        <h3>Buying a Property</h3>
                        <p>Duis sed odio sit amet nibh vtate cursusa sit amet mauris morbi accum ipsum velit nam nec tellus viele a odio tincidet auctor ornare odio. Sede non mauris vitae erat conquat.</p>
                    </div>
                </div>
                <!-- .feature-panel end -->
            </div>
            <!-- .col-md-6 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- .feature end -->

<!-- agents
============================================= -->
<section id="agents" class="agents bg-white pt-90">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="heading heading-2 text-center mb-70">
                    <h2 class="heading--title">Trusted Agents</h2>
                    <p class="heading--desc">Duis aute irure dolor in reprehed in volupted velit esse dolore</p>
                </div>
                <!-- .heading end -->
            </div>
            <!-- .col-md-12 end -->
        </div>
        <!-- .row end -->
        <div class="row">
            <!-- agent #1 -->
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="agent">
                    <div class="agent--img">
                        <img src="assets/images/agents/grid/1.png" alt="agent" />
                        <div class="agent--details">
                            <p>Lorem ipsum dolor sit amet, consece adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore.</p>
                            <div class="agent--social-links">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- .agent-img end -->
                    <div class="agent--info">
                        <h5 class="agent--title">Steve Martin</h5>
                        <h6 class="agent--position">Buying Agent</h6>
                    </div>
                    <!-- .agent-info end -->
                </div>
                <!-- .agent end -->
            </div>
            <!-- .col-md-4 end -->
            <!-- agent #2 -->
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="agent">
                    <div class="agent--img">
                        <img src="assets/images/agents/grid/2.png" alt="agent" />
                        <div class="agent--details">
                            <p>Lorem ipsum dolor sit amet, consece adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore.</p>
                            <div class="agent--social-links">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- .agent-img end -->
                    <div class="agent--info">
                        <h5 class="agent--title">Mark Smith</h5>
                        <h6 class="agent--position">Selling Agent</h6>
                    </div>
                    <!-- .agent-info end -->
                </div>
                <!-- .agent end -->
            </div>
            <!-- .col-md-4 end -->
            <!-- agent #3 -->
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="agent">
                    <div class="agent--img">
                        <img src="assets/images/agents/grid/3.png" alt="agent" />
                        <div class="agent--details">
                            <p>Lorem ipsum dolor sit amet, consece adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore.</p>
                            <div class="agent--social-links">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- .agent-img end -->
                    <div class="agent--info">
                        <h5 class="agent--title">Ryan Printz</h5>
                        <h6 class="agent--position">Real Estate Broker</h6>
                    </div>
                    <!-- .agent-info end -->
                </div>
                <!-- .agent end -->
            </div>
            <!-- .col-md-4 end -->

        </div>
    </div>
</section>
<!-- #agents end  -->

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

@endsection

