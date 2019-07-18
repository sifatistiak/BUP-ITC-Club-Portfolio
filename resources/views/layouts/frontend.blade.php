<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/png" href="{{asset('frontend/assets/images/favicon.png')}}">
    <!-- Place favicon.ico in the root directory -->

    <!-- all css here -->
    <!-- bootstrap v3.3.7 css -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap.min.css')}}">
    <!-- animate css -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/animate.css')}}">
    <!-- owl.carousel.2.0.0-beta.2.4 css -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/owl.carousel.css')}}">
    <!-- font-awesome v4.6.3 css -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/font-awesome.min.css')}}">
    <!-- magnific-popup.css -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/magnific-popup.css')}}">
    <!-- slicknav.min.css -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/slicknav.min.css')}}">
    <!-- style css -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/styles.css')}}">
    <!-- responsive css -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/responsive.css')}}">
    <!-- modernizr css -->
    <script src="{{asset('frontend/assets/js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>
<body id="home">
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->
<!-- preloder-wrap -->
<div id="cssLoader3" class="preloder-wrap">
    <div class="loader">
        <div class="child-common child4"></div>
        <div class="child-common child3"></div>
        <div class="child-common child2"></div>
        <div class="child-common child1"></div>
    </div>
</div>
<!-- preloder-wrap -->
<!-- search-area -->
<div class="search-area">
    <span class="closs-btn">Close</span>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">

            </div>
        </div>
    </div>
</div>
<!-- search-area -->
<!-- heared area start -->
<header class="header-area">
    <div class="header-top bg-2">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-8 col-xs-12">
                    <div class="header-top-left">
                        <p>Dhaka University Cultural Club</p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-4 col-xs-12">
                    <div class="header-top-right text-right">
                        <ul>
                            <li><a target="_blank" href="https://facebook.com"><i class="fa fa-facebook"></i></a></li>
                            <li><a target="_blank" href="https://twitter.com"><i class="fa fa-twitter"></i></a></li>
                            <li><a target="_blank" href="https://bd.linkedin.com/"><i class="fa fa-linkedin"></i></a>
                            </li>
                            <li><a target="_blank" href="https://google.com"><i class="fa fa-google-plus"></i></a></li>
                            <li><a target="_blank" href="https://youtube.com"><i class="fa fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-middle bg-2">
        <div class="container">
            <div class="row">
                <div class="col-md-3 hidden-sm hidden-xs">
                    <div class="logo">
                        <h1><a href="{{route('index')}}">DUCC</a></h1>
                    </div>
                </div>
                <div class="col-md-9 col-xs-12">
                    <div class="header-middle-right">
                        <ul>

                            <li>
                                <div class="contact-icon">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <div class="contact-info">
                                    <p>MAIL US</p>
                                    <span>ducc@du.com</span>
                                </div>
                            </li>
                            <li>
                                <div class="contact-icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="contact-info">
                                    <p>PHONE US</p>
                                    <span> +880 1621092630</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom" id="sticky-header">
        <div class="container">
            <div class="row">
                <div class="hidden-md hidden-lg col-sm-8 col-xs-6">
                    <div class="logo">
                        <h1><a href="{{route('index')}}">DUCC</a></h1>
                    </div>
                </div>
                <style>
                    /* Style the header */
                    .header {
                        padding: 0 0;
                        overflow: hidden;
                    }

                    /* Page content */
                    .content {
                        /*padding: 16px;*/
                    }

                    .sticky {
                        position: fixed;
                        overflow: hidden;
                        z-index: 100;
                        top: 0px;
                        padding: 0 0 0 0;
                        width: 100%
                    }

                    .sticky + .content {
                        padding-top: 1px;
                    }
                </style>
                <div class="col-md-11 hidden-sm hidden-xs">
                    <div id="" class="mainmenu header">
                        <ul class=" navbar-default" id="navigation">
                            <li>
                                <a class="page-scroll"
                                   href="{{ Request::path() != '/' ?'/':'#home'}}"
                                   href="{{route('index')}}#home">
                                    Home
                                    <i class="fa fa-angle-down"></i></a>
                            </li>

                            <li><a class="page-scroll" href="{{route('index')}}#about">About <i
                                            class="fa fa-angle-down"></i></a></li>

                            <li class="{{ Request::path() == 'events' ? 'active' : '' }}"><a class="page-scroll" href="{{route('index')}}#event">Events <i
                                            class="fa fa-angle-down"></i></a></li>

                            <li class="{{ Request::path() == 'achievements' ? 'active' : '' }}"><a class="page-scroll" href="{{route('index')}}#achievements">Achievements <i
                                            class="fa fa-angle-down"></i></a></li>

                            <li class="{{ Request::path() == 'notice' ? 'active' : '' }}"><a class="page-scroll" href="{{route('index')}}#notice">Notice Board <i
                                            class="fa fa-angle-down"></i></a>
                            </li>
                            <li class="{{ Request::path() == 'members' ? 'active' : '' }}"><a class="page-scroll" href="{{route('index')}}#member">Members <i
                                            class="fa fa-angle-down"></i></a>
                            </li>

                            <li class="{{ Request::path() == 'testimonials' ? 'active' : '' }}"><a class="page-scroll" href="{{route('index')}}#testimonial">Testimonial <i
                                            class="fa fa-angle-down"></i></a>
                            </li>


                            <li class="{{ Request::path() == 'blog' ? 'active' : '' }}"><a class="page-scroll" href="{{route('index')}}#blog">Blog <i
                                            class="fa fa-angle-down"></i></a></li>

                        </ul>
                    </div>
                </div>

                <div class="col-sm-2 clear col-xs-3 hidden-md hidden-lg">
                    <div class="responsive-menu-wrap floatright"></div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- heared area end -->
