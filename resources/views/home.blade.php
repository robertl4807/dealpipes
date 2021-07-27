<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sofbox - Responsive Software Landing Page</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('frontend/images/') }}/favicon.ico" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&amp;Raleway:300,400,500,600,700,800,900" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <!-- owl-carousel -->
    <link rel="stylesheet" href="{{ asset('frontend/css/owl-carousel/owl.carousel.css') }}" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.css') }}" />
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup/magnific-popup.css') }}" />
    <!-- media element player -->
    <link href="{{ asset('frontend/css/mediaelementplayer.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Animate -->
    <link rel="stylesheet" href="{{ asset('frontend/css/animate.css') }}" />
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ asset('frontend/css/ionicons.min.css') }}">
    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <!-- Responsive -->
    <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">
    <!-- custom style -->
    <link rel="stylesheet" href="{{ asset('frontend/css/custom.css') }}" />
    
</head>

<body data-spy="scroll" data-offset="80">
    <!-- loading -->
    <div id="loading">
        <div id="loading-center">
            <div class="loader">
                <div class="cube">
                    <div class="sides">
                        <div class="top"></div>
                        <div class="right"></div>
                        <div class="bottom"></div>
                        <div class="left"></div>
                        <div class="front"></div>
                        <div class="back"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- loading End -->
    <!-- Header -->
    <header id="main-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.html">
                                <img class="img-fluid" src="{{ asset('frontend/images/') }}/logo.png" alt="#">
                            </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="ion-navicon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto w-100 justify-content-end">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#iq-home">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#how-it-works">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#software-features">Service</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#great-screenshots">Screenshots</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#pricing">Pricing</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#team">Team</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#blog">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#contact">Contact</a>
                                </li>
                            </ul>
                            <a href="{{ route('signup')}}" class="custom-btn button bt-black pull-right">Sign Up</a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->
    <!-- Banner -->
    <section id="iq-home" class="iq-banner overview-block-pt iq-bg-over iq-over-blue-90 iq-parallax" data-jarallax='{"speed": 0.6}' style="background: url({{ asset('frontend/images/') }}/bg/01.jpg);">
        <div class="container-fluid">
            <div class="banner-text">
                <div class="row">
                    <div class="col-lg-6">
                        <h1 class="text-uppercase iq-font-white iq-tw-3">We are building <b class="iq-tw-7">software</b> to help</h1>
                        <p class="iq-font-white iq-pt-15 iq-mb-40">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley,</p>
                        <div class="waves-box">
                            <a href="http://www.youtube.com/watch?v=0O2aH4XLbto" class="iq-video popup-youtube"><i class="ion-ios-play-outline"></i></a>
                            <div class="iq-waves">
                                <div class="waves wave-1"></div>
                                <div class="waves wave-2"></div>
                                <div class="waves wave-3"></div>
                            </div>
                        </div>
                        <a href="{{ route('signup')}}" class="button bt-black iq-mt-5 iq-ml-40">Sign Up</a>
                    </div>
                    <div class="col-lg-6">
                        <img class="banner-img" src="{{ asset('frontend/images/') }}/banner/01.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-objects">
            <span class="banner-objects-01" data-bottom="transform:translatey(50px)" data-top="transform:translatey(-50px);">
                    <img src="{{ asset('frontend/images/') }}/drive/03.png" alt="drive02">
                </span>
            <span class="banner-objects-02 iq-fadebounce">
                    <span class="iq-round"></span>
            </span>
            <span class="banner-objects-03 iq-fadebounce">
                    <span class="iq-round"></span>
            </span>
        </div>
    </section>
    <!-- Banner End -->
    <!-- Main Content -->
    <div class="main-content">
        <!-- How it Works -->
        <section id="how-it-works" class="overview-block-ptb it-works">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="heading-title">
                            <h3 class="title iq-tw-7">How it Works</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley,</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-4">
                        <div class="iq-works-box text-left">
                            <div class="step">1</div>
                            <div class="icon-bg text-center">
                                <img src="{{ asset('frontend/images/') }}/services/icon1.png" class="img-fluid" alt="#">
                            </div>
                            <h5 class="iq-tw-7 text-uppercase iq-mt-25 iq-mb-15">Easy to Customize</h5>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4 r-mt-30">
                        <div class="iq-works-box text-left">
                            <div class="step">2</div>
                            <div class="icon-bg text-center">
                                <img src="{{ asset('frontend/images/') }}/services/icon2.png" class="img-fluid" alt="#">
                            </div>
                            <h5 class="iq-tw-7 text-uppercase iq-mt-25 iq-mb-15">Multipurpose layout</h5>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4 r-mt-30">
                        <div class="iq-works-box text-left">
                            <div class="step">3</div>
                            <div class="icon-bg text-center">
                                <img src="{{ asset('frontend/images/') }}/services/icon3.png" class="img-fluid" alt="#"></div>
                            <h5 class="iq-tw-7 text-uppercase iq-mt-25 iq-mb-15">Unique Design</h5>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- How it Works END -->
        <!-- Who is Sofbox ? -->
        <section id="how-works" class="overview-block-ptb how-works">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h2 class="iq-tw-6 iq-mb-25">What is Sofbox ?</h2>
                        <p class="iq-font-15">Simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        <p class="iq-font-15 iq-mt-20">It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        <h6 class="iq-tw-6 iq-mt-25">Discover our best ever services.</h6>
                        <a href="javascript:void(0)" class="button iq-mt-10">Click Here</a>
                    </div>
                    <div class="col-lg-6 align-self-center">
                        <img class="iq-works-img" src="{{ asset('frontend/images/') }}/drive/01.png" alt="drive01">
                    </div>
                </div>
            </div>
            <div class="iq-objects">
                
                <span class="iq-objects-02" data-bottom="transform:translatey(50px)" data-top="transform:translatey(-100px);">
                        <img src="{{ asset('frontend/images/') }}/drive/03.png" alt="drive02">
                    </span>
                <span class="iq-objects-03" data-bottom="transform:translatex(50px)" data-top="transform:translatex(-100px);">
                        <img src="{{ asset('frontend/images/') }}/drive/04.png" alt="drive02">
                    </span>
                
            </div>
        </section>
        <!-- Who is Sofbox ? END -->
        <!-- Software Features -->
        <section id="software-features" class="overview-block-ptb iq-mt-50 software">
            <div class="iq-software-demo">
                <img class="img-fluid" src="{{ asset('frontend/images/') }}/drive/05.png" alt="drive05">
            </div>
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-lg-6">
                        <h2 class="iq-tw-6 iq-mb-25">Software Features</h2>
                        <p class="iq-font-15">Simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        <ul class="iq-mt-40 iq-list">
                            <li class="iq-tw-6"><i class="ion-android-done-all iq-mr-10 iq-font-blue iq-font-30"></i><span class="iq-font-black">Simply dummy text of the Lorem Ipsum is printing and type setting industry.</span></li>
                            <li class="iq-tw-6"><i class="ion-android-done-all iq-mr-10 iq-font-blue iq-font-30"></i><span class="iq-font-black">Simply dummy text of the Lorem Ipsum is printing and type setting industry.</span></li>
                            <li class="iq-tw-6"><i class="ion-android-done-all iq-mr-10 iq-font-blue iq-font-30"></i><span class="iq-font-black">Simply dummy text of the Lorem Ipsum is printing and type setting industry.</span></li>
                            <li class="iq-tw-6"><i class="ion-android-done-all iq-mr-10 iq-font-blue iq-font-30"></i><span class="iq-font-black">Simply dummy text of the Lorem Ipsum is printing and type setting industry.</span></li>
                            <li class="iq-tw-6"><i class="ion-android-done-all iq-mr-10 iq-font-blue iq-font-30"></i><span class="iq-font-black">Simply dummy text of the Lorem Ipsum is printing and type setting industry.</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="iq-objects-software">
                <span class="iq-objects-01" data-bottom="transform:translatey(50px)" data-top="transform:translatey(-100px);">
                        <img src="{{ asset('frontend/images/') }}/drive/03.png" alt="drive02">
                    </span>
                <span class="iq-objects-02" data-bottom="transform:translatex(50px)" data-top="transform:translatex(-100px);">
                        <img src="{{ asset('frontend/images/') }}/drive/04.png" alt="drive02">
                    </span>
                
            </div>
        </section>
        <!-- Software Features END -->
        <!-- Great Screenshots -->
        <section id="great-screenshots" class="overview-block-ptb iq-bg-over  iq-over-blue-80 iq-screenshots iq-parallax" data-jarallax='{"speed": 0.6}' style="background: url({{ asset('frontend/images/') }}/bg/07.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="heading-title white">
                            <h3 class="title iq-tw-7">Great Screenshots</h3>
                            <p class="iq-font-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley,</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-sm-12">
                        <div class="screenshots-slider popup-gallery">
                            <div class="slider-container">
                                <div class="slider-content">
                                    <div class="slider-single">
                                        <a href="{{ asset('frontend/images/') }}/screenshots/01.jpg" class="popup-img"><img class="slider-single-image" src="{{ asset('frontend/images/') }}/screenshots/01.jpg" alt="1" /></a>
                                    </div>
                                    <div class="slider-single">
                                        <a href="{{ asset('frontend/images/') }}/screenshots/01.jpg" class="popup-img"><img class="slider-single-image" src="{{ asset('frontend/images/') }}/screenshots/02.jpg" alt="2" /></a>
                                    </div>
                                    <div class="slider-single">
                                        <a href="{{ asset('frontend/images/') }}/screenshots/01.jpg" class="popup-img"><img class="slider-single-image" src="{{ asset('frontend/images/') }}/screenshots/03.jpg" alt="3" /></a>
                                    </div>
                                    <div class="slider-single">
                                        <a href="{{ asset('frontend/images/') }}/screenshots/01.jpg" class="popup-img"><img class="slider-single-image" src="{{ asset('frontend/images/') }}/screenshots/04.jpg" alt="4" /></a>
                                    </div>
                                    <div class="slider-single">
                                        <a href="{{ asset('frontend/images/') }}/screenshots/01.jpg" class="popup-img"><img class="slider-single-image" src="{{ asset('frontend/images/') }}/screenshots/05.jpg" alt="5" /></a>
                                    </div>
                                    <div class="slider-single">
                                        <a href="{{ asset('frontend/images/') }}/screenshots/01.jpg" class="popup-img"><img class="slider-single-image" src="{{ asset('frontend/images/') }}/screenshots/06.jpg" alt="6" /></a>
                                    </div>
                                </div>
                                <a class="slider-left" href="javascript:void(0);"><i class="fa fa-angle-left"></i></a>
                                <a class="slider-right" href="javascript:void(0);"><i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Great Screenshots END -->
        <!-- Tab Features -->
        
        <!-- Tab Features END -->
        <!-- Sofbox Specialities -->
        <section class="overview-block-ptb grey-bg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="heading-title">
                            <h3 class="title iq-tw-7">Sofbox Specialities </h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley,</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-lg-3 col-md-6">
                        <div class="iq-fancy-box text-center">
                            <div class="iq-icon">
                                <i aria-hidden="true" class="ion-ios-monitor-outline"></i>
                            </div>
                            <div class="fancy-content">
                                <h5 class="iq-tw-6 iq-pt-20 iq-pb-10">High Resolution</h5>
                                <p>Lorem ipsum madolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-3 col-md-6 r4-mt-30">
                        <div class="iq-fancy-box text-center">
                            <div class="iq-icon">
                                <i aria-hidden="true" class="ion-ios-settings"></i>
                            </div>
                            <div class="fancy-content">
                                <h5 class="iq-tw-6 iq-pt-20 iq-pb-10">Color Schemes</h5>
                                <p>Lorem ipsum madolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-3 col-md-6 r-mt-30">
                        <div class="iq-fancy-box text-center">
                            <div class="iq-icon">
                                <i aria-hidden="true" class="ion-social-googleplus-outline"></i>
                            </div>
                            <div class="fancy-content">
                                <h5 class="iq-tw-6 iq-pt-20 iq-pb-10">Google Fonts</h5>
                                <p>Lorem ipsum madolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-3 col-md-6 r-mt-30">
                        <div class="iq-fancy-box text-center">
                            <div class="iq-icon">
                                <i aria-hidden="true" class="ion-ios-heart-outline"></i>
                            </div>
                            <div class="fancy-content">
                                <h5 class="iq-tw-6 iq-pt-20 iq-pb-10">Clean Codes</h5>
                                <p>Lorem ipsum madolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-3 col-md-6 iq-mt-30">
                        <div class="iq-fancy-box text-center">
                            <div class="iq-icon">
                                <i aria-hidden="true" class="ion-ios-checkmark-outline"></i>
                            </div>
                            <div class="fancy-content">
                                <h5 class="iq-tw-6 iq-pt-20 iq-pb-10">Responsive Design</h5>
                                <p>Lorem ipsum madolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-3 col-md-6 iq-mt-30">
                        <div class="iq-fancy-box text-center">
                            <div class="iq-icon">
                                <i aria-hidden="true" class="ion-ios-color-wand-outline"></i>
                            </div>
                            <div class="fancy-content">
                                <h5 class="iq-tw-6 iq-pt-20 iq-pb-10">Easy to Use</h5>
                                <p>Lorem ipsum madolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-3 col-md-6 iq-mt-30">
                        <div class="iq-fancy-box text-center">
                            <div class="iq-icon">
                                <i aria-hidden="true" class="ion-ios-photos-outline"></i>
                            </div>
                            <div class="fancy-content">
                                <h5 class="iq-tw-6 iq-pt-20 iq-pb-10">Perfect Showcase</h5>
                                <p>Lorem ipsum madolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-3 col-md-6 iq-mt-30">
                        <div class="iq-fancy-box text-center">
                            <div class="iq-icon">
                                <i aria-hidden="true" class="ion-ios-videocam-outline"></i>
                            </div>
                            <div class="fancy-content">
                                <h5 class="iq-tw-6 iq-pt-20 iq-pb-10">Video Animation</h5>
                                <p>Lorem ipsum madolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Sofbox Specialities END -->
        <!-- Counter -->
        <div class="iq-pt-80 iq-counter-box iq-bg-over iq-over-blue-90 iq-font-white iq-parallax" data-jarallax='{"speed": 0.6}' style="background: url({{ asset('frontend/images/') }}/bg/02.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12 text-left">
                        <div class="counter"> <i class="ion-ios-folder-outline " aria-hidden="true"></i>
                            <div class="counter-date">
                                <label class="iq-font-white text-uppercase">APP Sign UpS</label>
                                <span class="timer iq-tw-7" data-to="1540" data-speed="10000">1540</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 text-left r4-mt-30">
                        <div class="counter"> <i class="ion-ios-paper-outline " aria-hidden="true"></i>
                            <div class="counter-date">
                                <label class="iq-font-white text-uppercase">HAPPY CLIENTS</label>
                                <span class="timer iq-tw-7" data-to="2530" data-speed="10000">2530</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 text-left r-mt-30">
                        <div class="counter"> <i class="ion-ios-person-outline " aria-hidden="true"></i>
                            <div class="counter-date">
                                <label class="iq-font-white text-uppercase">ACTIVE ACCOUNTS</label>
                                <span class="timer iq-tw-7" data-to="8120" data-speed="10000">8120</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 text-left r-mt-30">
                        <div class="counter"> <i class="ion-ios-star " aria-hidden="true"></i>
                            <div class="counter-date">
                                <label class="iq-font-white text-uppercase">TOTAL APP RATES</label>
                                <span class="timer iq-tw-7" data-to="1620" data-speed="10000">1620</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="counter-info iq-mt-60 iq-pt-40">
                    <div class="row">
                        <div class="col-lg-6">
                            <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic type setting, Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <p class="iq-mt-30">It has survived not only five centuries, but also the leap into electronic type setting, Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <a href="{{ route('signup')}}" class="button bt-black iq-mt-15 iq-mb-30">Sign Up</a>
                        </div>
                        <div class="col-lg-6">
                            <div class="counter-info-img">
                                <img class="center-block" src="{{ asset('frontend/images/') }}/drive/07.png" alt="#">
                                <div class="waves-box">
                                    <a href="video/01.m4v" class="iq-video popup-youtube"><i class="ion-ios-play-outline"></i></a>
                                    <div class="iq-waves">
                                        <div class="waves wave-1"></div>
                                        <div class="waves wave-2"></div>
                                        <div class="waves wave-3"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Counter END -->
        <!-- Loved By Our Customers -->
        <section class="overview-block-ptb white-bg iq-loved-customers">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="heading-title iq-mt-50">
                            <h3 class="title iq-tw-7">Loved By Our Customers</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley,</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="owl-carousel" data-autoplay="true" data-loop="true" data-nav="true" data-dots="false" data-items="3" data-items-laptop="3" data-items-tab="2" data-items-mobile="1" data-items-mobile-sm="1" data-margin="30" >
                            <div class="item">
                                <div class="iq-client white-bg">
                                    <div class="client-img">
                                        <img alt="#" class="img-fluid rounded-circle" src="{{ asset('frontend/images/') }}/testimonial/01.jpg">
                                    </div>
                                    <div class="client-info">
                                        <div class="client-name iq-mb-10">
                                            <h5 class="iq-tw-6">Jason Adams</h5>
                                            <span class="sub-title iq-tw-6">CEO, Sofbox</span>
                                        </div>
                                        <p>Lorem ipsum madolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor coli incididunt ut labore.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="iq-client white-bg">
                                    <div class="client-img">
                                        <img alt="#" class="img-fluid rounded-circle" src="{{ asset('frontend/images/') }}/testimonial/02.jpg">
                                    </div>
                                    <div class="client-info">
                                        <div class="client-name iq-mb-10">
                                            <h5 class="iq-tw-6">Jenny Adams</h5>
                                            <span class="sub-title iq-tw-6">CEO, Sofbox</span>
                                        </div>
                                        <p>Lorem ipsum madolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor coli incididunt ut labore.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="iq-client white-bg">
                                    <div class="client-img">
                                        <img alt="#" class="img-fluid rounded-circle" src="{{ asset('frontend/images/') }}/testimonial/03.jpg">
                                    </div>
                                    <div class="client-info">
                                        <div class="client-name iq-mb-10">
                                            <h5 class="iq-tw-6">John Deo</h5>
                                            <span class="sub-title iq-tw-6">CEO, Sofbox</span>
                                        </div>
                                        <p>Lorem ipsum madolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor coli incididunt ut labore.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Loved By Our Customers END -->
        <!-- Affordable Price -->
        <section id="pricing" class="overview-block-ptb grey-bg iq-price-table">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="heading-title">
                            <h3 class="title iq-tw-7">Affordable Price</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley,</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-lg-4">
                        <div class="iq-pricing text-center">
                            <div class="price-title iq-parallax iq-over-blue-80" data-jarallax='{"speed": 0.6}' style="background: url({{ asset('frontend/images/') }}/bg/08.jpg);">
                                <h2 class="iq-font-white iq-tw-7"><small>$</small>19<small>/Month</small></h2>
                                <span class="text-uppercase iq-tw-4 iq-font-white">BASIC</span>
                            </div>
                            <ul>
                                <li>
                                    <s>100 MB Disk Space</s>
                                </li>
                                <li>2 Subdomains</li>
                                <li>5 Email Accounts</li>
                                <li>
                                    <s>Webmail Support</s>
                                </li>
                                <li>
                                    <s>Customer Support 24/7</s>
                                </li>
                            </ul>
                            <div class="price-footer">
                                <a class="button" href="# ">Purchase</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 wow flipInY r4-mt-30" data-wow-duration="1s">
                        <div class="iq-pricing text-center">
                            <div class="price-title iq-parallax iq-over-blue-80" data-jarallax='{"speed": 0.6}' style="background: url({{ asset('frontend/images/') }}/bg/08.jpg);">
                                <h2 class="iq-font-white iq-tw-7"><small>$</small>29<small>/Month</small></h2>
                                <span class="text-uppercase iq-tw-4 iq-font-white">STANDARD</span>
                            </div>
                            <ul>
                                <li>100 MB Disk Space</li>
                                <li>2 Subdomains</li>
                                <li>5 Email Accounts</li>
                                <li>
                                    <s>Webmail Support</s>
                                </li>
                                <li>Customer Support 24/7</li>
                            </ul>
                            <div class="price-footer">
                                <a class="button" href="# ">Purchase</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 r4-mt-30">
                        <div class="iq-pricing text-center">
                            <div class="price-title iq-parallax iq-over-blue-80" data-jarallax='{"speed": 0.6}' style="background: url({{ asset('frontend/images/') }}/bg/08.jpg);">
                                <h2 class="iq-font-white iq-tw-7"><small>$</small>49<small>/Month</small></h2>
                                <span class="text-uppercase iq-tw-4 iq-font-white">ADVANCE</span>
                            </div>
                            <ul>
                                <li>100 MB Disk Space</li>
                                <li>
                                    <s>2 Subdomains</s>
                                </li>
                                <li>
                                    <s>5 Email Accounts</s>
                                </li>
                                <li>Webmail Support</li>
                                <li>Customer Support 24/7</li>
                            </ul>
                            <div class="price-footer">
                                <a class="button" href="# ">Purchase</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Affordable Price END -->
        <!-- Meet the Team -->
        
        <!-- Meet the Team END -->
        <!-- Compare Services -->
        
        <!-- Compare Services end -->
        <!-- Frequently Asked Questions -->
        <section class="overview-block-ptb white-bg iq-asked">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="heading-title">
                            <h3 class="title iq-tw-7">Frequently Asked Questions</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley,</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-6">
                        <img class="img-fluid center-block" src="{{ asset('frontend/images/') }}/drive/10.png" alt="drive10" style="z-index: 9; position: relative;">
                    </div>
                    <div class="col-md-12 col-lg-6">
                        <div class="iq-accordion iq-mt-50">
                            <div class="iq-ad-block ad-active"> <a href="javascript:void(0)" class="ad-title iq-tw-6 iq-font-grey">Ipsum is simply dummy the printing?</a>
                                <div class="ad-details">
                                    <div class="row">
                                        <div class="col-sm-3"><img alt="#" class="img-fluid" src="{{ asset('frontend/images/') }}/blog/01.jpg"></div>
                                        <div class="col-sm-9"> It has survived not only five centuries, but also the leap into electronic typesetting. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="iq-ad-block"> <a href="javascript:void(0)" class="ad-title iq-tw-6 iq-font-grey">Dummy the printing and type setting?</a>
                                <div class="ad-details">It has survived not only five centuries, but also the leap into electronic typesetting. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.</div>
                            </div>
                            <div class="iq-ad-block"> <a href="javascript:void(0)" class="ad-title iq-tw-6 iq-font-grey">Standard dummy since the 1500s?</a>
                                <div class="ad-details">
                                    <div class="row">
                                        <div class="col-sm-9"> It has survived not only five centuries, but also the leap into electronic typesetting. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur.</div>
                                        <div class="col-sm-3"><img alt="#" class="img-fluid" src="{{ asset('frontend/images/') }}/blog/01.jpg"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="iq-ad-block"> <a href="javascript:void(0)" class="ad-title iq-tw-6 iq-font-grey">It has survived five centuries?</a>
                                <div class="ad-details">It has survived not only five centuries, but also the leap into electronic typesetting. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="iq-objects-asked">
               
                <span class="iq-objects-02" data-bottom="transform:translatex(50px)" data-top="transform:translatex(-100px);">
        <img src="{{ asset('frontend/images/') }}/drive/04.png" alt="drive02">
    </span>
               
            </div>
        </section>
        <!-- Frequently Asked Questions END -->
        <!-- Latest Blog Post -->
        <section id="blog" class="overview-block-ptb grey-bg iq-blog">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="heading-title">
                            <h3 class="title iq-tw-7">Latest Blog Post</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley,</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="owl-carousel" data-autoplay="true" data-loop="true" data-nav="false" data-dots="true" data-items="3" data-items-laptop="3" data-items-tab="2" data-items-mobile="2" data-items-mobile-sm="1" data-margin="30" >
                            <div class="item">
                                <div class="iq-blog-box">
                                    <div class="iq-blog-image clearfix">
                                        <div class="media-wrapper">
                                            <video style="width:100%;height:100%;" id="player1" poster="video/01.jpg" controls preload="none">
                                                <source type="video/m4v" src="{{ asset('frontend/video/') }}/01.m4v" />
                                                <source type="video/webm" src="{{ asset('frontend/video/') }}/01.webm" />
                                                <source type="video/ogg" src="{{ asset('frontend/video/') }}/01.ogv" />
                                            </video>
                                        </div>
                                    </div>
                                    <div class="iq-blog-detail">
                                        <div class="blog-title"> <a href="blog-single.html"><h5 class="iq-tw-6 iq-mb-10">Blogpost With HTML Video</h5> </a> </div>
                                        <div class="blog-content">
                                            <p>Quae laboriosam sunt consectetur, assumenda provident lorem ipsum dolor sit amet, consectetur adipisicing elit. hic perspiciatis.</p>
                                        </div>
                                        <div class="iq-blog-meta">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><a href="javascript:void(0)"><i class="fa fa-user-circle" aria-hidden="true"></i> Tom Herry</a></li>
                                                <li class="list-inline-item"><a href="javascript:void(0)"><i class="fa fa-calendar" aria-hidden="true"></i> 12 Aug 2017</a></li>
                                                <li class="list-inline-item"><a href="javascript:void(0)"><i class="fa fa-comment-o" aria-hidden="true"></i> 5</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="iq-blog-box">
                                    <div class="iq-blog-image clearfix">
                                        <img class="img-fluid center-block" src="{{ asset('frontend/images/') }}/blog/01.jpg" alt="#">
                                    </div>
                                    <div class="iq-blog-detail">
                                        <div class="blog-title"> <a href="blog-single.html"><h5 class="iq-tw-6 iq-mb-10">Blogpost With Image</h5> </a> </div>
                                        <div class="blog-content">
                                            <p>Quae laboriosam sunt consectetur, assumenda provident lorem ipsum dolor sit amet, consectetur adipisicing elit. hic perspiciatis.</p>
                                        </div>
                                        <div class="iq-blog-meta">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><a href="javascript:void(0)"><i class="fa fa-user-circle" aria-hidden="true"></i> Tom Herry</a></li>
                                                <li class="list-inline-item"><a href="javascript:void(0)"><i class="fa fa-calendar" aria-hidden="true"></i> 12 Aug 2017</a></li>
                                                <li class="list-inline-item"><a href="javascript:void(0)"><i class="fa fa-comment-o" aria-hidden="true"></i> 5</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="iq-blog-box">
                                    <div class="iq-blog-image clearfix">
                                        <div class="iq-bolg-video">
                                            <iframe src="https://player.vimeo.com/video/176916362"></iframe>
                                        </div>
                                    </div>
                                    <div class="iq-blog-detail">
                                        <div class="blog-title"> <a href="blog-single.html"><h5 class="iq-tw-6 iq-mb-10">Blogpost With Vimeo</h5> </a> </div>
                                        <div class="blog-content">
                                            <p>Quae laboriosam sunt consectetur, assumenda provident lorem ipsum dolor sit amet, consectetur adipisicing elit. hic perspiciatis.</p>
                                        </div>
                                        <div class="iq-blog-meta">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><a href="javascript:void(0)"><i class="fa fa-user-circle" aria-hidden="true"></i> Tom Herry</a></li>
                                                <li class="list-inline-item"><a href="javascript:void(0)"><i class="fa fa-calendar" aria-hidden="true"></i> 12 Aug 2017</a></li>
                                                <li class="list-inline-item"><a href="javascript:void(0)"><i class="fa fa-comment-o" aria-hidden="true"></i> 5</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="iq-blog-box">
                                    <div class="iq-blog-image clearfix">
                                        <div class="iq-bolg-video">
                                            <iframe src="https://www.youtube.com/embed/nrJtHemSPW4?rel=0" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                    <div class="iq-blog-detail">
                                        <div class="blog-title"> <a href="blog-single.html"><h5 class="iq-tw-6 iq-mb-10">Blogpost With Youtube</h5> </a> </div>
                                        <div class="blog-content">
                                            <p>Quae laboriosam sunt consectetur, assumenda provident lorem ipsum dolor sit amet, consectetur adipisicing elit. hic perspiciatis.</p>
                                        </div>
                                        <div class="iq-blog-meta">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><a href="javascript:void(0)"><i class="fa fa-user-circle" aria-hidden="true"></i> Tom Herry</a></li>
                                                <li class="list-inline-item"><a href="javascript:void(0)"><i class="fa fa-calendar" aria-hidden="true"></i> 12 Aug 2017</a></li>
                                                <li class="list-inline-item"><a href="javascript:void(0)"><i class="fa fa-comment-o" aria-hidden="true"></i> 5</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="iq-blog-box">
                                    <div class="iq-blog-image clearfix">
                                        <img class="img-fluid center-block" src="{{ asset('frontend/images/') }}/blog/03.jpg" alt="#">
                                        <div class="players" id="player2-container">
                                            <div class="media-wrapper">
                                                <audio id="player2" preload="none" controls>
                                                    <source src="http://www.largesound.com/ashborytour/sound/AshboryBYU.mp3" type="audio/mp3">
                                                </audio>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="iq-blog-detail">
                                        <div class="blog-title"> <a href="blog-single.html"><h5 class="iq-tw-6 iq-mb-10">Blogpost With Audio</h5> </a> </div>
                                        <div class="blog-content">
                                            <p>Quae laboriosam sunt consectetur, assumenda provident lorem ipsum dolor sit amet, consectetur adipisicing elit. hic perspiciatis.</p>
                                        </div>
                                        <div class="iq-blog-meta">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><a href="javascript:void(0)"><i class="fa fa-user-circle" aria-hidden="true"></i> Tom Herry</a></li>
                                                <li class="list-inline-item"><a href="javascript:void(0)"><i class="fa fa-calendar" aria-hidden="true"></i> 12 Aug 2017</a></li>
                                                <li class="list-inline-item"><a href="javascript:void(0)"><i class="fa fa-comment-o" aria-hidden="true"></i> 5</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="iq-blog-box">
                                    <div class="iq-blog-image clearfix">
                                        <img class="img-fluid center-block" src="{{ asset('frontend/images/') }}/blog/02.jpg" alt="#">
                                    </div>
                                    <div class="iq-blog-detail">
                                        <div class="blog-title"> <a href="blog-single.html"><h5 class="iq-tw-6 iq-mb-10">Blogpost With Image</h5> </a> </div>
                                        <div class="blog-content">
                                            <p>Quae laboriosam sunt consectetur, assumenda provident lorem ipsum dolor sit amet, consectetur adipisicing elit. hic perspiciatis.</p>
                                        </div>
                                        <div class="iq-blog-meta">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><a href="javascript:void(0)"><i class="fa fa-user-circle" aria-hidden="true"></i> Tom Herry</a></li>
                                                <li class="list-inline-item"><a href="javascript:void(0)"><i class="fa fa-calendar" aria-hidden="true"></i> 12 Aug 2017</a></li>
                                                <li class="list-inline-item"><a href="javascript:void(0)"><i class="fa fa-comment-o" aria-hidden="true"></i> 5</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="iq-blog-box">
                                    <div class="iq-blog-image clearfix">
                                        <div class="owl-carousel arrow-1" data-autoplay="true" data-loop="true" data-nav="true" data-dots="false" data-items="1" data-items-laptop="1" data-items-tab="1" data-items-mobile="1" data-items-mobile-sm="1" data-margin="30" >
                                            <div class="item">
                                                <img class="img-fluid" src="{{ asset('frontend/images/') }}/blog/01.jpg" alt="#">
                                            </div>
                                            <div class="item">
                                                <img class="img-fluid" src="{{ asset('frontend/images/') }}/blog/02.jpg" alt="#">
                                            </div>
                                            <div class="item">
                                                <img class="img-fluid" src="{{ asset('frontend/images/') }}/blog/03.jpg" alt="#">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="iq-blog-detail">
                                        <div class="blog-title"> <a href="blog-single.html"><h5 class="iq-tw-6 iq-mb-10">Blogpost With Slider</h5> </a> </div>
                                        <div class="blog-content">
                                            <p>Quae laboriosam sunt consectetur, assumenda provident lorem ipsum dolor sit amet, consectetur adipisicing elit. hic perspiciatis.</p>
                                        </div>
                                        <div class="iq-blog-meta">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><a href="javascript:void(0)"><i class="fa fa-user-circle" aria-hidden="true"></i> Tom Herry</a></li>
                                                <li class="list-inline-item"><a href="javascript:void(0)"><i class="fa fa-calendar" aria-hidden="true"></i> 12 Aug 2017</a></li>
                                                <li class="list-inline-item"><a href="javascript:void(0)"><i class="fa fa-comment-o" aria-hidden="true"></i> 5</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Latest Blog Post END -->
        <!-- Clients -->
       
        <!-- Clients END -->
    </div>
    <!-- Main Content END -->
    <!-- Footer -->
    <footer>
        <!-- Subscribe Our Newsletter -->
       
        <!-- Subscribe Our Newsletter END -->
        <!-- Footer Info -->
       
        <section class="footer-info">
            <div class="container">
                
                <div class="row iq-mt-40">
                    <div class="col-sm-12 text-center">
                        <div class="footer-copyright iq-ptb-20">@<span id="copyright"> <script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script></span> <a href="javascript:void(0)" class="text-green">Dealpipes, </a> Rei Media LLC</div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer Info END -->
    </footer>
    <!-- Footer END -->
    <!-- back-to-top -->
    <div id="back-to-top">
        <a class="top" id="top" href="#top"> <i class="ion-ios-upload-outline"></i> </a>
    </div>
    <!-- back-to-top End -->
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('frontend/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('frontend/js/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <!-- Main js -->
    <script src="{{ asset('frontend/js/main.js') }}"></script>
    <!-- Google captcha code Js -->
    
<script src='https://www.google.com/recaptcha/api.js'></script>
    <!-- Custom -->
    <script src="{{ asset('frontend/js/custom.js') }}"></script>
    
</body>

</html>