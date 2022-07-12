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
                            <h1>Agents</h1>
                        </div>
                        <ol class="breadcrumb">
                            <li><a href="{{route('newhome')}}">Home</a></li>
                            <li class="active">Agents</li>
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
        <div class="row mb-55">
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
        <!-- .row end -->
        <div class="row">
            <!-- agent #4 -->
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="agent">
                    <div class="agent--img">
                        <img src="assets/images/agents/grid/4.png" alt="agent" />
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
                        <h5 class="agent--title">Adam Grason</h5>
                        <h6 class="agent--position">Realty Specialist</h6>
                    </div>
                    <!-- .agent-info end -->
                </div>
                <!-- .agent end -->
            </div>
            <!-- .col-md-4 end -->
            <!-- agent #5 -->
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="agent">
                    <div class="agent--img">
                        <img src="assets/images/agents/grid/5.png" alt="agent" />
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
                        <h5 class="agent--title">Brian Slater</h5>
                        <h6 class="agent--position">Sales Assistant</h6>
                    </div>
                    <!-- .agent-info end -->
                </div>
                <!-- .agent end -->
            </div>
            <!-- .col-md-4 end -->
            <!-- agent #6 -->
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="agent">
                    <div class="agent--img">
                        <img src="assets/images/agents/grid/6.png" alt="agent" />
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
                        <h5 class="agent--title">Matt Peters</h5>
                        <h6 class="agent--position">Assistant Broker</h6>
                    </div>
                    <!-- .agent-info end -->
                </div>
                <!-- .agent end -->
            </div>
            <!-- .col-md-4 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container -->
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
<!-- #cta1 end -->


@endsection

