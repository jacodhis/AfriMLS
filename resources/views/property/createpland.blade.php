@extends('layouts.backend.layout')


@section('title')
  Afri MLS Add  {{$data['propertyType'] ??""}}
@endsection

@section('content')
<ol class="breadcrumb">
    <li><a href="{{route('newhome')}}" class="mr-1">Home </a></li> /
    <li class="active"> <p style="color: blue">Add {{$data[0]['propertyType']->name ??""}}</p></li>
</ol>
<form action="{{route('property.store')}}" method="post" enctype="multipart/form-data">
    @csrf
 <div class="accordion" id="accordionExample">
    <div class="card">
      <div class="card-header" id="headingOne">
        <h5 class="mb-0">
          <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
            <span style="color: GREEN">BASIC INFORMATION</span> Click the section to add Information
          </button>
        </h5>
      </div>

      <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample" >
        <div class="card-body" style="padding: 1px; margin: 1px">
            <p style="color: red">Property Details</p>
            <div class="row" style="padding: 1px; margin: 1px">
                <div class="col-md-3" style="padding: 1px; margin: 1px">
                    <p>
                        <label for="updated_at">Listing Date </label>
                        <input type="date" name="updated_at" class="form-control" required>
                    </p>
                </div>
                <div class="col-md-3" style="padding: 1px; margin: 1px">
                    <p>
                        <label for="pname">Expires On</label>
                        <input type="date" name="expires_on" class="form-control" >
                    </p>
                </div>

                <div class="col-md-3" style="padding: 1px; margin: 1px">
                    <p>
                        <label for="">City</label>
                            <select name="city_id" id="city_id" class="form-control" required onchange="getLocations()">
                                <option value="" disabled>select city</option>
                                @foreach ($data[0]['cities'] as $city)
                                <option value="{{$city->id}}">{{$city->name}}</option>
                                @endforeach

                            </select>
                      </p>

                  </div>
            </div>

            <div class="row" style="padding: 1px; margin: 1px">
                <div class="col-md-4" style="padding: 1px; margin: 1px">
                    <p>
                        <label for="pname">Property Name </label>
                        <input type="text" name="pname" class="form-control" required>
                    </p>
                </div>
                <div class="col-md-4" style="padding: 1px; margin: 1px">
                    <p>
                        <label for="pname">Property Image</label>
                        <input type="file" name="property_images[]" class="form-control" multiple >
                    </p>
                </div>

                <div class="col-md-3" style="padding: 1px; margin: 1px">
                    <p>
                        <label for="pname">Property Price</label>
                        <input type="number" min="1" name="property_price" class="form-control" required placeholder="Property Price">
                    </p>
                  </div>
                  <div class="col-md-3" style="padding: 1px; margin: 1px">
                    <p>
                        <textarea name="description" id="" cols="60" rows="2" required placeholder="Description"></textarea>
                    </p >
                </div>
                
            </div>

            <div class="row" style="padding: 1px; margin: 1px">
                <div class="col-md-3" style="padding: 1px; margin: 1px">
                          <label for="pnames">Listing Type</label>
                </div>

                <div class="col-md-9" style="padding: 1px; margin: 1px">
                    @foreach ($data['listing_types'] as $listing_type_key => $listing_type_val)
                      <input type="checkbox" name="listing_types[]" value="{{$listing_type_key}}"> &nbsp; {{$listing_type_val}} &nbsp; &nbsp;
                    @endforeach 
                </div>
            </div>
              <div id="loc" class="col-md-3 py-3" style="padding: 1px; margin: 1px; display:none;">
                    <p>

                        <div id="DynamicLocationsDropdown"></div>
                      </p>

                  </div>
            <hr>
            <p style="color: red">Taxes</p>
            <div class="row" style="padding: 1px; margin: 1px">
                <div class="col-md-3" style="padding: 1px; margin: 1px">
                    <p>
                        <label for="taxId">Tax Id</label>
                        <input type="number" name="tax_id" class="form-control" placeholder="Tax Id" >
                    </p>
                </div>
                <div class="col-md-3" style="padding: 1px; margin: 1px">
                    <p>
                        <label for="taxes">Taxes</label>
                        <input type="text" name="taxes" class="form-control" placeholder="Taxes" >
                    </p>
                </div>
                <div class="col-md-3" style="padding: 1px; margin: 1px">
                    <p>
                        <label for="taxes">Tax year</label>
                        <input type="date" name="tax_year" class="form-control" placeholder="Tax Year" >
                    </p>
                </div>

            </div>
            <hr>

            
        </div>
      </div>
    </div>

    <div class="card">
    <div class="card-header" id="headingSix">
          <h5 class="mb-0">
            <button class="btn btn-link collapsed " type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
           Property Style
            </button>
          </h5>
        </div>
        <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
          <div class="card-body">
              <div class="row">
                  <div class="col-md-4" style="padding: 1px; margin: 1px">
                    <p>
                        <input type="number" min="1" name="no_of_bedrooms" class="form-control" placeholder="Section" >
                    </p>
                  </div>
                  <div class="col-md-4" style="padding: 1px; margin: 1px">
                    <p>
                        <input type="number" min="1" name="no_of_bathrooms" class="form-control" placeholder="Township">
                    </p>
                  </div>
                  <div class="col-md-4" style="padding: 1px; margin: 1px">
                    <p>
                        <input type="number" min="1" name="no_of_floor" class="form-control" placeholder="Range">
                    </p>
                  </div>
                  <div class="col-md-4" style="padding: 1px; margin: 1px">
                    <p>
                        <input type="text" name="square" class="form-control" placeholder="Subdivision #">
                    </p>
                  </div>
                  <div class="col-md-4" style="padding: 1px; margin: 1px">
                    <p>
                        <input type="number" min="1" name="house_number" class="form-control" placeholder="Block / Parcel" >
                    </p>
                   </div>
                   <div class="col-md-4" style="padding: 1px; margin: 1px">
                        <input type="number" min="1" name="floors_in_unit" class="form-control" placeholder="Lot #">
                   </div>
                  </div>
                  <div class="col-md-4" style="padding: 1px; margin: 1px">
                    <p>
                        <input type="text" name="no_of_bedrooms" class="form-control" placeholder="Legal Description" >
                    </p>
                  </div>
                  <div class="col-md-4" style="padding: 1px; margin: 1px">
                    <p>
                        <input type="text" maxlength="255" name="legal_subdivision_name" class="form-control" placeholder="Legal Subdivision Name">
                    </p>
                  </div>
                  <div class="col-md-4" style="padding: 1px; margin: 1px">
                    <p>
                        <input type="text" maxlength="255" name="zoning" class="form-control" placeholder="Zoning">
                    </p>
                  </div>
                                </div>
          </div>
        </div>
      </div>



    <div class="card">
        <div class="card-header" id="headingThree">
          <h5 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
           Owner Information
            </button>
          </h5>
        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
          <div class="card-body">
             <div class="row">
                 <div class="col-md-6">
                        <input type="text" maxlength="255" class="form-control" name="owner_name" placeholder=" property owners name">
                 </div>
                 <div class="col-md-6">
                        <input type="number" min="10" class="form-control" name="owner_phone" placeholder="owner's phone number">
                 </div>
             </div>
          </div>
        </div>
      </div>


      <div class="card">
        <div class="card-header" id="headingLocation">
          <h5 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseLocation" aria-expanded="false" aria-controls="collapseLocation">
            Location Information
            </button>
          </h5>
        </div>
        <div id="collapseLocation" class="collapse" aria-labelledby="headingLocation" data-parent="#accordionExample">
          <div class="card-body">
              <div class="row">
                  <div class="col-md-3" style="padding: 1px; margin: 1px">
                    <p>
                        <input type="text" name="street_name" class="form-control" placeholder="street name" >
                    </p>
                  </div>
                  <div class="col-md-3" style="padding: 1px; margin: 1px">
                    <p>
                        <input type="text" name="street_type" class="form-control" placeholder="street type" >
                    </p>
                  </div>
                  <div class="col-md-3" style="padding: 1px; margin: 1px">
                    <p>
                        <input type="number" min="1" name="mls_number" class="form-control" placeholder="Mls No" >
                    </p>
                  </div>
              </div>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card-header" id="headingLand">
          <h5 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseLand" aria-expanded="false" aria-controls="collapseLand">
            Property Style
            </button>
          </h5>
        </div>
        <div id="collapseLand" class="collapse" aria-labelledby="headingLand" data-parent="#accordionExample">
          <div class="card-body">
             <div class="row">
              @foreach ($data['property_styles'] as $ut_data_key => $ut_data_feauture)
                <div class=" col-md-2">
                  <ul class="list-unstyled">
                    <li><input type="checkbox" name="property_styles[]" value="{{$ut_data_key}}"> {{$ut_data_feauture}}</li>
                  </ul>

                </div>
                @endforeach


             </div>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card-header" id="headingFive">
          <h5 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                Land Information
            </button>
          </h5>
        </div>
        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
          <div class="card-body">
            <div class="row">
                  <div class="col-2" style="padding: 1px; margin: 1px">
                    <p>
                        <input type="text" name="lot_dimensions" class="form-control" placeholder="Lot Dimensions" >
                    </p>
                  </div>
                  <div class="col-2" style="padding: 1px; margin: 1px">
                    <p>
                        <input type="text" name="lot_size_sq_ft" class="form-control" placeholder="Lot Size (Sq. Ft.):" >
                    </p>
                  </div>
                  <div class="col-2" style="padding: 1px; margin: 1px">
                    <p>
                        <input type="text" name="lot_size_acre" class="form-control" placeholder="Lot Size (Acre):" >
                    </p>
                  </div>
                  <div class="col-3" style="padding: 1px; margin: 1px">
                    <p>
                        <input type="text" name="front_footage" class="form-control" placeholder="Front Footage:" >
                    </p>
                  </div>
            </div>

            <div class="row">
                  <div class="col-md-3"><h5>Total Acreage</h5>
                    @foreach ($data['total-acreage'] as $total_acreage_key => $total_acreage_val)
                      <ul class="list-unstyled">
                        <li><input type="checkbox" name="total_acreage[]" value="{{$total_acreage_key}}" >{{$total_acreage_val}}</li>
                      </ul>
                    @endforeach
                  </div>

                  <div class="col-md-3"><h5>Location (9 Max)</h5>
                    @foreach ($data['location'] as $location_key => $location_val)
                      <ul class="list-unstyled">
                        <li><input type="checkbox" name="location[]" value="{{$location_key}}" >{{$location_val}}</li>
                      </ul>
                    @endforeach
                  </div>
                    
                  <div class="col-md-3"><h5> &nbsp; </h5>
                  @foreach ($data['location2'] as $location2_key => $location2_val)
                      <ul class="list-unstyled">
                        <li><input type="checkbox" name="location2[]" value="{{$location2_key}}" >{{$location2_val}}</li>
                      </ul>
                    @endforeach
                  </div>

                  <div class="col-md-3"><h5>Front Exp</h5>
                    @foreach ($data['front-exp'] as $front_exp_key => $front_exp_val)
                      
                      <input type="checkbox" name="front_exp[]" value="{{$front_exp_key}}" >&nbsp;{{$front_exp_val}}&nbsp;&nbsp;
                      
                    @endforeach
                  </div>
            </div>

            <div class="row">
                  <div class="col-5" style="padding: 1px; margin: 1px">
                    <textarea class="form-control" name="availability" maxlength="255">Availability</textarea>
                  </div>
                  <div class="col-5" style="padding: 1px; margin: 1px">
                    <textarea class="form-control" name="easements" maxlength="255">Easements</textarea>
                  </div>
                  
            </div>
            
            

          </div>
        </div>
      </div>

      <div class="card">
        <div class="card-header" id="headingFive">
          <h5 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                Waterfront Information
            </button>
          </h5>
        </div>
        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
          <div class="card-body">
            <div class="row">
              <div class="col-md-3">
                Water Access Y/N: <input type="radio" name="water_access" value="yes" checked>Yes
                <input type="radio" name="water_access" value="no" >No
              </div>
              <div class="col-md-3">
              Water View Y/N:  <input type="radio" name="water_view" value="yes" checked>Yes
               <input type="radio" name="water_view" value="no" >No
              </div>
              <div class="col-md-3">
              Water Frontage Y/N: <input type="radio" name="water_frontage" value="yes" checked>Yes
              <input type="radio" name="water_frontage" value="no" >No
              </div>
              <div class="col-md-3">
              Water Extras Y/N: <input type="radio" name="water_extras" value="yes" checked>Yes
              <input type="radio" name="water_extras" value="no" >No
              </div>
            </div>

            <div class="row">
                  <div class="col-md-3">
                    @foreach ($data[0]['water_accesses_array'] as $water_access)
                      <ul class="list-unstyled">
                        <li><input type="checkbox" name="water_access[]" value="{{$water_access->id}}" > {{$water_access->name}}</li>
                      </ul>
                    @endforeach
                  </div>

                  <div class="col-md-3">
                    @foreach ($data[0]['water_extras_array'] as $water_extras)
                      <ul class="list-unstyled">
                        <li><input type="checkbox" name="water_extras[]" value="{{$water_extras->id}}" > {{$water_extras->name}}</li>
                      </ul>
                    @endforeach
                  </div>
                    
                  <div class="col-md-3">
                    @foreach ($data[0]['water_frontages_array'] as $water_frontages)
                      <ul class="list-unstyled">
                        <li><input type="checkbox" name="water_frontages[]" value="{{$water_frontages->id}}" > {{$water_frontages->name}}</li>
                      </ul>
                    @endforeach
                  </div>

                  <div class="col-md-3">
                    @foreach ($data[0]['water_views_array'] as $water_views)
                      <ul class="list-unstyled">
                        <li><input type="checkbox" name="water_views[]" value="{{$water_views->id}}" > {{$water_views->name}}</li>
                      </ul>
                    @endforeach
                  </div>
            </div>

            <div class="row">
                  <div class="col-4" style="padding: 1px; margin: 1px">
                    <p>
                        <input type="text" name="water_name" class="form-control" placeholder="water name" >
                    </p>
                  </div>
                  <div class="col-4" style="padding: 1px; margin: 1px">
                    <p>
                        <input type="text" name="water_front_feet" class="form-control" placeholder="water front feet" >
                    </p>
                  </div>
            </div>
            

          </div>
        </div>
      </div>


      


  </div>
  <input type="hidden" value="{{$data[0]['category']}}" name="category">


 <div class="col-md-4 mx-auto py-4">
    <p>
        <input type="submit" class="form-control btn btn-primary" value="Save Unit Details ">
    </p>
 </div>
</form>



<script>
    function getLocations(){
        var cityId = document.getElementById('city_id').value;
        var token = $('meta[name="csrf-token"]').attr('content');
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type:'GET',
                data:{
                    'myCity':cityId
                },
                url: '/ajaxGetLocations',
                success:function(data){
                    $("#DynamicLocationsDropdown").html(data.locationsdropdown);
                   var loc = document.getElementById('loc');
                   loc.style.display = "block";
                }
            });

    }


</script>
@endsection
