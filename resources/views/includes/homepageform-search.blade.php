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
                        {{-- <i class="fa fa-angle-down"></i> --}}
                        <input type="text" name="neighbourhood" id="" placeholder="Enter Neighbourhood" class="form-control">
                        {{-- <select name="select-location" id="select-location">
                            <option>City/Neighbourhood</option>
                            @foreach($data[0]['cities'] as $city)
                              <option value="{{$city->id}}">{{$city->name}}</option>
                            @endforeach --}}
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
