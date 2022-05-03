@php
   $propertyTypes =  \App\Models\category::get();
@endphp
<li><a href="{{ route('landingPage')}}">Home</a></li>
<li><a href="{{ route('aboutUs')}}">About Us</a></li>


<li class="has-dropdown">
	<a href="#" data-toggle="dropdown" class="dropdown-toggle menu-item">For Sale</a>                      
	<ul class="dropdown-menu">
		@foreach($propertyTypes as $category_nav)
		<li><a onclick="location.href='/for-sale/{{$category_nav->id}}';" data-toggle="dropdown" class="dropdown-toggle">{{$category_nav->name}} </a></li>
		 @endforeach
	</ul>

  
</li>
<li class="has-dropdown">
	<a href="#" data-toggle="dropdown" class="dropdown-toggle menu-item">For Rent</a>
	<ul class="dropdown-menu">
		@foreach($propertyTypes as $category_nav)
		<li><a onclick="location.href='/for-rent/{{$category_nav->id}}';" data-toggle="dropdown" class="dropdown-toggle">{{$category_nav->name}} </a></li>
		 @endforeach
	</ul>
</li>
<li class="has-dropdown">
	<a href="#" data-toggle="dropdown" class="dropdown-toggle menu-item">To Let</a>
	<ul class="dropdown-menu">
		@foreach($propertyTypes as $category_nav)
		<li><a onclick="location.href='/to-let/{{$category_nav->id}}';" data-toggle="dropdown" class="dropdown-toggle">{{$category_nav->name}} </a></li>
		 @endforeach
	</ul>
</li>

<li><a href="#">Contact Us</a></li>


