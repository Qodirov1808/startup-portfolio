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
    <title>StartupPortfolio</title>
    <!-- Favicon -->
    <link rel="icon" href="/temples/vendor/img/favicon.ico">
    <!-- Bundle -->
    <link rel="stylesheet" href="/temples/vendor/css/bundle.min.css">
    <!-- Plugin Css -->
    <link rel="stylesheet" href="/temples/vendor/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="/temples/vendor/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/temples/vendor/css/swiper.min.css">
    <link rel="stylesheet" href="/temples/vendor/css/cubeportfolio.min.css">
    <link rel="stylesheet" href="/temples/vendor/css/wow.css">
    <!-- Slider Settings -->
    <link rel="stylesheet" href="/temples/vendor/css/LineIcons.min.css">
    <link rel="stylesheet" href="/temples/startup-portfolio/css/settings.css">
    <!-- Style Sheet -->
    <link rel="stylesheet" href="/temples/startup-portfolio/css/style.css">
    <link rel="stylesheet" href="/temples/startup-portfolio/css/custom.css">
</head>

<body data-offset="90" data-spy="scroll" data-target=".navbar">

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
                <a class="navbar-brand scroll" href="#1">
                    <img src="/storage/images/{{$setting->logo1}}" alt="logo">
                </a>
          @endforeach
            <!--Nav Links-->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item ">
                        @foreach($menus as $key => $menu)
                        <a id="hover" class="nav-link scroll heading" href="#{{$key + 1}}" data-item='Portfolio'>{{ app()->getLocale() == 'uz' ? $menu->name_uz : (app()->getLocale() == 'en' ? $menu->name_en : $menu->name_ru) }}
                        </a>
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
            <div class="social-icons">
                <ul>
                    <li><a class="hover1"   style="border-radius: 0px !important;"  href="{{ route('language', 'uz') }}"> <img style="object-fit: contain; " width="50px" height="50px" src="/lang.img/uzb.jpg"></a></li>
                    <li><a class="hover1"   style="border-radius: 0px !important;"  href="{{ route('language', 'en') }}"> <img style="object-fit: contain" width="50px" height="50px" src="/lang.img/eng.jpg"></a></li>
                    <li><a class="hover1"   style="border-radius: 0px !important;"  href="{{ route('language', 'ru') }}"> <img style="object-fit: contain" width="50px" height="50px" src="/lang.img/rus.jpg"></a></li>
                </ul>
            </div>
    </nav>

    <!-- Side Nav -->
    <div class="side-menu side-menu-opacity">
        <div class="bg-overlay"></div>
        <div class="inner-wrapper">
           @foreach($settings as $setting)
                <a class="image scroll" href="#1">
                    <img src="/storage/images/{{$setting->logo2}}" alt="image">

                </a>
           @endforeach
            <span class="btn-close" id="btn_sideNavClose"><i></i><i></i></span>
            <nav class="side-nav w-100">
                <ul class="navbar-nav">
                    @foreach($dropMenu as $key => $dropMenu)
                    <li class="nav-item">
                        <a  class="nav-link scroll" href="#{{$key + 1}}">{{ app()->getLocale() == 'uz' ? $dropMenu->name_uz : (app()->getLocale() == 'en' ? $dropMenu->name_en : $dropMenu->name_ru) }}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </nav>
            @foreach($settings as $setting)
                <div  class="side-menu-footer">
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

