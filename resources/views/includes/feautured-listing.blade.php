@dd('hello')

@foreach($data[0]['properties'] as $property)
    <div class="col row pb-3 mb-3" style="margin-bottom: 15px">
        <div class="property-itemdd">
           <div class="property--img col-md-4">
                {{-- <a href="/properties/{{$property->id}}"> --}}
                <a href="{{route('propertyShow',[$property->id])}}">
                   @php
                    $images = explode('|',$property->image);
                   @endphp
                    <img src="{{URL::to($images[0])}}" alt="property image"
                    class="img-responsive" style="height: 170px; width: 450px">
               </a>
           </div>
           <div class="property--content col-md-8">
               <div class="property--info">
                   {{-- <h5 class="property--title"><a href="#">3 Bedroomed in Runda</a></h5> --}}
                   <p class="property--description">{{$property->name ?? ""}}</p>
                   <p class="property--location">
                    @if(!(empty($property->location)))
                        {{ucwords($property->location->address) ?? ""}},{{$property->city->name??""}}
                    @endif
                    </p>
                   <p class="property--price">{{$property->city->country->currency->symbol ??"Ksh"}} {{$property->price??""}}</p>
               </div>
               <!-- .property-info end -->
               <div class="property--features">
                   <ul class="list-unstyled mb-0">
                    {{--
                       <li><span class="feature">Beds:</span><span class="feature-num">2</span>
                       </li>
                       <li><span class="feature">Baths:</span><span class="feature-num">1</span>
                       </li>
                       <li><span class="feature">Area:</span><span class="feature-num">200 sq
                               ft</span></li> --}}
                   </ul>
               </div>
               <!-- .property-features end -->
           </div>
       </div>
    </div>
@endforeach
