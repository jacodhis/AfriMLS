@extends('layouts.backend.layout')


@section('title')
  Afri MLS Add  {{$data[0]['propertyType']->name ??""}}
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
                        <label for="pname">Property Name </label>
                        <input type="text" name="pname" class="form-control" required>
                    </p>
                </div>
                <div class="col-md-3" style="padding: 1px; margin: 1px">
                    <p>
                        <label for="pname">Property Image</label>
                        <input type="file" name="property_images[]" class="form-control" multiple >
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
                
                  <div class="col-md-3" style="padding: 1px; margin: 1px">
                    <p>
                        <input type="number" min="1" name="property_price" class="form-control" required placeholder="Property Price">
                    </p>
                  </div>
                  <div class="col-md-3" style="padding: 1px; margin: 1px">
                    <p>
                        <textarea name="description" id="" cols="60" rows="1" required placeholder="Description"></textarea>
                    </p >
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

            <div class="row">
                <div class="col-md-4" >
                    <p>
                        <select name="option_id" id="" class="form-control">Type
                            <option value="" disabled>select option</option>
                            @foreach ($data[0]['options'] as $option)
                                <option value="{{$option->id}}">{{$option->name}}</option>
                            @endforeach
                        </select>
                     </p>
                </div>
                <div class="col-md-2">
                    <p>
                        <input type="checkbox" name="is_feautured">  Is Feautured
                     </p>


                </div>
                <div class="col-md-2">
                    <p>
                        <input type="checkbox" name="fire_place"> Fire place
                    </p>

                </div>
            </div>
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
                        <input type="number" min="1" name="no_of_bedrooms" class="form-control" placeholder="No. of Bedrooms" >
                    </p>
                  </div>
                  <div class="col-md-4" style="padding: 1px; margin: 1px">
                    <p>
                        <input type="number" min="1" name="no_of_bathrooms" class="form-control" placeholder="No. of Bathrooms  ">
                    </p>
                  </div>
                  <div class="col-md-4" style="padding: 1px; margin: 1px">
                    <p>
                        <input type="number" min="1" name="no_of_floor" class="form-control" placeholder="No. of Floors">
                    </p>
                  </div>
                  <div class="col-md-4" style="padding: 1px; margin: 1px">
                    <p>
                        <input type="text" name="square" class="form-control" placeholder="Enter Square Metre area">
                    </p>
                  </div>
                  <div class="col-md-4" style="padding: 1px; margin: 1px">
                    <p>
                        <input type="number" min="1" name="house_number" class="form-control" placeholder="House No" >
                    </p>
                   </div>
                   <div class="col-md-4" style="padding: 1px; margin: 1px">
                        <input type="number" min="1" name="floors_in_unit" class="form-control" placeholder="Floors in Unit">

                   </div>
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
                        <input type="text" class="form-control" name="owner_name" placeholder=" property owners name">
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
              <div class="row">
                  <div class="col-md-3" style="padding: 1px; margin: 1px">
                      <p>
                          <input type="text" name="street_dir" class="form-control"placeholder="Street Direction" >
                      </p>
                  </div>
                  <div class="col-md-3" style="padding: 1px; margin: 1px">
                      <p>
                          <input type="number" min="1" name="unit_number" placeholder="unit number" class="form-control" >
                      </p>
                  </div>
                  <div class="col-md-3" style="padding: 1px; margin: 1px">
                      <p>
                          <input type="text" name="period" class="form-control" placeholder="period" >
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
             Land Information
            </button>
          </h5>
        </div>
        <div id="collapseLand" class="collapse" aria-labelledby="headingLand" data-parent="#accordionExample">
          <div class="card-body">
            <h3>Utilities Data</h3>
             <div class="row">
              @foreach ($data[0]['utilities_data_feautures'] as $ut_data_feauture)
                <div class=" col-md-2">
                  <ul class="list-unstyled">


                    <li><input type="checkbox" name="utilities_feauture[]" value="{{$ut_data_feauture->id}}" >{{$ut_data_feauture->utilities_data}}</li>

                  </ul>

                </div>
                @endforeach


             </div>
          </div>
        </div>
      </div>



      <div class="card">
        <div class="card-header" id="headingFour">
          <h5 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
           Community Information
            </button>
          </h5>
        </div>
        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
          <div class="card-body">

            <div class="row">
                @foreach ($data[0]['f_communities'] as $c_feauture)
            <div class=" col-md-2">
              <ul class="list-unstyled">
                <li><input type="checkbox" name="community_fs[]" value="{{$c_feauture->id}}" >{{$c_feauture->c_feautures}}</li>
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
                Exterior Information
            </button>
          </h5>
        </div>
        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
          <div class="card-body">
            <p style="color: red">Exterior Features</p>
            <div class="row">
                @foreach ($data[0]['exterior_feautures'] as $exterior_feauture)
            <div class=" col-md-2">
              <ul class="list-unstyled">
                  <li><input type="checkbox" name="exeterior_fs[]" value="{{$exterior_feauture->id}}" >{{$exterior_feauture->exterior_features}}</li>
              </ul>
            </div>
            @endforeach
            </div>
            <p style="color: red">Garage Feutures</p>
            <div class="row">
                @foreach ($data[0]['garage_feautures'] as $garage_feauture)
            <div class=" col-md-2">
              <ul class="list-unstyled">
                  <li><input type="checkbox" name="garage_feautures[]" value="{{$garage_feauture->id}}" >{{$garage_feauture->garage_feautures}}</li>
              </ul>
            </div>
            @endforeach
            </div>

          </div>
        </div>
      </div>


  </div>
  <input type="hidden" value="{{$data[0]['propertyType']->id}}" name ="propertyTypeId">


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
