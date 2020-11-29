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
    <title>Shop Single | Canvas</title>

</head>

<body class="stretched">

<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="clearfix">

    <?php require_once "./src/views/pages/blocks/header.php"; ?>

    <!-- Page Title
    ============================================= -->
    <section id="page-title">

        <div class="container clearfix">
            <h1><?php echo ((!empty($data[0]['ProductName'])) ? $data[0]['ProductName'] : "Not Found.");?></h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Shop</a></li>
                <li class="breadcrumb-item active" aria-current="page">Shop Single</li>
            </ol>
        </div>

    </section><!-- #page-title end -->

    <!-- Content
    ============================================= -->
    <section id="content">
        <div class="content-wrap">
            <div class="container clearfix">

                <?php echo (new \MVC\controllers\ProductControllers())->showDetailProduct($data); ?>

                <div class="line"></div>
                <div class="w-100">
                    <h4>Related Products</h4>
                    <div class="owl-carousel product-carousel carousel-widget" data-margin="30" data-pagi="false"
                         data-autoplay="5000" data-items-xs="1" data-items-md="2" data-items-lg="3" data-items-xl="4">
                        <div class="oc-item">
                            <div class="product">
                                <div class="product-image">
                                    <a href="#"><img
                                                src="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/images/shop/dress/1.jpg"
                                                alt="Checked Short Dress"></a>
                                    <a href="#"><img
                                                src="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/images/shop/dress/1-1.jpg"
                                                alt="Checked Short Dress"></a>
                                    <div class="badge badge-success p-2">50% Off*</div>
                                    <div class="bg-overlay">
                                        <div class="bg-overlay-content align-items-end justify-content-between"
                                             data-hover-animate="fadeIn" data-hover-speed="400">
                                            <a href="#" class="btn btn-dark mr-2"><i class="icon-shopping-cart"></i></a>
                                            <a href="include/ajax/shop-item.html" class="btn btn-dark"
                                               data-lightbox="ajax"><i class="icon-line-expand"></i></a>
                                        </div>
                                        <div class="bg-overlay-bg bg-transparent"></div>
                                    </div>
                                </div>
                                <div class="product-desc center">
                                    <div class="product-title"><h3><a href="#">Checked Short Dress</a></h3></div>
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

                        <div class="oc-item">
                            <div class="product">
                                <div class="product-image">
                                    <a href="#"><img
                                                src="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/images/shop/pants/1-1.jpg"
                                                alt="Slim Fit Chinos"></a>
                                    <a href="#"><img
                                                src="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/images/shop/pants/1.jpg"
                                                alt="Slim Fit Chinos"></a>
                                    <div class="bg-overlay">
                                        <div class="bg-overlay-content align-items-end justify-content-between"
                                             data-hover-animate="fadeIn" data-hover-speed="400">
                                            <a href="#" class="btn btn-dark mr-2"><i class="icon-shopping-cart"></i></a>
                                            <a href="include/ajax/shop-item.html" class="btn btn-dark"
                                               data-lightbox="ajax"><i class="icon-line-expand"></i></a>
                                        </div>
                                        <div class="bg-overlay-bg bg-transparent"></div>
                                    </div>
                                </div>
                                <div class="product-desc center">
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

                        <div class="oc-item">
                            <div class="product">
                                <div class="product-image">
                                    <a href="#"><img
                                                src="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/images/shop/shoes/1-1.jpg"
                                                alt="Dark Brown Boots"></a>
                                    <a href="#"><img
                                                src="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/images/shop/shoes/1.jpg"
                                                alt="Dark Brown Boots"></a>
                                    <div class="bg-overlay">
                                        <div class="bg-overlay-content align-items-end justify-content-between"
                                             data-hover-animate="fadeIn" data-hover-speed="400">
                                            <a href="#" class="btn btn-dark mr-2"><i class="icon-shopping-cart"></i></a>
                                            <a href="include/ajax/shop-item.html" class="btn btn-dark"
                                               data-lightbox="ajax"><i class="icon-line-expand"></i></a>
                                        </div>
                                        <div class="bg-overlay-bg bg-transparent"></div>
                                    </div>
                                </div>
                                <div class="product-desc center">
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

                        <div class="oc-item">
                            <div class="product">
                                <div class="product-image">
                                    <a href="#"><img
                                                src="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/images/shop/dress/2.jpg"
                                                alt="Light Blue Denim Dress"></a>
                                    <a href="#"><img
                                                src="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/images/shop/dress/2-2.jpg"
                                                alt="Light Blue Denim Dress"></a>
                                    <div class="bg-overlay">
                                        <div class="bg-overlay-content align-items-end justify-content-between"
                                             data-hover-animate="fadeIn" data-hover-speed="400">
                                            <a href="#" class="btn btn-dark mr-2"><i class="icon-shopping-cart"></i></a>
                                            <a href="include/ajax/shop-item.html" class="btn btn-dark"
                                               data-lightbox="ajax"><i class="icon-line-expand"></i></a>
                                        </div>
                                        <div class="bg-overlay-bg bg-transparent"></div>
                                    </div>
                                </div>
                                <div class="product-desc center">
                                    <div class="product-title"><h3><a href="#">Light Blue Denim Dress</a></h3></div>
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
                        <div class="oc-item">
                            <div class="product">
                                <div class="product-image">
                                    <a href="#"><img
                                                src="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/images/shop/sunglasses/1.jpg"
                                                alt="Unisex Sunglasses"></a>
                                    <a href="#"><img
                                                src="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/images/shop/sunglasses/1-1.jpg"
                                                alt="Unisex Sunglasses"></a>
                                    <div class="badge badge-success p-2">Sale!</div>
                                    <div class="bg-overlay">
                                        <div class="bg-overlay-content align-items-end justify-content-between"
                                             data-hover-animate="fadeIn" data-hover-speed="400">
                                            <a href="#" class="btn btn-dark mr-2"><i class="icon-shopping-cart"></i></a>
                                            <a href="include/ajax/shop-item.html" class="btn btn-dark"
                                               data-lightbox="ajax"><i class="icon-line-expand"></i></a>
                                        </div>
                                        <div class="bg-overlay-bg bg-transparent"></div>
                                    </div>
                                </div>
                                <div class="product-desc center">
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
                    </div>
                </div>
            </div>
        </div>
    </section><!-- #content end -->

    <?php require_once "./src/views/pages/blocks/footer.php"; ?>
