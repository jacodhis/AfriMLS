<form method="POST" action="{{ route('login') }}">
    @csrf

<a href="#" class="btn btn--facebook btn--block"><i
    class="fa fa-facebook-square"></i>Login with
Facebook</a>
<div class="or-text">
<span>or</span>
</div>
<div class="form-group">
 <input id="email" placeholder="enter your email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
</div>
<!-- .form-group end -->
<div class="form-group">
 <input id="password" type="password" placeholder="enter password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
</div>
<!-- .form-group end -->
<div class="input-checkbox">
<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                </label>
</div>
<button type="submit" class="btn btn-primary">
                {{ __('Login') }}
            </button>

            @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif
</form>
