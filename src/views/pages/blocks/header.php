<!-- Header
============================================= -->
<?php

$currentpage = str_replace(array("/", "\\",), "", $_SERVER['REQUEST_URI']);
$fullheader = ($currentpage !== \MVC\config\config::BASE_FOLDER) ? ' class="full-header"' : '';

?>
<header id="header"<?php echo $fullheader; ?>><!--  class="full-header" Homepage doesn't have class-header-->
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

                <?php
                echo (new \MVC\controllers\CartControllers())->ShowCartProductOnRightTop();
                ?>

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
                            <a class="menu-link" href="#">
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
                        <!--                        <li class="menu-item">-->
                        <!--                            <a class="menu-link" href="#">-->
                        <!--                                <div>Contact</div>-->
                        <!--                                <span>Get In Touch</span>-->
                        <!--                            </a>-->
                        <!--                        </li>-->
                        <?php
                        if (\MVC\libs\UserAccess::isLogin() === true && (new \MVC\libs\UserAccess())->isAdmin() == true) {
                            echo '<li class="menu-item">
                            <a class="menu-link" href="' . \MVC\controllers\UrlControllers::url("admin") . '">
                                <div>Admin</div>
                            </a>
                        </li>';
                        }
                        ?>
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
