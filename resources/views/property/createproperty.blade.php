@extends('layouts.backend.layout')


@section('title')
   add {{$data[0]['propertyType']->name ??""}}
@endsection

@section('content')
 {{-- <head> {{$data[0]['propertyType']->name}}</head> --}}
<div class="card">
    <form action="{{route('property.store')}}" method="post" enctype="multipart/form-data">
        @csrf
    <div class="row">
        <div class="col-md-3">
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



        </div>
        <div class="col-md-3">
            <p>
                <label for="">Cities</label>
              <select name="city_id" id="" class="form-control">
                  <option value="" disabled>select city</option>
                  @foreach ($data[0]['cities'] as $city)
                   <option value="{{$city->id}}">{{$city->name}}</option>
                  @endforeach

              </select>
          </p>
          <p>
            <label for="pname">property price</label>
            <input type="number" min="1" name="property_price" class="form-control" required>
          </p>
          <p>
            <label for="">Type</label>
            <select name="option_id" id="" class="form-control">Type
                <option value="" disabled>select option</option>
                @foreach ($data[0]['options'] as $option)
                    <option value="{{$option->id}}">{{$option->name}}</option>
                @endforeach
            </select>
        </p>
        {{-- <p>
            <label for="pname">no of bedrooms</label>
            <input type="text" name="location" class="form-control" >
        </p> --}}
            <input type="hidden" value="{{$data[0]['propertyType']->id}}" name ="propertyTypeId">



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

                <div class="col-md-6">
                    <p>
                        <label for="">no of bedrooms</label>
                        <input type="number" min="1" name="no_of_bedrooms" class="form-control" placeholder="no of bedrooms" >
                    </p>
                </div>
                <div class="col-md-6">
                    <p>
                        <label for="">no of bathrooms</label>
                        <input type="number" min="1" name="no_of_bathrooms" class="form-control" placeholder="no of bathrooms">
                    </p>

                </div>
                <div class="col-md-6">
                    <p>
                        <label for="">no of floors</label>
                        <input type="number" min="1" name="no_of_floor" class="form-control" placeholder="no of floors">
                    </p>

                </div>
                <div class="col-md-6">
                    <p>
                        <label for="">square</label>
                        <input type="text" name="square" class="form-control" placeholder="enter square">
                    </p>

                </div>
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

                <div class="col-md-6">
                    <p>floors in Unit</label>
                        <input type="number" min="1" name="floors_in_unit" class="form-control" placeholder="floors in Unit">
                    </p>

                </div>
            </div>

        </div>

        <div class="col-md-3">
           <div class="row">
               <div class="col-md-6">
                <p>
                    <label for="pname">house no</label>
                    <input type="number" min="1" name = "house_number" class="form-control" placeholder="house no" >
                </p>
               </div>
               <div class="col-md-6">
                <p>
                    <label for="pname">Street  Name</label>
                    <input type="text" name = "street_name" class="form-control" placeholder="street name" >
                </p>
               </div>
               <div class="col-md-6">
                <p>
                    <label for="pname">Street  Type</label>
                    <input type="text" name = "street_type" class="form-control" placeholder="street type" >
                </p>
               </div>
               <div class="col-md-6">
                <p>
                    <label for="pname">Street  Dir</label>
                    <input type="text" name = "street_dir" class="form-control"placeholder="street dir" >
                </p>
               </div>
               <div class="col-md-6">
                <p>
                    <label for="pname">Unit  number</label>
                    <input type="number" min="1" name = "unit_number" placeholder="unit number" class="form-control" >
                </p>
               </div>
               <div class="col-md-6">
                <p>
                    <label for="pname">Period</label>
                    <input type="text" name = "period" class="form-control" placeholder="period" >
                </p>
               </div>
           </div>

        </div>

    </div>
    {{-- end of row --}}
      {{-- <div class="#">
            @csrf

              @if(session()->has('success'))
              <span style="color: blue">{{session('success')}}</span></br>
              @elseif(session()->has('delete'))
              <span style="color:red">{{session('delete')}}</span></br>
              @endif



      </div> --}}
      <h3>community feautures</h3>
      <div class="container row">
        @foreach ($data[0]['f_communities'] as $c_feauture)
          <div class=" col-md-2">
            <ul class="list-unstyled">


              <li><input type="checkbox" name="community_fs[]" value="{{$c_feauture->id}}" >{{$c_feauture->c_feautures}}</li>

            </ul>

          </div>
          @endforeach
        </div>
        {{-- exterior feautures --}}
        <h3>  Exterior feautures</h3>
        <div class="container row">
            @foreach ($data[0]['exterior_feautures'] as $exterior_feauture)
              <div class=" col-md-2">
                <ul class="list-unstyled">
                    <li><input type="checkbox" name="exeterior_fs[]" value="{{$exterior_feauture->id}}" >{{$exterior_feauture->exterior_features}}</li>


                </ul>

              </div>
              @endforeach
            </div>
            <h3>Utilities Data</h3>
            <div class="container row">
              @foreach ($data[0]['utilities_data_feautures'] as $ut_data_feauture)
                <div class=" col-md-2">
                  <ul class="list-unstyled">


                    <li><input type="checkbox" name="utilities_feauture[]" value="{{$ut_data_feauture->id}}" >{{$ut_data_feauture->utilities_data}}</li>

                  </ul>

                </div>
                @endforeach
              </div>


      <p>

        <input type="submit" class="form-control btn btn-primary" >
    </p>


    </form>
</div>


@endsection