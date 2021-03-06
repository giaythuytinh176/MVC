<?php require_once "./src/views/pages/blocks/css.php"; ?>

<!-- SLIDER REVOLUTION 5.x CSS SETTINGS -->
<link rel="stylesheet" type="text/css"
      href="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/include/rs-plugin/css/settings.css"
      media="screen"/>
<link rel="stylesheet" type="text/css"
      href="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/include/rs-plugin/css/layers.css">
<link rel="stylesheet" type="text/css"
      href="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/include/rs-plugin/css/navigation.css">

<!-- Document Title
============================================= -->
<title>Home - Shop | Tam Le</title>

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
                                                    src="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/images/icons/flags/french.png"
                                                    alt="French"> FR</a></li>
                                    <li class="top-links-item"><a
                                                href="<?php echo \MVC\controllers\UrlControllers::url("lang/vietnamese") ?>"><img
                                                    src="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/images/icons/flags/vietnamese.png"
                                                    alt="Vietnamese"> VI</a></li>
                                    <li class="top-links-item"><a
                                                href="<?php echo \MVC\controllers\UrlControllers::url("lang/english") ?>"><img
                                                    src="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/images/icons/flags/english.png"
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
                                        <li class="top-links-item">
                                            <a href="<?php echo \MVC\controllers\UrlControllers::url("shop/login/logout"); ?>"
                                               class="list-group-item list-group-item-action d-flex justify-content-between">
                                                <div><?php echo \MVC\libs\Languages::getLangData("Logout"); ?></div>
                                                <i class="icon-line2-logout"></i></a>
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

    <?php require_once "./src/views/pages/blocks/header.php"; ?>

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
                                    src="https://cdn.cellphones.com.vn/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/m/b/mbp-silver-select-202011_2.jpg"
                                    alt="Macbook M1 2020"></div>

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
                             data-endeasing="Power4.easeIn" style=" color: #333;">Get your Shopping Laptop Ready
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
                            <?php echo \MVC\libs\Languages::getLangData("Latest Laptop models"); ?>
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
                             style=" color: #333; max-width: 550px; white-space: normal;">MacBook Pro 13 Touch Bar M1
                            512GB 2020
                            &amp; mạnh mẽ, ấn tượng.
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
                             data-endeasing="Power4.easeIn"><a
                                    href="<?php echo \MVC\controllers\UrlControllers::url("") ?>/category/may-tinh-xach-tay/macbook"
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
                                    src="https://cdn.cellphones.com.vn/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/p/h/photo_2020-10-13_22-12-24.jpg_1_2.png"
                                    alt="iPhone 12 Pro Max Chính Hãng (VN/A)"></div>

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
                             data-endeasing="Power4.easeIn" style=" color: #333;">Điện thoại iPhone 12 Pro Max: Nâng tầm
                            đẳng cấp sử dụng
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
                             data-endeasing="Power4.easeIn" style=" color: #333; line-height: 1.15;">Điện thoại iPhone
                            12 Pro Max
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
                             style=" color: #333; max-width: 550px; white-space: normal;">Màn hình 6.7 inches Super
                            Retina XDR .
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
                             data-endeasing="Power4.easeIn"><a
                                    href="<?php echo \MVC\controllers\UrlControllers::url("") ?>/category/dien-thoai/apple/iphone12"
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
                                    src="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/images/slider/rev/shop/tag.png"
                                    alt="Bag"></div>

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
                                <a href="<?php echo \MVC\controllers\UrlControllers::url("") ?>/category/may-tinh-xach-tay/asus"
                                   class="grid-inner d-block h-100"
                                   style="background-image: url('https://cdn.cellphones.com.vn/media/catalog/product/cache/1/small_image/220x175/9df78eab33525d08d6e5fb8d27136e95/_/0/_0004_asus-zenbook-duo-ux481fl-bm049t.jpg');"></a>
                            </div>

                            <div class="col-md-6 min-vh-25 min-vh-md-0">
                                <a href="<?php echo \MVC\controllers\UrlControllers::url("") ?>/category/nha-thong-minh/may-hut-bui"
                                   class="grid-inner d-block h-100"
                                   style="background-image: url('https://cdn.cellphones.com.vn/media/catalog/product/cache/1/small_image/450x/9df78eab33525d08d6e5fb8d27136e95/x/i/xiaomi-pro-styj02ym-mijia-mi-robot-vacuum-mop-p-sweeping-cleaner-2-lds-radar-app-control.jpg_q50.jpg'); background-position: right center;"></a>
                            </div>

                            <div class="col-md-12 min-vh-25 min-vh-md-0 pb-md-0">
                                <a href="<?php echo \MVC\controllers\UrlControllers::url("") ?>/category/may-tinh-xach-tay/microsoft-surface"
                                   class="grid-inner d-block h-100"
                                   style="background-image: url('https://cdn.cellphones.com.vn/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/s/u/surface-pro-7__0003_13.jpg');"></a>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-4 min-vh-50">
                        <a href="<?php echo \MVC\controllers\UrlControllers::url("") ?>/category/may-tinh-bang"
                           class="grid-inner d-block h-100"
                           style="background-image: url('https://cdn.cellphones.com.vn/media/catalog/product/cache/1/small_image/220x175/9df78eab33525d08d6e5fb8d27136e95/i/p/ipad-pro-11-select-cell-silver-202003-removebg-preview.png.jpg'); background-position: center top;"></a>
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

                                <?php
                                $sout = '';
                                if (empty((new \MVC\Controllers\ProductControllers())->getAllProductbyViewLimitFour()['errors'])) {
                                    foreach ((new \MVC\Controllers\ProductControllers())->getAllProductbyViewLimitFour() as $val) {
                                        $sout .= '<div class="product col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="grid-inner">
                                        <div class="product-image">
                                          ';

//                                        if (!empty($val['img_list'])) {
//                                            foreach (explode(PHP_EOL, $val['img_list']) as $value) {
//                                                $sout .= '
//                                                <a href="#"><img
//                                                        src="' . $value . '"
//                                                        alt="Checked ' . $val['ProductName'] . '"></a>';
//                                            }
//                                        } else {
//                                            $sout .= "Not Found.";
//                                        }

                                        if (!empty(explode(PHP_EOL, $val['img_list'])[0])) $sout .= '<a href="#"><img src="' . explode(PHP_EOL, $val['img_list'])[0] . '" alt="Checked ' . $val['ProductName'] . '"></a>';
                                        if (!empty(explode(PHP_EOL, $val['img_list'])[1])) $sout .= '<a href="#"><img src="' . explode(PHP_EOL, $val['img_list'])[1] . '" alt="Checked ' . $val['ProductName'] . '"></a>';
                                        $product_price = (!empty($val['discount']) && $val['discount'] > 0) ? '<del>' . ((!empty($val['price'])) ? number_format($val['price']) : "0") . ' ₫ </del><ins>' . ((!empty($val['price'])) ? number_format(($val['price'] * (100 - $val['discount']) / 100)) : "0") . '₫ </ins>' : '<ins>' . ((!empty($val['price'])) ? number_format($val['price']) : "0") . ' ₫ </ins>';
                                        $NameProductToString = \MVC\Controllers\ToolControllers::ConvertName($val);

                                        $sout .= '                
                                            <div class="sale-flash badge badge-success p-2">50% Off*</div>
                                            <div class="bg-overlay">
                                                <div class="bg-overlay-content align-items-end justify-content-between"
                                                     data-hover-animate="fadeIn" data-hover-speed="400">';
                                        $sout .= '<form class="cart mb-0" action="' . \MVC\Controllers\UrlControllers::url("shop/cart") . '" method="post" enctype=\'multipart/form-data\'>
                                                    <input type="hidden" name="qty" value="1"/>
                                                    <input type="hidden" name="cart_items[' . $val['product_id'] . '][qty]" value="1"/>
                                                    <input type="hidden" name="cart_items[' . $val['product_id'] . '][price]" value="' . ((!empty($val['discount']) && $val['discount'] > 0) ? ($val['price'] * (100 - $val['discount']) / 100) : $val['price']) . '"/>
                                                    <input type="hidden" name="cart_items[' . $val['product_id'] . '][product_id]" value="' . $val['product_id'] . '"/>
                                                    <input type="hidden" name="cart_items[' . $val['product_id'] . '][product_name]" value="' . urlencode($val['ProductName']) . '"/>
                                                      <button type="submit" name="btn" value="submit" class="btn btn-dark mr-2"><i class="icon-shopping-basket"></i></button>
                                                   </form>';
                                        $sout .= '<a href="' . \MVC\Controllers\UrlControllers::url("src/views/pages/index/include/ajax/shop-item.php?product_id=" . $val['product_id']) . '" class="btn btn-dark" data-lightbox="ajax"><i class="icon-line-expand"></i></a>';

                                        $sout .= '  
                                                </div>
                                                <div class="bg-overlay-bg bg-transparent"></div>
                                            </div>
                                        </div>
                                        <div class="product-desc">
                                            <div class="product-title">
                                                <h3><a href="' . \MVC\Controllers\UrlControllers::url("category/" . $val['category_parent'] . "/" . $val['pc_code'] . "/" . $val['product_id'] . "-$NameProductToString.html") . '">' . $val['ProductName'] . '</a></h3>
                                            </div>
                                            <div class="product-price">
                                                ' . $product_price . '
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
                                </div>';

                                    }
                                }
                                echo $sout;
                                ?>


                            </div>

                        </div>

                        <div class="tab-content" id="tabs-10">

                            <div class="shop row gutter-30">

                                <div class="product col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="grid-inner">
                                        <div class="product-image">
                                            <a href="#"><img
                                                        src="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/images/shop/sunglasses/1.jpg"
                                                        alt="Unisex Sunglasses"></a>
                                            <a href="#"><img
                                                        src="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/images/shop/sunglasses/1-1.jpg"
                                                        alt="Unisex Sunglasses"></a>
                                            <div class="sale-flash badge badge-danger p-2">Sale!</div>
                                            <div class="bg-overlay">
                                                <div class="bg-overlay-content align-items-end justify-content-between"
                                                     data-hover-animate="fadeIn" data-hover-speed="400">
                                                    <a href="#" class="btn btn-dark mr-2"><i
                                                                class="icon-shopping-basket"></i></a>
                                                    <a href="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/include/ajax/shop-item.html"
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
                                            <a href="#"><img
                                                        src="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/images/shop/tshirts/1.jpg"
                                                        alt="Blue Round-Neck Tshirt"></a>
                                            <a href="#"><img
                                                        src="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/images/shop/tshirts/1-1.jpg"
                                                        alt="Blue Round-Neck Tshirt"></a>
                                            <div class="bg-overlay">
                                                <div class="bg-overlay-content align-items-end justify-content-between"
                                                     data-hover-animate="fadeIn" data-hover-speed="400">
                                                    <a href="#" class="btn btn-dark mr-2"><i
                                                                class="icon-shopping-basket"></i></a>
                                                    <a href="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/include/ajax/shop-item.html"
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
                                            <a href="#"><img
                                                        src="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/images/shop/watches/1.jpg"
                                                        alt="Silver Chrome Watch"></a>
                                            <a href="#"><img
                                                        src="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/images/shop/watches/1-1.jpg"
                                                        alt="Silver Chrome Watch"></a>
                                            <div class="bg-overlay">
                                                <div class="bg-overlay-content align-items-end justify-content-between"
                                                     data-hover-animate="fadeIn" data-hover-speed="400">
                                                    <a href="#" class="btn btn-dark mr-2"><i
                                                                class="icon-shopping-basket"></i></a>
                                                    <a href="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/include/ajax/shop-item.html"
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
                                            <a href="#"><img
                                                        src="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/images/shop/shoes/2.jpg"
                                                        alt="Men Grey Casual Shoes"></a>
                                            <a href="#"><img
                                                        src="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/images/shop/shoes/2-1.jpg"
                                                        alt="Men Grey Casual Shoes"></a>
                                            <div class="sale-flash badge badge-danger p-2">Sale!</div>
                                            <div class="bg-overlay">
                                                <div class="bg-overlay-content align-items-end justify-content-between"
                                                     data-hover-animate="fadeIn" data-hover-speed="400">
                                                    <a href="#" class="btn btn-dark mr-2"><i
                                                                class="icon-shopping-basket"></i></a>
                                                    <a href="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/include/ajax/shop-item.html"
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
                                                                        src="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/images/shop/dress/3.jpg"
                                                                        alt="Pink Printed Dress"></a></div>
                                                        <div class="slide"><a href="#"><img
                                                                        src="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/images/shop/dress/3-1.jpg"
                                                                        alt="Pink Printed Dress"></a></div>
                                                        <div class="slide"><a href="#"><img
                                                                        src="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/images/shop/dress/3-2.jpg"
                                                                        alt="Pink Printed Dress"></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="bg-overlay">
                                                <div class="bg-overlay-content align-items-end justify-content-between"
                                                     data-hover-animate="fadeIn" data-hover-speed="400">
                                                    <a href="#" class="btn btn-dark mr-2"><i
                                                                class="icon-shopping-basket"></i></a>
                                                    <a href="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/include/ajax/shop-item.html"
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
                                            <a href="#"><img
                                                        src="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/images/shop/pants/5.jpg"
                                                        alt="Green Trousers"></a>
                                            <a href="#"><img
                                                        src="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/images/shop/pants/5-1.jpg"
                                                        alt="Green Trousers"></a>
                                            <div class="sale-flash badge badge-danger p-2">Sale!</div>
                                            <div class="bg-overlay">
                                                <div class="bg-overlay-content align-items-end justify-content-between"
                                                     data-hover-animate="fadeIn" data-hover-speed="400">
                                                    <a href="#" class="btn btn-dark mr-2"><i
                                                                class="icon-shopping-basket"></i></a>
                                                    <a href="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/include/ajax/shop-item.html"
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
                                            <a href="#"><img
                                                        src="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/images/shop/sunglasses/2.jpg"
                                                        alt="Men Aviator Sunglasses"></a>
                                            <a href="#"><img
                                                        src="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/images/shop/sunglasses/2-1.jpg"
                                                        alt="Men Aviator Sunglasses"></a>
                                            <div class="bg-overlay">
                                                <div class="bg-overlay-content align-items-end justify-content-between"
                                                     data-hover-animate="fadeIn" data-hover-speed="400">
                                                    <a href="#" class="btn btn-dark mr-2"><i
                                                                class="icon-shopping-basket"></i></a>
                                                    <a href="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/include/ajax/shop-item.html"
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
                                            <a href="#"><img
                                                        src="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/images/shop/tshirts/4.jpg"
                                                        alt="Black Polo Tshirt"></a>
                                            <a href="#"><img
                                                        src="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/images/shop/tshirts/4-1.jpg"
                                                        alt="Black Polo Tshirt"></a>
                                            <div class="bg-overlay">
                                                <div class="bg-overlay-content align-items-end justify-content-between"
                                                     data-hover-animate="fadeIn" data-hover-speed="400">
                                                    <a href="#" class="btn btn-dark mr-2"><i
                                                                class="icon-shopping-basket"></i></a>
                                                    <a href="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/include/ajax/shop-item.html"
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
                        <form id="widget-subscribe-form2"
                              action="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/include/subscribe.php"
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
                    <li class="grid-item"><a href="#"><img
                                    src="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/images/clients/logo/1.png"
                                    alt="Clients"></a></li>
                    <li class="grid-item"><a href="#"><img
                                    src="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/images/clients/logo/2.png"
                                    alt="Clients"></a></li>
                    <li class="grid-item"><a href="#"><img
                                    src="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/images/clients/logo/3.png"
                                    alt="Clients"></a></li>
                    <li class="grid-item"><a href="#"><img
                                    src="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/images/clients/logo/4.png"
                                    alt="Clients"></a></li>
                    <li class="grid-item"><a href="#"><img
                                    src="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/images/clients/logo/5.png"
                                    alt="Clients"></a></li>
                    <li class="grid-item"><a href="#"><img
                                    src="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/images/clients/logo/6.png"
                                    alt="Clients"></a></li>
                    <li class="grid-item"><a href="#"><img
                                    src="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/images/clients/logo/7.png"
                                    alt="Clients"></a></li>
                    <li class="grid-item"><a href="#"><img
                                    src="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/images/clients/logo/8.png"
                                    alt="Clients"></a></li>
                    <li class="grid-item"><a href="#"><img
                                    src="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/images/clients/logo/9.png"
                                    alt="Clients"></a></li>
                    <li class="grid-item"><a href="#"><img
                                    src="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/images/clients/logo/10.png"
                                    alt="Clients"></a></li>
                    <li class="grid-item"><a href="#"><img
                                    src="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/images/clients/logo/11.png"
                                    alt="Clients"></a></li>
                    <li class="grid-item"><a href="#"><img
                                    src="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/images/clients/logo/12.png"
                                    alt="Clients"></a></li>
                    <li class="grid-item"><a href="#"><img
                                    src="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/images/clients/logo/13.png"
                                    alt="Clients"></a></li>
                    <li class="grid-item"><a href="#"><img
                                    src="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/images/clients/logo/14.png"
                                    alt="Clients"></a></li>
                    <li class="grid-item"><a href="#"><img
                                    src="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/images/clients/logo/15.png"
                                    alt="Clients"></a></li>
                    <li class="grid-item"><a href="#"><img
                                    src="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/images/clients/logo/16.png"
                                    alt="Clients"></a></li>
                    <li class="grid-item"><a href="#"><img
                                    src="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/images/clients/logo/19.png"
                                    alt="Clients"></a></li>
                    <li class="grid-item"><a href="#"><img
                                    src="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/images/clients/logo/18.png"
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
                            <img src="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/images/services/4.jpg"
                                 alt="Image" class="mb-0">
                        </div>

                        <div class="col-md-6 mb-5 subscribe-widget">
                            <div class="heading-block">
                                <h3><strong>GET 20% OFF*</strong></h3>
                                <span>Our App scales beautifully to different Devices.</span>
                            </div>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet cumque, perferendis
                                accusamus porro illo exercitationem molestias.</p>

                            <div class="widget-subscribe-form-result"></div>
                            <form id="widget-subscribe-form3"
                                  action="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/include/subscribe.php"
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

    <?php require_once "./src/views/pages/blocks/footer.php"; ?>

    <!-- SLIDER REVOLUTION 5.x SCRIPTS  -->
    <script src="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/include/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script src="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/include/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

    <script src="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/include/rs-plugin/js/extensions/revolution.extension.video.min.js"></script>
    <script src="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/include/rs-plugin/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/include/rs-plugin/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/include/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/include/rs-plugin/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/include/rs-plugin/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/include/rs-plugin/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/include/rs-plugin/js/extensions/revolution.extension.parallax.min.js"></script>

    <script>

        var tpj = jQuery;
        tpj.noConflict();
        var $ = jQuery.noConflict();

        tpj(document).ready(function () {

            var apiRevoSlider = tpj('#rev_slider_ishop').show().revolution(
                {
                    sliderType: "standard",
                    jsFileLocation: "<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/include/rs-plugin/js/",
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