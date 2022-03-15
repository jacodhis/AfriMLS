@extends('layouts.backend.layout')


@section('title')
   add {{$data[0]['propertyType']->name}}
@endsection

@section('content')

<div class="card">
    <form action="{{route('property.store')}}" method="post" enctype="multipart/form-data">
        @csrf
    <div class="row">
        <div class="col-md-4">
            <p>
                <label for="pname">property name </label>
                <input type="text" name = "pname" class="form-control">
            </p>

            <p>
                <label for="pname">property image</label>
                <input type="file" name="property_images[]" class="form-control" multiple>
            </p>
            <p>
                <label for="description">Description</label>
                <textarea name="description" id="" cols="20" rows="5" class="form-control"></textarea>
            </p >



        </div>
        <div class="col-md-4">
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
            <input type="number" min="1" name="property_price" class="form-control" >
          </p>
          {{-- <p>
            <label for="pname">Location</label>
            <input type="text" name="location" class="form-control" >
        </p> --}}

          <p>
            <label for="">Type</label>
            <select name="option_id" id="" class="form-control">Type
                <option value="" disabled>select option</option>
                @foreach ($data[0]['options'] as $option)
                    <option value="{{$option->id}}">{{$option->name}}</option>
                @endforeach
            </select>
        </p>





            <input type="hidden" value="{{$data[0]['propertyType']->id}}" name ="propertyTypeId">



        </div>

        <div class="col-md-4">
            <p>
                <label for="pname">property price</label>
                <input type="number" min="1" name="property_price" class="form-control" >
              </p>
              <p>
                <label for="pname">Currency</label>
               <select name="currency_id" id="" class="form-control">
                   @foreach($data[0]['currencies'] as $currency)
                     <option value="{{$currency->id}}">{{$currency->symbol}}</option>
                   @endforeach
               </select>
              </p>

            {{-- <h5>Coordinates</h5>
            <div class="row">

                <div class="col-md-6">
                    <p>

                        <input type="text" name="location" class="form-control" placeholder="Latitude" >
                    </p>
                </div>
                <div class="col-md-6">
                    <p>

                        <input type="text" name="location" class="form-control" placeholder="longitude">
                    </p>

                </div>
            </div> --}}

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
