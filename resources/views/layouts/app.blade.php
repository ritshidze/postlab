<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" href="{{ asset('images/fev.png') }}">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">-->

        <!-- Styles -->
        <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('bootstrap/datepicker/css/datepicker.min.css') }}" rel="stylesheet">
        <link href="{{ asset('bootstrap/datepicker/css/datepicker3.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/postlab.css') }}" rel="stylesheet">
        <link href="{{ asset('css/menu.css') }}" rel="stylesheet">
    </head>
    <body>
        <div id="app">
            <nav class="navbar navbar-inverse navbar-fixed-top">
                <div class="container" style="background-color: #000;">
                    <div class="navbar-header">
                        <!-- Collapsed Hamburger -->
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                            <span class="sr-only">Toggle Navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <!-- Branding Image -->
                        @if (Auth::guest())
                        <a class="navbar-brand" href="{{ route('index') }}">
                            <img src="{{ asset('images/fev.png') }}" class="img-responsive img-circle" style="height: 50px; width: 50px;">
                        </a>
                        @else 
                        <a class="navbar-brand" href="{{ route('home') }}">
                            <img src="{{ asset('images/fev.png') }}" class="img-responsive img-circle" style="height: 50px; width: 50px;">
                        </a>
                        @endif

                    </div>

                    <div class="collapse navbar-collapse" id="app-navbar-collapse">
                        <!-- Right Side Of Navbar -->
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="{{ route('how') }}">How It Works</a></li>
                            <li><a href="{{ route('faqs') }}">FAQ's</a></li>
                            <li><a href="{{ route('about') }}">About US</a></li>
                            <li><a href="#ContactUs" name="ContactUs" id="contact_us">Contact US</a></li>
                            @if (!Auth::guest())
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{ route('logout') }}">Logout</a></li>
                                </ul>
                            </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </nav>

            @yield('content')

            <!--footer-->
            <div class="container-fluid footer small" id="ContactUs">
                <div class="row">
                    <div class="col-lg-4">
                        <h4>Menu</h4>
                        <table class="table">
                            <tr>
                                <td><a style="color: #cccccc;" href="{{ url('/') }}">About US</a></td>
                                <td><a style="color: #cccccc;" href="{{ route('about') }}">About US</a></td>
                                <td><a style="color: #cccccc;" href="{{ route('how') }}">How It Works</a></td>
                                <td><a style="color: #cccccc;" href="{{ route('faqs') }}">FAQ's</a></td>
                                @if (Auth::guest())
                                <td><a style="color: #cccccc;" href="{{ route('login') }}">Login</a></td>
                                <td><a style="color: #cccccc;" href="{{ route('register') }}">Sign Up</a></td>
                                @else
                                <td><a style="color: #cccccc;" href="{{ route('logout') }}">Logout</a></td>
                                @endif
                            </tr>
                            <tr>
                                @if (Auth::guest())
                                <td colspan="6"></td>
                                @else
                                <td colspan="5"></td>
                                @endif
                            </tr>
                        </table>
                    </div>
                    <div class="col-lg-4">
                        <div class="col-lg-12" style="padding: 0;">
                            <h4>Contact Details</h4>
                            <table class="table">
                                <tr>
                                    <td>Phone:</td>
                                    <td>011 232 1231</td>
                                </tr>
                                <tr>
                                    <td>Cell:</td>
                                    <td>011 232 1231</td>
                                </tr>
                                <tr>
                                    <td>Email:</td>
                                    <td>info@postlab.co.za</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-lg-12" style="padding: 0;">
                            <h4>Social Media & More</h4>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="padding: 0;">
                                <a href="#" class="footer-link">
                                    <i style="color: #cccccc;" class="fa fa-facebook-square fa-3x" aria-hidden="true"></i>
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="padding: 0;">
                                <a href="#" class="footer-link">
                                    <i style="color: #cccccc;" class="fa fa-twitter-square fa-3x" aria-hidden="true"></i>
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="padding: 0;">
                                <a href="#" class="footer-link">
                                    <i style="color: #cccccc;" class="fa fa-linkedin-square fa-3x" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 contact">
                        <h4>Send Message</h4>
                        @if (Session::has('message'))
                        <p class="bg-success" style="padding: 10px; color: #006600;">
                            {{ Session::get('message') }}
                        </p>
                        @endif
                        <form action="{{ url('/contact') }}#ContactUs" method="post">

                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <input type="text" name="name" value="{{ old('name') }}" class="form-control border-radius-remover" placeholder="Name" required="">
                                @if ($errors->has('name'))
                                <span class="help-block form-errors">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('surname') ? ' has-error' : '' }}">
                                <input type="text" name="surname" value="{{ old('surname') }}" class="form-control border-radius-remover" placeholder="Surname" required="">
                                @if ($errors->has('surname'))
                                <span class="help-block form-errors">
                                    <strong>{{ $errors->first('surname') }}</strong>
                                </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <input type="email" name="email" value="{{ old('email') }}" class="form-control border-radius-remover" placeholder="Email" required="">
                                @if ($errors->has('email'))
                                <span class="help-block form-errors">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('cell') ? ' has-error' : '' }}">
                                <input type="text" name="cell" value="{{ old('cell') }}" class="form-control border-radius-remover" placeholder="Cell or phone number" required="">
                                @if ($errors->has('cell'))
                                <span class="help-block form-errors">
                                    <strong>{{ $errors->first('cell') }}</strong>
                                </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('message') ? ' has-error' : '' }}">
                                <textarea name="message" class="form-control border-radius-remover" placeholder="Message" required="">{{ old('message') }}</textarea>
                                @if ($errors->has('message'))
                                <span class="help-block form-errors">
                                    <strong>{{ $errors->first('message') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <button class="btn btn-default border-radius-remover">Submit</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-12 bg-info copyright">
                        <p class="pull-right">
                            COPYRIGHT @ POSTLAB {{date('Y/m/d')}}
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Scripts -->
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->    
        <script src="{{ asset('js/jquery.min.1.12.4.js') }}"></script>

        <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('bootstrap/datepicker/js/bootstrap-datepicker.min.js') }}"></script>

        <script src="{{ asset('js/postlab.js') }}"></script>
    </body>
</html>
