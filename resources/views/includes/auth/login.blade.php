<div class="card-body">
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="input-group form-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
            </div>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            
        </div>
        <div class="input-group form-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-key"></i></span>
            </div>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="row align-items-center remember">
            <input type="checkbox">Remember     Me
        </div>
        <div class="form-group">
            <input type="submit" value="Login" class="btn float-right login_btn">
        </div>
       
    </form>		
</div>
<div class="card-footer">
    <div class="d-flex justify-content-center links">
        Don't have an account?<a href="{{route('register')}}" style="color: whitesmoke;text-shadow: 2px 2px 5px black">Sign Up</a>
    </div>
    <div class="d-flex justify-content-center">
        @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}" style="color: whitesmoke;text-shadow: 2px 2px 5px black">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif
    </div>

    
</div>
