@extends('layouts.frontend.layouts')
@section('otherLandingPages-nav')
    @include('includes.otherpagesnavigation')
@endsection

@section('title')
    properties show page
@endsection

@section('content')
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
                                <h1> Properties List</h1>
                            </div>
                            <ol class="breadcrumb">
                                <li><a href="{{ route('landingPage') }}">Home</a></li>
                                <li class="active"> Properties</li>
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

    <!-- properties-grid
    ============================================= -->
    <section id="properties-grid">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-4">
                    <!-- widget property type
    =============================-->
                    <div class="widget widget-property">
                        <div class="widget--title">
                            <h5>Property Type</h5>
                        </div>

                        <div class="widget--content">
                            @forelse ($data[0]['propertyTypes'] as $propertyType)
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <a href="#">{{ $propertyType->name }}
                                            <span>({{ $propertyType->properties->count() ?? '' }})</span></a>
                                    </li>
                                </ul>

                            @empty
                                No property Type
                            @endforelse


                        </div>
                    </div>
                    <!-- . widget property type end -->

                    <!-- widget property status
    =============================-->
                    <div class="widget widget-property">
                        <div class="widget--title">
                            <h5>Property Status</h5>
                        </div>
                        <div class="widget--content">
                            @forelse ($data[0]['options'] as $option)
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <a href="#">{{ $option->name ?? '' }}
                                            <span>({{ $option->properties->count() ?? '' }})</span></a>
                                    </li>
                                </ul>
                            @empty
                            @endforelse
                        </div>
                    </div>
                    <!-- . widget property status end -->


                    <!-- widget property city
    =============================-->
                    <div class="widget widget-property">
                        <div class="widget--title">
                            <h5>Property By City</h5>
                            <input type="text" class="form-control" id="searchCity">
                        </div>
                        <div class="widget--content">
                            @forelse ($data[0]['cities'] as $city)
                                <ul class="querySearch list-unstyled mb-0" id="list">
                                    <li>
                                        <a href="#" id="{{ $city->id }}">{{ $city->name ?? '' }}</a>
                                        {{-- <span style="inline">({{$city->properties->count()??""}})</span> --}}
                                    </li>

                                </ul>
                            @empty
                            @endforelse
                            {{-- {{$data[0]['cities']->links()}} --}}
                        </div>
                    </div>
                    <!-- . widget property city end -->



                    <!-- widget featured property
    =============================-->
                    <div class="widget widget-featured-property">
                        <div class="widget--title">
                            <h5>Featured Properties</h5>
                        </div>
                        <div class="widget--content">
                            <div class="carousel carousel-dots" data-slide="1" data-slide-rs="1" data-autoplay="false"
                                data-nav="false" data-dots="true" data-space="0" data-loop="true" data-speed="800">
                                <!-- .property-item #1 -->
                                <div class="property-item">
                                    <div class="property--img">
                                        <img src="assets/images/properties/13.jpg" alt="property image"
                                            class="img-responsive">
                                        <span class="property--status">For Rent</span>
                                    </div>
                                    <div class="property--content">
                                        <div class="property--info">
                                            <h5 class="property--title"><a href="property-single-gallery.html">House in
                                                    Chicago</a></h5>
                                            <p class="property--location">1445 N State Pkwy, Chicago, IL 60610</p>
                                            <p class="property--price">$1200<span class="time">month</span></p>
                                        </div>
                                        <!-- .property-info end -->
                                    </div>
                                </div>
                                <!-- .property item end -->
                                <!-- .property-item #2 -->
                                <div class="property-item">
                                    <div class="property--img">
                                        <img src="assets/images/properties/2.jpg" alt="property image"
                                            class="img-responsive">
                                        <span class="property--status">For Rent</span>
                                    </div>
                                    <div class="property--content">
                                        <div class="property--info">
                                            <h5 class="property--title"><a href="property-single-gallery.html">Villa in
                                                    Oglesby Ave</a></h5>
                                            <p class="property--location">1035 Oglesby Ave, Chicago, IL 60617</p>
                                            <p class="property--price">$130,000<span class="time">month</span></p>
                                        </div>
                                        <!-- .property-info end -->
                                    </div>
                                </div>
                                <!-- .property item end -->
                                <!-- .property-item #3 -->
                                <div class="property-item">
                                    <div class="property--img">
                                        <img src="assets/images/properties/3.jpg" alt="property image"
                                            class="img-responsive">
                                        <span class="property--status">For Sale</span>
                                    </div>
                                    <div class="property--content">
                                        <div class="property--info">
                                            <h5 class="property--title"><a href="property-single-gallery.html">Apartment in
                                                    Long St.</a></h5>
                                            <p class="property--location">34 Long St, Jersey City, NJ 07305</p>
                                            <p class="property--price">$70,000</p>
                                        </div>
                                        <!-- .property-info end -->
                                    </div>
                                </div>
                                <!-- .property item end -->
                            </div>
                            <!-- .carousel end -->
                        </div>
                    </div>
                    <!-- . widget featured property end -->
                </div>
                <!-- .col-md-4 end -->
                <div class="col-xs-12 col-sm-12 col-md-8">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="properties-filter clearfix">
                                <div class="select--box pull-left">
                                    <label>Sort by:</label>
                                    <i class="fa fa-angle-up"></i>
                                    <i class="fa fa-angle-down"></i>
                                    <select>
                                        <option selected="" value="Default">Default Sorting</option>
                                        <option value="Larger">Newest Items</option>
                                        <option value="Larger">oldest Items</option>
                                        <option value="Larger">Hot Items</option>
                                        <option value="Small">Highest Price</option>
                                        <option value="Medium">Lowest Price</option>
                                    </select>
                                </div>
                                <!-- .select-box -->
                                <div class="view--type pull-right">
                                    <a id="switch-list" href="#" class=""><i class="fa fa-th-list"></i></a>
                                    <a id="switch-grid" href="#" class="active"><i class="fa fa-th-large"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="properties properties-grid">
                            <!-- .col-md-12 end -->
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <!-- .property-item #1 -->
                                <div class="property-item">
                                    <div class="property--img">
                                        <a href="property-single-gallery.html">
                                            <img src="assets/images/properties/1.jpg" alt="property image"
                                                class="img-responsive">
                                        </a>
                                        <span class="property--status">For Sale</span>
                                    </div>
                                    <div class="property--content">
                                        <div class="property--info">
                                            <h5 class="property--title"><a href="property-single-gallery.html">House in Kent
                                                    Street</a></h5>
                                            <p class="property--location">127 Kent Street, Sydney, NSW 2000</p>
                                            <p class="property--price">$130,000</p>
                                        </div>
                                        <!-- .property-info end -->
                                        <div class="property--features">
                                            <ul class="list-unstyled mb-0">
                                                <li><span class="feature">Beds:</span><span
                                                        class="feature-num">2</span></li>
                                                <li><span class="feature">Baths:</span><span
                                                        class="feature-num">2</span></li>
                                                <li><span class="feature">Area:</span><span
                                                        class="feature-num">587 sq ft</span></li>
                                            </ul>
                                        </div>
                                        <!-- .property-features end -->
                                    </div>
                                </div>
                            </div>
                            <!-- .property item end -->

                            <!-- .property-item #2 -->
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="property-item">
                                    <div class="property--img">
                                        <a href="property-single-gallery.html">
                                            <img src="assets/images/properties/6.jpg" alt="property image"
                                                class="img-responsive">
                                        </a>
                                        <span class="property--status">For Rent</span>
                                    </div>
                                    <div class="property--content">
                                        <div class="property--info">
                                            <h5 class="property--title"><a href="property-single-gallery.html">Apartment For
                                                    Rent</a></h5>
                                            <p class="property--location">1609 N Richmond St, Chicago, IL 60647</p>
                                            <p class="property--price">$900<span class="time">month</span></p>
                                        </div>
                                        <!-- .property-info end -->
                                        <div class="property--features">
                                            <ul class="list-unstyled mb-0">
                                                <li><span class="feature">Beds:</span><span
                                                        class="feature-num">1</span></li>
                                                <li><span class="feature">Baths:</span><span
                                                        class="feature-num">1</span></li>
                                                <li><span class="feature">Area:</span><span
                                                        class="feature-num">500 sq ft</span></li>
                                            </ul>
                                        </div>
                                        <!-- .property-features end -->
                                    </div>
                                </div>
                            </div>
                            <!-- .property item end -->

                            <!-- .property-item #3 -->
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="property-item">
                                    <div class="property--img">
                                        <a href="property-single-gallery.html">
                                            <img src="assets/images/properties/5.jpg" alt="property image"
                                                class="img-responsive">
                                        </a>
                                        <span class="property--status">For Rent</span>
                                    </div>
                                    <div class="property--content">
                                        <div class="property--info">
                                            <h5 class="property--title"><a href="property-single-gallery.html">2750 House
                                                    in Urban St.</a></h5>
                                            <p class="property--location">2750 Urban Street Dr, Anderson, IN 46011</p>
                                            <p class="property--price">$1.550<span class="time">month</span></p>
                                        </div>
                                        <!-- .property-info end -->
                                        <div class="property--features">
                                            <ul class="list-unstyled mb-0">
                                                <li><span class="feature">Beds:</span><span
                                                        class="feature-num">2</span></li>
                                                <li><span class="feature">Baths:</span><span
                                                        class="feature-num">1</span></li>
                                                <li><span class="feature">Area:</span><span
                                                        class="feature-num">1390 sq ft</span></li>
                                            </ul>
                                        </div>
                                        <!-- .property-features end -->
                                    </div>
                                </div>
                            </div>
                            <!-- .property item end -->

                            <!-- .property-item #4 -->
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="property-item">
                                    <div class="property--img">
                                        <a href="property-single-gallery.html">
                                            <img src="assets/images/properties/12.jpg" alt="property image"
                                                class="img-responsive">
                                        </a>
                                        <span class="property--status">For Rent</span>
                                    </div>
                                    <div class="property--content">
                                        <div class="property--info">
                                            <h5 class="property--title"><a href="property-single-gallery.html">Modern
                                                    Office For Rent</a></h5>
                                            <p class="property--location">2003 Sheffield Ave, Anderson, IN 46011</p>
                                            <p class="property--price">$530<span class="time">month</span></p>
                                        </div>
                                        <!-- .property-info end -->
                                        <div class="property--features">
                                            <ul class="list-unstyled mb-0">
                                                <li><span class="feature">Beds:</span><span
                                                        class="feature-num">0</span></li>
                                                <li><span class="feature">Baths:</span><span
                                                        class="feature-num">1</span></li>
                                                <li><span class="feature">Area:</span><span
                                                        class="feature-num">150 sq ft</span></li>
                                            </ul>
                                        </div>
                                        <!-- .property-features end -->
                                    </div>
                                </div>
                            </div>
                            <!-- .property item end -->

                            <!-- .property-item #5 -->
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="property-item">
                                    <div class="property--img">
                                        <a href="property-single-gallery.html">
                                            <img src="assets/images/properties/3.jpg" alt="property image"
                                                class="img-responsive">
                                        </a>
                                        <span class="property--status">For Sale</span>
                                    </div>
                                    <div class="property--content">
                                        <div class="property--info">
                                            <h5 class="property--title"><a href="property-single-gallery.html">Apartment in
                                                    Long St.</a></h5>
                                            <p class="property--location">34 Long St, Jersey City, NJ 07305</p>
                                            <p class="property--price">$70,000</p>
                                        </div>
                                        <!-- .property-info end -->
                                        <div class="property--features">
                                            <ul class="list-unstyled mb-0">
                                                <li><span class="feature">Beds:</span><span
                                                        class="feature-num">2</span></li>
                                                <li><span class="feature">Baths:</span><span
                                                        class="feature-num">1</span></li>
                                                <li><span class="feature">Area:</span><span
                                                        class="feature-num">200 sq ft</span></li>
                                            </ul>
                                        </div>
                                        <!-- .property-features end -->
                                    </div>
                                </div>
                            </div>
                            <!-- .property item end -->

                            <!-- .property-item #6 -->
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="property-item">
                                    <div class="property--img">
                                        <a href="property-single-gallery.html">
                                            <img src="assets/images/properties/7.jpg" alt="property image"
                                                class="img-responsive">
                                        </a>
                                        <span class="property--status">For Sale</span>
                                    </div>
                                    <div class="property--content">
                                        <div class="property--info">
                                            <h5 class="property--title">House in Miami Town</h5>
                                            <p class="property--location">415 E North Water, Miami 60611</p>
                                            <p class="property--price">$210,000</p>
                                        </div>
                                        <!-- .property-info end -->
                                        <div class="property--features">
                                            <ul class="list-unstyled mb-0">
                                                <li><span class="feature">Beds:</span><span
                                                        class="feature-num">2</span></li>
                                                <li><span class="feature">Baths:</span><span
                                                        class="feature-num">2</span></li>
                                                <li><span class="feature">Area:</span><span
                                                        class="feature-num">1370 sq ft</span></li>
                                            </ul>
                                        </div>
                                        <!-- .property-features end -->
                                    </div>
                                </div>
                            </div>
                            <!-- .property item end -->
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-50">
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
                        <!-- .col-md-12 end -->
                    </div>
                    <!-- .row -->
                </div>
                <!-- .col-md-8 end -->
            </div>
            <!-- .row -->
        </div>
        <!-- .container -->
    </section>
    <!-- #properties-grid  end  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        $('#searchCity').keyup(function() {
            var value = $(this).val().toLowerCase();
            // alert(value);
            $('#list li a').each(function() {
                var search = $(this).text().toLowerCase();
                // console.log(search);
                if (search.indexOf(value) > -1) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });
        })
    </script>
    <script>
        // var items = document.getElementsByClassName('querySearch');
        // var cities = @json($data[0]['cities']->toArray());
        // var citys = cities.data;

        $("#list > li a").each(function() {
           $(this).on('click',function(){
               var searchLike = $(this).text();
               var token = $('meta[name="csrf-token"]').attr('content');
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: 'GET',
                    data: {
                        'searchLike': searchLike,
                        'city': 'city',
                    },
                    url: '/ajaxGetsearchLike',
                    success: function(data) {
                        // $("#DynamicLocationsDropdown").html(data.locationsdropdown);
                        console.log(data);
                    }
                });
           })
        });
        // console.log(optionTexts);


        // for (var i = 0; i < items.length; i++) {
        //     $(items[i]).on('click', function() {
        //         var citUl =$(this).text().toLowerCase();
        //         // console.log(citUl);
        //         // console.log(citys);
        //     //    if(  citys.indexOf(citUl) === -1){
        //     //        console.log();
        //     //    }else{
        //     //        console.log('no');
        //     //    }
        //     citynames = [];
        //         citys.forEach(city => {
        //             cityName = city.name.toLowerCase();
        //             citynames.push(cityName);
        //         });
        //         let result = citynames.indexOf(citUl);
        //         console.log(result);

        //     });



        // }
    </script>
@endsection
