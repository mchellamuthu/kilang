<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Happy Classrooms') }}</title>
    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="{{ asset('css/dojo.css') }}" rel="stylesheet">
    <link href="{{ asset('css/theme.css') }}" rel="stylesheet">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <!-- {{ config('app.name', 'Laravel') }} -->
                        <!-- <img src="{{ asset('img/logo.png') }}" class="img-responsive" /> -->
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        <li><a href="{{ url('/learnmore') }}">Learn More</a></li>
                        <li><a href="{{ url('/resources') }}">Resources</a></li>
                        @guest
                        <li><a href="javascript:void();" onclick="ShowLoginRole();">Login</a></li>
                        <li><button class="btn btn-primary btn-sm navbar-btn signup-btn" onclick="showRole();">Sign up</button></li>
                        @else
                        <li class="dropdown">
                            <a href="{{ route('home') }}" role="button" aria-expanded="false">
                                    {{ Auth::user()->title }} {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">
            
            <div class="row">
                <div class="col-md-6 text-center pull-right landing-text">
                    <h1 id="customize-inviter-name">@lang('home.home_title')</h1>
                    <p class="hidden-for-iphone sub-heading">The simple way to build an amazing classroom community</p>
                    @guest<div class="hidden-for-android-device hidden-for-apple-device hidden-for-amazon-device"><button class="btn btn-primary btn-lg flags js-general-signup-button main-signup" data-toggle="modal" data-target="#general-signup-modal" data-track="click:monster-header-signup-teacher-button" onclick="showRole();">Sign up</button></div>@endguest
                    <p class="hidden-for-apple-device text-muted">Used in 90% K-8 schools in US | Always free for teachers</p>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('img/communication_image.png') }}" class="img-responsive" />
                </div>

            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-xs-6">
                    <h4 class="heading">Company</h4>
                    <ul>
                        <li><a href="/en-GB/about">About us</a></li>
                        <li><a href="/en-GB/press">Press</a></li>
                        <li><a href="/en-GB/jobs">Careers</a></li>
                        <li><a href="http://engineering.classdojo.com" target="_blank">Engineering</a></li>
                    </ul>
                </div>
                <div class="col-md-2 col-xs-6">
                    <h4 class="heading">Resources</h4>
                    <ul>
                        <li><a href="https://ideas.classdojo.com">Big Ideas</a></li>
                        <li><a href="/en-GB/resources">Resources</a></li>
                        <li><a href="http://blog.classdojo.com" target="_blank">Blog</a></li>
                        <li><a href="/en-GB/privacycenter">Privacy Center</a></li>
                    </ul>
                </div>
                <div class="col-md-2 col-xs-6">
                    <h4 class="heading">Support</h4>
                    <ul>
                        <li><a href="http://classdojo.zendesk.com" target="_blank">Helpdesk</a></li>
                        <li><a href="/en-GB/contact">Contact</a></li>
                        <li><a href="/en-GB/terms">Terms of Service</a></li>
                        <li><a href="/en-GB/privacy">Privacy Policy</a></li>
                    </ul>
                </div>
                <div class="col-md-2 col-xs-6">
                    <h4 class="heading">Community</h4>
                    <ul>
                        <li><a href="/wall-of-love">Wall of Love</a></li>
                        <li><a href="http://facebook.com/classdojo" target="_blank">Facebook</a></li>
                        <li><a href="http://twitter.com/classdojo" target="_blank">Twitter</a></li>
                        <li><a href="https://instagram.com/classdojo" target="_blank">Instagram</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-xs-12 col-md-offset-1">
                    <div class="language">
                        <button type="button" class="btn btn-default btn-block" data-toggle="modal" data-target="#language-modal"><span class="caret"></span> English (UK)</button>
                    </div>
                </div>

            </div>
        </div>
    </footer>

@include('components.modal')
</body>

</html>
