@foreach($data[0]['properties'] as $property)
<!-- Blog Entry #1 -->
<div class="col-xs-12 col-sm-6 col-md-3">
    <div class="blog-entry">
        {{-- <div class="entry--img"> --}}
            <a href="{{route('propertyShow',[$property->id])}}">
                @php
                 $images = explode('|',$property->image);
                @endphp
                 <img src="{{URL::to($images[0])}}" alt="property image"
                 class="img-responsive" >
            </a>
        {{-- </div> --}}
        <div class="entry--content">
            <div class="entry--meta">
                <a href="#">{{$property->name ?? ""}}</a><a href="#">{{$property->city->name??""}}</a>
            </div>

            <div class="entry--bio">
                {{$property->price ?? ""}}
            </div>
            <div class="entry--more">
                <a href="#">View<i class="fa fa-angle-double-right"></i></a>
            </div>
        </div>
    </div>
    <!-- .blog-entry end -->
</div>
<!-- .col-md-4 end -->
@endforeach
