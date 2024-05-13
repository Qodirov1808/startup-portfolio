<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <!-- Author -->
    <meta name="author" content="Themes Industry">
    <!-- description -->
    <meta name="description" content="MegaOne is a highly creative, modern, visually stunning and Bootstrap responsive multipurpose studio and portfolio HTML5 template with 8 ready home page demos.">
    <!-- keywords -->
    <meta name="keywords" content="Creative, modern, clean, bootstrap responsive, html5, css3, portfolio, blog, studio, templates, multipurpose, one page, corporate, start-up, studio, branding, designer, freelancer, carousel, parallax, photography, studio, masonry, grid, faq">
    <!-- Page Title -->
    <title>StartupPortfolio | Standalone Page</title>
    <!-- Favicon -->
    <link rel="icon" href="/temples/vendor/img/favicon.ico">
    <!-- Bundle -->
    <link rel="stylesheet" href="/temples/vendor/css/bundle.min.css">
    <!-- Plugin Css -->
    <link rel="stylesheet" href="/temples/vendor/css/swiper.min.css">
    <link rel="stylesheet" href="/temples/vendor/css/wow.css">
    <!-- Style Sheet -->
    <link rel="stylesheet" href="/temples/css/style.css">
    <link rel="stylesheet" href="/temples/css/custom.css">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">

<!-- Start Loader -->
<div class="preloader">
    <div class="loader"></div>
</div>
<!-- End Loader -->

<!-- Start Header -->
<header class="navigation-bar">
    <nav class="navbar navbar-expand-lg fixed-top navbar-fixed-top">
        <a href="javascript:void(0)" class="sidemenu_btn link" id="sidemenu_toggle">
            <span></span>
            <span></span>
            <span></span>
        </a>
        <div class="container">
            @foreach($settings as $setting)
                <a class="navbar-brand" href="../#1">
                    <img src="/storage/images/{{$setting->logo1}}" alt="logo">
                </a>
            @endforeach
            <!--Nav Links-->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item ">
                        @foreach($menus as $key => $menu)
                        <a class="nav-link heading" href="../#{{$key + 1}}" data-item='Portfolio'>{{ app()->getLocale() == 'uz' ? $menu->name_uz : (app()->getLocale() == 'en' ? $menu->name_en : $menu->name_ru) }}</a>
                        @endforeach
                        <style>
                            #hover:hover{
                                color: #e3007f;
                            }
                        </style>
                    </li>
                </ul>
            </div>
        </div>
        @foreach($settings as $setting)
            <div class="social-icons">
                <ul>
                    <li><a class="hover1"  style="border-radius: 0px !important;"  href="{{ route('language', 'uz') }}"> <img style="object-fit: contain; " width="50px" height="50px" src="/lang.img/uzb.jpg"></a></li>
                    <li><a class="hover1"  style="border-radius: 0px !important;"  href="{{ route('language', 'en') }}"> <img style="object-fit: contain" width="50px" height="50px" src="/lang.img/eng.jpg"></a></li>
                    <li><a class="hover1"  style="border-radius: 0px !important;"  href="{{ route('language', 'ru') }}"> <img style="object-fit: contain" width="50px" height="50px" src="/lang.img/rus.jpg"></a></li>
                </ul>
            </div>
        @endforeach
    </nav>

    <!-- Side Nav -->
    <div class="side-menu side-menu-opacity">
        <div class="bg-overlay"></div>
        <div class="inner-wrapper">
            @foreach($settings as $setting)
                <a class="image " href="../#1">
                    <img src="/storage/images/{{$setting->logo2}}" alt="image">
                </a>
            @endforeach
            <span class="btn-close" id="btn_sideNavClose"><i></i><i></i></span>
            <nav class="side-nav w-100">
                <ul class="navbar-nav">
                    @foreach($dropMenu as $key => $dropMenu)
                        <li class="nav-item">
                            <a  class="nav-link " href="../#{{$key + 1}}">{{ app()->getLocale() == 'uz' ? $dropMenu->name_uz : (app()->getLocale() == 'en' ? $dropMenu->name_en : $dropMenu->name_ru) }}</a>
                        </li>
                    @endforeach
                </ul>
            </nav>
                @foreach($settings as $setting)
                    <div class="side-menu-footer">
                            <div   class="social-icons">
                                <ul>
                                    <li ><a class="hover1"  href="{{ route('language', 'uz') }}"> <img style="border-radius: 60px !important;" src="/lang.img/uzb.jpg"></a></li>
                                    <li ><a class="hover1"  href="{{ route('language', 'uz') }}"> <img style="border-radius: 60px !important;" src="/lang.img/eng2.jpg"></a></li>
                                    <li><a class="hover1"  href="{{ route('language', 'ru') }}"> <img style="border-radius: 60px !important;  " src="/lang.img/rus2.jpg"></a></li>
                                </ul>
                            </div>
                        <p class="copywrite text-left">&copy;{{$setting->footer}} <br></p>
                    </div>
                @endforeach
        </div>
    </div>
    <a id="close_side_menu" href="javascript:void(0);"></a>