<!-- slider area start -->
@yield('content')
<!-- slider area end -->

<!-- footer-area start  -->
<footer>
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-md-2 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".2s">
                </div>
                <div class="col-md- col-sm-6 col-xs-12  col wow fadeInUp" data-wow-delay=".1s">
                    <div class="footer-widget footer-logo">
                        <h1>DUCC</h1>
                        <p>Lor separat existentie es un myth. Por scientie, musica, sport etc, litot usa li sam larLor
                            separat existentie es un myth existentie.</p>
                        <ul>
                            <li><i class="fa fa-phone"></i> +455 5475 6645</li>
                            <li><i class="fa fa-envelope"></i> info@yourdomail.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".2s">
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".3s">
                    <div class="footer-widget instagram-wrap">
                        <h2>Gallery</h2>
                        <ul>
                            <li><img src="{{asset('frontend/assets/images/instagram/1.jpg')}}" alt="">
                            </li>
                            <li><img src="{{asset('frontend/assets/images/instagram/2.jpg')}}" alt="">
                            </li>
                            <li><img src="{{asset('frontend/assets/images/instagram/3.jpg')}}" alt="">
                            </li>
                            <li><img src="{{asset('frontend/assets/images/instagram/4.jpg')}}" alt="">
                            </li>
                            <li><img src="{{asset('frontend/assets/images/instagram/5.jpg')}}" alt="">
                            </li>
                            <li><img src="{{asset('frontend/assets/images/instagram/6.jpg')}}" alt="">
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".2s">
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom text-center">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                    All rights reserved to <i class="fa fa-heart-o" aria-hidden="true"></i> by
                    <a href="{{route('index')}}" style="color: white;">DUCC</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer-area end  -->
<script>
    // When the user scrolls the page, execute myFunction
    window.onscroll = function () {
        myFunction()
    };

    // Get the header
    var header = document.getElementById("myHeader");

    // Get the offset position of the navbar
    var sticky = header.offsetTop;

    // Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
    function myFunction() {
        if (window.pageYOffset > sticky) {
            header.classList.add("sticky");
        } else {
            header.classList.remove("sticky");
        }
    }
</script>

<!-- all js here -->
<!-- jquery latest version -->
<script src="{{asset('frontend/assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
<!-- bootstrap js -->
<script src="{{asset('frontend/assets/js/bootstrap.min.js')}}"></script>
<!-- owl.carousel.2.0.0-beta.2.4 css -->
<script src="{{asset('frontend/assets/js/owl.carousel.min.js')}}"></script>
<!-- counterup.main.js -->
<script src="{{asset('frontend/assets/js/counterup.main.js')}}"></script>
<!-- isotope.pkgd.min.js -->
<script src="{{asset('frontend/assets/js/imagesloaded.pkgd.min.js')}}"></script>
<!-- isotope.pkgd.min.js -->
<script src="{{asset('frontend/assets/js/isotope.pkgd.min.js')}}"></script>
<!-- jquery.waypoints.min.js -->
<script src="{{asset('frontend/assets/js/jquery.waypoints.min.js')}}"></script>
<!-- jquery.magnific-popup.min.js -->
<script src="{{asset('frontend/assets/js/jquery.magnific-popup.min.js')}}"></script>
<!-- jquery.slicknav.min.js -->
<script src="{{asset('frontend/assets/js/jquery.slicknav.min.js')}}"></script>
<!-- snake.min.js -->
<script src="{{asset('frontend/assets/js/snake.min.js')}}"></script>
<!-- wow js -->
<script src="{{asset('frontend/assets/js/wow.min.js')}}"></script>
<!-- plugins js -->
<script src="{{asset('frontend/assets/js/plugins.js')}}"></script>
<!-- main js -->
<script src="{{asset('frontend/assets/js/scripts.js')}}"></script>
<script src="{{asset('frontend/assets/js/page_scroll.js')}}"></script>
<script src="{{asset('frontend/assets/js/page_scroll_view.js')}}"></script>
</body>
</html>
