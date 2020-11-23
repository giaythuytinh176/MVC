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
    <title>Shop | Canvas</title>

</head>

<body class="stretched">

<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="clearfix">

    <?php require_once "./src/views/pages/blocks/header.php"; ?>

    <!-- Page Title
    ============================================= -->
    <section id="page-title">
        <div class="container clearfix"><?php
            echo '<h1>' . $data[1] . '</h1>';
            $DataTitle = (new \MVC\controllers\CategoryControllers())->getDetaiElementbyCode($data[2][0]);
            $DataTitleSub = (new \MVC\controllers\CategoryControllers())->getDetailElementbyCodeSub($data[2][0]);
            $title = (!empty($DataTitle['title']) ? $DataTitle['title'] : ((!empty($DataTitleSub['title'])) ? $DataTitleSub['title'] : "Not found."));
            ?>
            <span><?php echo $title; ?></span>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Category</a></li>
                <li class="breadcrumb-item"><a
                            href="<?php str_replace("/" . $DataTitle['code'], "", \MVC\controllers\UrlControllers::url($data[1])) ?>"><?php echo ucfirst($data[1]); ?></a>
                </li>
                <li class="breadcrumb-item active"
                    aria-current="page"><?php echo $title; ?></li>
            </ol>
        </div>
    </section><!-- #page-title end -->

    <!-- Content
    ============================================= -->
    <section id="content">
        <div class="content-wrap">
            <div class="container clearfix">
                <!-- Shop
                ============================================= -->
                <div id="shop" class="shop row grid-container gutter-30" data-layout="fitRows">
                    <?php
                    if (empty($data[0]['errors'])) {
                        echo \MVC\controllers\ProductControllers::printListItems($data[0]);
                    } else {
                        echo '<div class=\'product col-lg-3 col-md-4 col-sm-6 col-12\'><h4>' . \MVC\libs\Languages::getLangData("No products.") . '</h4></div>';
                    }
                    ?>
                </div><!-- #shop end -->

            </div>
        </div>
    </section><!-- #content end -->

    <?php require_once "./src/views/pages/blocks/footer.php"; ?>
