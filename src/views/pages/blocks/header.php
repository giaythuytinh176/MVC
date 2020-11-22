<nav class="primary-menu">

    <ul class="menu-container">
        <li class="menu-item current"><a class="menu-link" href="<?php echo \MVC\controllers\UrlControllers::url(); ?>">
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
                    <a class="menu-link "
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