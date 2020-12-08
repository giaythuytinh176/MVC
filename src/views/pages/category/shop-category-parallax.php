<?php require_once "./src/views/pages/blocks/css.php"; ?>

    <!-- Document Title
    ============================================= -->
    <title>Shop Categories | Tam Le</title>

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
            <h1>Shop Categories</h1>
            <span><?php echo $data[1]; ?> -  Our Shop Categories</span>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Shop</a></li>
                <li class="breadcrumb-item active" aria-current="page">Categories</li>
            </ol>
        </div>

    </section><!-- #page-title end -->

    <!-- Content
    ============================================= -->
    <section id="content">
        <div class="content-wrap">

            <div id="shop-categories" class="header-stick footer-stick clearfix">

                <?php
                echo (new \MVC\Controllers\CategoryControllers)->PrintListProductCategory($data);
                ?>

            </div>
        </div>
    </section><!-- #content end -->

    <?php require_once "./src/views/pages/blocks/footer.php"; ?>
