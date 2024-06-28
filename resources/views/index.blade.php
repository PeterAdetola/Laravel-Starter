<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Pacmedia - Creative Agency </title>
    <meta name="description" content="Pacmedia - Creative Agency ">
    <meta name="keywords" content="Pacmedia - Creative Agency ">
    <meta name="robots" content="INDEX,FOLLOW">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicons - Place favicon.ico in the root directory -->
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('frontend/assets/img/favicons/favicon.png') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('frontend/assets/img/favicons/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">

    <!--==============================
	  Google Fonts
	============================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<!--    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&family=Unbounded:wght@400;500;600;700&display=swap" rel="stylesheet">-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&family=Syne:wght@400;500;600;700&display=swap" rel="stylesheet">



    <!--==============================
	    All CSS File
	============================== -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/magnific-popup.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/slick.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/imageRevealHover.css') }}">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">

</head>

<body>
    <!--********************************
   		Code Start From Here
	******************************** -->




    <!--==============================
     Preloader
    ==============================-->
   <div id="preloader-bg" class="preloader">
        <div class="logo" style="display: block; margin-block: -1em;">
            <img src="{{ asset('frontend/assets/img/logo_horizontal_white.png') }}" alt="Pacmedia">
        </div>
      <div id="myProgress" class="preloader-inner">
        <div id="myBar" class="preloader-progress"></div>
      </div>
      <div id="progressLabel"></div>      
    </div> 


   

    <div class="popup-search-box">
        <button class="searchClose"><img src="{{ asset('frontend/assets/img/icon/close.svg') }}" alt="img"></button>
        <form action="#">
            <input type="text" placeholder="Search Here..">
            <button type="submit"><img src="{{ asset('frontend/assets/img/icon/search-white.svg') }}" alt="img"></button>
        </form>
    </div>

    <div class="sidemenu-wrapper">
        <div class="sidemenu-content">
            <button class="closeButton sideMenuCls"><img src="{{ asset('frontend/assets/img/icon/close.svg') }}" alt="icon"></button>
            <div class="widget footer-widget">
                <div class="widget-about">
                    <div class="footer-logo">
                        <a href="index.html"><img src="{{ asset('frontend/assets/img/logo-white.svg') }}" alt="Ovation"></a>
                    </div>
                    <p class="about-text">We are digital agency that helps businesses develop immersive and engaging</p>
                    <div class="sidebar-wrap">
                        <h6>27 Division St, New York,</h6>
                        <h6>NY 10002, USA</h6>
                    </div>
                    <div class="sidebar-wrap">
                        <h6><a href="tel:1800123654987">+1 800 123 654 987 </a></h6>
                        <h6><a href="mailto:frisk.agency@mail.com">frisk.agency@mail.com</a></h6>
                    </div>
                    <div class="social-btn style2">
                        <a href="https://www.facebook.com/">
                            <span class="link-effect">
                                <span class="effect-1"><i class="fab fa-facebook"></i></span>
                                <span class="effect-1"><i class="fab fa-facebook"></i></span>
                            </span>
                        </a>
                        <a href="https://instagram.com/">
                            <span class="link-effect">
                                <span class="effect-1"><i class="fab fa-instagram"></i></span>
                                <span class="effect-1"><i class="fab fa-instagram"></i></span>
                            </span>
                        </a>
                        <a href="https://twitter.com/">
                            <span class="link-effect">
                                <span class="effect-1"><i class="fab fa-twitter"></i></span>
                                <span class="effect-1"><i class="fab fa-twitter"></i></span>
                            </span>
                        </a>
                        <a href="https://dribbble.com/">
                            <span class="link-effect">
                                <span class="effect-1"><i class="fab fa-dribbble"></i></span>
                                <span class="effect-1"><i class="fab fa-dribbble"></i></span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-end">
                <a href="contact.html" class="chat-btn gsap-magnetic">Let’s Talk with us</a>
            </div>
        </div>
    </div>
    <!--==============================
    Mobile Menu
    ============================== -->
    <div class="mobile-menu-wrapper">
        <div class="mobile-menu-area">
            <button class="menu-toggle"><i class="fas fa-times"></i></button>
            <div class="mobile-logo">
                <a href="index.html"><img  style="height: 3em;" src="{{ asset('frontend/assets/img/logo.png') }}" alt="Pacmedia"></a>
            </div>
            <div class="mobile-menu">
                <ul>
                    <li class="menu-item-has-children">
                        <a href="#">Home</a>
                        <ul class="sub-menu">
                            <li><a href="index.html">Digital Agency</a></li>
                            <li><a href="home-2.html">Creative Agency</a></li>
                            <li><a href="home-3.html">Design Studio</a></li>
                            <li><a href="home-4.html">Digital Marketing</a></li>
                            <li><a href="home-5.html">Modern Agency</a></li>
                            <li><a href="home-6.html">Creative Studio</a></li>
                            <li><a href="home-7.html">Startup Agency</a></li>
                            <li><a href="home-8.html">Personal Portfolio</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Pages</a>
                        <ul class="sub-menu">
                            <li><a href="about.html">About Page</a></li>
                            <li class="menu-item-has-children"><a href="service.html">Service Page</a>
                                <ul class="sub-menu">
                                    <li><a href="service.html">Service Version 1</a></li>
                                    <li><a href="service-2.html">Service Version 2</a></li>
                                    <li><a href="service-3.html">Service Version 3</a></li>
                                    <li><a href="service-details.html">Service Details Page</a></li>
                                </ul>
                            </li>
                            <li><a href="service-details.html">Service Details</a></li>
                            <li><a href="team.html">Team Page</a></li>
                            <li><a href="team-details.html">Team Details Page</a></li>
                            <li><a href="pricing.html">Pricing Page</a></li>
                            <li><a href="faq.html">FAQ Page</a></li>
                            <li><a href="error.html">Error Page</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Portfolio</a>
                        <ul class="sub-menu">
                            <li><a href="project.html">Portfolio Masonary</a></li>
                            <li><a href="project-2.html">Portfolio Pinterest</a></li>
                            <li><a href="project-3.html">Portfolio Gallery</a></li>
                            <li><a href="project-4.html">Portfolio Full Width</a></li>
                            <li><a href="project-5.html">Portfolio Slider</a></li>
                            <li><a href="project-6.html">Portfolio Interactive</a></li>
                            <li><a href="project-details.html">Portfolio Details</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Blog</a>
                        <ul class="sub-menu">
                            <li><a href="blog.html">Blog Standard</a></li>
                            <li><a href="blog-2.html">Blog 2 Column</a></li>
                            <li><a href="blog-details.html">Blog Details</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="contact.html">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="sidebar-wrap">
                <h6>27 Division St, New York,</h6>
                <h6>NY 10002, USA</h6>
            </div>
            <div class="sidebar-wrap">
                <h6><a href="tel:1800123654987">+1 800 123 654 987 </a></h6>
                <h6><a href="mailto:frisk.agency@mail.com">frisk.agency@mail.com</a></h6>
            </div>
            <div class="social-btn style3">
                <a href="https://www.facebook.com/">
                    <span class="link-effect">
                        <span class="effect-1"><i class="fab fa-facebook"></i></span>
                        <span class="effect-1"><i class="fab fa-facebook"></i></span>
                    </span>
                </a>
                <a href="https://instagram.com/">
                    <span class="link-effect">
                        <span class="effect-1"><i class="fab fa-instagram"></i></span>
                        <span class="effect-1"><i class="fab fa-instagram"></i></span>
                    </span>
                </a>
                <a href="https://twitter.com/">
                    <span class="link-effect">
                        <span class="effect-1"><i class="fab fa-twitter"></i></span>
                        <span class="effect-1"><i class="fab fa-twitter"></i></span>
                    </span>
                </a>
                <a href="https://dribbble.com/">
                    <span class="link-effect">
                        <span class="effect-1"><i class="fab fa-dribbble"></i></span>
                        <span class="effect-1"><i class="fab fa-dribbble"></i></span>
                    </span>
                </a>
            </div>
        </div>
    </div>
    <!--==============================
	Header Area
    ==============================-->
    <header class="nav-header header-layout3 bg-white">
        <div class="sticky-wrapper" >
            <!-- Main Menu Area -->
            <div class="menu-area">
                <div class="container-fluid">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto">
                            <div class="header-logo">
                                <a href="index.html" class="d-none d-md-block img-fluid"><img src="{{ asset('frontend/assets/img/logo.png') }}" style="height: 3.2em;" alt="logo"></a>
                                <a href="index.html" class="d-block d-md-none img-fluid"><img src="{{ asset('frontend/assets/img/logo_mobile.png') }}" style="height: 4em; width: 4em; padding-bottom: 5px;" alt="logo-mobile"></a>
                            </div>
                        </div>
                        <div class="col-auto ms-auto">
                            <nav class="main-menu d-none d-lg-inline-block">
                                <ul>
                                    <li class="menu-item-has-children">
                                        <a href="#">
                                            <span class="link-effect">
                                                <span class="effect-1">HOME</span>
                                                <span class="effect-1">HOME</span>
                                            </span>
                                        </a>
                                        <ul class="sub-menu">
                                            <li><a href="index.html">Digital Agency</a></li>
                                            <li><a href="home-2.html">Creative Agency</a></li>
                                            <li><a href="home-3.html">Design Studio</a></li>
                                            <li><a href="home-4.html">Digital Marketing</a></li>
                                            <li><a href="home-5.html">Modern Agency</a></li>
                                            <li><a href="home-6.html">Creative Studio</a></li>
                                            <li><a href="home-7.html">Startup Agency</a></li>
                                            <li><a href="home-8.html">Personal Portfolio</a></li>
                                        </ul>
                                    </li>
                                    <li class="active menu-item-has-children">
                                        <a href="#">
                                            <span class="link-effect">
                                                <span class="effect-1">PAGES</span>
                                                <span class="effect-1">PAGES</span>
                                            </span>
                                        </a>
                                        <ul class="sub-menu">
                                            <li><a href="about.html">About Page</a></li>
                                            <li class="menu-item-has-children"><a href="service.html">Service Page</a>
                                                <ul class="sub-menu">
                                                    <li><a href="service.html">Service Version 1</a></li>
                                                    <li><a href="service-2.html">Service Version 2</a></li>
                                                    <li><a href="service-3.html">Service Version 3</a></li>
                                                    <li><a href="service-details.html">Service Details Page</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="team.html">Team Page</a>
                                            </li>
                                            <li><a href="team-details.html">Team Details Page</a></li>
                                            <li class="active"><a href="pricing.html">Pricing Page</a></li>
                                            <li><a href="faq.html">FAQ Page</a></li>
                                            <li><a href="error.html">Error Page</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">
                                            <span class="link-effect">
                                                <span class="effect-1">PORTFOLIO</span>
                                                <span class="effect-1">PORTFOLIO</span>
                                            </span>
                                        </a>
                                        <ul class="sub-menu">
                                            <li><a href="project.html">Portfolio Masonary</a></li>
                                            <li><a href="project-2.html">Portfolio Pinterest</a></li>
                                            <li><a href="project-3.html">Portfolio Gallery</a></li>
                                            <li><a href="project-4.html">Portfolio Full Width</a></li>
                                            <li><a href="project-5.html">Portfolio Slider</a></li>
                                            <li><a href="project-6.html">Portfolio Interactive</a></li>
                                            <li><a href="project-details.html">Portfolio Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">
                                            <span class="link-effect">
                                                <span class="effect-1">BLOG</span>
                                                <span class="effect-1">BLOG</span>
                                            </span>
                                        </a>
                                        <ul class="sub-menu">
                                            <li><a href="blog.html">Blog Standard</a></li>
                                            <li><a href="blog-2.html">Blog 2 Column</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="contact.html">
                                            <span class="link-effect">
                                                <span class="effect-1">CONTACT</span>
                                                <span class="effect-1">CONTACT</span>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                            <div class="navbar-right d-inline-flex d-lg-none">
                                <button type="button" class="menu-toggle sidebar-btn">
                                    <span class="line"></span>
                                    <span class="line"></span>
                                    <span class="line"></span>
                                </button>
                            </div>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <div class="header-button">
                                <a href="project.html" class="btn">
                                    <span class="link-effect">
                                        <span class="effect-1">WORKS WITH US</span>
                                        <span class="effect-1">WORKS WITH US</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!--==============================
    Breadcumb
    ============================== -->
    <div class="breadcumb-wrapper " data-bg-src="{{ asset('frontend/assets/img/bg/breadcumb-bg1-4.jpg') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Pricing</h1>
            </div>
        </div>
    </div>

    <!--==============================
    Pricing Area
    ==============================-->
    <div class="space">
        <div class="container">
            <div class="row gy-4 justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="pricing-card bg-smoke">
                        <h4 class="pricing-card_title">Startup</h4>
                        <div class="price-card-wrap">
                            <h4 class="pricing-card_price"><span class="currency">$</span>180<span class="duration">/mo</span>
                            </h4>
                        </div>
                        <p>We care about their success. For us real relationships fuel real</p>
                        <div class="checklist">
                            <ul>
                                <li><i class="fas fa-check"></i> Web & Mobile</li>
                                <li><i class="fas fa-check"></i> Free Custom Domain</li>
                                <li><i class="fas fa-check"></i> Best Hosting Ever</li>
                                <li><i class="fas fa-check"></i> Outstanding Support</li>
                                <li><i class="fas fa-check"></i> Web Design</li>
                            </ul>
                        </div>
                        <a href="project.html" class="btn">
                            <span class="link-effect">
                                <span class="effect-1">CHOOSE THIS PLAN</span>
                                <span class="effect-1">CHOOSE THIS PLAN</span>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="pricing-card bg-smoke">
                        <h4 class="pricing-card_title">Startup</h4>
                        <div class="price-card-wrap">
                            <h4 class="pricing-card_price"><span class="currency">$</span>180<span class="duration">/mo</span>
                            </h4>
                        </div>
                        <p>We care about their success. For us real relationships fuel real</p>
                        <div class="checklist">
                            <ul>
                                <li><i class="fas fa-check"></i> Web & Mobile</li>
                                <li><i class="fas fa-check"></i> Free Custom Domain</li>
                                <li><i class="fas fa-check"></i> Best Hosting Ever</li>
                                <li><i class="fas fa-check"></i> Outstanding Support</li>
                                <li><i class="fas fa-check"></i> Web Design</li>
                            </ul>
                        </div>
                        <a href="project.html" class="btn">
                            <span class="link-effect">
                                <span class="effect-1">CHOOSE THIS PLAN</span>
                                <span class="effect-1">CHOOSE THIS PLAN</span>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="pricing-card bg-smoke">
                        <h4 class="pricing-card_title">Startup</h4>
                        <div class="price-card-wrap">
                            <h4 class="pricing-card_price"><span class="currency">$</span>180<span class="duration">/mo</span>
                            </h4>
                        </div>
                        <p>We care about their success. For us real relationships fuel real</p>
                        <div class="checklist">
                            <ul>
                                <li><i class="fas fa-check"></i> Web & Mobile</li>
                                <li><i class="fas fa-check"></i> Free Custom Domain</li>
                                <li><i class="fas fa-check"></i> Best Hosting Ever</li>
                                <li><i class="fas fa-check"></i> Outstanding Support</li>
                                <li><i class="fas fa-check"></i> Web Design</li>
                            </ul>
                        </div>
                        <a href="project.html" class="btn">
                            <span class="link-effect">
                                <span class="effect-1">CHOOSE THIS PLAN</span>
                                <span class="effect-1">CHOOSE THIS PLAN</span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--==============================
    Faq Area
    ==============================-->
    <div class="faq-area-2 space-bottom overflow-hidden">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="accordion-area accordion" id="faqAccordion">

                        <div class="accordion-card style2 active">
                            <div class="accordion-header" id="collapse-item-1">
                                <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">Will you be updating the program?</button>
                            </div>
                            <div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="collapse-item-1" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text">We design high quality websites that make users come back for more. A good website tells a story that will make users fully immerse themselves operating</p>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-card style2">
                            <div class="accordion-header" id="collapse-item-2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">What happens to my data if I cancel?</button>
                            </div>
                            <div id="collapse-2" class="accordion-collapse collapse " aria-labelledby="collapse-item-2" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text">We design high quality websites that make users come back for more. A good website tells a story that will make users fully immerse themselves operating</p>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-card style2">
                            <div class="accordion-header" id="collapse-item-3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">How I can optimize voice search?</button>
                            </div>
                            <div id="collapse-3" class="accordion-collapse collapse " aria-labelledby="collapse-item-3" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text">We design high quality websites that make users come back for more. A good website tells a story that will make users fully immerse themselves operating</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-card style2">
                            <div class="accordion-header" id="collapse-item-4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">If I have questions, where can I find answers?</button>
                            </div>
                            <div id="collapse-4" class="accordion-collapse collapse " aria-labelledby="collapse-item-4" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text">We design high quality websites that make users come back for more. A good website tells a story that will make users fully immerse themselves operating</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--==============================
    Marquee Area
    ==============================-->
    <div class="container-fluid p-0 overflow-hidden">
        <div class="slider__marquee clearfix marquee-wrap">
            <div class="marquee_mode marquee__group">
                <h6 class="item m-item"><a href="#"><i class="fas fa-star-of-life"></i> We Give Unparalleled Flexibility</a></h6>
                <h6 class="item m-item"><a href="#"><i class="fas fa-star-of-life"></i> We Give Unparalleled Flexibility</a></h6>
                <h6 class="item m-item"><a href="#"><i class="fas fa-star-of-life"></i> We Give Unparalleled Flexibility</a></h6>
                <h6 class="item m-item"><a href="#"><i class="fas fa-star-of-life"></i> We Give Unparalleled Flexibility</a></h6>
            </div>
        </div>
    </div>

    <!--==============================
        Footer Area
    ==============================-->
    <footer class="footer-wrapper footer-layout2 overflow-hidden">
        <div class="container">
            <div class="widget-area space-top">
                <div class="row justify-content-between">
                    <div class="col-md-6 col-xl-5 col-lg-6">
                        <div class="widget widget-newsletter footer-widget">
                            <h3 class="widget_title">Get valuable strategy, culture and brand insights straight to your inbox</h3>
                            <form class="newsletter-form">
                                <div class="form-group">
                                    <input class="form-control" type="email" placeholder="Your email here" required="">
                                </div>
                                <button type="submit" class="btn"><img src="{{ asset('frontend/assets/img/icon/arrow-left-top.svg') }}" alt=""></button>
                            </form>
                            <p>By signing up to receive emails from Motto, you agree to our Privacy Policy. We treat your info responsibly.</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-xl-2 col-lg-3">
                        <div class="widget widget_nav_menu footer-widget">
                            <h3 class="widget_title">Links</h3>
                            <div class="menu-all-pages-container list-column2">
                                <ul class="menu">
                                    <li><a href="about.html"> About</a></li>
                                    <li><a href="project.html">Portfolios</a></li>
                                    <li><a href="service.html">Services</a></li>
                                    <li><a href="contact.html">Testimonials</a></li>
                                    <li><a href="project.html">Careers</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto col-lg-4">
                        <div class="widget footer-widget widget-contact">
                            <h3 class="widget_title">Contact</h3>
                            <ul class="contact-info-list">
                                <li>27 Division St, New York, <br> NY 10002, USA</li>
                                <li>
                                    <a href="tel:1800123654987">+1 800 123 654 987</a>
                                    <a href="mailto:frisk.agency@mail.com">frisk.agency@mail.com</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright-wrap">
                <div class="row gy-3 justify-content-between align-items-center">
                    <div class="col-md-6">
                        <p class="copyright-text">Copyright © 2024
                            <a style="color: black;" onclick="return false" ondblclick="location=this.href" href="{{ url('login') }}">Pacmedia Creatives.</a>
                        </p>

                    </div>
                    <div class="col-md-6 align-self-center">
                        <div class="social-btn style3 justify-content-md-end">
                            <a href="https://www.facebook.com/">
                                <span class="link-effect">
                                    <span class="effect-1"><i class="fab fa-facebook"></i></span>
                                    <span class="effect-1"><i class="fab fa-facebook"></i></span>
                                </span>
                            </a>
                            <a href="https://instagram.com/">
                                <span class="link-effect">
                                    <span class="effect-1"><i class="fab fa-instagram"></i></span>
                                    <span class="effect-1"><i class="fab fa-instagram"></i></span>
                                </span>
                            </a>
                            <a href="https://twitter.com/">
                                <span class="link-effect">
                                    <span class="effect-1"><i class="fab fa-twitter"></i></span>
                                    <span class="effect-1"><i class="fab fa-twitter"></i></span>
                                </span>
                            </a>
                            <a href="https://dribbble.com/">
                                <span class="link-effect">
                                    <span class="effect-1"><i class="fab fa-dribbble"></i></span>
                                    <span class="effect-1"><i class="fab fa-dribbble"></i></span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!--********************************
			Code End  Here
	******************************** -->

    <!-- Scroll To Top -->
    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
        </svg>
    </div>


    <!-- Jquery -->
    <script src="{{ asset('frontend/assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/gsap.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/ScrollSmoother.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/ScrollTrigger.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/SplitText.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/twinmax.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/imageRevealHover.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jarallax.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.marquee.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/waypoints.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/progressbar.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/wow.js') }}"></script>

    <!-- Main Js File -->
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>

       <script>
window.onload = function() {
  var i = 0;
  var elem = document.getElementById("myBar");
  var width = 1;
  var preloader = document.getElementById("myProgress"); // Get preloader element
  var backdrop = document.getElementById("preloader-bg"); // Get preloader element
  var progressLabel = document.getElementById("progressLabel");

  var id = setInterval(frame, 20);

  function frame() {
    if (width >= 100) {
      clearInterval(id);
      elem.style.width = "100%";  // Ensure width is set to 100% explicitly
      progressLabel.textContent = "100%";

      // Delay for a few seconds before hiding
      setTimeout(function() {
        backdrop.style.display = "none";
      }, 2000); // Adjust delay in milliseconds (2 seconds here)
    } else {
      width++;
      elem.style.width = width + "%";
      progressLabel.textContent = width + "%";
    }
  }
};
</script>

</body>

</html>