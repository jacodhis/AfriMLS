

@foreach($data[0]['properties'] as $property)

                        <div class="property-item">
                           <div class="property--img">
                                {{-- <a href="/properties/{{$property->id}}"> --}}
                                <a href="{{route('propertyShow',[$property->id])}}">
                                   @php
                                    $images = explode('|',$property->image);
                                   @endphp
                                    <img src="{{URL::to($images[0])}}" alt="property image"
                                    class="img-responsive" >
                               </a>
                           </div>
                           <div class="property--content">
                               <div class="property--info">
                                   {{-- <h5 class="property--title"><a href="#">3 Bedroomed in Runda</a></h5> --}}
                                   <p class="property--location">{{$property->city->name??""}},  {{$property->city->country->name??""}}</p>
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
                        @endforeach
