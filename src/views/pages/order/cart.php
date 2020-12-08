<?php require_once "./src/views/pages/blocks/css.php"; ?>

    <!-- Document Title
    ============================================= -->
    <title>Cart | Tam Le</title>

</head>

<body class="stretched">

<!-- Document Wrapper
============================================= -->
<div id="wrapper">

    <?php require_once "./src/views/pages/blocks/header.php"; ?>

    <!-- Page Title
    ============================================= -->
    <section id="page-title">

        <div class="container">
            <h1>Cart</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Shop</a></li>
                <li class="breadcrumb-item active" aria-current="page">Cart</li>
            </ol>
        </div>

    </section><!-- #page-title end -->

    <!-- Content
    ============================================= -->
    <section id="content">
        <div class="content-wrap">
            <div class="container">
                <?php
                if (!empty($data[1][0]) && is_numeric($data[1][1]) == true) {
                    echo $data[3];
                    \MVC\controllers\RenderControllers::redirectAfterSecondPage("shop/cart", 3);
                }
                \MVC\controllers\CartControllers::UpdateQuantityCart();
                \MVC\controllers\CartControllers::DeleteCart();
                if (!empty($data[3])) {
                    echo (new \MVC\controllers\CartControllers())->ShowCartProduct($data[3]);
                } elseif (!empty($_SESSION['cart_items'])) {
                    echo (new \MVC\controllers\CartControllers())->ShowCartProductFromSession();
                } else {
                    echo '<div class="col-lg-6"><h1>Cart is empty.</h1></div>';
                }
                ?>
            </div>
        </div>
    </section><!-- #content end -->

    <script type="text/javascript">
        setTimeout(function () {
            $('#hideUpdatedCart').fadeOut('slow');
        }, 2000); // <-- time in milliseconds
    </script>

    <?php require_once "./src/views/pages/blocks/footer.php"; ?>
