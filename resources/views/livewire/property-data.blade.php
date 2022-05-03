
<div>
<section id="properties-grid">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-4">
                <div class="widget widget-property">
                    <div class="widget--title">
                        <h5>Property Type</h5>
                    </div>

                    <div class="widget--content">
                        @forelse ($propertyTypes as $propertyType)
                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a href="javascript:void(0);" wire:click="searchPropTypeProp({{$propertyType->id}})">{{ $propertyType->name }}
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


                <!-- . widget property status end -->
                <div class="widget widget-property">
                    <div class="widget--title">
                        <h5>Property Status</h5>
                    </div>
                    <div class="widget--content">
                        @forelse ($options as $option)
                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a href="javascript:void(0);" wire:click="searchOptionProp({{$option->id}})">{{ $option->name ?? '' }}
                                        <span>({{ $option->properties->count() ?? '' }})</span></a>
                                </li>
                            </ul>
                        @empty
                        @endforelse
                    </div>
                </div>


                <!-- widget property city
=============================-->
                <div class="widget widget-property">
                    <div class="widget--title">
                        <h5>Property By City</h5>
                        <input type="text" class="form-control" id="searchCity">
                    </div>
                    <div class="widget--content">
                        @forelse ($cities as $city)
                            <ul class="querySearch list-unstyled mb-0" id="list">
                                <li>
                                    <a href="javascript:void(0);" wire:click="searchCityProp({{$city->id}})" id="{{ $city->id }}">{{ $city->name ?? '' }} <span style="inline">({{$city->properties->count()??""}})</span></a>

                                </li>

                            </ul>
                        @empty
                        @endforelse
                        {{$cities->links()}}
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
                            @forelse ($feautured_properties as $property)
                            <div class="property-item">
                                <div class="property--img">
                                    <a href="{{route('propertyShow',[$property->id])}}">
                                        @php
                                         $images = explode('|',$property->image);
                                        @endphp
                                         <img src="{{URL::to($images[0])}}" alt="property image"
                                         class="img-responsive" >
                                    </a>
                                        <span class="property--status">{{$property->option->name??""}}</span>
                                </div>
                                <div class="property--content">
                                    <div class="property--info">
                                        <h5 class="property--title"><a href="property-single-gallery.html">{{$property->location->address??""}}</a></h5>
                                        <p class="property--location">{{$property->city->name??""}},{{$property->city->country->name??""}}</p>
                                        <p class="property--price">Ksh{{$property->price??""}}</p>
                                    </div>
                                    <!-- .property-info end -->
                                </div>
                            </div>
                            @empty
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

                            @endforelse

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
                <select  >
                    <option selected=""wire:model="sortBy"  value="Default">Default Sorting</option>
                    <option value="Larger">Feautured Items</option>
                    {{-- <option value="Larger">oldest Items</option>
                    <option value="Larger">Hot Items</option> --}}
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

        @forelse ($properties as $property )

        <div class="col-xs-12 col-sm-6 col-md-6">

            <!-- .property-item #1 -->
            <div class="property-item">
                <div class="property--img">
                    <a href="{{route('propertyShow',[$property->id])}}">
                        @php
                         $images = explode('|',$property->image);
                        @endphp
                         <img src="{{URL::to($images[0])}}" alt="property image"
                         class="img-responsive" >
                    </a>

                    <span class="property--status">{{$property->option->name??""}}</span>
                </div>
                <div class="property--content">
                    <div class="property--info">
                        <h5 class="property--title"><a href="property-single-gallery.html">{{$property->location->address??""}}</a></h5>
                        <p class="property--location">{{$property->city->name??""}},{{$property->city->country->name??""}}</p>
                        <p class="property--price">Ksh{{$property->price??""}}</p>
                    </div>
                    @if($property->category_id == 1)
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
                    @endif
                </div>
            </div>
        </div>


        @empty
         No Property
        @endforelse

    </div>
<div class="col-md-12">

</div>


</div>
<!-- .row -->
</div>


            <!-- .col-md-8 end -->
        </div>
        <!-- .row -->
    </div>
    <!-- .container -->
</section>

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

</div>
