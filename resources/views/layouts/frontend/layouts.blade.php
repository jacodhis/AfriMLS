<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="author" content="zytheme" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Real Estate html5 template">
    {{-- <link href="{{ asset('assets/images/favicon/favicon.png')}}" rel="icon"> --}}

    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CPoppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">


    <link href="{{ asset('assets/css/external.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
   

    <title>@yield('title')</title>
</head>

<body>
    <!-- Document Wrapper
 ============================================= -->
    <div id="wrapper" class="wrapper clearfix">
        <header id="navbar-spy" class="header header-1 header-transparent header-fixed">
            <nav id="primary-menu" class="navbar navbar-fixed-top">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="logo" href="{{route('newhome')}}">

                                <img class="logo-light" src="{{asset('assets/images/logo/AfriMLS-logo-web.jpg')}}" height="60"
                                alt="Afri MLS Logo">

                            <img class="logo-dark" src="{{asset('assets/images/logo/AfriMLS-logo-web.jpg')}}" height="60"
                                alt="Afri MLS Logo">
                        </a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse pull-right" id="navbar-collapse-1">
                        <ul class="nav navbar-nav nav-pos-center navbar-left">
                           @yield('landingPage-nav')
                          
                        </ul>
                       
                        @include('includes.signUp-login')

                    </div>

                </div>
              
            </nav>


        </header>
        @yield('content')
   

<section id="cta" class="cta cta-1 text-center bg-overlay bg-overlay-dark pt-90">
    <div class="bg-section">
        {{-- <img src="assets/images/cta/bg-1.jpg" alt="Background"> --}}
    </div>
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

    <!-- Footer #1
============================================= -->
    <footer id="footer" class="footer footer-1 bg-white">
        <div class="footer-widget">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-3 col-md-2 col-md-offset-1 widget--links">
                        <div class="widget--title">
                            <h5>AfriLMS</h5>
                        </div>
                        <div class="widget--content">
                            <ul class="list-unstyled mb-0">
                                <li><a href="{{route('newhome')}}">Home</a></li>
                                <li><a href="#">About Us</a></li>
                                {{-- <li><a href="#">To Let</a></li> --}}
                                <li><a href="#">For Sale</a></li>
                                <li><a href="{{route('contactPage')}}">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4 col-md-offset-5 widget--newsletter">

                        <h6>Follow Us On</h6>
                        <div class="social-icons">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-youtube"></i></a>
                        </div>
                        <div>
                            <p>© 2022 <a href="#">AfriLMS</a>, All Rights Reserved.</p>
                            <p><a href="#">Privacy Policy</a></p>
                            <p><a href="#">Terms</a></p>
                        </div>
                    </div>
                </div>
                <!-- .col-md-4 end -->

            </div>
        </div>
    </footer>
    <!-- #wrapper end -->

    <!-- Footer Scripts
============================================= -->
    <script src="{{asset('assets/js/jquery-2.2.4.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins.js')}}"></script>
    <script src="{{asset('assets/js/functions.js')}}"></script>
</body>

</html>
