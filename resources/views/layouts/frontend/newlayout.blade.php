@php(extract($data))

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AfriMLS</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/fontawesome.min.css" integrity="sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="{{ asset('assets-bs5/css/style.css')}}">
      <script src="https://kit.fontawesome.com/9800030203.js" crossorigin="anonymous"></script>
</head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
    <div class="container"><a class="navbar-brand mr-5" href="{{route('newhome')}}"><img src="{{asset('assets/images/logo/AfriMLS-logo-web.jpg')}}" class="logo" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              For Sale
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <!--
			  <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
			  -->
              @foreach($getSearchParams['property_types'] as $category_nav)
				<li><a onclick="location.href='/for-sale/';" data-toggle="dropdown" class="dropdown-toggle">{{$category_nav}}</a></li>
			  @endforeach
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              For Rent
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              @foreach($getSearchParams['property_types'] as $category_nav)
                <li><a onclick="location.href='/for-rent/';" data-toggle="dropdown" class="dropdown-toggle">{{$category_nav}}</a></li>
              @endforeach
			  <!--
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
			  -->

            </ul>
          </li>
        </ul>
        <ul class="navbar-nav mb-2 mb-lg-0">
        <li class="nav-item">
          <!--
		  <a class="nav-link" href="#">Login</a>
		  -->
		   @auth
	        <a href="{{ url('/home') }}"  class="btn-popup">Home</a>
			@else
			<a href="{{ url('/login') }}" id="myBtn" class="btn-popup">Log in</a>
		  @endauth
        </li>
        </ul>
      </div>
    </div>
  </nav>
  @yield('content')

    <footer class="bg-lighter pt-5 pb-0">
      <div class="container">
        <div class="row mb-2">
          <div class="col-md-5">
            <h5>
              <b>

            </b>
          </h5>
          <p>
            Africa's best Multi Leasing Property Website
          </p>
          </div>
          <div class="col-1"></div>
          <div class="col-md-3">
            <h5>
              <b>
                Quick Links
              </b>
            </h5>
            <ul class="lists">
              <li><a href="">home  </a></li>
              <li><a href="">properties</a></li>
              <li><a href="">about</a></li>
              <li><a href="">contact</a></li>
            </ul>
          </div>
          <div class="col-md-3">
            <form action="">
              <h5 for=""><b>Sign Up for our Newsletter</b></h5>
             <div class="d-flex"> <input type="text" placeholder="Enter your Email" class="form-control w-70"><button class="btn-danger form-control w-30 border-none p-0">Submit</button></div>
            </form>
            <h5 for="" class=" mt-3"><b>Follow Us</b></h5>
            <div class="d-flex justify-content-between mb-3">
              <a href=""> <img src="https://img.icons8.com/ios-filled/30/25d366/whatsapp.png"/></a>
              <a href=""> <img src="https://img.icons8.com/ios-filled/30/4369a5/facebook.png"/></a>
              <a href=""> <img src="https://img.icons8.com/ios-filled/30/204176/linkedin.png"/></a>
              <a href=""> <img src="https://img.icons8.com/ios-filled/30/5582c9/twitter.png"/></a>
            </div>
          </div>
        </div>
        </div>
        <div class="row text-center bg-light py-2 mx-0">
          <p class="mb-0">
            © 2022 - 2023 AfriLMS, All Rights Reserved. <a href="" class="text-dark">Privacy Policy</a> | <a href="" class="text-dark">Terms</a>
          </p>
        </div>
    </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script src="{{ asset('assets-bs5/js/main.js')}}"></script>
  </body>
</html>
