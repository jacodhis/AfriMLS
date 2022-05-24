<style>
    #messages{
        margin-right: 5.0%;
        margin-left: 5.0%
    }
    .form-box{
        background-color:rgb(40,40,40)
    }
</style>

@php
  $counties = \App\Models\county::get();
  $categories = \App\Models\category::get();
 
  $option_rent = \App\Models\option::where('id','=',1)->first();  // 1 represents for sale
  $option_sale = \App\Models\option::where('id','=',3)->first(); //3 represents for rent
                               
                
@endphp

<form class="mb-0" method="get" action="{{route('search-form')}}">
    <div class="form-box search-properties">
      <div id="messages">
        @include('includes.inc.messages')
      </div>
        <div class="row">

            <div class="col-xs-12 col-sm-6 col-md-2">
                <div class="form-group">
                    <div class="select--box">
                        <i class="fa fa-angle-down"></i>
                        <select name="select_county" id="select-location">
                            <option value="empty">Counties</option>
                            @foreach($counties as $county)
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
                            @foreach($categories as $category)
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
                            <option value="{{$option_rent->id}}">{{$option_rent->name}}</option>
                            <option value="{{$option_sale->id}}">{{$option_sale->name}}</option>
                            {{-- @foreach($options as $option)
                                <option value='{{$option->id}}'>{{$option->name}}</option>
                            @endforeach --}}
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
