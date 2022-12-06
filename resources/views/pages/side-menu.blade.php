<div class="sticky-top">
    <div class="card bg-dark py-1">
        <div class="card-body">
            <form action="{{route('search')}}" method="post">
                @csrf
                <select name="county_id" id="county_id" class="form-control p-1 px-3 w-100 mb-2">
                    <option value="">Chose County</option>
                    @foreach($getSearchParams['counties'] as $key0 => $county)
                        <option value="{{$county->id}}">{{Str::title(Str::lower($county->name))}}</option>
                    @endforeach

                </select>
                <input type="text" placeholder="Choose Neighborhood" class="form-control p-1 px-3 w-100 mb-2">

                <select name="property_type" id="property_type" class="form-control p-1 px-3 w-100 mb-2" required>
                    <option value="" selected>Property Type</option>
                    @foreach($getSearchParams['property_types'] as $key => $property_type)
                        <option value="{{$key}}">{{$property_type}}</option>
                    @endforeach
                </select>

                <select name="category" id="category" class="form-control w-100 mb-2 p-1 px-3" required>
                    <option value="" selected>Select Status</option>
                    @foreach($getSearchParams['categories'] as $key2 => $category)
                        <option value="{{$key2}}">{{$category}}</option>
                    @endforeach
                </select>

                <button class="w-100 form-control btn-danger p-1">Submit</button>
            </form>
        </div>
    </div>
    <div class="m-4"><span>&nbsp;</span></div>
    <div class="bg-white rounded p-2 mt-2">

        <figure class="figure">
            <img src="https://pictures-kenya.jijistatic.com/18849782_MzAwLTIyNS00MzIwY2E3NWRmLTE.webp" class="w-100" alt="House for sale - Karen">
            <figcaption class="figure-caption text-center">House for sale - Karen</figcaption>
        </figure>

    </div>
</div>
