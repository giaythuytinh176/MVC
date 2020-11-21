<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="author" content="SemiColonWeb"/>

    <!-- Stylesheets
    ============================================= -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&display=swap"
          rel="stylesheet" type="text/css"/>
    <link rel="stylesheet"
          href="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/css/bootstrap.css"
          type="text/css"/>
    <link rel="stylesheet" href="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/style.css"
          type="text/css"/>
    <link rel="stylesheet"
          href="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/css/dark.css"
          type="text/css"/>
    <link rel="stylesheet"
          href="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/css/font-icons.css"
          type="text/css"/>
    <link rel="stylesheet"
          href="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/css/animate.css"
          type="text/css"/>
    <link rel="stylesheet"
          href="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/css/magnific-popup.css"
          type="text/css"/>

    <link rel="stylesheet"
          href="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/css/custom.css"
          type="text/css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <!-- Document Title
    ============================================= -->
    <title>Login- Register | Canvas</title>

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
                           data-dark-logo="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/images/logo-dark.png"><img
                                    src="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/images/logo.png"
                                    alt="Canvas Logo"></a>
                        <a href="<?php echo \MVC\controllers\UrlControllers::url(); ?>" class="retina-logo"
                           data-dark-logo="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/images/logo-dark@2x.png"><img
                                    src="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/images/logo@2x.png"
                                    alt="Canvas Logo"></a>
                    </div><!-- #logo end -->

                    <div class="header-misc">

                        <!-- Top Search
                        ============================================= -->
                        <div id="top-search" class="header-misc-icon">
                            <a href="" id="top-search-trigger"><i class="icon-line-search"></i><i
                                        class="icon-line-cross"></i></a>
                        </div><!-- #top-search end -->

                        <!-- Top Cart
                        ============================================= -->
                        <div id="top-cart" class="header-misc-icon d-none d-sm-block">
                            <a href="" id="top-cart-trigger"><i class="icon-line-bag"></i><span
                                        class="top-cart-number">5</span></a>
                            <div class="top-cart-content">
                                <div class="top-cart-title">
                                    <h4>Shopping Cart</h4>
                                </div>
                                <div class="top-cart-items">
                                    <div class="top-cart-item">
                                        <div class="top-cart-item-image">
                                            <a href="#"><img
                                                        src="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/images/shop/small/1.jpg"
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
                                            <a href="#"><img
                                                        src="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/images/shop/small/6.jpg"
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
                                    <a href="<?php echo \MVC\controllers\UrlControllers::url("shop/cart") ?>"
                                       class="button button-3d button-small m-0">View Cart</a>
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
                            <li class="menu-item current"><a class="menu-link"
                                                             href="<?php echo \MVC\controllers\UrlControllers::url(); ?>">
                                    <div><?php echo \MVC\libs\Languages::getLangData("Home"); ?><</div>
                                </a>
                            </li>
                            <!-- Mega Menu
                            ============================================= -->

                            <?php
                            echo \MVC\controllers\CategoryControllers::printListCategoryIncludeSub();
                            ?>

                            <li class="menu-item">
                                <a class="menu-link" href="<?php echo \MVC\controllers\UrlControllers::url("shop") ?>">
                                    <div>Shop</div>
                                </a>
                                <ul class="sub-menu-container">
                                    <li class="menu-item">
                                        <a class="menu-link"
                                           href="<?php echo \MVC\controllers\UrlControllers::url("shop/cart") ?>">
                                            <div>Cart</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a class="menu-link"
                                           href="<?php echo \MVC\controllers\UrlControllers::url("shop/checkout") ?>">
                                            <div>Checkout</div>
                                        </a>
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
                                    $checkout_cart = !empty($data[1]) ? "shop/{$data[1]}" : "";
                                    \MVC\controllers\RenderControllers::redirectAfterSecondPage($checkout_cart);
                                }
                            }
                        }

                    }
                    ?>
                </div>
            </div>
        </div>
    </section><!-- #content end -->

    <?php require_once "./src/views/pages/blocks/footer.php"; ?>
