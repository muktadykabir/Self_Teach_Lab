{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
    </body>
</html> --}}


<!doctype html>
<html lang="en">
<head>
   
    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!--====== Title ======-->
    <title>SelfTeach-Lab</title>
    
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="asset/images/logo/icon2.png" type="image/png">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="asset/css/slick.css">

    <!--====== Animate css ======-->
    <link rel="stylesheet" href="asset/css/animate.css">
    
    <!--====== Nice Select css ======-->
    <link rel="stylesheet" href="asset/css/nice-select.css">
    
    <!--====== Nice Number css ======-->
    <link rel="stylesheet" href="asset/css/jquery.nice-number.min.css">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="asset/css/magnific-popup.css">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    
    <!--====== Fontawesome css ======-->
    <link rel="stylesheet" href="asset/css/font-awesome.min.css">
    
    <!--====== Default css ======-->
    <link rel="stylesheet" href="asset/css/default.css">
    
    <!--====== Style css ======-->
    <link rel="stylesheet" href="asset/css/style.css">
    
    <link rel="stylesheet" href="asset/css/registration.css">

    <!--====== Responsive css ======-->
    <link rel="stylesheet" href="asset/css/responsive.css">

     <!--====== Card css ======-->
     <link rel="stylesheet" href="asset/css/card.css">
    @livewireStyles
  
</head>