<!-- Start About -->
<section class="about-section" id="1">
    @foreach($homes as $home)
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-6 col-md-12 col-sm-12 caption wow fadeInLeft" data-wow-delay="1500ms">
                    <h2 class="heading">{{ $home->title['title_'.\App::getLocale()] }}</h2>
                    <p class="text">{{$home->description}}</p>
                    <div class="about-button">
                        @foreach($home->langButtons as $item)
                        @if($item->button_link == 'Standalone Page')
                            <a class="btn button btn-rounded btn-black btn-hvr-pink " href="{{route('standalone.page')}}">
                            {{ $item->button_name['button_name_'.\App::getLocale()] }}
                            <div class="btn-hvr-setting">
                                <ul class="btn-hvr-setting-inner">
                                    <li class="btn-hvr-effect"></li>
                                    <li class="btn-hvr-effect"></li>
                                    <li class="btn-hvr-effect"></li>
                                    <li class="btn-hvr-effect"></li>
                                </ul>
                            </div>
                        </a>
                            @elseif($item->button_link == 'Url')
                                <a class="btn button btn-rounded btn-black btn-hvr-pink " href="https://{{$item->url}}">
                                    {{ $item->button_name['button_name_'.\App::getLocale()] }}
                                    <div class="btn-hvr-setting">
                                        <ul class="btn-hvr-setting-inner">
                                            <li class="btn-hvr-effect"></li>
                                            <li class="btn-hvr-effect"></li>
                                            <li class="btn-hvr-effect"></li>
                                            <li class="btn-hvr-effect"></li>
                                        </ul>
                                    </div>
                                </a>
                            @else
                                <a class="btn button btn-rounded btn-black btn-hvr-pink " href="#{{$item->button_link}}">
                                    {{ $item->button_name['button_name_'.\App::getLocale()] }}
                                    <div class="btn-hvr-setting">
                                        <ul class="btn-hvr-setting-inner">
                                            <li class="btn-hvr-effect"></li>
                                            <li class="btn-hvr-effect"></li>
                                            <li class="btn-hvr-effect"></li>
                                            <li class="btn-hvr-effect"></li>
                                        </ul>
                                    </div>
                                </a>
                            @endif
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 wow fadeInRight" data-wow-delay="1500ms">
                    <img src="/storage/images/{{$home->image}}" alt="img">
                </div>
            </div>
        </div>
    @endforeach
</section>
<!-- End About -->

<!-- Start Portfolio -->


<section class="portfolio-section" id="2">
    <div class="container-fluid">
        <div class="row d-block">

            <div id="js-grid-mosaic-flat" class="cbp cbp-l-grid-mosaic-flat no-transition">
                <!-- Item -->
                @foreach($portfolios->sortBy('id') as $portfolio)
                <div class="cbp-item">
                    <a href="/storage/images/{{$portfolio->image}}" class="cbp-caption cbp-lightbox" data-title="{{$portfolio->data_title}}">
                        <div class="cbp-caption-defaultWrap">
                            <img src="/storage/images/{{$portfolio->image}}" alt="work">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <p>{{$portfolio->title['title_'.\App::getLocale()]}}</p>
                                    <div class="cbp-l-caption-title">{{$portfolio->text['text_'.\App::getLocale()]}}</div>
                                    <span class="work-icon">
                           <i class="fa fa-arrow-right"></i>
                           </span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>

        </div>
    </div>
</section>

<!-- End Portfolio -->

<!-- Start Counter -->
<section class="counter-section">
    <div class="container">
        <div class="row no-gutters">
            <!-- Counter-1 -->
           @foreach($counterItems->sortBy('id') as $counterItem)
                <div class="col-lg-3 counter num_counter wow fadeInUp" data-wow-delay="400ms">
                    <i class="{{$counterItem->icon}}"></i>
                    <h5 class="timer count-title heading count-number count">{{$counterItem->count}}</h5>
                    <p class="count-text ">{{$counterItem->title['title_'.\App::getLocale()]}}</p>
                </div>
           @endforeach
        </div>
        <!-- Row-2 -->
       @foreach($counterSections->sortBy('id')  as $counterSection)
            <div class="row no-gutters counter-image">
                <div class="col-lg-12 col-md-12 col-sm-12 counter-img wow fadeInUp" data-wow-delay="400ms">
                    <img src="/storage/images/{{$counterSection->image}}" alt="img">
                </div>
            </div>
       @endforeach
    </div>
</section>
<!-- End Counter -->

