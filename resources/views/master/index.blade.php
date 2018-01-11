<!DOCTYPE html>
<html lang="en-US" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--  
        Document Title
        =============================================
        -->
        <title>Sristi Real Estate </title>
        <!--  
        Favicons
        =============================================
        -->
        <link rel="apple-touch-icon" sizes="57x57" href="{{asset('source/favcon.png')}}">
        <link rel="apple-touch-icon" sizes="60x60" href="{{asset('source/favcon.png')}}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{asset('source/favcon.png')}}">
        <link rel="apple-touch-icon" sizes="76x76" href="{{asset('source/favcon.png')}}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{asset('source/favcon.png')}}">
        <link rel="apple-touch-icon" sizes="120x120" href="{{asset('source/favcon.png')}}">
        <link rel="apple-touch-icon" sizes="144x144" href="{{asset('source/favcon.png')}}">
        <link rel="apple-touch-icon" sizes="152x152" href="{{asset('source/favcon.png')}}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{asset('source/favcon.png')}}">
        <link rel="icon" type="image/png" sizes="192x192" href="{{asset('source/favcon.png')}}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{asset('source/favcon.png')}}">
        <link rel="icon" type="image/png" sizes="96x96" href="{{asset('source/favcon.png')}}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{asset('source/favcon.png')}}">

        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="{{asset('source/favcon.png')}}">
        <meta name="theme-color" content="#ffffff">
        <!--  {{ asset('css/app.css') }}
              Stylesheets
              =============================================

        -->
        <!-- Default stylesheets-->
        <link href="{{asset('source/lib/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
        <!-- Template specific stylesheets-->
        <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Volkhov:400i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

        <link href="{{asset('source/lib/animate.css/animate.css')}}" rel="stylesheet">
        <link href="{{asset('source/lib/components-font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
        <link href="{{asset('source/lib/et-line-font/et-line-font.css')}}" rel="stylesheet">
        <link href="{{asset('source/lib/flexslider/flexslider.css')}}">
        <link href="{{asset('source/lib/owl.carousel/dist/assets/owl.carousel.min.css')}}" rel="stylesheet">
        <link href="{{asset('source/lib/owl.carousel/dist/assets/owl.theme.default.min.css')}}" rel="stylesheet">
        <link href="{{asset('source/lib/magnific-popup/dist/magnific-popup.css ')}}" rel="stylesheet">
        <link href="{{asset('source/lib/simple-text-rotator/simpletextrotator.css')}}" rel="stylesheet">
        <!-- Main stylesheet and color file-->
        <link href="{{asset('source/css/style.css')}}" rel="stylesheet">
        <link id="color-scheme" href="{{asset('source/css/colors/default.css')}}" rel="stylesheet">
    </head>
    <body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
        <main>
            <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#custom-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="navbar-brand" href="index.php">Sristi Real Estate </a>
                    </div>
                    <div class="collapse navbar-collapse" id="custom-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a  href="index.php" >Home</a> </li>
                            <li><a href="{{ url('user_register') }}">Visitor Registration</a></li>
                            <li><a href="services.php">Services</a></li>
                            <li><a href="portfolio.php">Portfolio</a></li>
                            <li><a href="contact.php">Contact Us</a> </li>
                            <li><a href="about_us.php">About Us</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            @yield('content')
            <div class="module-small bg-dark">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="widget">
                                <h5 class="widget-title font-alt">About Sristi </h5>
                                <p>The languages only differ in their grammar, their pronunciation and their most common words.</p>
                                <p>Phone: +88 000 00 00 00 00</p>Fax:  +88 000 00 00 00 00
                                <p>Email:<a href="#">somecompany@example.com</a></p>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="widget">
                                <h5 class="widget-title font-alt">Recent Comments</h5>
                                <ul class="icon-list">
                                    <li> <a href="#">Demo</a></li>
                                    <li><a href="#">Demo</a></li>
                                    <li><a href="#">Demo</a></li>
                                    <li><a href="#">Demo</a></li>
                                    <li><a href="#">Demo</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="widget">
                                <h5 class="widget-title font-alt">Blog Categories</h5>
                                <ul class="icon-list">
                                    <li><a href="#">Demo</a></li>
                                    <li><a href="#">Demo</a></li>
                                    <li><a href="#">Demo</a></li>
                                    <li><a href="#">Demo</a></li>
                                    <li><a href="#">Demo</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="widget">
                                <h5 class="widget-title font-alt">Popular Posts</h5>
                                <ul class="widget-posts">
                                    <li class="clearfix">
                                        <div class="widget-posts-image"><a href="#"><img src="{{asset('source/images/rp-1.jpg')}}" alt="Post Thumbnail}"/></a></div>
                                        <div class="widget-posts-body">
                                            <div class="widget-posts-title"><a href="#">Demo text here</a></div>
                                            <div class="widget-posts-meta"></div>
                                        </div>
                                    </li>
                                    <li class="clearfix">
                                        <div class="widget-posts-image"><a href="#"><img src="{{asset('source/images/rp-2.jpg')}}" alt="Post Thumbnail"/></a></div>
                                        <div class="widget-posts-body">
                                            <div class="widget-posts-title"><a href="#">Demo text here</a></div>
                                            <div class="widget-posts-meta">15 February</div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer bg-dark">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <p class="copyright font-alt">&copy; 2017&nbsp;<a href="index.html">Revelation IT</a>, All Rights Reserved</p>
                        </div>
                        <div class="col-sm-6">
                            <div class="footer-social-links"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-dribbble"></i></a><a href="#"><i class="fa fa-skype"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
    </main>
    <!--  
    JavaScripts
    =============================================
    -->
    <script src="{{asset('source/lib/jquery/dist/jquery.js')}}"></script>
    <script src="{{asset('source/lib/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('source/lib/wow/dist/wow.js')}}"></script>
    <script src="{{asset('source/lib/jquery.mb.ytplayer/dist/jquery.mb.YTPlayer.js')}}"></script>
    <script src="{{asset('source/lib/isotope/dist/isotope.pkgd.js')}}"></script>
    <script src="{{asset('source/lib/imagesloaded/imagesloaded.pkgd.js')}}"></script>
    <script src="{{asset('source/lib/flexslider/jquery.flexslider.js')}}"></script>
    <script src="{{asset('source/lib/owl.carousel/dist/owl.carousel.min.js')}}"></script>
    <script src="{{asset('source/lib/smoothscroll.js')}}"></script>
    <script src="{{asset('source/lib/magnific-popup/dist/jquery.magnific-popup.js')}}"></script>
    <script src="{{asset('source/lib/simple-text-rotator/jquery.simple-text-rotator.min.js')}}"></script>
    <!---<script async="" defer="" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDK2Axt8xiFYMBMDwwG1XzBQvEbYpzCvFU"></script> --->
    <script src="{{asset('source/js/plugins.js')}}"></script>
    <script src="{{asset('source/js/main.js')}}"></script>
    <script src="{{asset('source/js/email_check.js')}}"></script>
</body>
</html>