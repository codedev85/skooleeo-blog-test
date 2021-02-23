<!DOCTYPE html>

<html lang="en" class="no-js">
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8"/>
        <title>Zach's Blog</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta content="" name="description"/>
        <meta content="" name="author"/>

        <!-- GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css">
        <link href="{{asset('vendor/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>

        <!-- PAGE LEVEL PLUGIN STYLES -->
        <link href="{{asset('vendor/swiper/css/swiper.min.css')}}" rel="stylesheet" type="text/css"/>

        <!-- THEME STYLES -->
        <link href="{{asset('css/layout.min.css')}}" rel="stylesheet" type="text/css"/>

        <!-- Favicon -->
        <link rel="shortcut icon" href="favicon.ico"/>
    </head>
    <!-- END HEAD -->

    <!-- BODY -->
    <body>

        <!--========== HEADER ==========-->
        <header class="header">
            <!-- Navbar -->
            <nav class="navbar" role="navigation"  style="background:grey;">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="menu-container">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="toggle-icon"></span>
                        </button>

                        <!-- Logo -->
                        <div class="navbar-logo">
                            <a class="navbar-logo-wrap" href="index.html">
                               <h2 style="color:white;">Zach's Blog</h2>
                            </a>
                        </div>
                        <!-- End Logo -->
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse nav-collapse">
                        <div class="menu-container">
                            <ul class="navbar-nav navbar-nav-right">
                                <li class="nav-item"><a class="nav-item-child nav-item-hover" href="{{url('/')}}">Home</a></li>
                                @if(!Auth::check())
                                <li class="nav-item"><a class="nav-item-child nav-item-hover" href="{{url('register')}}">Register</a></li>
                                <li class="nav-item"><a class="nav-item-child nav-item-hover" href="{{url('login')}}">Login</a></li>
                                @else
                                <li class="nav-item"><a class="nav-item-child nav-item-hover" href="{{url('/home')}}">Dashboard</a></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                    <!-- End Navbar Collapse -->
                </div>
            </nav>
            <!-- Navbar -->
        </header>
        <!--========== END HEADER ==========-->

        <!--========== PAGE LAYOUT ==========-->
        <!-- Work -->
        <div class="bg-color-sky-light">
            <div class="content-md container">
                <div class="row margin-b-40">
                    <div class="col-sm-6">

                        <h1>{{$blog->title}}</h1>
                        <div>
                        <img class="img-responsive" src="{{url('storage/'.$blog->image)}}" alt="Blog Image">
                        </div>
                    </div>
                </div>
                <!--// end row -->

                <!-- Masonry Grid -->
          
                 <p class="">{{$blog->story}}</p>
                
                <a class="content-wrapper-link" href="#"></a>
            
        </div>
        <!-- End Work -->

        <!-- Clients -->
    
        <!-- End Clients -->
        <!--========== END PAGE LAYOUT ==========-->

        <!--========== FOOTER ==========-->
        <footer class="footer">
            <!-- Links -->
            <div class="section-seperator">
                <div class="content-md container">
                    <div class="row">
                        <div class="col-sm-2 sm-margin-b-50">
                            <!-- List -->
                            <ul class="list-unstyled footer-list">
                                <li class="footer-list-item"><a href="#">Home</a></li>
                                <li class="footer-list-item"><a href="#">About</a></li>
                                <li class="footer-list-item"><a href="#">Work</a></li>
                                <li class="footer-list-item"><a href="#">Contact</a></li>
                            </ul>
                            <!-- End List -->
                        </div>
                        <div class="col-sm-2 sm-margin-b-30">
                            <!-- List -->
                            <ul class="list-unstyled footer-list">
                                <li class="footer-list-item"><a href="#">Twitter</a></li>
                                <li class="footer-list-item"><a href="#">Facebook</a></li>
                                <li class="footer-list-item"><a href="#">Instagram</a></li>
                                <li class="footer-list-item"><a href="#">YouTube</a></li>
                            </ul>
                            <!-- End List -->
                        </div>
                        <div class="col-sm-3">
                            <!-- List -->
                            <ul class="list-unstyled footer-list">
                                <li class="footer-list-item"><a href="#">Subscribe to Our Newsletter</a></li>
                                <li class="footer-list-item"><a href="#">Privacy Policy</a></li>
                                <li class="footer-list-item"><a href="#">Terms &amp; Conditions</a></li>
                            </ul>
                            <!-- End List -->
                        </div>
                    </div>
                    <!--// end row -->
                </div>
            </div>
            <!-- End Links -->

            <!-- Copyright -->
            <div class="content container">
                <div class="row">
                    <div class="col-xs-6">
                        <img class="footer-logo" src="img/logo.png" alt="Acidus Logo">
                    </div>
                    <div class="col-xs-6 text-right">
                        <p class="margin-b-0"><a class="fweight-700" href="http://keenthemes.com/preview/acidus/">Acidus</a> Theme Powered by: <a class="fweight-700" href="http://www.keenthemes.com/">KeenThemes.com</a></p>
                    </div>
                </div>
                <!--// end row -->
            </div>
            <!-- End Copyright -->
        </footer>
        <!--========== END FOOTER ==========-->

        <!-- Back To Top -->
        <a href="javascript:void(0);" class="js-back-to-top back-to-top">Top</a>

        <!-- JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
        <!-- CORE PLUGINS -->
        <script src="{{asset('vendor/jquery.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('vendor/jquery-migrate.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>

        <!-- PAGE LEVEL PLUGINS -->
        <script src="{{asset('vendor/jquery.easing.js')}}" type="text/javascript"></script>
        <script src="{{asset('vendor/jquery.back-to-top.js')}}" type="text/javascript"></script>
        <script src="{{asset('vendor/jquery.smooth-scroll.js')}}" type="text/javascript"></script>
        <script src="{{asset('vendor/swiper/js/swiper.jquery.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('vendor/masonry/jquery.masonry.pkgd.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('vendor/masonry/imagesloaded.pkgd.min.js')}}" type="text/javascript"></script>

        <!-- PAGE LEVEL SCRIPTS -->
        <script src="{{asset('js/layout.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/components/swiper.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/components/masonry.min.js')}}" type="text/javascript"></script>

    </body>
    <!-- END BODY -->
</html>