<!-- Start Testimonials -->
<section class="testimonial-section" id="3">
    <div class="container">
       @foreach($reviews as $review)
            <div class="row no-gutters">
                <div class="col-lg-4 col-md-12 col-sm-12 wow fadeInLeft" data-wow-delay="400ms" >
                    <div class="testimonial-text">
                        <h2 class="heading"><br>{{$review->title['title_'.\App::getLocale()]}}</h2>
                        <i class="fas fa-quote-right"></i>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 wow fadeInRight" data-wow-delay="400ms">
                    <div class="testimonial-img">
                        <img src="/storage/images/{{$review->image}}" alt="img">
                    </div>
                </div>
            </div>
       @endforeach
        <!-- Row-2 -->
        <div class="row no-gutters">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="testimonial-carousel owl-carousel owl-themes active">
                    <!-- Item-1 -->
                    @foreach($messages as $message)
                        @if($message->public_message == 'public')
                          <div class="item">
                                <div class="row no-gutters">
                                    <div class="col-lg-4 col-md-12 col-sm-12 name">
                                        <h5>{{$message->name}}</h5>
                                        <p>{{$message->city}}</p>
                                    </div>
                                    <div class="col-lg-8 col-md-12 col-sm-12">
                                        <p class="text">{{$message->description}} </p>
                                    </div>
                                </div>
                           </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Testimonials -->

<!-- Start Blog -->
<section class="blog-section" id="4">
    <div class="row no-gutters">
        <div class="col-lg-12 col-md-12 col-sm-12 " >
            <div class=" text-center blog-carousel owl-carousel owl-themes active">
                <!-- Item-1 -->
               @foreach($blogs->sortBy('id') as $blog)
                    <div class="item">
                        <div class="row no-gutters">
                            <div class="col-lg-6 col-md-12 col-sm-12 wow fadeInLeft" data-wow-delay="400ms">
                                <img src="/storage/images/{{$blog->image}}" alt="img">
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 text-area wow fadeInRight" data-wow-delay="400ms">
                                <p class="subheading">{{$blog->date}}</p>
                                <h2 class="heading">{{$blog->title['title_'.\App::getLocale()]}}</h2>
                                <p class="text">{{$blog->description}} </p>
                                <div class="about-button">
                                   @foreach($blog->langButtons as $bell)
                                       @if($bell->button_link == 'Standalone Page')
                                        <a class="btn button btn-rounded btn-white btn-hvr-pink" href="{{route('standalone.page')}}">
                                            {{$bell->button_name['button_name_'.\App::getLocale()]}}
                                            <div class="btn-hvr-setting">
                                                <ul class="btn-hvr-setting-inner">
                                                    <li class="btn-hvr-effect"></li>
                                                    <li class="btn-hvr-effect"></li>
                                                    <li class="btn-hvr-effect"></li>
                                                    <li class="btn-hvr-effect"></li>
                                                </ul>
                                            </div>
                                        </a>
                                        @elseif($bell->button_link == 'Url')
                                            <a class="btn button btn-rounded btn-white btn-hvr-pink" href="https://{{$bell->url}}">
                                                {{$bell->button_name['button_name_'.\App::getLocale()]}}
                                                <div class="btn-hvr-setting">
                                                    <ul class="btn-hvr-setting-inner">
                                                        <li class="btn-hvr-effect"></li>
                                                        <li class="btn-hvr-effect"></li>
                                                        <li class="btn-hvr-effect"></li>
                                                        <li class="btn-hvr-effect"></li>
                                                    </ul>
                                                </div>
                                            </a>
                                        @else
                                            <a class="btn button btn-rounded btn-white btn-hvr-pink" href="#{{$bell->button_link}}">
                                                {{$bell->button_name['button_name_'.\App::getLocale()]}}
                                                <div class="btn-hvr-setting">
                                                    <ul class="btn-hvr-setting-inner">
                                                        <li class="btn-hvr-effect"></li>
                                                        <li class="btn-hvr-effect"></li>
                                                        <li class="btn-hvr-effect"></li>
                                                        <li class="btn-hvr-effect"></li>
                                                    </ul>
                                                </div>
                                            </a>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
               @endforeach
            </div>
            <!-- Navigation -->
            <div class="blog-navigation wow fadeIn" data-wow-delay="400ms">
                <a href="javascript:void(0);">
                    <span class="blog-left-arr"><i class="lni lni-chevron-left"></i></span>
                    <span class="blog-right-arr"><i class="lni lni-chevron-right"></i></span>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- End Blog -->

