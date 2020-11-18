<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="author" content="SemiColonWeb"/>

    <!-- Stylesheets
    ============================================= -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&display=swap"
          rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="./src/views/pages/index/css/bootstrap.css" type="text/css"/>
    <link rel="stylesheet" href="./src/views/pages/index/style.css" type="text/css"/>
    <link rel="stylesheet" href="./src/views/pages/index/css/dark.css" type="text/css"/>
    <link rel="stylesheet" href="./src/views/pages/index/css/font-icons.css" type="text/css"/>
    <link rel="stylesheet" href="./src/views/pages/index/css/animate.css" type="text/css"/>
    <link rel="stylesheet" href="./src/views/pages/index/css/magnific-popup.css" type="text/css"/>

    <link rel="stylesheet" href="./src/views/pages/index/css/custom.css" type="text/css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <!-- SLIDER REVOLUTION 5.x CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="./src/views/pages/index/include/rs-plugin/css/settings.css"
          media="screen"/>
    <link rel="stylesheet" type="text/css" href="./src/views/pages/index/include/rs-plugin/css/layers.css">
    <link rel="stylesheet" type="text/css" href="./src/views/pages/index/include/rs-plugin/css/navigation.css">

    <!-- Document Title
    ============================================= -->
    <title>Home - Shop | Canvas</title>

    <style>

        .revo-slider-emphasis-text {
            font-size: 58px;
            font-weight: 700;
            letter-spacing: 1px;
            font-family: 'Poppins', sans-serif;
            padding: 15px 20px;
            border-top: 2px solid #FFF;
            border-bottom: 2px solid #FFF;
        }

        .revo-slider-desc-text {
            font-size: 20px;
            font-family: 'Lato', sans-serif;
            width: 650px;
            text-align: center;
            line-height: 1.5;
        }

        .revo-slider-caps-text {
            font-size: 16px;
            font-weight: 400;
            letter-spacing: 3px;
            font-family: 'Poppins', sans-serif;
        }

        .tp-video-play-button {
            display: none !important;
        }

        .tp-caption {
            white-space: nowrap;
        }

    </style>

</head>

<body class="stretched">