<body>
   
    <!--====== PRELOADER PART START ======-->
    
    <div class="preloader">
        <div class="loader rubix-cube">
            <div class="layer layer-1"></div>
            <div class="layer layer-2"></div>
            <div class="layer layer-3 color-1"></div>
            <div class="layer layer-4"></div>
            <div class="layer layer-5"></div>
            <div class="layer layer-6"></div>
            <div class="layer layer-7"></div>
            <div class="layer layer-8"></div>
        </div>
    </div>
    
    <!--====== PRELOADER PART START ======-->
    
    <!--====== HEADER PART START ======-->
    
    <header id="header-part">
       
        <div class="header-top d-none d-lg-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="header-contact text-lg-left text-center">
                            <ul>
                                <a href="/">
                                    <img src="asset/images/logo/Selfteach.png" alt="Logo" style="height: 100px;">
                                </a>
                                <!-- <li><img src="images/all-icon/map.png" alt="icon"><span>127/5 Mark street, New york</span></li>
                                <li><img src="images/all-icon/email.png" alt="icon"><span>info@yourmail.com</span></li> -->
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="header-opening-time text-lg-right text-center">
                            
                            @if(Route::has('login'))
                                @auth 
                                    @if(Auth::user()->utype ==='ADM')
                                       
                                        <li class="menu-item menu-item-has-children parent">
                                            <a title="My Account" href="#">My Account({{Auth::user()->name}})<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                            <ul class="submenu curency">
                                                <li class="menu-item">
                                                    <a title="Dashboard" href="{{route('admin.dashboard')}}">Dashboard</a> 
                                                </li>
                                                <li class="menu-item">
                                                    <a href="{{route('logout')}}"onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                                                </li>
                                                <form id="logout-form" method="POST" action="{{route('logout')}}">
                                                    @csrf   
                                                </form>
                                            </ul>
                                        </li>
                                    @else 
                                        <li class="menu-item menu-item-has-children parent">
                                            <a title="My Account" href="#">My Account({{Auth::user()->name}})<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                            <ul class="submenu curency">
                                                <li class="menu-item">
                                                    <a title="Dashboard" href="{{route('user.dashboard')}}">Dashboard</a> 
                                                </li>
                                                <li class="menu-item">
                                                    <a href="{{route('logout')}}"onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                                                </li>
                                                <form id="logout-form" method="POST" action="{{route('logout')}}">
                                                    @csrf   
                                                </form>
                                            </ul>
                                        </li>
                                    @endif
                                @else 
                                    <li>
                                        
                                        <a href="{{route('login')}}">Login</a>&nbsp; |
                                        <a href="{{route('register')}}">Register</a>&nbsp;
                                    </li>
                                @endif 
                            @endif
                        </div>
                    </div>
                </div>
                
            </div> 
            <!-- container  -->
        </div> 
        <!-- header top -->
        
        <!-- <div class="header-logo-support pt-30 pb-30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="logo">
                             <a href="#">
                                <img src="images/logo/Self_Teach.png" alt="Logo" style="height: 100px;">
                            </a> 
                            <a href="#">
                                <img src="images/logo/icon.png" alt="Logo" style="Height:80px">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8">
                        <div >
                            <a href="#" class="main-btn">Login</a>
                        </div>
                        <div >
                                <a href="#" class="main-btn">Register</a>
                        </div>
                        <div class="support-button float-right d-none d-md-block">
                            <div class="support float-left">
                                <div class="icon">
                                    <img src="images/logo/login.png" alt="icon" style="Width:50px;height:50px;">
                                     
                                </div>
                               
                            </div>
                            <div class="button float-left">
                                <a href="#" class="main-btn">Login</a>
                            </div>
                            <div class="button float-left">
                                <a href="#" class="main-btn">Register</a>
                            </div>
                        </div>
                    </div>

                </div> <-- row 
            </div> <-- container -
        </div> header logo support -->
        
        <div class="navigation">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-md-10 col-sm-9 col-8">
                        <nav class="navbar navbar-expand-lg">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul class="navbar-nav mr-auto">
                                    
                                    <li class="nav-item">
                                        <a class="active" href="/">Home</a>
                                        <!-- <ul class="sub-menu">
                                            <li><a class="active" href="index-2.html">Home 01</a></li>
                                            <li><a href="index-3.html">Home 02</a></li>
                                            <li><a href="index-4.html">Home 03</a></li>
                                        </ul> -->
                                    </li>
                                    
                                    <li class="nav-item">
                                        <a href="/freequiz">Free Quiz</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/classic">Classic !</a>
                                    </li>
                                    
                                    <li class="nav-item">
                                        <a href="/courses">Courses</a>
                                        <!-- <ul class="sub-menu">
                                            <li><a href="courses.php">Courses</a></li>
                                            <li><a href="courses-singel.php">Course Singel</a></li>
                                        </ul> -->
                                    </li>
                                    <li class="nav-item">
                                        <a href="/events">Events</a>
                                        <!-- <ul class="sub-menu">
                                            <li><a href="events.html">Events</a></li>
                                            <li><a href="events-singel.html">Event Singel</a></li>
                                        </ul> -->
                                    </li>
                                    <!-- <li class="nav-item">
                                        <a href="teachers.html">Our teachers</a>
                                        <ul class="sub-menu">
                                            <li><a href="teachers.html">teachers</a></li>
                                            <li><a href="teachers-singel.html">teacher Singel</a></li>
                                        </ul>
                                    </li> -->
                                    <li class="nav-item">
                                        <a href="/blog">Blog</a>
                                        <!-- <ul class="sub-menu">
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="blog-singel.html">Blog Singel</a></li>
                                        </ul> -->
                                    </li>
                                    <li class="nav-item">
                                        <a href="/shop">MarketPlace</a>
                                        <!-- <ul class="sub-menu">
                                            <li><a href="shop.html">Shop</a></li>
                                            <li><a href="shop-singel.html">Shop Singel</a></li>
                                        </ul> -->
                                    </li>
                                    <li class="nav-item">
                                        <a href="/about">About us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/contact">Contact</a>
                                        <!-- <ul class="sub-menu">
                                            <li><a href="contact.html">Contact Us</a></li>
                                            <li><a href="contact-2.html">Contact Us 2</a></li>
                                        </ul> -->
                                    </li>
                                </ul>
                            </div>
                        </nav> <!-- nav -->
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-3 col-4">
                        <div class="right-icon text-right">
                            <ul>
                                <li><a href="#" id="search"><i class="fa fa-search"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-bag"></i><span>0</span></a></li>
                            </ul>
                        </div> <!-- right icon -->
                    </div>
                </div> <!-- row -->

            </div> <!-- container -->
        </div>
        
    </header>
    
    <!--====== HEADER PART ENDS ======-->
   
    <!--====== SEARCH BOX PART START ======-->
    
    <div class="search-box">
        <div class="serach-form">
            <div class="closebtn">
                <span></span>
                <span></span>
            </div>
            <form action="#">
                <input type="text" placeholder="Search by keyword">
                <button><i class="fa fa-search"></i></button>
            </form>
        </div> <!-- serach form -->
    </div>
    
    <!--====== SEARCH BOX PART ENDS ======-->
   
  
   {{$slot}}
    <!--====== FOOTER PART START ======-->
    
    <footer id="footer-part">
        <div class="footer-top pt-40 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-about mt-40">
                            <div class="logo">
                                <a href="#"><img src="asset/images/logo/icon2.png" alt="Logo" style="height: 175px;"></a>
                            </div>
                            <p>We are selfTeachLab.We Provided Online Course.Our Quiz Section is open for EveryOne Who want to Earn Money with play Quiz.</p>
                            <ul class="mt-20">
                                <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div> <!-- footer about -->
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer-link mt-40">
                            <div class="footer-title pb-25">
                                <h6>Sitemap</h6>
                            </div>
                            <ul>
                                <li><a href="index-2.html"><i class="fa fa-angle-right"></i>Home</a></li>
                                <li><a href="about.html"><i class="fa fa-angle-right"></i>About us</a></li>
                                <li><a href="courses.html"><i class="fa fa-angle-right"></i>Courses</a></li>
                                <li><a href="blog.html"><i class="fa fa-angle-right"></i>News</a></li>
                                <li><a href="events.html"><i class="fa fa-angle-right"></i>Event</a></li>
                            </ul>
                            <ul>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Gallery</a></li>
                                <li><a href="shop.html"><i class="fa fa-angle-right"></i>Shop</a></li>
                                <li><a href="teachers.html"><i class="fa fa-angle-right"></i>Teachers</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Support</a></li>
                                <li><a href="contact.html"><i class="fa fa-angle-right"></i>Contact</a></li>
                            </ul>
                        </div> <!-- footer link -->
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="footer-link support mt-40">
                            <div class="footer-title pb-25">
                                <h6>Support</h6>
                            </div>
                            <ul>
                                <li><a href="#"><i class="fa fa-angle-right"></i>FAQS</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Privacy</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Policy</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Support</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Documentation</a></li>
                            </ul>
                        </div> <!-- support -->
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-address mt-40">
                            <div class="footer-title pb-25">
                                <h6>Contact Us</h6>
                            </div>
                            <ul>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-home"></i>
                                    </div>
                                    <div class="cont">
                                        <p>143 castle road 517 district, kiyev port south Canada</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <div class="cont">
                                        <p>+3 123 456 789</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-envelope-o"></i>
                                    </div>
                                    <div class="cont">
                                        <p>info@yourmail.com</p>
                                    </div>
                                </li>
                            </ul>
                        </div> <!-- footer address -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- footer top -->
        
        <div class="footer-copyright pt-10 pb-25">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="copyright text-md-left text-center pt-15">
                            <p><a target="_blank" href="">Self_Teach_Lab</a> </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="copyright text-md-right text-center pt-15">
                           copyright @2021
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- footer copyright -->
    </footer>
    
    <!--====== FOOTER PART ENDS ======-->
   
    <!--====== BACK TO TP PART START ======-->
    
    <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
    
    <!--====== BACK TO TP PART ENDS ======-->
   
    
    
    
    
    
    
    
    <!--====== jquery js ======-->
    <script src="asset/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="asset/js/vendor/jquery-1.12.4.min.js"></script>

    <!--====== Bootstrap js ======-->
    <script src="asset/js/bootstrap.min.js"></script>
    
    <!--====== Slick js ======-->
    <script src="asset/js/slick.min.js"></script>
    
    <!--====== Magnific Popup js ======-->
    <script src="asset/js/jquery.magnific-popup.min.js"></script>
    
    <!--====== Counter Up js ======-->
    <script src="asset/js/waypoints.min.js"></script>
    <script src="asset/js/jquery.counterup.min.js"></script>
    
    <!--====== Nice Select js ======-->
    <script src="asset/js/jquery.nice-select.min.js"></script>
    
    <!--====== Nice Number js ======-->
    <script src="asset/js/jquery.nice-number.min.js"></script>
    
    <!--====== Count Down js ======-->
    <script src="asset/js/jquery.countdown.min.js"></script>
    
    <!--====== Validator js ======-->
    <script src="asset/js/validator.min.js"></script>
    
    <!--====== Ajax Contact js ======-->
    <script src="asset/js/ajax-contact.js"></script>
    
    <!--====== Main js ======-->
    <script src="asset/js/main.js"></script>
    
    <!--====== Map js ======-->
    {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDC3Ip9iVC0nIxC6V14CKLQ1HZNF_65qEQ"></script> --}}
    <script src="asset/js/map-script.js"></script>

    {{-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script> --}}
    @livewireScripts
</body>
</html>
