<style>
    #messages{
        margin-right: 5.0%;
        margin-left: 5.0%
    }
</style>
<form class="mb-0" method="post" action="{{route('search-form')}}">
    @csrf
    <div class="form-box search-properties">
      <div id="messages">
        @include('includes.inc.messages')
      </div>
        <div class="row">
            {{-- <div class="col-xs-12 col-sm-6 col-md-2">
                <div class="form-group">
                    <div class="select--box">
                        <i class="fa fa-angle-down"></i>
                        <select name="select_location" id="select-location">
                            <option value="empty">Country</option>
                            @foreach($data[0]['countries'] as $country)
                            <option value="{{$country->id}}">{{$country->name}}</option>
                            @endforeach

                        </select>
                    </div>
                </div>
            </div> --}}
            <!-- .col-md-3 end -->

            <div class="col-xs-12 col-sm-6 col-md-2">
                <div class="form-group">
                    <div class="select--box">
                        <i class="fa fa-angle-down"></i>
                        <select name="select_county" id="select-location">
                            <option value="empty">Counties</option>
                            @foreach($data[0]['counties'] as $county)
                            <option value="{{$county->id}}">{{$county->name}}</option>
                            @endforeach

                        </select>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="form-group">
                    <div class="select--box">
                        <input type="text" name="neighbourhood" id="" placeholder="Enter Neighbourhood" class="form-control">
                        </select>
                    </div>
                </div>
            </div>
            <!-- .col-md-3 end -->
            <div class="col-xs-12 col-sm-6 col-md-2">
                <div class="form-group">
                    <div class="select--box">
                        <i class="fa fa-angle-down"></i>
                        <select name="select_type" id="select-type">
                            <option  value="empty">Property Type</option>
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
                        <select name="select_status" id="select-status">
                            <option value="empty">Select Status</option>
                            @foreach($data[0]['options'] as $option)
                                <option value='{{$option->id}}'>{{$option->name}}</option>
                            @endforeach
                       </select>
                    </div>
                </div>
            </div>
            <!-- .col-md-3 end -->
            <div class="col-xs-12 col-sm-6 col-md-3">
                <input type="submit" class="btn btn--primary btn--block">
            </div>

        </div>
        <!-- .row end -->
    </div>
    <!-- .form-box end -->
</form>
