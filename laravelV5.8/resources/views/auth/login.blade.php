@extends('layouts.app')

@section('content')



<div class="jumbotron">
    <h2>Login</h2>
</div>
<div class="contact-area">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div id="sendmessage">Your message has been sent. Thank you!</div>
                <div id="errormessage"></div>
                <form method="POST" class="contactForm" action="{{ route('login') }}">
                    @csrf


                    <div class="form-group @error('email') has-error @enderror">

                        <span>Email</span>

                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"
                            autocomplete="email" autofocus>

                        @error('email')

                        <div style="display:block;" class="validation">{{ $message }}</div>
                        @enderror



                    </div>
                    <div class="form-group @error('password') has-error @enderror">

                        <span>Password</span>
                        <input id="password" type="password" class="form-control" name="password"
                            autocomplete="current-password">

                        @error('password')
                        <div style="display:block;" class="validation">{{ $message }}</div>

                        @enderror

                    </div>

                    <div class="form-group row">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                    {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>


                    <div class="text-center">
                        <button type="submit" class="btn">Send Message</button>
                    </div>

                    @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                    @endif
                </form>
            </div>
        </div>
    </div>
</div>


@endsection
