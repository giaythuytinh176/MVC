<?php require_once "./src/views/pages/blocks/css.php"; ?>

<!-- Document Title
============================================= -->
<title>Search | Tam Le</title>

</head>

<body class="stretched">

<!-- Document Wrapper
============================================= -->
<div id="wrapper">

    <?php require_once "./src/views/pages/blocks/header.php"; ?>

    <!-- Page Title
    ============================================= -->
    <section id="page-title">

        <div class="container clearfix">
            <h1>Search Results</h1>
            <h4 style="margin-left: 20%">
                <?php
                if (!empty($_POST['q']) && empty((new \MVC\controllers\SearchControllers)->search()['errors'])) {
                    echo "Found: " . count((new \MVC\controllers\SearchControllers)->search()) . " items.";
                } ?>
            </h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Search</li>
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
                    if (!empty($_POST['q'])) {
                        if (!empty((new \MVC\controllers\SearchControllers)->search()['errors'])) {
                            echo '<div class="alert alert-danger" role="alert">Item Not Found.</div>';
                        } else {
                            $search = (new \MVC\controllers\SearchControllers)->search();
                            echo \MVC\controllers\ProductControllers::printListItems($search, "search");
                        }
                    } else {
                        echo '<div class="alert alert-danger" role="alert">Request Not Found.</div>';
                    }
                    ?>
                </div><!-- #shop end -->

            </div>
        </div>
    </section><!-- #content end -->

    <?php require_once "./src/views/pages/blocks/footer.php"; ?>
