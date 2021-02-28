<?php require_once "./src/views/pages/blocks/css.php"; ?>

<!-- Document Title
============================================= -->
<title>Shop | Shop by Tam Le</title>

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
            $DataTitle = (new \MVC\controllers\CategoryControllers())->getDetaiElementbyCode($data[2][0]);
            $DataTitleSub = (new \MVC\controllers\CategoryControllers())->getDetailElementbyCodeSub($data[2][0]);
            $title = (!empty($DataTitle['title']) ? $DataTitle['title'] : ((!empty($DataTitleSub['title'])) ? $DataTitleSub['title'] : "Not found."));
            $ParentTitle = (!empty($data[0][0]['parent_title'])) ? $data[0][0]['parent_title'] : $data[1];
            echo '<h1>' . $ParentTitle . '</h1>';
            ?>
            <span><?php echo $title; ?></span>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Category</a></li>
                <li class="breadcrumb-item"><a
                            href="<?php str_replace("/" . $DataTitle['code'], "", \MVC\controllers\UrlControllers::url($ParentTitle)) ?>"><?php echo ucfirst($ParentTitle); ?></a>
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
