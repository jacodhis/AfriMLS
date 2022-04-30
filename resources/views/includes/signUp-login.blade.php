<div class="module module-login pull-left">
    @auth
        <a href="{{ url('/home') }}"  class="btn-popup">Home</a>
    @else
        <a  href="{{ url('/login') }}" id="myBtn" class="btn-popup">Log in</a>

        {{-- @if (Route::has('register'))
            <a href="{{ route('register') }}"  class="btn-popup">Register</a>
        @endif --}}
    @endauth
</div>


<!-- The Modal -->
{{-- <div id="myModal" class="modal"> --}}
  {{-- <center>
    <div class="modal-content" style="width:30%;">
        <div class="modal-header">
            <a id="close" class="close">&times;</a>
          </div>
          <div class="modal-body" style="padding:40px 50px;">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation"> <a class="nav-link active" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true">Login</a> </li>
                <li class="nav-item" role="presentation"> <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="false">Register</a> </li>
            </ul>
            <form role="form">
              <div class="form-group">
                <label for="usrname"> Username</label>
                <input type="text" class="form-control" id="usrname" placeholder="Enter email">
              </div>
              <div class="form-group">
                <label for="psw">Password</label>
                <input type="text" class="form-control" id="psw" placeholder="Enter password">
              </div>
              <div class="checkbox">
                <label><input type="checkbox" value="" checked>Remember me</label>
              </div>
                <button type="submit" class="btn btn-success btn-block"> Login</button>
            </form>
          </div>
      
    </div>
  </center>
</div> --}}
{{-- 
<script>

    var box = document.getElementById('myModal')

      // Get the button that opens the modal
      var btn = document.getElementById("myBtn");
      btn.addEventListener('click',()=>{
        box.style.display = "block";
      })
         // Get the element that closes the modal
    var closeBox = document.getElementById("close");
    closeBox.addEventListener('click',()=>{
        box.style.display = "none";
    })
    


</script> --}}





