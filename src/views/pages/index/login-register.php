<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="author" content="SemiColonWeb"/>

    <!-- Stylesheets
    ============================================= -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&display=swap"
          rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="../src/views/pages/index/css/bootstrap.css" type="text/css"/>
    <link rel="stylesheet" href="../src/views/pages/index/style.css" type="text/css"/>
    <link rel="stylesheet" href="../src/views/pages/index/css/dark.css" type="text/css"/>
    <link rel="stylesheet" href="../src/views/pages/index/css/font-icons.css" type="text/css"/>
    <link rel="stylesheet" href="../src/views/pages/index/css/animate.css" type="text/css"/>
    <link rel="stylesheet" href="../src/views/pages/index/css/magnific-popup.css" type="text/css"/>

    <link rel="stylesheet" href="../src/views/pages/index/css/custom.css" type="text/css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <!-- Document Title
    ============================================= -->
    <title>Login- Mini Shop- Sell everything you need!</title>

</head>

<body class="stretched">

<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="clearfix">

    <!-- Header
    ============================================= -->
    <header id="header" class="full-header">
        <div id="header-wrap">
            <div class="container">
                <div class="header-row">

                    <!-- Logo
                    ============================================= -->
                    <div id="logo">
                        <a href="<?php echo \MVC\controllers\UrlControllers::url(); ?>" class="standard-logo"
                           data-dark-logo="../src/views/pages/index/images/logo-dark.png"><img
                                    src="../src/views/pages/index/images/logo.png" alt="Canvas Logo"></a>
                        <a href="<?php echo \MVC\controllers\UrlControllers::url(); ?>" class="retina-logo"
                           data-dark-logo="../src/views/pages/index/images/logo-dark@2x.png"><img
                                    src="../src/views/pages/index/images/logo@2x.png" alt="Canvas Logo"></a>
                    </div><!-- #logo end -->

                    <div class="header-misc">

                        <!-- Top Search
                        ============================================= -->
                        <div id="top-search" class="header-misc-icon">
                            <a href="#" id="top-search-trigger"><i class="icon-line-search"></i><i
                                        class="icon-line-cross"></i></a>
                        </div><!-- #top-search end -->

                        <!-- Top Cart
                        ============================================= -->
                        <div id="top-cart" class="header-misc-icon d-none d-sm-block">
                            <a href="#" id="top-cart-trigger"><i class="icon-line-bag"></i><span
                                        class="top-cart-number">5</span></a>
                            <div class="top-cart-content">
                                <div class="top-cart-title">
                                    <h4>Shopping Cart</h4>
                                </div>
                                <div class="top-cart-items">
                                    <div class="top-cart-item">
                                        <div class="top-cart-item-image">
                                            <a href="#"><img src="../src/views/pages/index/images/shop/small/1.jpg"
                                                             alt="Blue Round-Neck Tshirt"/></a>
                                        </div>
                                        <div class="top-cart-item-desc">
                                            <div class="top-cart-item-desc-title">
                                                <a href="#">Blue Round-Neck Tshirt with a Button</a>
                                                <span class="top-cart-item-price d-block">$19.99</span>
                                            </div>
                                            <div class="top-cart-item-quantity">x 2</div>
                                        </div>
                                    </div>
                                    <div class="top-cart-item">
                                        <div class="top-cart-item-image">
                                            <a href="#"><img src="../src/views/pages/index/images/shop/small/6.jpg"
                                                             alt="Light Blue Denim Dress"/></a>
                                        </div>
                                        <div class="top-cart-item-desc">
                                            <div class="top-cart-item-desc-title">
                                                <a href="#">Light Blue Denim Dress</a>
                                                <span class="top-cart-item-price d-block">$24.99</span>
                                            </div>
                                            <div class="top-cart-item-quantity">x 3</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="top-cart-action">
                                    <span class="top-checkout-price">$114.95</span>
                                    <a href="#" class="button button-3d button-small m-0">View Cart</a>
                                </div>
                            </div>
                        </div><!-- #top-cart end -->

                    </div>

                    <div id="primary-menu-trigger">
                        <svg class="svg-trigger" viewBox="0 0 100 100">
                            <path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path>
                            <path d="m 30,50 h 40"></path>
                            <path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path>
                        </svg>
                    </div>

                    <!-- Primary Navigation
                    ============================================= -->
                    <nav class="primary-menu">

                        <ul class="menu-container">
                            <li class="menu-item">
                                <a class="menu-link" href="index.html">
                                    <div>Home</div>
                                </a>
                                <ul class="sub-menu-container">
                                    <li class="menu-item">
                                        <a class="menu-link" href="intro.html#section-niche">
                                            <div>Niche Demos</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a class="menu-link" href="intro.html#section-onepage">
                                            <div>One-Page Demos</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a class="menu-link" href="index-corporate.html">
                                            <div>Home - Corporate</div>
                                        </a>
                                        <ul class="sub-menu-container">
                                            <li class="menu-item">
                                                <a class="menu-link" href="index-corporate.html">
                                                    <div>Corporate - Layout 1</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item">
                                        <a class="menu-link" href="index-portfolio.html">
                                            <div>Home - Portfolio</div>
                                        </a>
                                        <ul class="sub-menu-container">
                                            <li class="menu-item">
                                                <a class="menu-link" href="index-portfolio.html">
                                                    <div>Portfolio - Layout 1</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item">
                                        <a class="menu-link" href="index-blog.html">
                                            <div>Home - Blog</div>
                                        </a>
                                        <ul class="sub-menu-container">
                                            <li class="menu-item">
                                                <a class="menu-link" href="index-blog.html">
                                                    <div>Blog - Layout 1</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item">
                                        <a class="menu-link" href="index-shop.html">
                                            <div>Home - Shop</div>
                                        </a>
                                        <ul class="sub-menu-container">
                                            <li class="menu-item">
                                                <a class="menu-link" href="index-shop.html">
                                                    <div>Shop - Layout 1</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item">
                                        <a class="menu-link" href="index-magazine.html">
                                            <div>Home - Magazine</div>
                                        </a>
                                        <ul class="sub-menu-container">
                                            <li class="menu-item">
                                                <a class="menu-link" href="index-magazine.html">
                                                    <div>Magazine - Layout 1</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item">
                                        <a class="menu-link" href="landing.html">
                                            <div>Home - Landing Page</div>
                                        </a>
                                        <ul class="sub-menu-container">
                                            <li class="menu-item">
                                                <a class="menu-link" href="landing.html">
                                                    <div>Landing Page - Layout 1</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item">
                                        <a class="menu-link" href="index-fullscreen-image.html">
                                            <div>Home - Full Screen</div>
                                        </a>
                                        <ul class="sub-menu-container">
                                            <li class="menu-item">
                                                <a class="menu-link" href="index-fullscreen-image.html">
                                                    <div>Full Screen - Image</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item">
                                        <a class="menu-link" href="index-onepage.html">
                                            <div>Home - One Page</div>
                                        </a>
                                        <ul class="sub-menu-container">
                                            <li class="menu-item">
                                                <a class="menu-link" href="index-onepage.html">
                                                    <div>One Page - Default</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item mega-menu mega-menu-small">
                                        <a class="menu-link" href="#">
                                            <div>Extras</div>
                                        </a>
                                        <div class="mega-menu-content">
                                            <div class="row mx-0">
                                                <ul class="sub-menu-container mega-menu-column col">
                                                    <li class="menu-item">
                                                        <a class="menu-link" href="index-wedding.html">
                                                            <div>Wedding</div>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <ul class="sub-menu-container mega-menu-column col">
                                                    <li class="menu-item">
                                                        <a class="menu-link" href="index-parallax.html">
                                                            <div>Parallax</div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link" href="#">
                                    <div>Features</div>
                                </a>
                                <ul class="sub-menu-container">
                                    <li class="menu-item">
                                        <a class="menu-link" href="#">
                                            <div><i class="icon-stack"></i>Sliders</div>
                                        </a>
                                        <ul class="sub-menu-container">
                                            <li class="menu-item">
                                                <a class="menu-link" href="slider-revolution.html">
                                                    <div>Revolution Slider</div>
                                                </a>
                                                <ul class="sub-menu-container">
                                                    <li class="menu-item">
                                                        <a class="menu-link" href="rs-demos.html">
                                                            <div>Premium Templates</div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="menu-item">
                                                <a class="menu-link" href="slider-canvas.html">
                                                    <div>Canvas Slider</div>
                                                </a>
                                                <ul class="sub-menu-container">
                                                    <li class="menu-item">
                                                        <a class="menu-link" href="slider-canvas.html">
                                                            <div>Full Width</div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="menu-item">
                                                <a class="menu-link" href="slider-flex.html">
                                                    <div>Flex Slider</div>
                                                </a>
                                                <ul class="sub-menu-container">
                                                    <li class="menu-item">
                                                        <a class="menu-link" href="slider-flex.html">
                                                            <div>Default Layout</div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="menu-item">
                                                <a class="menu-link" href="slider-owl.html">
                                                    <div>Owl Slider</div>
                                                </a>
                                                <ul class="sub-menu-container">
                                                    <li class="menu-item">
                                                        <a class="menu-link" href="slider-owl-full.html">
                                                            <div>Full Width</div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="menu-item">
                                                <a class="menu-link" href="static-parallax.html">
                                                    <div>Static Media</div>
                                                </a>
                                                <ul class="sub-menu-container">
                                                    <li class="menu-item">
                                                        <a class="menu-link" href="static-parallax.html">
                                                            <div>Static - Parallax</div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item">
                                        <a class="menu-link" href="#">
                                            <div><i class="icon-umbrella"></i>Headers</div>
                                        </a>
                                        <ul class="sub-menu-container">
                                            <li class="menu-item">
                                                <a class="menu-link" href="header-semi-transparent.html">
                                                    <div>Semi Transparent</div>
                                                </a>
                                                <ul class="sub-menu-container">
                                                    <li class="menu-item">
                                                        <a class="menu-link" href="header-semi-transparent.html">
                                                            <div>Light Version</div>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a class="menu-link" href="header-semi-transparent-dark.html">
                                                            <div>Dark Version</div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="menu-item">
                                                <a class="menu-link" href="header-side-left.html">
                                                    <div>Left Side Header</div>
                                                </a>
                                                <ul class="sub-menu-container">
                                                    <li class="menu-item">
                                                        <a class="menu-link" href="header-side-left.html">
                                                            <div>Fixed Position</div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="menu-item">
                                                <a class="menu-link" href="header-side-right.html">
                                                    <div>Right Side Header</div>
                                                </a>
                                                <ul class="sub-menu-container">
                                                    <li class="menu-item">
                                                        <a class="menu-link" href="header-side-right.html">
                                                            <div>Fixed Position</div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="menu-item">
                                                <a class="menu-link" href="header-floating.html">
                                                    <div>Floating Version</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item mega-menu mega-menu-small">
                                        <a class="menu-link" href="#">
                                            <div><i class="icon-align-justify2"></i>Menu Styles</div>
                                        </a>
                                        <div class="mega-menu-content">
                                            <div class="row mx-0">
                                                <ul class="sub-menu-container mega-menu-column col">
                                                    <li class="menu-item">
                                                        <a class="menu-link" href="header-light.html">
                                                            <div>Default Layout</div>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <ul class="sub-menu-container mega-menu-column col">
                                                    <li class="menu-item">
                                                        <a class="menu-link" href="menu-6.html">
                                                            <div>Scaling Border</div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="menu-item">
                                        <a class="menu-link" href="mega-menu.html">
                                            <div><i class="icon-line-columns"></i>Mega Menu</div>
                                        </a>
                                        <ul class="sub-menu-container">
                                            <li class="menu-item">
                                                <a class="menu-link" href="mega-menu.html">
                                                    <div>Widgetized</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item">
                                        <a class="menu-link" href="forms.html">
                                            <div><i class="icon-wpforms"></i>Forms</div>
                                        </a>
                                    </li>
                                    <li class="menu-item mega-menu mega-menu-small">
                                        <a class="menu-link" href="widgets.html">
                                            <div><i class="icon-gift"></i>Widgets</div>
                                        </a>
                                        <div class="mega-menu-content">
                                            <div class="row mx-0">
                                                <ul class="sub-menu-container mega-menu-column col">
                                                    <li class="menu-item">
                                                        <a class="menu-link" href="widgets.html">
                                                            <div>Links</div>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <ul class="sub-menu-container mega-menu-column col">
                                                    <li class="menu-item">
                                                        <a class="menu-link" href="widgets.html">
                                                            <div>Carousel</div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="menu-item mega-menu mega-menu-small">
                                        <a class="menu-link" href="#">
                                            <div><i class="icon-ok-sign"></i>Page Titles</div>
                                        </a>
                                        <div class="mega-menu-content">
                                            <div class="row mx-0">
                                                <ul class="sub-menu-container mega-menu-column col-5">
                                                    <li class="menu-item">
                                                        <a class="menu-link" href="page.html">
                                                            <div>Left Align</div>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <ul class="sub-menu-container mega-menu-column col-7">
                                                    <li class="menu-item">
                                                        <a class="menu-link" href="page-title-parallax.html">
                                                            <div>Parallax - Default</div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="menu-item">
                                        <a class="menu-link" href="side-panel.html">
                                            <div><i class="icon-line-layout"></i>Side Panel</div>
                                        </a>
                                        <ul class="sub-menu-container">
                                            <li class="menu-item">
                                                <a class="menu-link" href="side-panel-left-overlay.html">
                                                    <div>Left Overlay</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item">
                                        <a class="menu-link" href="modal-onload.html">
                                            <div><i class="icon-line-expand"></i>Modal OnLoad</div>
                                        </a>
                                        <ul class="sub-menu-container">
                                            <li class="menu-item">
                                                <a class="menu-link" href="modal-onload.html">
                                                    <div>Default Layout</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item mega-menu mega-menu-small">
                                        <a class="menu-link" href="#footer" data-scrollto="#footer">
                                            <div><i class="icon-th"></i>Footers</div>
                                        </a>
                                        <div class="mega-menu-content">
                                            <div class="row mx-0">
                                                <ul class="sub-menu-container mega-menu-column col">
                                                    <li class="menu-item">
                                                        <a class="menu-link" href="sticky-footer.html">
                                                            <div>Sticky</div>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <ul class="sub-menu-container mega-menu-column col">
                                                    <li class="menu-item">
                                                        <a class="menu-link" href="footer-3.html#footer">
                                                            <div>Layout 3</div>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <ul class="sub-menu-container mega-menu-column col">
                                                    <li class="menu-item">
                                                        <a class="menu-link" href="footer-6.html#footer">
                                                            <div>Layout 6</div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item mega-menu">
                                <a class="menu-link" href="#">
                                    <div>Pages</div>
                                </a>
                                <div class="mega-menu-content mega-menu-style-2">
                                    <div class="container">
                                        <div class="row">
                                            <ul class="sub-menu-container mega-menu-column col-lg-3">
                                                <li class="menu-item mega-menu-title">
                                                    <a class="menu-link" href="#">
                                                        <div>Introductory</div>
                                                    </a>
                                                    <ul class="sub-menu-container">
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="about.html">
                                                                <div>About Us</div>
                                                            </a>
                                                            <ul class="sub-menu-container mega-menu-dropdown">
                                                                <li class="menu-item">
                                                                    <a class="menu-link" href="about.html">
                                                                        <div>Main Layout</div>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="gdpr.html">
                                                                <div>GDPR Compliance</div>
                                                            </a>
                                                            <ul class="sub-menu-container mega-menu-dropdown">
                                                                <li class="menu-item">
                                                                    <a class="menu-link" href="gdpr.html">
                                                                        <div>Default</div>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="jobs.html">
                                                                <div>Careers</div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                            <ul class="sub-menu-container mega-menu-column col-lg-3">
                                                <li class="menu-item mega-menu-title">
                                                    <a class="menu-link" href="#">
                                                        <div>Utility &amp; Specials</div>
                                                    </a>
                                                    <ul class="sub-menu-container">
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="services.html">
                                                                <div><i class="icon-star-of-life"></i>Services Pages
                                                                </div>
                                                            </a>
                                                            <ul class="sub-menu-container mega-menu-dropdown">
                                                                <li class="menu-item">
                                                                    <a class="menu-link" href="services.html">
                                                                        <div>Layout 1</div>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="#">
                                                                <div><i class="icon-calendar3"></i>Events</div>
                                                            </a>
                                                            <ul class="sub-menu-container mega-menu-dropdown">
                                                                <li class="menu-item">
                                                                    <a class="menu-link" href="events-list.html">
                                                                        <div>Events List</div>
                                                                    </a>
                                                                    <ul class="sub-menu-container mega-menu-dropdown">
                                                                        <li class="menu-item">
                                                                            <a class="menu-link"
                                                                               href="events-list.html">
                                                                                <div>Right Sidebar</div>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a class="menu-link" href="event-single.html">
                                                                        <div>Single Event</div>
                                                                    </a>
                                                                    <ul class="sub-menu-container mega-menu-dropdown">
                                                                        <li class="menu-item">
                                                                            <a class="menu-link"
                                                                               href="event-single-right-sidebar.html">
                                                                                <div>Right Sidebar</div>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a class="menu-link"
                                                                       href="event-single-full-width-image.html">
                                                                        <div>Single Event - Full</div>
                                                                    </a>
                                                                    <ul class="sub-menu-container mega-menu-dropdown">
                                                                        <li class="menu-item">
                                                                            <a class="menu-link"
                                                                               href="event-single-full-width-image.html">
                                                                                <div>Parallax Image</div>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a class="menu-link" href="events-calendar.html">
                                                                        <div>Full Width Calendar</div>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="contact.html">
                                                                <div><i class="icon-envelope"></i>Contact Pages</div>
                                                            </a>
                                                            <ul class="sub-menu-container mega-menu-dropdown">
                                                                <li class="menu-item">
                                                                    <a class="menu-link" href="contact.html">Main
                                                                        Layout</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="faqs.html">
                                                                <div><i class="icon-question-circle"></i>FAQs Pages
                                                                </div>
                                                            </a>
                                                            <ul class="sub-menu-container mega-menu-dropdown">
                                                                <li class="menu-item">
                                                                    <a class="menu-link" href="faqs.html">
                                                                        <div>Layout 1</div>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                            <ul class="sub-menu-container mega-menu-column col-lg-3">
                                                <li class="menu-item mega-menu-title">
                                                    <a class="menu-link" href="#">
                                                        <div>Layouts &amp; PageNavs</div>
                                                    </a>
                                                    <ul class="sub-menu-container">
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="full-width.html">
                                                                <div>Full Width</div>
                                                            </a>
                                                            <ul class="sub-menu-container mega-menu-dropdown">
                                                                <li class="menu-item">
                                                                    <a class="menu-link" href="full-width.html">
                                                                        <div>Default Width</div>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="#">
                                                                <div>Sidebars</div>
                                                            </a>
                                                            <ul class="sub-menu-container mega-menu-dropdown">
                                                                <li class="menu-item">
                                                                    <a class="menu-link" href="right-sidebar.html">
                                                                        <div>Right Sidebar</div>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="page-submenu.html">
                                                                <div>Page Submenu</div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                            <ul class="sub-menu-container mega-menu-column col-lg-3">
                                                <li class="menu-item mega-menu-title">
                                                    <a class="menu-link" href="#">
                                                        <div>Miscellaneous</div>
                                                    </a>
                                                    <ul class="sub-menu-container">
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="login-register.html">
                                                                <div>Login/Register</div>
                                                            </a>
                                                            <ul class="sub-menu-container mega-menu-dropdown">
                                                                <li class="menu-item">
                                                                    <a class="menu-link" href="login-register.html">
                                                                        <div>Default Layout</div>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="coming-soon.html">
                                                                <div>Coming Soon</div>
                                                            </a>
                                                            <ul class="sub-menu-container mega-menu-dropdown">
                                                                <li class="menu-item">
                                                                    <a class="menu-link" href="coming-soon.html">
                                                                        <div>Default Layout</div>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="404.html">
                                                                <div>404 Pages</div>
                                                            </a>
                                                            <ul class="sub-menu-container mega-menu-dropdown">
                                                                <li class="menu-item">
                                                                    <a class="menu-link" href="404.html">
                                                                        <div>Default Layout</div>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="#">
                                                                <div>Extras</div>
                                                            </a>
                                                            <ul class="sub-menu-container mega-menu-dropdown">
                                                                <li class="menu-item">
                                                                    <a class="menu-link" href="blank-page.html">
                                                                        <div>Blank Page</div>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="menu-item mega-menu">
                                <a class="menu-link" href="#">
                                    <div>Portfolio</div>
                                </a>
                                <div class="mega-menu-content mega-menu-style-2">
                                    <div class="container">
                                        <div class="row">
                                            <ul class="sub-menu-container mega-menu-column col">
                                                <li class="menu-item mega-menu-title">
                                                    <a class="menu-link" href="#">
                                                        <div>Grids</div>
                                                    </a>
                                                    <ul class="sub-menu-container">
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="portfolio-1.html">
                                                                <div>1 Column</div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                            <ul class="sub-menu-container mega-menu-column col">
                                                <li class="menu-item mega-menu-title">
                                                    <a class="menu-link" href="#">
                                                        <div>Masonry</div>
                                                    </a>
                                                    <ul class="sub-menu-container">
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="portfolio-mixed-masonry.html">
                                                                <div>Mixed Columns</div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                            <ul class="sub-menu-container mega-menu-column col">
                                                <li class="menu-item mega-menu-title">
                                                    <a class="menu-link" href="#">
                                                        <div>Loading Styles</div>
                                                    </a>
                                                    <ul class="sub-menu-container">
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="portfolio.html">
                                                                <div>jQuery Filter</div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                            <ul class="sub-menu-container mega-menu-column col">
                                                <li class="menu-item mega-menu-title">
                                                    <a class="menu-link" href="#">
                                                        <div>Single Project</div>
                                                    </a>
                                                    <ul class="sub-menu-container">
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="portfolio-single-extended.html">
                                                                <div>Extended Item</div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                            <ul class="sub-menu-container mega-menu-column col">
                                                <li class="menu-item mega-menu-title">
                                                    <a class="menu-link" href="#">
                                                        <div>Layouts</div>
                                                    </a>
                                                    <ul class="sub-menu-container">
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="portfolio-nomargin.html">
                                                                <div>Default</div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="menu-item mega-menu">
                                <a class="menu-link" href="#">
                                    <div>Blog</div>
                                </a>
                                <div class="mega-menu-content mega-menu-style-2">
                                    <div class="container">
                                        <div class="row">
                                            <ul class="sub-menu-container mega-menu-column col-lg-3">
                                                <li class="menu-item mega-menu-title">
                                                    <a class="menu-link" href="#">
                                                        <div>Default</div>
                                                    </a>
                                                    <ul class="sub-menu-container">
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="blog.html">
                                                                <div>Right Sidebar</div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item mega-menu-title">
                                                    <a class="menu-link" href="#">
                                                        <div>Timeline</div>
                                                    </a>
                                                    <ul class="sub-menu-container">
                                                        <li class="menu-item">
                                                            <a class="menu-link"
                                                               href="blog-timeline-right-sidebar.html">
                                                                <div>Right Sidebar</div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                            <ul class="sub-menu-container mega-menu-column col-lg-3">
                                                <li class="menu-item mega-menu-title">
                                                    <a class="menu-link" href="#">
                                                        <div>Masonry</div>
                                                    </a>
                                                    <ul class="sub-menu-container">
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="blog-masonry.html">
                                                                <div>4 Columns</div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item mega-menu-title">
                                                    <a class="menu-link" href="#">
                                                        <div>Grid</div>
                                                    </a>
                                                    <ul class="sub-menu-container">
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="blog-grid.html">
                                                                <div>4 Columns</div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                            <ul class="sub-menu-container mega-menu-column col-lg-3">
                                                <li class="menu-item mega-menu-title">
                                                    <a class="menu-link" href="#">
                                                        <div>Small Thumbs</div>
                                                    </a>
                                                    <ul class="sub-menu-container">
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="blog-small-left-sidebar.html">
                                                                <div>Left Sidebar</div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item mega-menu-title">
                                                    <a class="menu-link" href="#">
                                                        <div>Item Splitting</div>
                                                    </a>
                                                    <ul class="sub-menu-container">
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="blog-grid.html">
                                                                <div>Pagination</div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                            <ul class="sub-menu-container mega-menu-column col-lg-3">
                                                <li class="menu-item mega-menu-title">
                                                    <a class="menu-link" href="#">
                                                        <div>Single</div>
                                                    </a>
                                                    <ul class="sub-menu-container">
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="blog-single.html">
                                                                <div>Default Layout</div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item mega-menu-title">
                                                    <a class="menu-link" href="#">
                                                        <div>Comments Module</div>
                                                    </a>
                                                    <ul class="sub-menu-container">
                                                        <li class="menu-item">
                                                            <a class="menu-link"
                                                               href="blog-single-left-sidebar.html#comments">
                                                                <div>Facebook Comments</div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link" href="shop.html">
                                    <div>Shop</div>
                                </a>
                                <ul class="sub-menu-container">
                                    <li class="menu-item">
                                        <a class="menu-link" href="shop.html">
                                            <div>4 Columns</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a class="menu-link" href="shop-3.html">
                                            <div>3 Columns</div>
                                        </a>
                                        <ul class="sub-menu-container">
                                            <li class="menu-item">
                                                <a class="menu-link" href="shop-3.html">
                                                    <div>Full Width</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item">
                                        <a class="menu-link" href="shop-2.html">
                                            <div>2 Columns</div>
                                        </a>
                                        <ul class="sub-menu-container">
                                            <li class="menu-item">
                                                <a class="menu-link" href="shop-2-right-sidebar.html">
                                                    <div>Right Sidebar</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item">
                                        <a class="menu-link" href="shop-1.html">
                                            <div>1 Columns</div>
                                        </a>
                                        <ul class="sub-menu-container">
                                            <li class="menu-item">
                                                <a class="menu-link" href="shop-1.html">
                                                    <div>Full Width</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item">
                                        <a class="menu-link" href="shop-category-parallax.html">
                                            <div>Categories - Parallax</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a class="menu-link" href="shop-combination-filter.html">
                                            <div>Combination Filter</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a class="menu-link" href="shop-single.html">
                                            <div>Single Product</div>
                                        </a>
                                        <ul class="sub-menu-container">
                                            <li class="menu-item">
                                                <a class="menu-link" href="shop-single.html">
                                                    <div>Full Width</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item">
                                        <a class="menu-link" href="cart.html">
                                            <div>Cart</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item mega-menu">
                                <a class="menu-link" href="#">
                                    <div>Shortcodes</div>
                                </a>
                                <div class="mega-menu-content">
                                    <div class="container">
                                        <div class="row">
                                            <ul class="sub-menu-container mega-menu-column col">
                                                <li class="menu-item">
                                                    <a class="menu-link" href="animations.html">
                                                        <div><i class="icon-magic"></i>Animations</div>
                                                    </a>
                                                </li>
                                            </ul>
                                            <ul class="sub-menu-container mega-menu-column col">
                                                <li class="menu-item">
                                                    <a class="menu-link" href="dividers.html">
                                                        <div><i class="icon-indent-right"></i>Dividers</div>
                                                    </a>
                                                </li>
                                            </ul>
                                            <ul class="sub-menu-container mega-menu-column col">
                                                <li class="menu-item">
                                                    <a class="menu-link" href="lists-cards.html">
                                                        <div><i class="icon-th-list"></i>Lists &amp; Cards</div>
                                                    </a>
                                                </li>
                                            </ul>
                                            <ul class="sub-menu-container mega-menu-column col">
                                                <li class="menu-item">
                                                    <a class="menu-link" href="pricing.html">
                                                        <div><i class="icon-dollar"></i>Pricing Boxes</div>
                                                    </a>
                                                </li>
                                            </ul>
                                            <ul class="sub-menu-container mega-menu-column col">
                                                <li class="menu-item">
                                                    <a class="menu-link" href="style-boxes.html">
                                                        <div><i class="icon-exclamation-sign"></i>Alert Boxes</div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>

                    </nav><!-- #primary-menu end -->

                    <form class="top-search-form" action="search.html" method="get">
                        <input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter.."
                               autocomplete="off">
                    </form>

                </div>
            </div>
        </div>
        <div class="header-wrap-clone"></div>
    </header><!-- #header end -->

    <!-- Page Title
    ============================================= -->
    <section id="page-title">

        <div class="container clearfix">
            <h1>My Account</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active" aria-current="page">Login</li>
            </ol>
        </div>

    </section><!-- #page-title end -->

    <!-- Content
    ============================================= -->
    <section id="content">
        <div class="content-wrap">
            <div class="container clearfix">
                <div class="accordion accordion-lg mx-auto mb-0 clearfix" style="max-width: 550px;">
                    <?php if ((empty($_POST) == true) || (!empty($_POST['register-form-submit']) && $_POST['register-form-submit'] !== "register") || (!empty($_POST['login-form-submit']) && $_POST['login-form-submit'] !== "login")) { ?>
                        <?php if (\MVC\libs\UserAccess::isLogin() == true) { ?>
                            <div class="accordion-header">
                                <div class="accordion-icon">
                                    <i class="accordion-closed icon-lock3"></i>
                                    <i class="accordion-open icon-unlock"></i>
                                </div>
                                <div class="accordion-title">
                                    <?php {
                                        echo "Welcome {$_SESSION['username']}, ";
                                    } ?>
                                </div>
                            </div>
                            <div class="col-12 form-group">
                                <a href="<?php echo \MVC\controllers\UrlControllers::url("shop/login/logout"); ?>"
                                   class="float-right"><i class="icon-line2-logout"></i> Logout</a>
                            </div>

                        <?php } else {
                            ?>
                            <div class="accordion-header">
                                <div class="accordion-icon">
                                    <i class="accordion-closed icon-lock3"></i>
                                    <i class="accordion-open icon-unlock"></i>
                                </div>
                                <div class="accordion-title">
                                    Login to your Account
                                </div>
                            </div>
                            <div class="accordion-content clearfix">
                                <form id="login-form" name="login-form" class="row mb-0" action="" method="post">
                                    <div class="col-12 form-group">
                                        <label for="login-form-username">Username:</label>
                                        <input type="text" id="login-form-username" name="login-form-username" value=""
                                               class="form-control"/>
                                    </div>

                                    <div class="col-12 form-group">
                                        <label for="login-form-password">Password:</label>
                                        <input type="password" id="login-form-password" name="login-form-password"
                                               value=""
                                               class="form-control"/>
                                    </div>

                                    <div class="col-12 form-group">
                                        <input type="checkbox" id="login-form-remember" name="rememberme"
                                               class="float-center" checked>
                                        <label class="form-check-label" id="login-form-remember">Remember me</label>
                                    </div>

                                    <div class="col-12 form-group">
                                        <button class="button button-3d button-black m-0" id="login-form-submit"
                                                name="login-form-submit" value="login">Login
                                        </button>
                                        <a href="" class="float-right">Forgot Password?</a>
                                    </div>
                                </form>
                            </div>

                            <div class="accordion-header">
                                <div class="accordion-icon">
                                    <i class="accordion-closed icon-user4"></i>
                                    <i class="accordion-open icon-ok-sign"></i>
                                </div>
                                <div class="accordion-title">
                                    New Signup? Register for an Account
                                </div>
                            </div>
                            <div class="accordion-content clearfix">
                                <form id="register-form" name="register-form" class="row mb-0" action="" method="post">
                                    <div class="col-12 form-group">
                                        <label for="register-form-name">Name:</label>
                                        <input type="text" id="register-form-name" name="register-form-name" value=""
                                               class="form-control"/>
                                    </div>

                                    <div class="col-12 form-group">
                                        <label for="register-form-email">Email Address:</label>
                                        <input type="text" id="register-form-email" name="register-form-email" value=""
                                               class="form-control"/>
                                    </div>

                                    <div class="col-12 form-group">
                                        <label for="register-form-username">Choose a Username:</label>
                                        <input type="text" id="register-form-username" name="register-form-username"
                                               value=""
                                               class="form-control"/>
                                    </div>

                                    <div class="col-12 form-group">
                                        <label for="register-form-phone">Phone:</label>
                                        <input type="text" id="register-form-phone" name="register-form-phone" value=""
                                               class="form-control"/>
                                    </div>

                                    <div class="col-12 form-group">
                                        <label for="register-form-password">Choose Password:</label>
                                        <input type="password" id="register-form-password" name="register-form-password"
                                               value="" class="form-control"/>
                                    </div>

                                    <div class="col-12 form-group">
                                        <label for="register-form-repassword">Re-enter Password:</label>
                                        <input type="password" id="register-form-repassword"
                                               name="register-form-repassword"
                                               value="" class="form-control"/>
                                    </div>

                                    <div class="col-12 form-group">
                                        <button class="button button-3d button-black m-0" id="register-form-submit"
                                                name="register-form-submit" value="register">Register Now
                                        </button>
                                    </div>
                                </form>
                            </div>
                        <?php } ?>
                    <?php } else {
                        if (!empty($data[0]['errors'])) {
                            ?>
                            <div class="accordion-header">
                                <div class="accordion-icon">
                                    <i class="accordion-closed icon-warning-sign"></i>
                                    <i class="accordion-open icon-warning-sign"></i>
                                </div>
                                <div class="accordion-title">
                                    Errors: <br>
                                </div>
                            </div>
                            <div class="accordion-content clearfix">
                                <div class="col-12 form-group">
                                    <?= implode("<br>", $data[0]['errors']); ?>
                                    <br>
                                    <br>
                                    <a href="javascript:history.go(-1)" class="btn btn-warning btn-lg">Back</a>
                                </div>
                            </div>
                            <?php
                        } else {
                            if (!empty($_POST['register-form-submit']) && $_POST['register-form-submit'] == "register") {
                                ?>
                                <div class="col-sm-16 col-lg-14">
                                    <div class="feature-box fbox-rounded fbox-effect">
                                        <div class="fbox-icon">
                                            <a href="#"><i class="icon-share i-alt"></i></a>
                                        </div>
                                        <div class="fbox-content">
                                            <h3>Congratulations</h3>
                                            <p>Your account has been successfully created.</p>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="fbox-content">
                                        <a href="<?php echo \MVC\controllers\UrlControllers::url("shop/login"); ?>">
                                            <button type="button" class="btn btn-success">Go to Login.</button>
                                        </a>
                                    </div>
                                </div>
                                <?php
                            } elseif (!empty($_POST['login-form-submit']) && $_POST['login-form-submit'] == "login") {
                                if (\MVC\libs\UserAccess::isLogin()) {
                                    //header("Location: " . \MVC\controllers\UrlControllers::url("homepage"));
                                    if (headers_sent()) {
                                        die("Redirect failed. Please click on <a href='" . \MVC\controllers\UrlControllers::url("homepage") . "'>this link.</a> <meta http-equiv=\"Refresh\" content=\"1; url=" . \MVC\controllers\UrlControllers::url("homepage") . "\">");
                                    } else {
                                        exit(header("Location: " . \MVC\controllers\UrlControllers::url("homepage")));
                                    }
                                }
                            }
                        }

                    }
                    ?>
                </div>
            </div>
        </div>
    </section><!-- #content end -->

    <!-- Footer
    ============================================= -->
    <footer id="footer" class="dark">
        <div class="container">

            <!-- Footer Widgets
            ============================================= -->
            <div class="footer-widgets-wrap">

                <div class="row col-mb-50">
                    <div class="col-lg-8">

                        <div class="row col-mb-50">
                            <div class="col-md-4">

                                <div class="widget clearfix">

                                    <img src="../src/views/pages/index/images/footer-widget-logo.png" alt="Image"
                                         class="footer-logo">

                                    <p>We believe in <strong>cheapest</strong>, <strong>Beautiful</strong> &amp;
                                        <strong>Good price</strong>.</p>

                                    <div style="background: url('../src/views/pages/index/images/world-map.png') no-repeat center center; background-size: 100%;">
                                        <address>
                                            <strong>Headquarters:</strong><br>
                                            Phú Thượng- Tây Hồ- Hà Nội 100000<br>
                                        </address>
                                        <abbr title="Phone Number"><strong>Phone:</strong></abbr> (84) 979 029 556<br>
                                        <abbr title="Fax"><strong>Fax:</strong></abbr> (84) 979 029 556<br>
                                        <abbr title="Email Address"><strong>Email:</strong></abbr>
                                        giaythuytinh176@gmail.com
                                    </div>

                                </div>

                            </div>

                            <div class="col-md-4">

                                <div class="widget widget_links clearfix">

                                    <h4>Blogroll</h4>

                                    <ul>
                                        <li><a href="https://www.youtube.com/" target="_blank">Youtube</a></li>
                                        <li><a href="https://www.w3schools.com/" target="_blank">W3schools</a></li>
                                        <li><a href="https://blog.codegym.vn/" target="_blank">CodeGym Blog</a></li>
                                        <li><a href="http://codegym.vn/" target="_blank">CodeGym- Hệ thống đào tạo lập
                                                trình hiện đại</a></li>
                                    </ul>

                                </div>

                            </div>

                            <div class="col-md-4">

                                <div class="widget clearfix">
                                    <h4>Recent Posts</h4>

                                    <div class="posts-sm row col-mb-30" id="post-list-footer">

                                        <div class="entry col-12">
                                            <div class="grid-inner row">
                                                <div class="col">
                                                    <div class="entry-title">
                                                        <h4>
                                                            <a href="https://blog.codegym.vn/2020/10/12/minh-den-voi-lap-trinh-nhu-the-nao/"
                                                               target="_blank">Mình đến với lập trình như thế nào</a>
                                                        </h4>
                                                    </div>
                                                    <div class="entry-meta">
                                                        <ul>
                                                            <li>12th October 2020</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="entry col-12">
                                            <div class="grid-inner row">
                                                <div class="col">
                                                    <div class="entry-title">
                                                        <h4>
                                                            <a href="https://blog.codegym.vn/2020/10/13/mot-cach-suy-nghi-trong-bai-toan-lap-bang-trong-javascript/"
                                                               target="_blank">Một cách suy nghĩ trong bài toán lập bảng
                                                                trong javascript</a></h4>
                                                    </div>
                                                    <div class="entry-meta">
                                                        <ul>
                                                            <li>13th October 2020</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                    <div class="col-lg-4">

                        <div class="row col-mb-50">
                            <div class="col-md-4 col-lg-12">
                                <div class="widget clearfix" style="margin-bottom: -20px;">

                                    <div class="row">
                                        <div class="col-lg-6 bottommargin-sm">
                                            <div class="counter counter-small"><span data-from="50" data-to="15065421"
                                                                                     data-refresh-interval="80"
                                                                                     data-speed="3000"
                                                                                     data-comma="true"></span></div>
                                            <h5 class="mb-0">Total Unit Sales</h5>
                                        </div>

                                        <div class="col-lg-6 bottommargin-sm">
                                            <div class="counter counter-small"><span data-from="100" data-to="18465"
                                                                                     data-refresh-interval="50"
                                                                                     data-speed="2000"
                                                                                     data-comma="true"></span></div>
                                            <h5 class="mb-0">Clients</h5>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-md-5 col-lg-12">
                                <div class="widget subscribe-widget clearfix">
                                    <h5><strong>Subscribe</strong> to Our Newsletter to get Important News, Amazing
                                        Offers &amp; Inside Scoops:</h5>
                                    <div class="widget-subscribe-form-result"></div>
                                    <form id="widget-subscribe-form" action="include/subscribe.php" method="post"
                                          class="mb-0">
                                        <div class="input-group mx-auto">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="icon-email2"></i></div>
                                            </div>
                                            <input type="email" id="widget-subscribe-form-email"
                                                   name="widget-subscribe-form-email"
                                                   class="form-control required email" placeholder="Enter your Email">
                                            <div class="input-group-append">
                                                <button class="btn btn-success" type="submit">Subscribe</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="col-md-3 col-lg-12">
                                <div class="widget clearfix" style="margin-bottom: -20px;">

                                    <div class="row">
                                        <div class="col-6 col-md-12 col-lg-6 clearfix bottommargin-sm">
                                            <a href="#" class="social-icon si-dark si-colored si-facebook mb-0"
                                               style="margin-right: 10px;">
                                                <i class="icon-facebook"></i>
                                                <i class="icon-facebook"></i>
                                            </a>
                                            <a href="https://www.facebook.com/giaythuytinh176"><small
                                                        style="display: block; margin-top: 3px;"><strong>Like
                                                        us</strong><br>on Facebook</small></a>
                                        </div>
                                        <div class="col-6 col-md-12 col-lg-6 clearfix">
                                            <a href="https://www.facebook.com/giaythuytinh176"
                                               class="social-icon si-dark si-colored si-rss mb-0"
                                               style="margin-right: 10px;">
                                                <i class="icon-rss"></i>
                                                <i class="icon-rss"></i>
                                            </a>
                                            <a href=""><small
                                                        style="display: block; margin-top: 3px;"><strong>Subscribe</strong><br>to
                                                    RSS Feeds</small></a>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div><!-- .footer-widgets-wrap end -->

        </div>

        <!-- Copyrights
        ============================================= -->
        <div id="copyrights">
            <div class="container">

                <div class="row col-mb-30">

                    <div class="col-md-6 text-center text-md-left">
                        Copyrights &copy; 2020 All Rights Reserved by CodeGym Inc.<br>
                        <div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>
                    </div>

                    <div class="col-md-6 text-center text-md-right">
                        <div class="d-flex justify-content-center justify-content-md-end">
                            <a href="https://www.facebook.com/codegym.vn/" target="_blank"
                               class="social-icon si-small si-borderless si-facebook">
                                <i class="icon-facebook"></i>
                                <i class="icon-facebook"></i>
                            </a>
                        </div>

                        <div class="clear"></div>

                        <i class="icon-envelope2"></i> giaythuytinh176@gmail.com <span class="middot">&middot;</span> <i
                                class="icon-headphones"></i> +84-979-029-556 <span class="middot">&middot;</span> <i
                                class="icon-skype2"></i> giaythuytinh176
                    </div>

                </div>

            </div>
        </div><!-- #copyrights end -->
    </footer><!-- #footer end -->

</div><!-- #wrapper end -->

<!-- Go To Top
============================================= -->
<div id="gotoTop" class="icon-angle-up"></div>

<!-- JavaScripts
============================================= -->
<script src="../src/views/pages/index/js/jquery.js"></script>
<script src="../src/views/pages/index/js/plugins.min.js"></script>

<!-- Footer Scripts
============================================= -->
<script src="../src/views/pages/index/js/functions.js"></script>

</body>
</html>