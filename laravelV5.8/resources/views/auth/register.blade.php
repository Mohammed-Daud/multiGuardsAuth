@extends('layouts.app')

@section('content')

<div class="jumbotron">
    <h2>Register</h2>
</div>
<div class="contact-area">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div id="sendmessage">Your message has been sent. Thank you!</div>
                <div id="errormessage"></div>
                <form method="POST" action="{{ route('register') }}">
                        @csrf

                    <div class="form-group @error('name') has-error @enderror">

                        <label for="name">Name</label>

                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}"  autocomplete="name" autofocus>

                        @error('name')
                            <span class="text-danger">
                                {{ $message }}
                            </span>
                        @enderror

                        



                    </div>

                    <div class="form-group @error('email') has-error @enderror">

                        <label for="email">E-Mail Address</label>

                        <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}" >

                        @error('email')
                            <span class="text-danger">
                                {{ $message }}</strong>
                            </span>
                        @enderror

                        



                    </div>

                    <div class="form-group @error('password') has-error @enderror">

                        <label for="password">Password</label>

                        <input id="password" type="text" class="form-control" name="password" value="{{ old('password') }}" >

                        @error('password')
                            <span class="text-danger">
                                {{ $message }}</strong>
                            </span>
                        @enderror

                    </div>

                    <div class="form-group @error('password_confirmation') has-error @enderror">

                        <label for="password-confirm">Confirm Password</label>

                        <input id="password-confirm" type="text" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}" >

                        @error('password_confirmation')
                            <span class="text-danger">
                                {{ $message }}</strong>
                            </span>
                        @enderror

                        



                    </div>
                    

                    <div class="text-center">
                        <button type="submit" class="btn">Send Message</button>
                    </div>

                    
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