</header>
<!-- End Header -->

<!-- Start Main Content -->
<section class="main-page">
    <div class="container">
        @foreach($standalone as $standalone)
            <div class="standalone-heading text-center">
                <div class="row no-gutters">
                    <div class="col-12 col-lg-8 offset-lg-2 col-md-10 offset-md-1 wow fadeInDown" data-wow-delay="300ms">
                        <p class="sub-heading">{{$standalone->title['title_'.\App::getLocale()]}}</p>
                        <h2 class="heading">{{$standalone->text['text_'.\App::getLocale()]}}</h2>
                        <p class=" m-auto ">{{$standalone->description}}</p>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="standalone-area">
            <!-- Standalone-row-1 -->
            @foreach($standaloneItems as $index => $standaloneItem)
                <div class="row standalone-row align-items-center no-gutters justify-content-between">
                    @if($index % 2 == 0)
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 order-1 wow fadeInLeft" data-wow-delay="300ms">
                            <div class="row-image hover-effect">
                                <img src="/storage/images/{{$standaloneItem->image}}" alt="image">
                                <div class="standaloneoverlay overlayBottom"></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 order-2 wow fadeInRight" data-wow-delay="300ms">
                            <div class="row-text">
                                <p class="sub-heading">{{$standaloneItem->title['title_'.\App::getLocale()]}}</p>
                                <h2 class="heading">{{$standaloneItem->text['text_'.\App::getLocale()]}}</h2>
                                <p class=" m-auto ">{{$standaloneItem->description}}</p>
                            </div>
                        </div>
                    @else
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 order-2 wow fadeInLeft" data-wow-delay="300ms">
                            <div class="row-image hover-effect">
                                <img src="/storage/images/{{$standaloneItem->image}}" alt="image">
                                <div class="standaloneoverlay overlayBottom"></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 order-1 wow fadeInRight" data-wow-delay="300ms">
                            <div class="row-text">
                                <p class="sub-heading">{{$standaloneItem->title['title_'.\App::getLocale()]}}</p>
                                <h2 class="heading">{{$standaloneItem->text['text_'.\App::getLocale()]}}</h2>
                                <p class=" m-auto ">{{$standaloneItem->description}}</p>
                            </div>
                        </div>
                    @endif
                </div>
            @endforeach
        </div>

    </div>
</section>
<!-- End Main Content -->

<!-- Start Footer -->
@foreach($settings as $setting)
    <footer class="no-gutters">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-6 col-md-12 col-sm-12 footer-social-icons " >
                    <ul>
                        <li><a class="facebook-hover wow fadeInUp" data-wow-delay="400ms" href="https://{{$setting->social_media['facebook']}}">
                                <i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li><a class="twitter-hover wow fadeInDown" data-wow-delay="400ms" href="https://{{$setting->social_media['twitter']}}">
                                <i class="fab fa-twitter"></i></a>
                        </li>
                        <li><a class="google-plus-hover wow fadeInUp" data-wow-delay="400ms" href="https://{{$setting->social_media['google']}}">
                                <i class="fab fa-google-plus-g"></i></a>
                        </li>
                        <li><a class="linked-in-hover wow fadeInDown" data-wow-delay="400ms" href="https://{{$setting->social_media['linkedin']}}">
                                <i class="fab fa-linkedin-in"></i></a>
                        </li>
                        <li><a class="instagram-hover wow fadeInUp" data-wow-delay="400ms" href="https://{{$setting->social_media['instagram']}}">
                                <i class="fab fa-instagram"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                    <p >&copy; {{$setting->footer}}</p>
                </div>
            </div>
        </div>
    </footer>
@endforeach
<!-- End Footer -->
<style>
    .hover1:hover {
        transform: scale(1.5);
    }
</style>
<!-- JavaScript -->
<script src="/temples/vendor/js/bundle.min.js"></script>
<!-- Plugin Js -->
<script src="/temples/vendor/js/jquery.fancybox.min.js"></script>
<script src="/temples/vendor/js/owl.carousel.min.js"></script>
<script src="/temples/vendor/js/swiper.min.js"></script>
<script src="/temples/vendor/js/wow.min.js"></script>
<script src="/temples/vendor/js/jquery.cubeportfolio.min.js"></script>
<!-- Custom Js -->
<script src="/temples/vendor/js/contact_us.js"></script>
<script src="/temples/js/script.js"></script>
</body>
</html>
