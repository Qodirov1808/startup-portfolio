<html lang="en">
	<!--begin::Head-->
	<head><base href="">
		<meta charset="utf-8" />
		<title>Metronic | Dashboard</title>
		<meta name="description" content="Updates and statistics" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Page Vendors Styles(used by this page)-->
		<link href="/dashboart/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css?v=7.0.3" rel="stylesheet" type="text/css" />
		<!--end::Page Vendors Styles-->
		<!--begin::Global Theme Styles(used by all pages)-->
		<link href="{{asset('')}}dashboart/assets/plugins/global/plugins.bundle.css?v=7.0.3" rel="stylesheet" type="text/css" />
		<link href="/dashboart/assets/plugins/custom/prismjs/prismjs.bundle.css?v=7.0.3" rel="stylesheet" type="text/css" />
		<link href="{{asset('')}}dashboart/assets/css/style.bundle.css?v=7.0.3" rel="stylesheet" type="text/css" />
		<!--end::Global Theme Styles-->
		<!--begin::Layout Themes(used by all pages)-->
		<link href="{{asset('')}}dashboart/assets/css/themes/layout/header/base/light.css?v=7.0.3" rel="stylesheet" type="text/css" />
		<link href="{{asset('')}}dashboart/assets/css/themes/layout/header/menu/light.css?v=7.0.3" rel="stylesheet" type="text/css" />
		<link href="{{asset('')}}dashboart/assets/css/themes/layout/brand/dark.css?v=7.0.3" rel="stylesheet" type="text/css" />
		<link href="{{asset('')}}dashboart/assets/css/themes/layout/aside/dark.css?v=7.0.3" rel="stylesheet" type="text/css" />
		<!--end::Layout Themes-->
		<link rel="shortcut icon" href="{{asset('')}}dashboart/assets/media/logos/favicon.ico" />
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
		<link href="{{asset('')}}dashboart/assets/css/app.css" rel="stylesheet"  />
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
		<!--begin::Main-->
		<div id="kt_header_mobile" class="header-mobile align-items-center header-mobile-fixed">
			<!--begin::Logo-->
			<a href="/dashboart/adminpanel/index">
                <p style="font-size: 15px; color:#80808F"> {{Auth::user()->name}}</p>
			</a>
			<!--end::Logo-->
			<!--begin::Toolbar-->
			<div class="d-flex align-items-center">
				<!--begin::Aside Mobile Toggle-->
				<button class="btn p-0 burger-icon burger-icon-left" id="kt_aside_mobile_toggle">
					<span></span>
				</button>
				<!--end::Aside Mobile Toggle-->
				<!--begin::Header Menu Mobile Toggle-->
				<button class="btn p-0 burger-icon ml-4" id="kt_header_mobile_toggle">
					<span></span>
				</button>
				<!--end::Header Menu Mobile Toggle-->
				<!--begin::Topbar Mobile Toggle-->
				<button class="btn btn-hover-text-primary p-0 ml-2" id="kt_header_mobile_topbar_toggle">
					<span class="svg-icon svg-icon-xl">
						<!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
							<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								<polygon points="0 0 24 0 24 24 0 24" />
								<path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
								<path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
							</g>
						</svg>
						<!--end::Svg Icon-->
					</span>
				</button>
				<!--end::Topbar Mobile Toggle-->
			</div>
			<!--end::Toolbar-->
		</div>
		<!--begin::Wrapper-->
     <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper" style="background: #e7e9f1;">


		<div class="aside aside-left aside-fixed d-flex flex-column flex-row-auto" id="kt_aside">
			<!--begin::Brand-->
			<div class="brand flex-column-auto" id="kt_brand">
				<!--begin::Logo-->
				<a style="text-decoration: none" href="{{route('dashboard')}}" class="brand-logo">
                    <p style="font-size: 15px; color:#80808F"> {{Auth::user()->name}}</p>
				</a>
				<!--end::Logo-->
				<!--begin::Toggle-->
				<button class="brand-toggle btn btn-sm px-0" id="kt_aside_toggle">
					<span class="svg-icon svg-icon svg-icon-xl">
						<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-double-left.svg-->
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
							<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								<polygon points="0 0 24 0 24 24 0 24" />
								<path d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z" fill="#000000" fill-rule="nonzero" transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999)" />
								<path d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999)" />
							</g>
						</svg>
						<!--end::Svg Icon-->
					</span>
				</button>
				<!--end::Toolbar-->
			</div>
			<!--end::Brand-->
			<!--begin::Aside Menu-->
			<div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
				<!--begin::Menu Container-->
				   <div id="kt_aside_menu" class="aside-menu my-4" data-menu-vertical="1" data-menu-scroll="1"          data-menu-dropdown-timeout="500">
					<!--begin::Menu Nav-->
					<ul class="menu-nav">
{{--						<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">--}}
{{--								<a href="{{route('menu.index')}}" class="menu-link menu-toggle">--}}
{{--									<span class="svg-icon menu-icon">--}}
{{--										<!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Barcode-read.svg-->--}}
{{--										<i class="fa-solid fa-table"></i>--}}
{{--										<!--end::Svg Icon-->--}}
{{--									</span>--}}
{{--									<span class="menu-text">Menus</span>--}}
{{--								</a>--}}
{{--						</li>--}}
						<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
							<a href="{{route('home.index')}}" class="menu-link menu-toggle">
								<span class="svg-icon menu-icon">
									<!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Barcode-read.svg-->
									<i class="fas fa-home"></i>
									<!--end::Svg Icon-->
								</span>
								<span class="menu-text">{{__('words.home')}}</span>
							</a>
					</li>
					<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
						<a href="{{route('portfolio.index')}}" class="menu-link menu-toggle">
							<span class="svg-icon menu-icon">
								<!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Barcode-read.svg-->
								<i class="fas fa-briefcase"></i>
								<!--end::Svg Icon-->
							</span>
							<span class="menu-text">{{__('words.portfolio')}}</span>
						</a>
				 </li>
                        <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                            <a href="{{route('counterSection.index')}}" class="menu-link menu-toggle">
							<span class="svg-icon menu-icon">
								<!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Barcode-read.svg-->
								<i class="fas fa-users"></i>
                                <!--end::Svg Icon-->
							</span>
                                <span class="menu-text">{{__('words.counter')}}</span>
                            </a>
                        </li>
                        <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                            <a href="{{route('review.index')}}" class="menu-link menu-toggle">
							<span class="svg-icon menu-icon">
								<!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Barcode-read.svg-->
								<i class="far fa-comment-alt"></i>
                                <!--end::Svg Icon-->
							</span>
                                <span class="menu-text">{{__('words.reviews')}}</span>
                            </a>
                        </li>
                        <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                            <a href="{{route('blog.index')}}" class="menu-link menu-toggle">
							<span class="svg-icon menu-icon">
								<!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Barcode-read.svg-->
								<i class="far fa-comment-dots"></i>
                                <!--end::Svg Icon-->
							</span>
                                <span class="menu-text">{{__('words.blog')}}</span>
                            </a>
                        </li>
                        <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                            <a href="{{route('standalone.index')}}" class="menu-link menu-toggle">
							<span class="svg-icon menu-icon">
								<!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Barcode-read.svg-->
								<i class="far fa-file-powerpoint"></i>
                                <!--end::Svg Icon-->
							</span>
                                <span class="menu-text">{{__('words.standalone page')}}</span>
                            </a>
                        </li>
                        <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                            <a href="{{route('contact.index')}}" class="menu-link menu-toggle">
							<span class="svg-icon menu-icon">
								<!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Barcode-read.svg-->
								<i class="fas fa-phone"></i>
                                <!--end::Svg Icon-->
							</span>
                                <span class="menu-text">{{__('words.contact')}}</span>
                            </a>
                        </li>
                        <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                            <a href="{{route('message.index')}}" class="menu-link menu-toggle">
							<span class="svg-icon menu-icon">
								<!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Barcode-read.svg-->
								<i class="far fa-envelope"></i>
                                <!--end::Svg Icon-->
							</span>
                                <span class="menu-text">{{__('words.messages')}}</span>
                            </a>
                        </li>
                        <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                            <a href="{{route('langButton.index')}}" class="menu-link menu-toggle">
							<span class="svg-icon menu-icon">
								<!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Barcode-read.svg-->
								<i class="fas fa-language"></i>
                                <!--end::Svg Icon-->
							</span>
                                <span class="menu-text">{{__('words.lang button')}}</span>
                            </a>
                        </li>
                        <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                            <a href="{{route('setting.index')}}" class="menu-link menu-toggle">
							<span class="svg-icon menu-icon">
								<!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Barcode-read.svg-->
								<i class=" fas fa-cog"></i>
                                <!--end::Svg Icon-->
							</span>
                                <span class="menu-text">{{__('words.settings')}}</span>
                            </a>
                        </li>
                        <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                            <a style="text-decoration: none;" class="menu-link menu-toggle" href="#" onclick="openLogoutAlert()">
                                  <span class="svg-icon menu-icon">
                                        <i class="ki ki-bold-long-arrow-back"></i>
                                  </span>
                                <span class="menu-text">{{ __('words.logout') }}</span>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                                <button type="submit">Submit</button>
                            </form>
                        </li>
                        <script>
                            function openLogoutAlert() {
                                var confirmation = confirm("Chiqishni hohlaysizmi?");
                                if (confirmation) {
                                    document.getElementById('logout-form').submit();
                                }
                            }
                        </script>
                    </ul>
				</div>
			 </div>
		   </div>
         <div id="kt_header" class="header header-fixed">
             <!--begin::Container-->
             <div class="container-fluid d-flex align-items-stretch justify-content-between">
                 <div class="topbar">

                 </div>
                 <div class="m-5 d-flex align-items-center justify-content-center">
                     @php
                         $message = App\Models\Message::where('status', 'active')->count();
                     @endphp


                     <a style="text-decoration: none" href="{{route('message.index')}}">
                         <sup style="color: #ffcc02;font-size: 13px">{{$message}} </sup>
                         <i style="color:#ffcc02 " class="flaticon2-bell-1"></i>
                     </a>
                     <div class="topbar-item">
                         <div class="btn btn-icon w-auto btn-clean d-flex align-items-center btn-lg px-2">
                             <span class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3"></span>
                             <span class="symbol symbol-35 symbol-light-success">
                                 <span class="symbol-label font-size-h5 font-weight-bold"><a href="{{route('profile.edit')}}"><i class="flaticon2-user-1"></i></a></span>
                             </span>
                         </div>
                     </div>
                  {{--   lang dropdown start --}}
                     <div class="dropdown">
                         <!--begin::Toggle-->
                         <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
                             <div class="btn btn-icon btn-clean btn-dropdown btn-lg mr-1">
                                 <img class="h-20px w-20px rounded-sm" src="{{ app()->getLocale() == 'uz' ? '/lang.img/uzb2.png' : (app()->getLocale() == 'en' ? '/lang.img/eng2.jpg' : '/lang.img/rus2.jpg') }}" alt="" />
                             </div>
                         </div>
                         <!--end::Toggle-->
                         <!--begin::Dropdown-->
                         <div class="dropdown-menu p-0 m-0 dropdown-menu-anim-up dropdown-menu-sm dropdown-menu-right">
                             <!--begin::Nav-->
                             <ul class="navi navi-hover py-4">
                                 <!--begin::Item-->
                                 <li class="navi-item">
                                     <a style="text-decoration: none" href="{{ route('language', 'uz') }}" class="navi-link">
													<span class="symbol symbol-20 mr-3">
														<img src="/lang.img/uzb2.png" alt="" />
													</span>
                                         <span class="navi-text">Uzb</span>
                                     </a>
                                 </li>
                                 <!--end::Item-->
                                 <!--begin::Item-->
                                 <li class="navi-item active">
                                     <a style="text-decoration: none" href="{{ route('language', 'en') }}" class="navi-link">
													<span class="symbol symbol-20 mr-3">
														<img src="/lang.img/eng2.jpg" alt="" />
													</span>
                                         <span class="navi-text">Eng</span>
                                     </a>
                                 </li>
                                 <!--end::Item-->
                                 <!--begin::Item-->
                                 <li class="navi-item">
                                     <a style="text-decoration: none" href="{{ route('language', 'ru') }}" class="navi-link">
													<span class="symbol symbol-20 mr-3">
														<img src="/lang.img/rus2.jpg" alt="" />
													</span>
                                         <span class="navi-text">Rus</span>
                                     </a>
                                 </li>
                                 <!--end::Item-->
                             </ul>
                             <!--end::Nav-->
                         </div>
                         <!--end::Dropdown-->
                     </div>
                     {{--   lang dropdown end --}}
                 </div>
             </div>
         </div>


