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
    <title>Checkout | Canvas</title>

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
                            <li class="menu-item"><a class="menu-link"
                                                     href="<?php echo \MVC\controllers\UrlControllers::url(); ?>">
                                    <div><?php echo \MVC\libs\Languages::getLangData("Home"); ?></div>
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
                                        <a class="menu-link "
                                           href="<?php echo \MVC\controllers\UrlControllers::url("shop/checkout") ?>">
                                            <div>Checkout<</div>
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
            <h1>Checkout</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Shop</a></li>
                <li class="breadcrumb-item active" aria-current="page">Checkout</li>
            </ol>
        </div>

    </section><!-- #page-title end -->

    <!-- Content
    ============================================= -->
    <section id="content">
        <div class="content-wrap">
            <div class="container clearfix">

                <div class="row col-mb-30 gutter-50 mb-4">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                Returning customer? <a
                                        href="<?php echo \MVC\controllers\UrlControllers::url("shop/login/checkout") ?>">Click
                                    here to login</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                Have a coupon? <a href="login-register.html">Click here to enter your code</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row col-mb-50 gutter-50">
                    <div class="col-lg-6">
                        <h3>Billing Address</h3>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, vel odio non dicta provident
                            sint ex autem mollitia dolorem illum repellat ipsum aliquid illo similique sapiente fugiat
                            minus ratione.</p>

                        <form id="billing-form" name="billing-form" class="row mb-0" action="#" method="post">

                            <div class="col-md-6 form-group">
                                <label for="billing-form-name">Name:</label>
                                <input type="text" id="billing-form-name" name="billing-form-name" value=""
                                       class="sm-form-control"/>
                            </div>

                            <div class="col-md-6 form-group">
                                <label for="billing-form-lname">Last Name:</label>
                                <input type="text" id="billing-form-lname" name="billing-form-lname" value=""
                                       class="sm-form-control"/>
                            </div>

                            <div class="w-100"></div>

                            <div class="col-12 form-group">
                                <label for="billing-form-companyname">Company Name:</label>
                                <input type="text" id="billing-form-companyname" name="billing-form-companyname"
                                       value="" class="sm-form-control"/>
                            </div>

                            <div class="col-12 form-group">
                                <label for="billing-form-address">Address:</label>
                                <input type="text" id="billing-form-address" name="billing-form-address" value=""
                                       class="sm-form-control"/>
                            </div>

                            <div class="col-12 form-group">
                                <input type="text" id="billing-form-address2" name="billing-form-adress" value=""
                                       class="sm-form-control"/>
                            </div>

                            <div class="col-12 form-group">
                                <label for="billing-form-city">City / Town</label>
                                <input type="text" id="billing-form-city" name="billing-form-city" value=""
                                       class="sm-form-control"/>
                            </div>

                            <div class="col-md-6 form-group">
                                <label for="billing-form-email">Email Address:</label>
                                <input type="email" id="billing-form-email" name="billing-form-email" value=""
                                       class="sm-form-control"/>
                            </div>

                            <div class="col-md-6 form-group">
                                <label for="billing-form-phone">Phone:</label>
                                <input type="text" id="billing-form-phone" name="billing-form-phone" value=""
                                       class="sm-form-control"/>
                            </div>

                        </form>
                    </div>

                    <div class="col-lg-6">
                        <h3>Shipping Address</h3>

                        <form id="shipping-form" name="shipping-form" class="row mb-0" action="#" method="post">

                            <div class="col-md-6 form-group">
                                <label for="shipping-form-name">Name:</label>
                                <input type="text" id="shipping-form-name" name="shipping-form-name" value=""
                                       class="sm-form-control"/>
                            </div>

                            <div class="col-md-6 form-group">
                                <label for="shipping-form-lname">Last Name:</label>
                                <input type="text" id="shipping-form-lname" name="shipping-form-lname" value=""
                                       class="sm-form-control"/>
                            </div>

                            <div class="w-100"></div>

                            <div class="col-12 form-group">
                                <label for="shipping-form-companyname">Company Name:</label>
                                <input type="text" id="shipping-form-companyname" name="shipping-form-companyname"
                                       value="" class="sm-form-control"/>
                            </div>

                            <div class="col-12 form-group">
                                <label for="shipping-form-address">Address:</label>
                                <input type="text" id="shipping-form-address" name="shipping-form-address" value=""
                                       class="sm-form-control"/>
                            </div>

                            <div class="col-12 form-group">
                                <input type="text" id="shipping-form-address2" name="shipping-form-adress" value=""
                                       class="sm-form-control"/>
                            </div>

                            <div class="col-12 form-group">
                                <label for="shipping-form-city">City / Town</label>
                                <input type="text" id="shipping-form-city" name="shipping-form-city" value=""
                                       class="sm-form-control"/>
                            </div>

                            <div class="col-12 form-group">
                                <label for="shipping-form-message">Notes <small>*</small></label>
                                <textarea class="sm-form-control" id="shipping-form-message"
                                          name="shipping-form-message" rows="6" cols="30"></textarea>
                            </div>

                        </form>
                    </div>

                    <div class="w-100"></div>

                    <div class="col-lg-6">
                        <h4>Your Orders</h4>

                        <div class="table-responsive">
                            <table class="table cart">
                                <thead>
                                <tr>
                                    <th class="cart-product-thumbnail">&nbsp;</th>
                                    <th class="cart-product-name">Product</th>
                                    <th class="cart-product-quantity">Quantity</th>
                                    <th class="cart-product-subtotal">Total</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="cart_item">
                                    <td class="cart-product-thumbnail">
                                        <a href="#"><img width="64" height="64"
                                                         src="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/images/shop/thumbs/small/dress-3.jpg"
                                                         alt="Pink Printed Dress"></a>
                                    </td>

                                    <td class="cart-product-name">
                                        <a href="#">Pink Printed Dress</a>
                                    </td>

                                    <td class="cart-product-quantity">
                                        <div class="quantity clearfix">
                                            1x2
                                        </div>
                                    </td>

                                    <td class="cart-product-subtotal">
                                        <span class="amount">$39.98</span>
                                    </td>
                                </tr>
                                <tr class="cart_item">
                                    <td class="cart-product-thumbnail">
                                        <a href="#"><img width="64" height="64"
                                                         src="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/images/shop/thumbs/small/shoes-2.jpg"
                                                         alt="Checked Canvas Shoes"></a>
                                    </td>

                                    <td class="cart-product-name">
                                        <a href="#">Checked Canvas Shoes</a>
                                    </td>

                                    <td class="cart-product-quantity">
                                        <div class="quantity clearfix">
                                            1x1
                                        </div>
                                    </td>

                                    <td class="cart-product-subtotal">
                                        <span class="amount">$24.99</span>
                                    </td>
                                </tr>
                                <tr class="cart_item">
                                    <td class="cart-product-thumbnail">
                                        <a href="#"><img width="64" height="64"
                                                         src="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/images/shop/thumbs/small/tshirt-2.jpg"
                                                         alt="Pink Printed Dress"></a>
                                    </td>

                                    <td class="cart-product-name">
                                        <a href="#">Blue Men Tshirt</a>
                                    </td>

                                    <td class="cart-product-quantity">
                                        <div class="quantity clearfix">
                                            1x3
                                        </div>
                                    </td>

                                    <td class="cart-product-subtotal">
                                        <span class="amount">$41.97</span>
                                    </td>
                                </tr>
                                </tbody>

                            </table>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <h4>Cart Totals</h4>

                        <div class="table-responsive">
                            <table class="table cart">
                                <tbody>
                                <tr class="cart_item">
                                    <td class="border-top-0 cart-product-name">
                                        <strong>Cart Subtotal</strong>
                                    </td>

                                    <td class="border-top-0 cart-product-name">
                                        <span class="amount">$106.94</span>
                                    </td>
                                </tr>
                                <tr class="cart_item">
                                    <td class="cart-product-name">
                                        <strong>Shipping</strong>
                                    </td>

                                    <td class="cart-product-name">
                                        <span class="amount">Free Delivery</span>
                                    </td>
                                </tr>
                                <tr class="cart_item">
                                    <td class="cart-product-name">
                                        <strong>Total</strong>
                                    </td>

                                    <td class="cart-product-name">
                                        <span class="amount color lead"><strong>$106.94</strong></span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="accordion clearfix">
                            <div class="accordion-header">
                                <div class="accordion-icon">
                                    <i class="accordion-closed icon-line-minus"></i>
                                    <i class="accordion-open icon-line-check"></i>
                                </div>
                                <div class="accordion-title">
                                    Direct Bank Transfer
                                </div>
                            </div>
                            <div class="accordion-content clearfix">Donec sed odio dui. Nulla vitae elit libero, a
                                pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere
                                erat a ante venenatis dapibus posuere velit aliquet.
                            </div>

                            <div class="accordion-header">
                                <div class="accordion-icon">
                                    <i class="accordion-closed icon-line-minus"></i>
                                    <i class="accordion-open icon-line-check"></i>
                                </div>
                                <div class="accordion-title">
                                    Cheque Payment
                                </div>
                            </div>
                            <div class="accordion-content clearfix">Integer posuere erat a ante venenatis dapibus
                                posuere velit aliquet. Duis mollis, est non commodo luctus. Aenean lacinia bibendum
                                nulla sed consectetur. Cras mattis consectetur purus sit amet fermentum.
                            </div>

                            <div class="accordion-header">
                                <div class="accordion-icon">
                                    <i class="accordion-closed icon-line-minus"></i>
                                    <i class="accordion-open icon-line-check"></i>
                                </div>
                                <div class="accordion-title">
                                    Paypal
                                </div>
                            </div>
                            <div class="accordion-content clearfix">Nullam id dolor id nibh ultricies vehicula ut id
                                elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis,
                                est non commodo luctus. Aenean lacinia bibendum nulla sed consectetur.
                            </div>
                        </div>
                        <a href="#" class="button button-3d float-right">Place Order</a>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- #content end -->

    <?php require_once "./src/views/pages/blocks/footer.php"; ?>