<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="clearfix">

    <!-- Top Bar
    ============================================= -->
    <div id="top-bar">
        <div class="container">

            <div class="row justify-content-between align-items-center">
                <div class="col-12 col-md-auto">
                    <p class="mb-0 py-2 text-center text-md-left"><strong>Call:</strong> (84)979-029-556 | <strong>Email:</strong>
                        giaythuytinh176@gmail.com</p>
                </div>

                <div class="col-12 col-md-auto">

                    <!-- Top Links
                    ============================================= -->
                    <div class="top-links on-click">
                        <ul class="top-links-container">
                            <li class="top-links-item"><a href="#">VND</a>
                                <ul class="top-links-sub-menu">
                                    <li class="top-links-item"><a href="#">USD</a></li>
                                    <li class="top-links-item"><a href="#">EUR</a></li>
                                    <li class="top-links-item"><a href="#">AUD</a></li>
                                    <li class="top-links-item"><a href="#">GBP</a></li>
                                </ul>
                            </li>
                            <li class="top-links-item">
                                <a href="<?php \MVC\controllers\UrlControllers::url("lang/{$_SESSION['lang']}") ?>">
                                    <?php
                                    echo $_SESSION['lang'];
                                    ?>
                                </a>
                                <ul class="top-links-sub-menu">
                                    <li class="top-links-item"><a
                                                href="<?php echo \MVC\controllers\UrlControllers::url("lang/french") ?>"><img
                                                    src="./src/views/pages/index/images/icons/flags/french.png"
                                                    alt="French"> FR</a></li>
                                    <li class="top-links-item"><a
                                                href="<?php echo \MVC\controllers\UrlControllers::url("lang/vietnamese") ?>"><img
                                                    src="./src/views/pages/index/images/icons/flags/vietnamese.png"
                                                    alt="Vietnamese"> VI</a></li>
                                    <li class="top-links-item"><a
                                                href="<?php echo \MVC\controllers\UrlControllers::url("lang/english") ?>"><img
                                                    src="./src/views/pages/index/images/icons/flags/english.png"
                                                    alt="English"> EN</a></li>
                                </ul>
                            </li>
                            <?php
                            if (\MVC\libs\UserAccess::isLogin() === false) {
                                ?>
                                <li class="top-links-item"><a
                                            href="<?php echo \MVC\controllers\UrlControllers::url("shop/login"); ?>"><?php echo \MVC\libs\Languages::getLangData("login"); ?></a>
                                    <div class="top-links-section">
                                        <form id="top-login" autocomplete="off"
                                              action="<?php echo \MVC\controllers\UrlControllers::url("shop/login"); ?>"
                                              method="post">
                                            <div class="form-group">
                                                <label><?php echo \MVC\libs\Languages::getLangData("Username"); ?></label>
                                                <input type="text" class="form-control" name="login-form-username"
                                                       placeholder="Username">
                                            </div>
                                            <div class="form-group">
                                                <label><?php echo \MVC\libs\Languages::getLangData("Password"); ?></label>
                                                <input type="password" class="form-control" name="login-form-password"
                                                       placeholder="Password"
                                                       required="">
                                            </div>
                                            <div class="col-12 form-group">
                                                <input type="checkbox" id="form-check-input" name="rememberme"
                                                       class="float-center" checked>
                                                <label class="form-check-label"
                                                       id="form-check-input"><?php echo \MVC\libs\Languages::getLangData("Remember me"); ?></label>
                                            </div>
                                            <div class="col-12 form-group">
                                                <br>
                                                <button class="button button-3d button-black m-0" id="login-form-submit"
                                                        name="login-form-submit"
                                                        value="login"><?php echo \MVC\libs\Languages::getLangData("Login"); ?>
                                                </button>
                                                <a href=""
                                                   class="float-right"><?php echo \MVC\libs\Languages::getLangData("Forgot Password?"); ?></a><br><br>
                                                <a href="<?php echo \MVC\controllers\UrlControllers::url("shop/login"); ?>"
                                                   class="float-right"><?php echo \MVC\libs\Languages::getLangData("Register"); ?></a></a>
                                            </div>
                                        </form>
                                    </div>
                                </li>
                            <?php } else {
                                ?>
                                <li class="top-links-item"><a
                                            href=""><?php echo \MVC\libs\Languages::getLangData("Welcome"); ?> <?php echo $_SESSION['username']; ?>
                                        ,</a>
                                    <ul class="top-links-sub-menu">
                                        <li class="top-links-item"><a href="">1</a></li>
                                        <li class="top-links-item"><a href="">2</a></li>
                                        <li class="top-links-item"><a
                                                    href="<?php echo \MVC\controllers\UrlControllers::url("shop/login/logout"); ?>"><?php echo \MVC\libs\Languages::getLangData("Logout"); ?></a>
                                        </li>
                                    </ul>
                                </li>
                                <?php
                            }
                            ?>
                        </ul>
                    </div><!-- .top-links end -->
                </div>
            </div>

        </div>
    </div><!-- #top-bar end -->

    <!-- Header
    ============================================= -->
    <header id="header">
        <div id="header-wrap">
            <div class="container">
                <div class="header-row">

                    <!-- Logo
                    ============================================= -->
                    <div id="logo">
                        <a href="<?php echo \MVC\controllers\UrlControllers::url(); ?>" class="standard-logo"
                           data-dark-logo="./src/views/pages/index/images/logo-dark.png"><img
                                    src="./src/views/pages/index/images/logo.png" alt="Canvas Logo"></a>
                        <a href="<?php echo \MVC\controllers\UrlControllers::url(); ?>" class="retina-logo"
                           data-dark-logo="./src/views/pages/index/images/logo-dark@2x.png"><img
                                    src="./src/views/pages/index/images/logo@2x.png" alt="Canvas Logo"></a>
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
                                            <a href="#"><img src="./src/views/pages/index/images/shop/small/1.jpg"
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
                                            <a href="#"><img src="./src/views/pages/index/images/shop/small/6.jpg"
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
                            <li class="menu-item current"><a class="menu-link" href="#">
                                    <div><?php echo \MVC\libs\Languages::getLangData("Home"); ?><</div>
                                </a>
                                <ul class="sub-menu-container">
                                    <li class="menu-item"><a class="menu-link" href="index-corporate.html">
                                            <div>Home - Corporate</div>
                                        </a>
                                        <ul class="sub-menu-container">
                                            <li class="menu-item"><a class="menu-link" href="index-corporate.html">
                                                    <div>Corporate - Layout 1</div>
                                                </a></li>
                                            <li class="menu-item"><a class="menu-link" href="index-corporate-2.html">
                                                    <div>Corporate - Layout 2</div>
                                                </a></li>
                                            <li class="menu-item"><a class="menu-link" href="index-corporate-3.html">
                                                    <div>Corporate - Layout 3</div>
                                                </a></li>
                                            <li class="menu-item"><a class="menu-link" href="index-corporate-4.html">
                                                    <div>Corporate - Layout 4</div>
                                                </a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item"><a class="menu-link" href="index-portfolio.html">
                                            <div>Home - Portfolio</div>
                                        </a>
                                        <ul class="sub-menu-container">
                                            <li class="menu-item"><a class="menu-link" href="index-portfolio.html">
                                                    <div>Portfolio - Layout 1</div>
                                                </a></li>
                                            <li class="menu-item"><a class="menu-link" href="index-portfolio-2.html">
                                                    <div>Portfolio - Layout 2</div>
                                                </a></li>
                                            <li class="menu-item"><a class="menu-link" href="index-portfolio-3.html">
                                                    <div>Portfolio - Masonry</div>
                                                </a></li>
                                            <li class="menu-item"><a class="menu-link" href="index-portfolio-4.html">
                                                    <div>Portfolio - AJAX</div>
                                                </a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <!-- Mega Menu
                            ============================================= -->
                            <li class="menu-item mega-menu"><a class="menu-link" href="#">
                                    <div>Men</div>
                                </a>
                                <div class="mega-menu-content mega-menu-style-2">
                                    <div class="container">
                                        <div class="row">
                                            <ul class="sub-menu-container mega-menu-column col-lg-3">
                                                <li class="menu-item mega-menu-title"><a class="menu-link" href="#">
                                                        <div>Footwear</div>
                                                    </a>
                                                    <ul class="sub-menu-container">
                                                        <li class="menu-item"><a class="menu-link" href="#">
                                                                <div>Casual Shoes</div>
                                                            </a></li>
                                                        <li class="menu-item"><a class="menu-link" href="#">
                                                                <div>Formal Shoes</div>
                                                            </a></li>
                                                        <li class="menu-item"><a class="menu-link" href="#">
                                                                <div>Sports shoes</div>
                                                            </a></li>
                                                        <li class="menu-item"><a class="menu-link" href="#">
                                                                <div>Flip Flops</div>
                                                            </a></li>
                                                        <li class="menu-item"><a class="menu-link" href="#">
                                                                <div>Slippers</div>
                                                            </a></li>
                                                        <li class="menu-item"><a class="menu-link" href="#">
                                                                <div>Sports Sandals</div>
                                                            </a></li>
                                                        <li class="menu-item"><a class="menu-link" href="#">
                                                                <div>Party Shoes</div>
                                                            </a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                            <ul class="sub-menu-container mega-menu-column col-lg-3">
                                                <li class="menu-item mega-menu-title"><a class="menu-link" href="#">
                                                        <div>Clothing</div>
                                                    </a>
                                                    <ul class="sub-menu-container">
                                                        <li class="menu-item"><a class="menu-link" href="#">
                                                                <div>Casual Shirts</div>
                                                            </a></li>
                                                        <li class="menu-item"><a class="menu-link" href="#">
                                                                <div>T-Shirts</div>
                                                            </a></li>
                                                        <li class="menu-item"><a class="menu-link" href="#">
                                                                <div>Collared Tees</div>
                                                            </a></li>
                                                        <li class="menu-item"><a class="menu-link" href="#">
                                                                <div>Pants / Trousers</div>
                                                            </a></li>
                                                        <li class="menu-item"><a class="menu-link" href="#">
                                                                <div>Ethnic Wear</div>
                                                            </a></li>
                                                        <li class="menu-item"><a class="menu-link" href="#">
                                                                <div>Jeans</div>
                                                            </a></li>
                                                        <li class="menu-item"><a class="menu-link" href="#">
                                                                <div>Sweamwear</div>
                                                            </a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                            <ul class="sub-menu-container mega-menu-column col-lg-3">
                                                <li class="menu-item mega-menu-title"><a class="menu-link" href="#">
                                                        <div><?php echo \MVC\libs\Languages::getLangData("Accessories"); ?></div>
                                                    </a>
                                                    <ul class="sub-menu-container">
                                                        <li class="menu-item"><a class="menu-link" href="#">
                                                                <div>Bags &amp; Backpacks</div>
                                                            </a></li>
                                                        <li class="menu-item"><a class="menu-link" href="#">
                                                                <div>Watches</div>
                                                            </a></li>
                                                        <li class="menu-item"><a class="menu-link" href="#">
                                                                <div>Sunglasses</div>
                                                            </a></li>
                                                        <li class="menu-item"><a class="menu-link" href="#">
                                                                <div>Wallets</div>
                                                            </a></li>
                                                        <li class="menu-item"><a class="menu-link" href="#">
                                                                <div>Caps &amp; Hats</div>
                                                            </a></li>
                                                        <li class="menu-item"><a class="menu-link" href="#">
                                                                <div>Jewellery</div>
                                                            </a></li>
                                                        <li class="menu-item"><a class="menu-link" href="#">
                                                                <div>Belts, Ties</div>
                                                            </a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                            <ul class="sub-menu-container mega-menu-column col-lg-3">
                                                <li class="menu-item mega-menu-title"><a class="menu-link" href="#">
                                                        <div>New Arrivals</div>
                                                    </a>
                                                    <ul class="sub-menu-container">
                                                        <li class="menu-item"><a class="menu-link" href="#">
                                                                <div>T-Shirts</div>
                                                            </a></li>
                                                        <li class="menu-item"><a class="menu-link" href="#">
                                                                <div>Formal Shoes</div>
                                                            </a></li>
                                                        <li class="menu-item"><a class="menu-link" href="#">
                                                                <div><?php echo \MVC\libs\Languages::getLangData("Accessories"); ?></div>
                                                            </a></li>
                                                        <li class="menu-item"><a class="menu-link" href="#">
                                                                <div>Watches</div>
                                                            </a></li>
                                                        <li class="menu-item"><a class="menu-link" href="#">
                                                                <div>Perfumes</div>
                                                            </a></li>
                                                        <li class="menu-item"><a class="menu-link" href="#">
                                                                <div>Belts, Ties</div>
                                                            </a></li>
                                                        <li class="menu-item"><a class="menu-link" href="#">
                                                                <div>Formal Shirts</div>
                                                            </a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li><!-- .mega-menu end -->
                            <li class="menu-item mega-menu mega-menu-small"><a class="menu-link" href="#">
                                    <div>Women</div>
                                </a>
                                <div class="mega-menu-content mega-menu-style-2">
                                    <div class="container">
                                        <div class="row">
                                            <ul class="sub-menu-container mega-menu-column col-lg-6">
                                                <li class="menu-item mega-menu-title"><a class="menu-link" href="#">
                                                        <div>Footwear</div>
                                                    </a>
                                                    <ul class="sub-menu-container">
                                                        <li class="menu-item"><a class="menu-link" href="#">
                                                                <div>Casual Shoes</div>
                                                            </a></li>
                                                        <li class="menu-item"><a class="menu-link" href="#">
                                                                <div>Formal Shoes</div>
                                                            </a></li>
                                                        <li class="menu-item"><a class="menu-link" href="#">
                                                                <div>Sports shoes</div>
                                                            </a></li>
                                                        <li class="menu-item"><a class="menu-link" href="#">
                                                                <div>Flip Flops</div>
                                                            </a></li>
                                                        <li class="menu-item"><a class="menu-link" href="#">
                                                                <div>Slippers</div>
                                                            </a></li>
                                                        <li class="menu-item"><a class="menu-link" href="#">
                                                                <div>Sports Sandals</div>
                                                            </a></li>
                                                        <li class="menu-item"><a class="menu-link" href="#">
                                                                <div>Party Shoes</div>
                                                            </a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                            <ul class="sub-menu-container mega-menu-column col-lg-6">
                                                <li class="menu-item mega-menu-title"><a class="menu-link" href="#">
                                                        <div>Clothing</div>
                                                    </a>
                                                    <ul class="sub-menu-container">
                                                        <li class="menu-item"><a class="menu-link" href="#">
                                                                <div>Casual Shirts</div>
                                                            </a></li>
                                                        <li class="menu-item"><a class="menu-link" href="#">
                                                                <div>T-Shirts</div>
                                                            </a></li>
                                                        <li class="menu-item"><a class="menu-link" href="#">
                                                                <div>Collared Tees</div>
                                                            </a></li>
                                                        <li class="menu-item"><a class="menu-link" href="#">
                                                                <div>Pants / Trousers</div>
                                                            </a></li>
                                                        <li class="menu-item"><a class="menu-link" href="#">
                                                                <div>Ethnic Wear</div>
                                                            </a></li>
                                                        <li class="menu-item"><a class="menu-link" href="#">
                                                                <div>Jeans</div>
                                                            </a></li>
                                                        <li class="menu-item"><a class="menu-link" href="#">
                                                                <div>Sweamwear</div>
                                                            </a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li><!-- .mega-menu end -->
                            <li class="menu-item"><a class="menu-link" href="#">
                                    <div><?php echo \MVC\libs\Languages::getLangData("Accessories"); ?></div>
                                    <span>Awesome Works</span></a></li>
                            <li class="menu-item"><a class="menu-link" href="#">
                                    <div>Sale</div>
                                    <span>Awesome Works</span></a></li>
                            <li class="menu-item"><a class="menu-link" href="#">
                                    <div>Blog</div>
                                    <span>Latest News</span></a></li>
                            <li class="menu-item"><a class="menu-link" href="#">
                                    <div>Videos</div>
                                    <span>Latest News</span></a></li>
                            <li class="menu-item">
                                <a class="menu-link" href="<?php echo \MVC\controllers\UrlControllers::url() ?>"><div>Shop</div></a>
                                <ul class="sub-menu-container">
                                    <li class="menu-item">
                                        <a class="menu-link" href="<?php echo \MVC\controllers\UrlControllers::url("shop/cart") ?>"><div>Cart</div></a>
                                    </li>
                                    <li class="menu-item">
                                        <a class="menu-link" href="<?php echo \MVC\controllers\UrlControllers::url("shop/checkout") ?>"><div>Checkout</div></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item"><a class="menu-link" href="#">
                                    <div>Contact</div>
                                    <span>Get In Touch</span></a></li>
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

    <section id="slider" class="slider-element slider-parallax revslider-wrap overflow-hidden clearfix">

        <!--
        #################################
            - THEMEPUNCH BANNER -
        #################################
        -->
        <div id="rev_slider_ishop_wrapper" class="rev_slider_wrapper fullwidth-container" data-alias="default-slider"
             style="padding:0px;">
            <!-- START REVOLUTION SLIDER 5.1.4 fullwidth mode -->
            <div id="rev_slider_ishop" class="rev_slider fullwidthbanner" style="display:none;" data-version="5.1.4">
                <ul>    <!-- SLIDE  -->
                    <li data-transition="fade" data-slotamount="1" data-masterspeed="1500" data-delay="5000"
                        data-saveperformance="off" data-title="Latest Collections" style="background-color: #F6F6F6;">
                        <!-- LAYERS -->

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption ltl tp-resizeme revo-slider-caps-text text-uppercase"
                             data-x="100"
                             data-y="50"
                             data-transform_in="x:-200;y:0;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;s:700;e:Power4.easeOutQuad;"
                             data-speed="400"
                             data-start="1000"
                             data-easing="easeOutQuad"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.01"
                             data-endelementdelay="0.1"
                             data-endspeed="1000"
                             data-endeasing="Power4.easeIn"><img
                                    src="./src/views/pages/index/images/slider/rev/shop/girl1.jpg" alt="Girl"></div>

                        <div class="tp-caption ltl tp-resizeme revo-slider-caps-text text-uppercase"
                             data-x="570"
                             data-y="75"
                             data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1.3;scaleY:1;skewX:0;skewY:0;opacity:0;s:700;e:Power4.easeOutQuad;"
                             data-speed="700"
                             data-start="1000"
                             data-easing="easeOutQuad"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.01"
                             data-endelementdelay="0.1"
                             data-endspeed="1000"
                             data-endeasing="Power4.easeIn" style=" color: #333;">Get your Shopping Bags Ready
                        </div>

                        <div class="tp-caption ltl tp-resizeme revo-slider-emphasis-text p-0 border-0"
                             data-x="570"
                             data-y="105"
                             data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1.3;scaleY:1;skewX:0;skewY:0;opacity:0;s:700;e:Power4.easeOutQuad;"
                             data-speed="700"
                             data-start="1200"
                             data-easing="easeOutQuad"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.01"
                             data-endelementdelay="0.1"
                             data-endspeed="1000"
                             data-endeasing="Power4.easeIn" style=" color: #333; max-width: 430px; line-height: 1.15;">
                            <?php echo \MVC\libs\Languages::getLangData("Latest Fashion<br>Collections"); ?>
                        </div>

                        <div class="tp-caption ltl tp-resizeme revo-slider-desc-text text-left"
                             data-x="570"
                             data-y="275"
                             data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1.3;scaleY:1;skewX:0;skewY:0;opacity:0;s:700;e:Power4.easeOutQuad;"
                             data-speed="700"
                             data-start="1400"
                             data-easing="easeOutQuad"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.01"
                             data-endelementdelay="0.1"
                             data-endspeed="1000"
                             data-endeasing="Power4.easeIn"
                             style=" color: #333; max-width: 550px; white-space: normal;">We have created a Design that
                            looks Awesome, performs Brilliantly &amp; senses Orientations.
                        </div>

                        <div class="tp-caption ltl tp-resizeme"
                             data-x="570"
                             data-y="375"
                             data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1.3;scaleY:1;skewX:0;skewY:0;opacity:0;s:700;e:Power4.easeOutQuad;"
                             data-speed="700"
                             data-start="1550"
                             data-easing="easeOutQuad"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.01"
                             data-endelementdelay="0.1"
                             data-endspeed="1000"
                             data-endeasing="Power4.easeIn"><a href="#"
                                                               class="button button-border button-large button-rounded text-right m-0"><span>Start Shopping</span>
                                <i class="icon-angle-right"></i></a></div>

                    </li>
                    <!-- SLIDE  -->
                    <li data-transition="slideup" data-slotamount="1" data-masterspeed="1500" data-delay="5000"
                        data-saveperformance="off" data-title="Messenger bags" style="background-color: #E9E8E3;">
                        <!-- LAYERS -->

                        <div class="tp-caption ltl tp-resizeme revo-slider-caps-text text-uppercase"
                             data-x="630"
                             data-y="78"
                             data-transform_in="x:250;y:0;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;s:400;e:Power4.easeOutQuad;"
                             data-speed="400"
                             data-start="1000"
                             data-easing="easeOutQuad"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.01"
                             data-endelementdelay="0.1"
                             data-endspeed="1000"
                             data-endeasing="Power4.easeIn"><img
                                    src="./src/views/pages/index/images/slider/rev/shop/bag.png" alt="Bag"></div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption ltl tp-resizeme revo-slider-caps-text text-uppercase"
                             data-x="0"
                             data-y="110"
                             data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1.3;scaleY:1;skewX:0;skewY:0;opacity:0;s:700;e:Power4.easeOutQuad;"
                             data-speed="700"
                             data-start="1000"
                             data-easing="easeOutQuad"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.01"
                             data-endelementdelay="0.1"
                             data-endspeed="1000"
                             data-endeasing="Power4.easeIn" style=" color: #333;">Buy Stylish Bags at Discounted Prices
                        </div>

                        <div class="tp-caption ltl tp-resizeme revo-slider-emphasis-text p-0 border-0"
                             data-x="0"
                             data-y="140"
                             data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1.3;scaleY:1;skewX:0;skewY:0;opacity:0;s:700;e:Power4.easeOutQuad;"
                             data-speed="700"
                             data-start="1200"
                             data-easing="easeOutQuad"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.01"
                             data-endelementdelay="0.1"
                             data-endspeed="1000"
                             data-endeasing="Power4.easeIn" style=" color: #333; line-height: 1.15;">Messenger Bags
                        </div>

                        <div class="tp-caption ltl tp-resizeme revo-slider-desc-text text-left"
                             data-x="0"
                             data-y="240"
                             data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1.3;scaleY:1;skewX:0;skewY:0;opacity:0;s:700;e:Power4.easeOutQuad;"
                             data-speed="700"
                             data-start="1400"
                             data-easing="easeOutQuad"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.01"
                             data-endelementdelay="0.1"
                             data-endspeed="1000"
                             data-endeasing="Power4.easeIn"
                             style=" color: #333; max-width: 550px; white-space: normal;">Grantees insurmountable
                            challenges invest protect, growth improving quality social entrepreneurship.
                        </div>

                        <div class="tp-caption ltl tp-resizeme"
                             data-x="0"
                             data-y="340"
                             data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1.3;scaleY:1;skewX:0;skewY:0;opacity:0;s:700;e:Power4.easeOutQuad;"
                             data-speed="700"
                             data-start="1550"
                             data-easing="easeOutQuad"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.01"
                             data-endelementdelay="0.1"
                             data-endspeed="1000"
                             data-endeasing="Power4.easeIn"><a href="#"
                                                               class="button button-border button-large button-rounded text-right m-0"><span>Start Shopping</span>
                                <i class="icon-angle-right"></i></a></div>

                        <div class="tp-caption utb tp-resizeme revo-slider-caps-text text-uppercase"
                             data-x="510"
                             data-y="0"
                             data-transform_in="x:0;y:-236;z:0;rotationZ:0;skewX:0;skewY:0;opacity:0;s:700;e:Power4.easeOutQuad;"
                             data-speed="600"
                             data-start="2100"
                             data-easing="easeOutQuad"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.01"
                             data-endelementdelay="0.1"
                             data-endspeed="1000"
                             data-endeasing="Power4.easeIn"><img
                                    src="./src/views/pages/index/images/slider/rev/shop/tag.png" alt="Bag"></div>

                    </li>
                </ul>
            </div>
        </div><!-- END REVOLUTION SLIDER -->

    </section>

    <!-- Content
    ============================================= -->
    <section id="content">
        <div class="content-wrap">
            <div class="container clearfix">

                <div class="row align-items-stretch gutter-20 min-vh-60">
                    <div class="col-md-8">

                        <div class="row align-items-stretch gutter-20 h-100">
                            <div class="col-md-6 min-vh-25 min-vh-md-0">
                                <a href="#" class="grid-inner d-block h-100"
                                   style="background-image: url('./src/views/pages/index/images/shop/banners/2.jpg');"></a>
                            </div>

                            <div class="col-md-6 min-vh-25 min-vh-md-0">
                                <a href="#" class="grid-inner d-block h-100"
                                   style="background-image: url('./src/views/pages/index/images/shop/banners/8.jpg'); background-position: right center;"></a>
                            </div>

                            <div class="col-md-12 min-vh-25 min-vh-md-0 pb-md-0">
                                <a href="#" class="grid-inner d-block h-100"
                                   style="background-image: url('./src/views/pages/index/images/shop/banners/4.jpg');"></a>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-4 min-vh-50">
                        <a href="#" class="grid-inner d-block h-100"
                           style="background-image: url('./src/views/pages/index/images/shop/banners/9.jpg'); background-position: center top;"></a>
                    </div>
                </div>

                <div class="clear"></div>

                <div class="tabs topmargin-lg clearfix" id="tab-3">

                    <ul class="tab-nav clearfix">
                        <li><a href="#tabs-9">New Arrivals</a></li>
                        <li><a href="#tabs-10">Best sellers</a></li>
                        <li><a href="#tabs-11">You may like</a></li>
                    </ul>

                    <div class="tab-container">

                        <div class="tab-content" id="tabs-9">

                            <div class="shop row gutter-30">

                                <div class="product col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="grid-inner">
                                        <div class="product-image">
                                            <a href="#"><img src="./src/views/pages/index/images/shop/dress/1.jpg"
                                                             alt="Checked Short Dress"></a>
                                            <a href="#"><img src="./src/views/pages/index/images/shop/dress/1-1.jpg"
                                                             alt="Checked Short Dress"></a>
                                            <div class="sale-flash badge badge-success p-2">50% Off*</div>
                                            <div class="bg-overlay">
                                                <div class="bg-overlay-content align-items-end justify-content-between"
                                                     data-hover-animate="fadeIn" data-hover-speed="400">
                                                    <a href="#" class="btn btn-dark mr-2"><i
                                                                class="icon-shopping-basket"></i></a>
                                                    <a href="./src/views/pages/index/include/ajax/shop-item.html"
                                                       class="btn btn-dark" data-lightbox="ajax"><i
                                                                class="icon-line-expand"></i></a>
                                                </div>
                                                <div class="bg-overlay-bg bg-transparent"></div>
                                            </div>
                                        </div>
                                        <div class="product-desc">
                                            <div class="product-title"><h3><a href="#">Checked Short Dress</a></h3>
                                            </div>
                                            <div class="product-price">
                                                <del>$24.99</del>
                                                <ins>$12.49</ins>
                                            </div>
                                            <div class="product-rating">
                                                <i class="icon-star3"></i>
                                                <i class="icon-star3"></i>
                                                <i class="icon-star3"></i>
                                                <i class="icon-star3"></i>
                                                <i class="icon-star-half-full"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="product col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="grid-inner">
                                        <div class="product-image">
                                            <a href="#"><img src="./src/views/pages/index/images/shop/pants/1-1.jpg"
                                                             alt="Slim Fit Chinos"></a>
                                            <a href="#"><img src="./src/views/pages/index/images/shop/pants/1.jpg"
                                                             alt="Slim Fit Chinos"></a>
                                            <div class="bg-overlay">
                                                <div class="bg-overlay-content align-items-end justify-content-between"
                                                     data-hover-animate="fadeIn" data-hover-speed="400">
                                                    <a href="#" class="btn btn-dark mr-2"><i
                                                                class="icon-shopping-basket"></i></a>
                                                    <a href="./src/views/pages/index/include/ajax/shop-item.html"
                                                       class="btn btn-dark" data-lightbox="ajax"><i
                                                                class="icon-line-expand"></i></a>
                                                </div>
                                                <div class="bg-overlay-bg bg-transparent"></div>
                                            </div>
                                        </div>
                                        <div class="product-desc">
                                            <div class="product-title"><h3><a href="#">Slim Fit Chinos</a></h3></div>
                                            <div class="product-price">$39.99</div>
                                            <div class="product-rating">
                                                <i class="icon-star3"></i>
                                                <i class="icon-star3"></i>
                                                <i class="icon-star3"></i>
                                                <i class="icon-star-half-full"></i>
                                                <i class="icon-star-empty"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="product col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="grid-inner">
                                        <div class="product-image">
                                            <div class="fslider" data-arrows="false">
                                                <div class="flexslider">
                                                    <div class="slider-wrap">
                                                        <div class="slide"><a href="#"><img
                                                                        src="./src/views/pages/index/images/shop/shoes/1.jpg"
                                                                        alt="Dark Brown Boots"></a></div>
                                                        <div class="slide"><a href="#"><img
                                                                        src="./src/views/pages/index/images/shop/shoes/1-1.jpg"
                                                                        alt="Dark Brown Boots"></a></div>
                                                        <div class="slide"><a href="#"><img
                                                                        src="./src/views/pages/index/images/shop/shoes/1-2.jpg"
                                                                        alt="Dark Brown Boots"></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="bg-overlay">
                                                <div class="bg-overlay-content align-items-end justify-content-between"
                                                     data-hover-animate="fadeIn" data-hover-speed="400">
                                                    <a href="#" class="btn btn-dark mr-2"><i
                                                                class="icon-shopping-basket"></i></a>
                                                    <a href="./src/views/pages/index/include/ajax/shop-item.html"
                                                       class="btn btn-dark" data-lightbox="ajax"><i
                                                                class="icon-line-expand"></i></a>
                                                </div>
                                                <div class="bg-overlay-bg bg-transparent"></div>
                                            </div>
                                        </div>
                                        <div class="product-desc">
                                            <div class="product-title"><h3><a href="#">Dark Brown Boots</a></h3></div>
                                            <div class="product-price">$49</div>
                                            <div class="product-rating">
                                                <i class="icon-star3"></i>
                                                <i class="icon-star3"></i>
                                                <i class="icon-star3"></i>
                                                <i class="icon-star-empty"></i>
                                                <i class="icon-star-empty"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="product col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="grid-inner">
                                        <div class="product-image">
                                            <a href="#"><img src="./src/views/pages/index/images/shop/dress/2.jpg"
                                                             alt="Light Blue Denim Dress"></a>
                                            <a href="#"><img src="./src/views/pages/index/images/shop/dress/2-2.jpg"
                                                             alt="Light Blue Denim Dress"></a>
                                            <div class="bg-overlay">
                                                <div class="bg-overlay-content align-items-end justify-content-between"
                                                     data-hover-animate="fadeIn" data-hover-speed="400">
                                                    <a href="#" class="btn btn-dark mr-2"><i
                                                                class="icon-shopping-basket"></i></a>
                                                    <a href="./src/views/pages/index/include/ajax/shop-item.html"
                                                       class="btn btn-dark" data-lightbox="ajax"><i
                                                                class="icon-line-expand"></i></a>
                                                </div>
                                                <div class="bg-overlay-bg bg-transparent"></div>
                                            </div>
                                        </div>
                                        <div class="product-desc">
                                            <div class="product-title"><h3><a href="#">Light Blue Denim Dress</a></h3>
                                            </div>
                                            <div class="product-price">$19.95</div>
                                            <div class="product-rating">
                                                <i class="icon-star3"></i>
                                                <i class="icon-star3"></i>
                                                <i class="icon-star3"></i>
                                                <i class="icon-star3"></i>
                                                <i class="icon-star-empty"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="tab-content" id="tabs-10">

                            <div class="shop row gutter-30">

                                <div class="product col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="grid-inner">
                                        <div class="product-image">
                                            <a href="#"><img src="./src/views/pages/index/images/shop/sunglasses/1.jpg"
                                                             alt="Unisex Sunglasses"></a>
                                            <a href="#"><img
                                                        src="./src/views/pages/index/images/shop/sunglasses/1-1.jpg"
                                                        alt="Unisex Sunglasses"></a>
                                            <div class="sale-flash badge badge-danger p-2">Sale!</div>
                                            <div class="bg-overlay">
                                                <div class="bg-overlay-content align-items-end justify-content-between"
                                                     data-hover-animate="fadeIn" data-hover-speed="400">
                                                    <a href="#" class="btn btn-dark mr-2"><i
                                                                class="icon-shopping-basket"></i></a>
                                                    <a href="./src/views/pages/index/include/ajax/shop-item.html"
                                                       class="btn btn-dark" data-lightbox="ajax"><i
                                                                class="icon-line-expand"></i></a>
                                                </div>
                                                <div class="bg-overlay-bg bg-transparent"></div>
                                            </div>
                                        </div>
                                        <div class="product-desc">
                                            <div class="product-title"><h3><a href="#">Unisex Sunglasses</a></h3></div>
                                            <div class="product-price">
                                                <del>$19.99</del>
                                                <ins>$11.99</ins>
                                            </div>
                                            <div class="product-rating">
                                                <i class="icon-star3"></i>
                                                <i class="icon-star3"></i>
                                                <i class="icon-star3"></i>
                                                <i class="icon-star-empty"></i>
                                                <i class="icon-star-empty"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="product col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="grid-inner">
                                        <div class="product-image">
                                            <a href="#"><img src="./src/views/pages/index/images/shop/tshirts/1.jpg"
                                                             alt="Blue Round-Neck Tshirt"></a>
                                            <a href="#"><img src="./src/views/pages/index/images/shop/tshirts/1-1.jpg"
                                                             alt="Blue Round-Neck Tshirt"></a>
                                            <div class="bg-overlay">
                                                <div class="bg-overlay-content align-items-end justify-content-between"
                                                     data-hover-animate="fadeIn" data-hover-speed="400">
                                                    <a href="#" class="btn btn-dark mr-2"><i
                                                                class="icon-shopping-basket"></i></a>
                                                    <a href="./src/views/pages/index/include/ajax/shop-item.html"
                                                       class="btn btn-dark" data-lightbox="ajax"><i
                                                                class="icon-line-expand"></i></a>
                                                </div>
                                                <div class="bg-overlay-bg bg-transparent"></div>
                                            </div>
                                        </div>
                                        <div class="product-desc">
                                            <div class="product-title"><h3><a href="#">Blue Round-Neck Tshirt</a></h3>
                                            </div>
                                            <div class="product-price">$9.99</div>
                                            <div class="product-rating">
                                                <i class="icon-star3"></i>
                                                <i class="icon-star3"></i>
                                                <i class="icon-star3"></i>
                                                <i class="icon-star-half-full"></i>
                                                <i class="icon-star-empty"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="product col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="grid-inner">
                                        <div class="product-image">
                                            <a href="#"><img src="./src/views/pages/index/images/shop/watches/1.jpg"
                                                             alt="Silver Chrome Watch"></a>
                                            <a href="#"><img src="./src/views/pages/index/images/shop/watches/1-1.jpg"
                                                             alt="Silver Chrome Watch"></a>
                                            <div class="bg-overlay">
                                                <div class="bg-overlay-content align-items-end justify-content-between"
                                                     data-hover-animate="fadeIn" data-hover-speed="400">
                                                    <a href="#" class="btn btn-dark mr-2"><i
                                                                class="icon-shopping-basket"></i></a>
                                                    <a href="./src/views/pages/index/include/ajax/shop-item.html"
                                                       class="btn btn-dark" data-lightbox="ajax"><i
                                                                class="icon-line-expand"></i></a>
                                                </div>
                                                <div class="bg-overlay-bg bg-transparent"></div>
                                            </div>
                                        </div>
                                        <div class="product-desc">
                                            <div class="product-title"><h3><a href="#">Silver Chrome Watch</a></h3>
                                            </div>
                                            <div class="product-price">$129.99</div>
                                            <div class="product-rating">
                                                <i class="icon-star3"></i>
                                                <i class="icon-star3"></i>
                                                <i class="icon-star3"></i>
                                                <i class="icon-star3"></i>
                                                <i class="icon-star-half-full"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="product col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="grid-inner">
                                        <div class="product-image">
                                            <a href="#"><img src="./src/views/pages/index/images/shop/shoes/2.jpg"
                                                             alt="Men Grey Casual Shoes"></a>
                                            <a href="#"><img src="./src/views/pages/index/images/shop/shoes/2-1.jpg"
                                                             alt="Men Grey Casual Shoes"></a>
                                            <div class="sale-flash badge badge-danger p-2">Sale!</div>
                                            <div class="bg-overlay">
                                                <div class="bg-overlay-content align-items-end justify-content-between"
                                                     data-hover-animate="fadeIn" data-hover-speed="400">
                                                    <a href="#" class="btn btn-dark mr-2"><i
                                                                class="icon-shopping-basket"></i></a>
                                                    <a href="./src/views/pages/index/include/ajax/shop-item.html"
                                                       class="btn btn-dark" data-lightbox="ajax"><i
                                                                class="icon-line-expand"></i></a>
                                                </div>
                                                <div class="bg-overlay-bg bg-transparent"></div>
                                            </div>
                                        </div>
                                        <div class="product-desc">
                                            <div class="product-title"><h3><a href="#">Men Grey Casual Shoes</a></h3>
                                            </div>
                                            <div class="product-price">
                                                <del>$45.99</del>
                                                <ins>$39.49</ins>
                                            </div>
                                            <div class="product-rating">
                                                <i class="icon-star3"></i>
                                                <i class="icon-star3"></i>
                                                <i class="icon-star-half-full"></i>
                                                <i class="icon-star-empty"></i>
                                                <i class="icon-star-empty"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="tab-content" id="tabs-11">

                            <div class="shop row gutter-30">

                                <div class="product col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="grid-inner">
                                        <div class="product-image">
                                            <div class="fslider" data-arrows="false">
                                                <div class="flexslider">
                                                    <div class="slider-wrap">
                                                        <div class="slide"><a href="#"><img
                                                                        src="./src/views/pages/index/images/shop/dress/3.jpg"
                                                                        alt="Pink Printed Dress"></a></div>
                                                        <div class="slide"><a href="#"><img
                                                                        src="./src/views/pages/index/images/shop/dress/3-1.jpg"
                                                                        alt="Pink Printed Dress"></a></div>
                                                        <div class="slide"><a href="#"><img
                                                                        src="./src/views/pages/index/images/shop/dress/3-2.jpg"
                                                                        alt="Pink Printed Dress"></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="bg-overlay">
                                                <div class="bg-overlay-content align-items-end justify-content-between"
                                                     data-hover-animate="fadeIn" data-hover-speed="400">
                                                    <a href="#" class="btn btn-dark mr-2"><i
                                                                class="icon-shopping-basket"></i></a>
                                                    <a href="./src/views/pages/index/include/ajax/shop-item.html"
                                                       class="btn btn-dark" data-lightbox="ajax"><i
                                                                class="icon-line-expand"></i></a>
                                                </div>
                                                <div class="bg-overlay-bg bg-transparent"></div>
                                            </div>
                                        </div>
                                        <div class="product-desc">
                                            <div class="product-title"><h3><a href="#">Pink Printed Dress</a></h3></div>
                                            <div class="product-price">$39.49</div>
                                            <div class="product-rating">
                                                <i class="icon-star3"></i>
                                                <i class="icon-star3"></i>
                                                <i class="icon-star3"></i>
                                                <i class="icon-star-empty"></i>
                                                <i class="icon-star-empty"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="product col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="grid-inner">
                                        <div class="product-image">
                                            <a href="#"><img src="./src/views/pages/index/images/shop/pants/5.jpg"
                                                             alt="Green Trousers"></a>
                                            <a href="#"><img src="./src/views/pages/index/images/shop/pants/5-1.jpg"
                                                             alt="Green Trousers"></a>
                                            <div class="sale-flash badge badge-danger p-2">Sale!</div>
                                            <div class="bg-overlay">
                                                <div class="bg-overlay-content align-items-end justify-content-between"
                                                     data-hover-animate="fadeIn" data-hover-speed="400">
                                                    <a href="#" class="btn btn-dark mr-2"><i
                                                                class="icon-shopping-basket"></i></a>
                                                    <a href="./src/views/pages/index/include/ajax/shop-item.html"
                                                       class="btn btn-dark" data-lightbox="ajax"><i
                                                                class="icon-line-expand"></i></a>
                                                </div>
                                                <div class="bg-overlay-bg bg-transparent"></div>
                                            </div>
                                        </div>
                                        <div class="product-desc">
                                            <div class="product-title"><h3><a href="#">Green Trousers</a></h3></div>
                                            <div class="product-price">
                                                <del>$24.99</del>
                                                <ins>$21.99</ins>
                                            </div>
                                            <div class="product-rating">
                                                <i class="icon-star3"></i>
                                                <i class="icon-star3"></i>
                                                <i class="icon-star3"></i>
                                                <i class="icon-star-half-full"></i>
                                                <i class="icon-star-empty"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="product col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="grid-inner">
                                        <div class="product-image">
                                            <a href="#"><img src="./src/views/pages/index/images/shop/sunglasses/2.jpg"
                                                             alt="Men Aviator Sunglasses"></a>
                                            <a href="#"><img
                                                        src="./src/views/pages/index/images/shop/sunglasses/2-1.jpg"
                                                        alt="Men Aviator Sunglasses"></a>
                                            <div class="bg-overlay">
                                                <div class="bg-overlay-content align-items-end justify-content-between"
                                                     data-hover-animate="fadeIn" data-hover-speed="400">
                                                    <a href="#" class="btn btn-dark mr-2"><i
                                                                class="icon-shopping-basket"></i></a>
                                                    <a href="./src/views/pages/index/include/ajax/shop-item.html"
                                                       class="btn btn-dark" data-lightbox="ajax"><i
                                                                class="icon-line-expand"></i></a>
                                                </div>
                                                <div class="bg-overlay-bg bg-transparent"></div>
                                            </div>
                                        </div>
                                        <div class="product-desc">
                                            <div class="product-title"><h3><a href="#">Men Aviator Sunglasses</a></h3>
                                            </div>
                                            <div class="product-price">$13.49</div>
                                            <div class="product-rating">
                                                <i class="icon-star3"></i>
                                                <i class="icon-star3"></i>
                                                <i class="icon-star3"></i>
                                                <i class="icon-star3"></i>
                                                <i class="icon-star-empty"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="product col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="grid-inner">
                                        <div class="product-image">
                                            <a href="#"><img src="./src/views/pages/index/images/shop/tshirts/4.jpg"
                                                             alt="Black Polo Tshirt"></a>
                                            <a href="#"><img src="./src/views/pages/index/images/shop/tshirts/4-1.jpg"
                                                             alt="Black Polo Tshirt"></a>
                                            <div class="bg-overlay">
                                                <div class="bg-overlay-content align-items-end justify-content-between"
                                                     data-hover-animate="fadeIn" data-hover-speed="400">
                                                    <a href="#" class="btn btn-dark mr-2"><i
                                                                class="icon-shopping-basket"></i></a>
                                                    <a href="./src/views/pages/index/include/ajax/shop-item.html"
                                                       class="btn btn-dark" data-lightbox="ajax"><i
                                                                class="icon-line-expand"></i></a>
                                                </div>
                                                <div class="bg-overlay-bg bg-transparent"></div>
                                            </div>
                                        </div>
                                        <div class="product-desc">
                                            <div class="product-title"><h3><a href="#">Black Polo Tshirt</a></h3></div>
                                            <div class="product-price">$11.49</div>
                                            <div class="product-rating">
                                                <i class="icon-star3"></i>
                                                <i class="icon-star3"></i>
                                                <i class="icon-star3"></i>
                                                <i class="icon-star3"></i>
                                                <i class="icon-star3"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="clear bottommargin-sm"></div>

                <div class="row justify-content-center col-mb-50 mb-0">
                    <div class="col-sm-6 col-lg-4">
                        <div class="fancy-title title-border">
                            <h4>About Us</h4>
                        </div>
                        <p>Jane Jacobs educate, leverage affiliate Martin Luther King Jr. agriculture conflict
                            resolution dignity. Cooperation international progress non-partisan lasting change
                            meaningful.</p>
                    </div>

                    <div class="col-sm-6 col-lg-4 subscribe-widget">
                        <div class="fancy-title title-border">
                            <h4>Subscribe for Offers</h4>
                        </div>
                        <p>Subscribe to Our Newsletter to get Important News, Amazing Offers &amp; Inside Scoops:</p>
                        <div class="widget-subscribe-form-result"></div>
                        <form id="widget-subscribe-form2" action="./src/views/pages/index/include/subscribe.php"
                              method="post" class="mb-0">
                            <div class="input-group mx-auto">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="icon-email2"></i></div>
                                </div>
                                <input type="email" name="widget-subscribe-form-email"
                                       class="form-control required email" placeholder="Enter your Email">
                                <div class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">Subscribe</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="col-sm-6 col-lg-4">
                        <div class="fancy-title title-border">
                            <h4>Connect with Us</h4>
                        </div>

                        <a href="#" class="social-icon si-facebook" data-toggle="tooltip" data-placement="top"
                           title="Facebook">
                            <i class="icon-facebook"></i>
                            <i class="icon-facebook"></i>
                        </a>

                        <a href="#" class="social-icon si-delicious" data-toggle="tooltip" data-placement="top"
                           title="Delicious">
                            <i class="icon-delicious"></i>
                            <i class="icon-delicious"></i>
                        </a>

                        <a href="#" class="social-icon si-paypal" data-toggle="tooltip" data-placement="top"
                           title="PayPal">
                            <i class="icon-paypal"></i>
                            <i class="icon-paypal"></i>
                        </a>

                        <a href="#" class="social-icon si-flattr" data-toggle="tooltip" data-placement="top"
                           title="Flattr">
                            <i class="icon-flattr"></i>
                            <i class="icon-flattr"></i>
                        </a>

                        <a href="#" class="social-icon si-android" data-toggle="tooltip" data-placement="top"
                           title="Android">
                            <i class="icon-android"></i>
                            <i class="icon-android"></i>
                        </a>

                        <a href="#" class="social-icon si-smashmag" data-toggle="tooltip" data-placement="top"
                           title="Smashing Magazine">
                            <i class="icon-smashmag"></i>
                            <i class="icon-smashmag"></i>
                        </a>

                        <a href="#" class="social-icon si-gplus" data-toggle="tooltip" data-placement="top"
                           title="Google+">
                            <i class="icon-gplus"></i>
                            <i class="icon-gplus"></i>
                        </a>

                        <a href="#" class="social-icon si-wikipedia" data-toggle="tooltip" data-placement="top"
                           title="Wikipedia">
                            <i class="icon-wikipedia"></i>
                            <i class="icon-wikipedia"></i>
                        </a>

                        <a href="#" class="social-icon si-stumbleupon" data-toggle="tooltip" data-placement="top"
                           title="StumbleUpon">
                            <i class="icon-stumbleupon"></i>
                            <i class="icon-stumbleupon"></i>
                        </a>

                        <a href="#" class="social-icon si-foursquare" data-toggle="tooltip" data-placement="top"
                           title="FourSquare">
                            <i class="icon-foursquare"></i>
                            <i class="icon-foursquare"></i>
                        </a>

                        <a href="#" class="social-icon si-call" data-toggle="tooltip" data-placement="top" title="Call">
                            <i class="icon-call"></i>
                            <i class="icon-call"></i>
                        </a>

                        <a href="#" class="social-icon si-ninetyninedesigns" data-toggle="tooltip" data-placement="top"
                           title="Ninety Nine Design">
                            <i class="icon-ninetyninedesigns"></i>
                            <i class="icon-ninetyninedesigns"></i>
                        </a>

                        <a href="#" class="social-icon si-forrst" data-toggle="tooltip" data-placement="top"
                           title="Forrst">
                            <i class="icon-forrst"></i>
                            <i class="icon-forrst"></i>
                        </a>

                        <a href="#" class="social-icon si-digg" data-toggle="tooltip" data-placement="top" title="Digg">
                            <i class="icon-digg"></i>
                            <i class="icon-digg"></i>
                        </a>
                    </div>
                </div>

                <div class="clear"></div>

                <div class="fancy-title title-border title-center topmargin-sm">
                    <h4>Popular Brands</h4>
                </div>

                <ul class="clients-grid grid-2 grid-sm-3 grid-md-6 mb-0">
                    <li class="grid-item"><a href="#"><img src="./src/views/pages/index/images/clients/logo/1.png"
                                                           alt="Clients"></a></li>
                    <li class="grid-item"><a href="#"><img src="./src/views/pages/index/images/clients/logo/2.png"
                                                           alt="Clients"></a></li>
                    <li class="grid-item"><a href="#"><img src="./src/views/pages/index/images/clients/logo/3.png"
                                                           alt="Clients"></a></li>
                    <li class="grid-item"><a href="#"><img src="./src/views/pages/index/images/clients/logo/4.png"
                                                           alt="Clients"></a></li>
                    <li class="grid-item"><a href="#"><img src="./src/views/pages/index/images/clients/logo/5.png"
                                                           alt="Clients"></a></li>
                    <li class="grid-item"><a href="#"><img src="./src/views/pages/index/images/clients/logo/6.png"
                                                           alt="Clients"></a></li>
                    <li class="grid-item"><a href="#"><img src="./src/views/pages/index/images/clients/logo/7.png"
                                                           alt="Clients"></a></li>
                    <li class="grid-item"><a href="#"><img src="./src/views/pages/index/images/clients/logo/8.png"
                                                           alt="Clients"></a></li>
                    <li class="grid-item"><a href="#"><img src="./src/views/pages/index/images/clients/logo/9.png"
                                                           alt="Clients"></a></li>
                    <li class="grid-item"><a href="#"><img src="./src/views/pages/index/images/clients/logo/10.png"
                                                           alt="Clients"></a></li>
                    <li class="grid-item"><a href="#"><img src="./src/views/pages/index/images/clients/logo/11.png"
                                                           alt="Clients"></a></li>
                    <li class="grid-item"><a href="#"><img src="./src/views/pages/index/images/clients/logo/12.png"
                                                           alt="Clients"></a></li>
                    <li class="grid-item"><a href="#"><img src="./src/views/pages/index/images/clients/logo/13.png"
                                                           alt="Clients"></a></li>
                    <li class="grid-item"><a href="#"><img src="./src/views/pages/index/images/clients/logo/14.png"
                                                           alt="Clients"></a></li>
                    <li class="grid-item"><a href="#"><img src="./src/views/pages/index/images/clients/logo/15.png"
                                                           alt="Clients"></a></li>
                    <li class="grid-item"><a href="#"><img src="./src/views/pages/index/images/clients/logo/16.png"
                                                           alt="Clients"></a></li>
                    <li class="grid-item"><a href="#"><img src="./src/views/pages/index/images/clients/logo/19.png"
                                                           alt="Clients"></a></li>
                    <li class="grid-item"><a href="#"><img src="./src/views/pages/index/images/clients/logo/18.png"
                                                           alt="Clients"></a></li>
                </ul>

            </div>

            <div class="section mb-0">
                <div class="container">

                    <div class="row col-mb-50">
                        <div class="col-sm-6 col-lg-3">
                            <div class="feature-box fbox-plain fbox-dark fbox-sm">
                                <div class="fbox-icon">
                                    <i class="icon-thumbs-up2"></i>
                                </div>
                                <div class="fbox-content">
                                    <h3>100% Original</h3>
                                    <p class="mt-0">We guarantee you the sale of Original Brands.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-3">
                            <div class="feature-box fbox-plain fbox-dark fbox-sm">
                                <div class="fbox-icon">
                                    <i class="icon-credit-cards"></i>
                                </div>
                                <div class="fbox-content">
                                    <h3>Payment Options</h3>
                                    <p class="mt-0">We accept Visa, MasterCard and American Express.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-3">
                            <div class="feature-box fbox-plain fbox-dark fbox-sm">
                                <div class="fbox-icon">
                                    <i class="icon-truck2"></i>
                                </div>
                                <div class="fbox-content">
                                    <h3>Free Shipping</h3>
                                    <p class="mt-0">Free Delivery to 100+ Locations on orders above $40.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-3">
                            <div class="feature-box fbox-plain fbox-dark fbox-sm">
                                <div class="fbox-icon">
                                    <i class="icon-undo"></i>
                                </div>
                                <div class="fbox-content">
                                    <h3>30-Days Returns</h3>
                                    <p class="mt-0">Return or exchange items purchased within 30 days.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="section border-top-0 border-bottom-0 mb-0 p-0 bg-transparent footer-stick">
                <div class="container clearfix">

                    <div class="row col-mb-50">
                        <div class="col-md-6 d-none d-md-flex align-self-end">
                            <img src="./src/views/pages/index/images/services/4.jpg" alt="Image" class="mb-0">
                        </div>

                        <div class="col-md-6 mb-5 subscribe-widget">
                            <div class="heading-block">
                                <h3><strong>GET 20% OFF*</strong></h3>
                                <span>Our App scales beautifully to different Devices.</span>
                            </div>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet cumque, perferendis
                                accusamus porro illo exercitationem molestias.</p>

                            <div class="widget-subscribe-form-result"></div>
                            <form id="widget-subscribe-form3" action="./src/views/pages/index/include/subscribe.php"
                                  method="post" class="mb-0">
                                <div class="input-group" style="max-width:400px;">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="icon-email2"></i></div>
                                    </div>
                                    <input type="email" name="widget-subscribe-form-email"
                                           class="form-control required email" placeholder="Enter your Email">
                                    <div class="input-group-append">
                                        <button class="btn btn-danger" type="submit">Subscribe Now</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

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

                                    <img src="./src/views/pages/index/images/footer-widget-logo.png" alt="Image"
                                         class="footer-logo">

                                    <p>
                                        <?php echo \MVC\libs\Languages::getLangData("We believe in <strong>cheapest</strong>, <strong>Beautiful</strong> &amp; <strong>Good price</strong>."); ?>
                                    </p>

                                    <div style="background: url('./src/views/pages/index/images/world-map.png') no-repeat center center; background-size: 100%;">
                                        <address>
                                            <strong><?php echo \MVC\libs\Languages::getLangData("Headquarters"); ?>
                                                :</strong><br>
                                            Phú Thượng- Tây Hồ- Hà Nội 100000<br>
                                        </address>
                                        <abbr title="Phone Number"><strong><?php echo \MVC\libs\Languages::getLangData("Phone"); ?>
                                                :</strong></abbr> (84) 979 029 556<br>
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
                                    <h4><?php echo \MVC\libs\Languages::getLangData("Recent Posts"); ?></h4>

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
                                    <form id="widget-subscribe-form"
                                          action="./src/views/pages/index/include/subscribe.php" method="post"
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
                                            <a href="#"><small style="display: block; margin-top: 3px;"><strong>Subscribe</strong><br>to
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
                            <a href="#" class="social-icon si-small si-borderless si-facebook">
                                <i class="icon-facebook"></i>
                                <i class="icon-facebook"></i>
                            </a>

                            <a href="#" class="social-icon si-small si-borderless si-twitter">
                                <i class="icon-twitter"></i>
                                <i class="icon-twitter"></i>
                            </a>

                            <a href="#" class="social-icon si-small si-borderless si-gplus">
                                <i class="icon-gplus"></i>
                                <i class="icon-gplus"></i>
                            </a>

                            <a href="#" class="social-icon si-small si-borderless si-pinterest">
                                <i class="icon-pinterest"></i>
                                <i class="icon-pinterest"></i>
                            </a>

                            <a href="#" class="social-icon si-small si-borderless si-vimeo">
                                <i class="icon-vimeo"></i>
                                <i class="icon-vimeo"></i>
                            </a>

                            <a href="#" class="social-icon si-small si-borderless si-github">
                                <i class="icon-github"></i>
                                <i class="icon-github"></i>
                            </a>

                            <a href="#" class="social-icon si-small si-borderless si-yahoo">
                                <i class="icon-yahoo"></i>
                                <i class="icon-yahoo"></i>
                            </a>

                            <a href="#" class="social-icon si-small si-borderless si-linkedin">
                                <i class="icon-linkedin"></i>
                                <i class="icon-linkedin"></i>
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
<script src="./src/views/pages/index/js/jquery.js"></script>
<script src="./src/views/pages/index/js/plugins.min.js"></script>

