@extends('layouts.backend.layout')


@section('title')
  AfriMLS Add {{$data[0]['propertyType']->name ??""}}
@endsection

@section('content')
 {{-- <head> {{$data[0]['propertyType']->name}}</head> --}}
<div class="card">
    <small>Add {{$data[0]['propertyType']->name ??""}}</small>
    <form action="{{route('property.store')}}" method="post" enctype="multipart/form-data">
        @csrf
    <div class="row">
        {{-- <div class="col-md-3">
            <p>
                <label for="pname">property name </label>
                <input type="text" name = "pname" class="form-control" required>
            </p>

            <p>
                <label for="pname">property image</label>
                <input type="file" name="property_images[]" class="form-control" multiple >
            </p>
            <p>
                <label for="description">Description</label>
                <textarea name="description" id="" cols="20" rows="5" class="form-control" required></textarea>
            </p >



        </div> --}}
        <div class="col-md-3">
          <div class="row">

              <div class="col-md-6">
                {{-- <p>
                    <label for="">City</label>
                        <select name="city_id" id="city_id" class="form-control" required onchange="getLocations()">
                            <option value="" disabled>select city</option>
                            @foreach ($data[0]['cities'] as $city)
                            <option value="{{$city->id}}">{{$city->name}}</option>
                            @endforeach

                        </select>
                  </p> --}}

              </div>
              <div class="col-md-6">
                {{-- <p>
                    <label for="">Type</label>
                    <select name="option_id" id="" class="form-control">Type
                        <option value="" disabled>select option</option>
                        @foreach ($data[0]['options'] as $option)
                            <option value="{{$option->id}}">{{$option->name}}</option>
                        @endforeach
                    </select>
                 </p> --}}
              </div>
              <div class="col-md-6">
                {{-- <p>
                    <label for="">Locations</label>
                    <div id="DynamicLocationsDropdown"></div>
                  </p> --}}

              </div>
              <div class="col-md-6">
                {{-- <p>
                    <label for="pname">property price</label>
                    <input type="number" min="1" name="property_price" class="form-control" required>
                  </p> --}}

              </div>
              <div class="col-md-6">
                  {{-- <p><label for="owner_name">Owner Name</label>
                    <input type="text" class="form-control" name="owner_name">
                </p> --}}
              </div>
              <div class="col-md-6">
                {{-- <p><label for="owner_name">Owner phone</label>
                  <input type="number" min="10" class="form-control" name="owner_phone">
              </p> --}}
            </div>
          </div>
        </div>

        <div class="col-md-3">
            {{-- <p>
                <label for="pname">no of bedrooms</label>
                <input type="number" min="1" name="property_price" class="form-control" required >
              </p> --}}
              {{-- <p>
                <label for="pname">Currency</label>
               <select name="currency_id" id="" class="form-control">
                   @foreach($data[0]['currencies'] as $currency)
                     <option value="{{$currency->id}}">{{$currency->symbol}}</option>
                   @endforeach
               </select>
              </p> --}}


            <div class="row">

                @if($data[0]['propertyType']->name == 'House')
                <div class="col-md-6">
                    {{-- <p>
                        <label for="">no of bedrooms</label>
                        <input type="number" min="1" name="no_of_bedrooms" class="form-control" placeholder="no of bedrooms" >
                    </p> --}}
                </div>
                <div class="col-md-6">
                    {{-- <p>
                        <label for="">no of bathrooms</label>
                        <input type="number" min="1" name="no_of_bathrooms" class="form-control" placeholder="no of bathrooms">
                    </p> --}}

                </div>
                <div class="col-md-6">
                    {{-- <p>
                        <label for="">no of floors</label>
                        <input type="number" min="1" name="no_of_floor" class="form-control" placeholder="no of floors">
                    </p> --}}

                </div>
                <div class="col-md-6">
                    {{-- <p>
                        <label for="">Square(m2)</label>
                        <input type="text" name="square" class="form-control" placeholder="enter square">
                    </p> --}}

                </div>
                <div class="col-md-6">
                    {{-- <p>
                        <label for="pname">house no</label>
                        <input type="number" min="1" name = "house_number" class="form-control" placeholder="house no" >
                    </p>
                   </div> --}}
                @endif
                <div class="col-md-6">
                    <p>
                        <label for="">condo building</label>
                        <input type="text" name="condo_building" class="form-control" placeholder="condo building">
                    </p>

                </div>
                <div class="col-md-6">
                    <p>
                        <label for="">condo floor</label>
                        <input type="text" name="condo_floor" class="form-control" placeholder="condo floor">
                    </p>

                </div>
                <div class="col-md-6">
                    <p>
                        <label for=""> building no floors</label>
                        <input type="number" min="1" name="building_no_floors" class="form-control" placeholder="building no floors">
                    </p>

                </div>
                <div class="col-md-6">
                    <p>
                        <label for=""> building name No</label>
                        <input type="number" min="1" name="building_name_No" class="form-control" placeholder="building no floors">
                    </p>

                </div>



            </div>

        </div>

        <div class="col-md-3">
           <div class="row">

            <div class="col-md-6">
                {{-- <p>floors in Unit</label>
                    <input type="number" min="1" name="floors_in_unit" class="form-control" placeholder="floors in Unit">
                </p> --}}

            </div>



               <div class="col-md-6">
                {{-- <p>
                    <label for="pname">Street  Name</label>
                    <input type="text" name = "street_name" class="form-control" placeholder="street name" >
                </p> --}}
               </div>

                <div class="col-md-6">
                    {{-- <p>
                        <label for="pname">Street  Type</label>
                        <input type="text" name = "street_type" class="form-control" placeholder="street type" >
                    </p> --}}
                </div>
                <div class="col-md-6">
                    {{-- <p>
                        <label for="pname">MLS No</label>
                        <input type="number" min="1" name = "mls_number" class="form-control" placeholder="Mls No" >
                    </p> --}}
                </div>

                <div class="col-md-6">
                    {{-- <p>
                        <label for="street Dir">Street  Dir</label>
                        <input type="text" name = "street_dir" class="form-control"placeholder="street dir" >
                    </p> --}}
                </div>

                <div class="col-md-6">
                    {{-- <p>
                        <label for="Unit Number">Unit  number</label>
                        <input type="number" min="1" name = "unit_number" placeholder="unit number" class="form-control" >
                    </p> --}}
                </div>

                <div class="col-md-6">
                    {{-- <p>
                        <label for="period">Period</label>
                        <input type="text" name = "period" class="form-control" placeholder="period" >
                    </p> --}}
                </div>

                <div class="col-md-6">
                    {{-- <p>
                        <label for="taxId">Tax Id</label>
                        <input type="number" name = "tax_id" class="form-control" placeholder="tax Id" >
                    </p> --}}
                </div>

                <div class="col-md-6">
                    {{-- <p>
                        <label for="taxes">Taxes</label>
                        <input type="text" name = "taxes" class="form-control" placeholder="tax Id" >
                    </p> --}}
                </div>

                <div class="col-md-6">
                    {{-- <p>
                        <label for="taxes">Tax year</label>
                        <input type="date" name = "tax_year" class="form-control" placeholder="tax year" >
                    </p> --}}
                </div>

           </div>

        </div>

    </div>
    {{-- <input type="hidden" value="{{$data[0]['propertyType']->id}}" name ="propertyTypeId"> --}}

 <section id="">

     {{-- <p>
        <input type="checkbox" name="is_feautured">  is_feautured
     </p>

     <p>
         <input type="checkbox" name="fire_place"> Fire place
     </p> --}}

 </section>
      <h3>community feautures</h3>
      <div class="container row">
        {{-- @foreach ($data[0]['f_communities'] as $c_feauture)
          <div class=" col-md-2">
            <ul class="list-unstyled">


              <li><input type="checkbox" name="community_fs[]" value="{{$c_feauture->id}}" >{{$c_feauture->c_feautures}}</li>

            </ul>

          </div>
          @endforeach --}}
        </div>
        {{-- exterior feautures --}}
        <h3>  Exterior feautures</h3>
        <div class="container row">
            {{-- @foreach ($data[0]['exterior_feautures'] as $exterior_feauture)
              <div class=" col-md-2">
                <ul class="list-unstyled">
                    <li><input type="checkbox" name="exeterior_fs[]" value="{{$exterior_feauture->id}}" >{{$exterior_feauture->exterior_features}}</li>


                </ul>

              </div>
              @endforeach --}}
            </div>
            {{-- <h3>Utilities Data</h3>
            <div class="container row">
              @foreach ($data[0]['utilities_data_feautures'] as $ut_data_feauture)
                <div class=" col-md-2">
                  <ul class="list-unstyled">


                    <li><input type="checkbox" name="utilities_feauture[]" value="{{$ut_data_feauture->id}}" >{{$ut_data_feauture->utilities_data}}</li>

                  </ul>

                </div>
                @endforeach
              </div> --}}


      <p>

        {{-- <input type="submit" class="form-control btn btn-primary" > --}}
    </p>


    </form>
</div>

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
                    console.log(data);
                }
            });
    }
</script>


@endsection