<!-- Start Contact -->
<section class="contact-section" id="5">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-lg-6 col-md-12 col-sm-12 address-section wow fadeInLeft" data-wow-delay="400ms">
                @foreach($contacts as $contact)
                    <p class="subheading">{{$contact->title['title_'.\App::getLocale()]}}</p>
                    <h2 class="heading">{{$contact->text['text_'.\App::getLocale()]}}</h2>
                    <p class="text">{{$contact->description}} </p>
                @endforeach
                <div class="row no-gutters">
                    @foreach($contactLists->sortBy('id') as $contactList)
                        <div class="col-lg-6 col-md-12 col-sm-12" >
                            <h5>{{$contactList->city}}</h5>
                            <div class="media">
                                <i class="fas fa-mobile-alt"></i>
                                <div class="media-body">
                                    <p>{{$contactList->phone}}</p>
                                </div>
                            </div>
                            <div class="media">
                                <i class="far fa-envelope new"></i>
                                <div class="media-body">
                                    <p>{{$contactList->email}}</p>
                                </div>
                            </div>
                            <div class="media">
                                <i class="fas fa-map-marker-alt"></i>
                                <div class="media-body">
                                    <p>{{$contactList->location}}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="col-lg-6 col-md-12 col-sm-12 form-section wow fadeInRight" data-wow-delay="400ms">
                <h2 class="heading">{{__('words.leave message')}}</h2>
{{--                <p class="text">Curabitur mollis bibendum luctus. Duis suscipit vitae dui sed suscipit. </p>--}}
                <form method="post" action="{{route('message.store')}}" class="contact-form" id="contact-form-data">
                    @csrf
                    <div class="row">
                        <div class="col-12" id="result"></div>
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="{{__('words.name')}}" required=""  name="name">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="form-group">
                                <input class="form-control" type="email" placeholder="{{__('words.email')}}" required=""  name="email">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="{{__('words.phone')}}" required=""  name="contact">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="{{__('words.city')}}" required=""  name="city">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group">
                                <textarea class="form-control" placeholder="{{__('words.message')}}"  name="description" rows="6" cols="50"></textarea>
                            </div>
                        </div>
                        <div class="contact-button text-center">
                            <button name="submit" type="submit"  class="btn button btn-rounded btn-black btn-hvr-pink contact_btn">
                                {{__('words.submit')}}
                                <div class="btn-hvr-setting">
                                    <ul class="btn-hvr-setting-inner">
                                        <li class="btn-hvr-effect"></li>
                                        <li class="btn-hvr-effect"></li>
                                        <li class="btn-hvr-effect"></li>
                                        <li class="btn-hvr-effect"></li>
                                    </ul>
                                </div>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- End Contact -->

<!-- Start Google Map -->
@foreach($settings as $setting)
    <section class="google-map" id="6">
        <div class="row no-gutters">
            <div class="col-12">
                <div class="mapouter">
                    <div class="gmap_canvas" id="google-map">
                        {!! $setting->map !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endforeach
<!-- End Google Map -->

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
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var dropdownToggle = document.getElementById('dropdownMenuButton');
        var dropdownMenu = document.querySelector('.dropdown-menu');
        dropdownToggle.addEventListener('click', function() {
            dropdownMenu.classList.toggle('show');
        });
        window.addEventListener('click', function(event) {
            if (!dropdownToggle.contains(event.target) && !dropdownMenu.contains(event.target)) {
                dropdownMenu.classList.remove('show');
            }
        });
    });

</script>
<!-- JavaScript -->
<script src="/temples/vendor/js/bundle.min.js"></script>
<!-- Plugin Js -->
<script src="/temples/vendor/js/jquery.appear.js"></script>
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
