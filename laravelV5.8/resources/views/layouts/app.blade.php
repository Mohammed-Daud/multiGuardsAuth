<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">


        <header>
            <nav div class="navbar navbar-default navbar-static-top" style="background-color:#751b08; border-bottom-color:#ed502e;" role="navigation">
                <div class="container">
                    <ul class="social-network">
                        <li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook fa-1x"></i></a>
                        </li>
                        <li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter fa-1x"></i></a>
                        </li>
                        <li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin fa-1x"></i></a>
                        </li>
                        <li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest fa-1x"></i></a>
                        </li>
                        <li><a href="#" data-placement="top" title="Google plus"><i
                                    class="fa fa-google-plus fa-1x"></i></a></li>
                    </ul>
                    <ul class="info">
                        <li>
                            <p><i class="fa fa-phone"></i>+1 769 525 422 5663</p>
                        </li>
                        <li><a href="#"><i class="fa fa-envelope"></i>hello@Dewi.com</a></li>
                    </ul>

                    <ul class="info pull-right">
                        @guest
                        <li>
                            <a href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                        <li>
                            <a href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                        
                    </ul>

                </div>
            </nav>

            <nav class="navbar navbar-default navbar-static-top" role="navigation">
                <div class="navigation">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target=".navbar-collapse.collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <div class="navbar-brand">
                                <a href="index.html">
                                    <h1><span>D</span>ewi</h1>
                                </a>
                            </div>
                        </div>

                        <div class="navbar-collapse collapse">
                            <div class="menu">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation"><a href="index.html">Home</a></li>
                                    <li role="presentation"><a href="services.html">Services</a></li>
                                    <li role="presentation"><a href="blog.html">Blog</a></li>
                                    <li role="presentation"><a href="portfolio.html">Portfolio</a></li>
                                    <li role="presentation"><a href="contact.html" class="active">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        @yield('content')

        <footer>
            <div class="inner-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 f-about">
                            <a href="index.html">
                                <h1><span>D</span>ewi</h1>
                            </a>
                            <p>We possess within us two minds. So far I have written only of the conscious mind. I would
                                now like to introduce you to your second mind, the hidden and mysterious subconscious.
                                Our subconscious mind contains such power.</p>

                        </div>
                        <div class="col-md-4 l-posts">
                            <h3 class="widgetheading">Latest Posts</h3>
                            <ul>
                                <li><a href="#">This is awesome post title</a></li>
                                <li><a href="#">Awesome features are awesome</a></li>
                                <li><a href="#">Create your own awesome website</a></li>
                                <li><a href="#">Wow, this is fourth post title</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4 f-contact">
                            <h3 class="widgetheading">Stay in touch</h3>
                            <a href="#">
                                <p><i class="fa fa-envelope"></i> example@gmail.com</p>
                            </a>
                            <p><i class="fa fa-phone"></i> +345 578 59 45 416</p>
                            <p><i class="fa fa-home"></i> Dewi inc | PO Box 23456 Little Lonsdale St, New York <br>
                                Victoria 8011 USA</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="last-div">
                <div class="container">
                    <div class="row">
                        <div class="copyright">
                            &copy; Dewi Theme. All Rights Reserved
                            <div class="credits">
                                
                                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                            </div>
                        </div>
                        <nav class="foot-nav">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Portfolio</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </nav>
                        <div class="clear"></div>
                    </div>
                </div>
                <a href="" class="scrollup"><i class="fa fa-chevron-up"></i></a>
            </div>
        </footer>

    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
<?php if(false){?>


<!DOCTYPE html>


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    

    

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                    @endif
                    @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>
    </div>
</body>

</html>
--}}
<?php }?>
