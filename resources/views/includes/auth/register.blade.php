<form mb-0 method="POST" action="{{ route('register') }}">
    @csrf
    <a href="#" class="btn btn--facebook btn--block"><i
            class="fa fa-facebook-square"></i>Register with
        Facebook</a>
    <div class="or-text">
        <span>or</span>
    </div>
    <div class="form-group">
          <input id="name" type="text" placeholder="enter your name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
    </div>

    <!-- .form-group end -->
    <div class="form-group">
        <input id="email" type="email" placeholder="enter email address" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
    </div>
    <!-- .form-group end -->
    <div class="form-group">
          <input id="password" type="password"  placeholder="enter password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
    </div>
    <div class="form-group">
          <input id="password-confirm" type="password" placeholder="confirm password" class="form-control" name="password_confirmation" required autocomplete="new-password">
    </div>
    <!-- .form-group end -->
    <div class="input-checkbox">
        <label class="label-checkbox">
            <span>I agree with all <a href="#">Terms &
                    Conditions</a></span>
            <input type="checkbox">
            <span class="check-indicator"></span>
        </label>
    </div>
    <button type="submit" class="btn btn-primary">
                {{ __('Register') }}
            </button>
</form>
