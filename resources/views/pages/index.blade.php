{{-- @php(extract($data)) --}}


@extends('layouts.frontend.layouts')

@section('title')
 Afri MLS
@endsection

@section('landingPage-nav')
  @include('includes.homePageNavigation')
@endsection


@section('content')
    <!-- Hero Search
            ============================================= -->
    <section id="heroSearch" class="hero-search mtop-100 pt-0 pb-0">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="slider--content">
                        <div class="text-center">
                            <h1>Find/Sell your Property Today</h1>

                        </div>

                    </div>
                </div>
                <!-- .container  end -->
            </div>
            <!-- .slider-text end -->
        </div>
        <div class="carousel slider-navs" data-slide="1" data-slide-rs="1" data-autoplay="true" data-nav="true"
            data-dots="false" data-space="0" data-loop="true" data-speed="800">
            <!-- Slide #1 -->
            <div class="slide--item bg-overlay bg-overlay-dark3">
                <div class="bg-section">
                    <img src="assets/images/slider/slide-bg/1.jpg" alt="background">
                </div>
            </div>
            <!-- .slide-item end -->
            <!-- Slide #2 -->
            <div class="slide--item bg-overlay bg-overlay-dark3">
                <div class="bg-section">
                    <img src="assets/images/slider/slide-bg/2.jpg" alt="background">
                </div>
            </div>
            <!-- .slide-item end -->
            <!-- Slide #3 -->
            <div class="slide--item bg-overlay bg-overlay-dark3">
                <div class="bg-section">
                    <img src="assets/images/slider/slide-bg/3.jpg" alt="background">
                </div>
            </div>
            <!-- .slide-item end -->
        </div>
    </section>
    <!-- #property-single-slider end -->


    <!-- properties-carousel
            ============================================= -->
    <section id="properties-carousel" class="properties-carousel pt-90 pb-90">
        <div class="container">
            <div class="row">
                <form class="mb-0">
                    <div class="form-box search-properties">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-2">
                                <div class="form-group">
                                    <div class="select--box">
                                        <i class="fa fa-angle-down"></i>
                                        <select name="select-location" id="select-location">
                                            <option>Country</option>
                                            @foreach($data[0]['countries'] as $country)
                                            <option value="{{$country->id}}">{{$country->name}}</option>
                                            @endforeach
                                          {{-- <option>
                                            {{-- <option>Kenya</option>
                                            <option>Rwanda</option>
                                            <option>South Africa</option> --}}
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- .col-md-3 end -->

                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <div class="form-group">
                                    <div class="select--box">
                                        <i class="fa fa-angle-down"></i>
                                        <select name="select-location" id="select-location">
                                            <option>City/Neighbourhood</option>
                                            @foreach($data[0]['cities'] as $city)
                                              <option value="{{$city->id}}">{{$city->name}}</option>
                                            @endforeach
                                            {{-- <option>Westlands,Nairobi</option>
                                            <option>Westlands,Nairobi</option>
                                            <option>Westlands,Nairobi</option> --}}

                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- .col-md-3 end -->
                            <div class="col-xs-12 col-sm-6 col-md-2">
                                <div class="form-group">
                                    <div class="select--box">
                                        <i class="fa fa-angle-down"></i>
                                        <select name="select-type" id="select-type">
                                            <option>Property Type</option>
                                            @foreach($data[0]['categories'] as $category)
                                             <option value="{{$category->id}}">{{$category->name}}</option>
                                           @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- .col-md-3 end -->
                            <div class="col-xs-12 col-sm-6 col-md-2">
                                <div class="form-group">
                                    <div class="select--box">
                                        <i class="fa fa-angle-down"></i>
                                        <select name="select-status" id="select-status">
                                        <option>Any Status</option>
                                            @foreach($data[0]['options'] as $option)
                                                <option value='{{$option->id}}'>{{$option->name}}</option>
                                            @endforeach
                                       </select>
                                    </div>
                                </div>
                            </div>
                            <!-- .col-md-3 end -->
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <input type="submit" value="Search" name="submit" class="btn btn--primary btn--block">
                            </div>
                            <!-- .col-md-3 end --
                            <div class="col-xs-12 col-sm-6 col-md-3 option-hide">
                                <div class="form-group">
                                    <div class="select--box">
                                        <i class="fa fa-angle-down"></i>
                                        <select name="select-beds" id="select-beds">
                            <option>Beds</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- .col-md-3 end --
                            <div class="col-xs-12 col-sm-6 col-md-3 option-hide">
                                <div class="form-group">
                                    <div class="select--box">
                                        <i class="fa fa-angle-down"></i>
                                        <select name="select-baths" id="select-baths">
                            <option>Baths</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- .col-md-3 end --
                            <div class="col-xs-12 col-sm-6 col-md-6 option-hide">
                                <div class="filter mb-30">
                                    <p>
                                        <label for="amount">Price Range: </label>
                                        <input id="amount" type="text" class="amount" readonly>
                                    </p>
                                    <div class="slider-range"></div>
                                </div>
                            </div>
                            <!-- .col-md-3 end --
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <a href="#" class="less--options">More options</a>
                            </div>-->
                        </div>
                        <!-- .row end -->
                    </div>
                    <!-- .form-box end -->
                </form>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="heading heading-2 text-center mb-70">
                        <h2 class="heading--title">Featured Listing</h2>
                        <!-- <p class="heading--desc">Duis aute irure dolor in reprehed in volupted velit esse dolore</p>-->
                    </div>
                    <!-- .heading-title end -->
                </div>
                <!-- .col-md-12 end -->
            </div>
            <!-- .row end -->
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="carousel carousel-dots" data-slide="3" data-slide-rs="2" data-autoplay="true"
                        data-nav="false" data-dots="true" data-space="25" data-loop="true" data-speed="800">
                        <!-- .property-item #1 -->
                        @foreach($data[0]['properties'] as $property)

                        <div class="property-item">
                           <div class="property--img">
                               {{-- <a href="{{route('property',[$property->id])}}"> --}}
                                <a href="/properties/{{$property->id}}">
                                   {{-- <img src="{{URL::to($property->image)}}" alt="property image" height="500"
                                   class="img-responsive"> --}}
                                   <img src="{{asset('images/'.$property->image) }}" alt="property image"
                                   class="img-responsive" >

                                   {{-- <img src="assets/images/properties/house-1.png" alt="property image"
                                       class="img-responsive"> --}}
                                   {{-- <span class="property--status">#</span> --}}
                               </a>
                           </div>
                           <div class="property--content">
                               <div class="property--info">
                                   <h5 class="property--title"><a href="#">3 Bedroomed in Runda</a></h5>
                                   <p class="property--location"> {{$property->county->name}} , County</p>
                                   <p class="property--price"> ${{$property->price}}</p>
                               </div>
                               <!-- .property-info end -->
                               <div class="property--features">
                                   <ul class="list-unstyled mb-0">
                                       <li><span class="feature">Beds:</span><span class="feature-num">2</span>
                                       </li>
                                       <li><span class="feature">Baths:</span><span class="feature-num">1</span>
                                       </li>
                                       <li><span class="feature">Area:</span><span class="feature-num">200 sq
                                               ft</span></li>
                                   </ul>
                               </div>
                               <!-- .property-features end -->
                           </div>
                       </div>
                        @endforeach
                         <!-- .property item end -->

                        <!-- .property-item #2 -->
                        {{-- <div class="property-item">
                            <div class="property--img">
                                <a href="#">
                                    <img src="assets/images/properties/house-2.png" alt="property image"
                                        class="img-responsive">
                                    <span class="property--status">To Let</span>
                                </a>
                            </div>
                            <div class="property--content">
                                <div class="property--info">
                                    <h5 class="property--title">Maisonnette in Syokimau</h5>
                                    <p class="property--location">Machakos County</p>
                                    <p class="property--price">$235,000</p>
                                </div>
                                <!-- .property-info end -->
                                <div class="property--features">
                                    <ul class="list-unstyled mb-0">
                                        <li><span class="feature">Beds:</span><span class="feature-num">3</span>
                                        </li>
                                        <li><span class="feature">Baths:</span><span class="feature-num">2</span>
                                        </li>
                                        <li><span class="feature">Area:</span><span class="feature-num">1120 sq
                                                ft</span></li>
                                    </ul>
                                </div>
                                <!-- .property-features end -->
                            </div>
                        </div> --}}
                        <!-- .property item end -->

                        <!-- .property-item #3 -->
                        {{-- <div class="property-item">
                            <div class="property--img">
                                <a href="#">
                                    <img src="assets/images/properties/house-3.png" alt="property image"
                                        class="img-responsive">
                                    <span class="property--status">For Rent</span>
                                </a>
                            </div>
                            <div class="property--content">
                                <div class="property--info">
                                    <h5 class="property--title">Apartment in Kilimani</h5>
                                    <p class="property--location">Nairobi</p>
                                    <p class="property--price">$1,550<span class="time">month</span></p>
                                </div>
                                <!-- .property-info end -->
                                <div class="property--features">
                                    <ul class="list-unstyled mb-0">
                                        <li><span class="feature">Beds:</span><span class="feature-num">2</span>
                                        </li>
                                        <li><span class="feature">Baths:</span><span class="feature-num">2</span>
                                        </li>
                                        <li><span class="feature">Area:</span><span class="feature-num">1390 sq
                                                ft</span></li>
                                    </ul>
                                </div>
                                <!-- .property-features end -->
                            </div>
                        </div> --}}
                        <!-- .property item end -->


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