<!-- Footer Scripts
============================================= -->
<script src="./src/views/pages/index/js/functions.js"></script>

<!-- SLIDER REVOLUTION 5.x SCRIPTS  -->
<script src="./src/views/pages/index/include/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script src="./src/views/pages/index/include/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

<script src="./src/views/pages/index/include/rs-plugin/js/extensions/revolution.extension.video.min.js"></script>
<script src="./src/views/pages/index/include/rs-plugin/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="./src/views/pages/index/include/rs-plugin/js/extensions/revolution.extension.actions.min.js"></script>
<script src="./src/views/pages/index/include/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="./src/views/pages/index/include/rs-plugin/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="./src/views/pages/index/include/rs-plugin/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="./src/views/pages/index/include/rs-plugin/js/extensions/revolution.extension.migration.min.js"></script>
<script src="./src/views/pages/index/include/rs-plugin/js/extensions/revolution.extension.parallax.min.js"></script>

<script>

    var tpj = jQuery;
    tpj.noConflict();
    var $ = jQuery.noConflict();

    tpj(document).ready(function () {

        var apiRevoSlider = tpj('#rev_slider_ishop').show().revolution(
            {
                sliderType: "standard",
                jsFileLocation: "./src/views/pages/index/include/rs-plugin/js/",
                sliderLayout: "fullwidth",
                dottedOverlay: "none",
                delay: 9000,
                navigation: {},
                responsiveLevels: [1200, 992, 768, 480, 320],
                gridwidth: 1140,
                gridheight: 500,
                lazyType: "none",
                shadow: 0,
                spinner: "off",
                autoHeight: "off",
                disableProgressBar: "on",
                hideThumbsOnMobile: "off",
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                debugMode: false,
                fallbacks: {
                    simplifyAll: "off",
                    disableFocusListener: false,
                },
                navigation: {
                    keyboardNavigation: "off",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation: "off",
                    onHoverStop: "off",
                    touch: {
                        touchenabled: "on",
                        swipe_threshold: 75,
                        swipe_min_touches: 1,
                        swipe_direction: "horizontal",
                        drag_block_vertical: false
                    },
                    arrows: {
                        style: "ares",
                        enable: true,
                        hide_onmobile: false,
                        hide_onleave: false,
                        tmp: '<div class="tp-title-wrap">	<span class="tp-arr-titleholder">{{title}}</span> </div>',
                        left: {
                            h_align: "left",
                            v_align: "center",
                            h_offset: 10,
                            v_offset: 0
                        },
                        right: {
                            h_align: "right",
                            v_align: "center",
                            h_offset: 10,
                            v_offset: 0
                        }
                    }
                }
            });

        apiRevoSlider.on("revolution.slide.onloaded", function (e) {
            SEMICOLON.slider.sliderDimensions();
        });

    }); //ready

</script>

</body>
</html>