<?php require_once "./src/views/pages/blocks/css.php"; ?>

    <!-- Document Title
    ============================================= -->
    <title>Login- Register | Tam Le</title>

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
            <h1>My Account</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active" aria-current="page">Login</li>
            </ol>
        </div>

    </section><!-- #page-title end -->

    <!-- Content
    ============================================= -->
    <section id="content">
        <div class="content-wrap">
            <div class="container clearfix">
                <div class="accordion accordion-lg mx-auto mb-0 clearfix" style="max-width: 550px;">
                    <?php if ((empty($_POST) == true) || (!empty($_POST['register-form-submit']) && $_POST['register-form-submit'] !== "register") || (!empty($_POST['login-form-submit']) && $_POST['login-form-submit'] !== "login")) { ?>
                        <?php if (\MVC\libs\UserAccess::isLogin() == true) { ?>
                            <div class="accordion-header">
                                <div class="accordion-icon">
                                    <i class="accordion-closed icon-lock3"></i>
                                    <i class="accordion-open icon-unlock"></i>
                                </div>
                                <div class="accordion-title">
                                    <?php {
                                        echo "Welcome {$_SESSION['username']}, ";
                                    } ?>
                                </div>
                            </div>
                            <div class="col-12 form-group">
                                <a href="<?php echo \MVC\controllers\UrlControllers::url("shop/login/logout"); ?>"
                                   class="float-right"><i class="icon-line2-logout"></i> Logout</a>
                            </div>

                        <?php } else {
                            ?>
                            <div class="accordion-header">
                                <div class="accordion-icon">
                                    <i class="accordion-closed icon-user4"></i>
                                    <i class="accordion-open icon-ok-sign"></i>
                                </div>
                                <div class="accordion-title">
                                    New Signup? Register for an Account
                                </div>
                            </div>
                            <div class="accordion-content clearfix">
                                <form id="register-form" name="register-form" class="row mb-0" action="" method="post">
                                    <div class="col-12 form-group">
                                        <label for="register-form-name">Name:</label>
                                        <input type="text" id="register-form-name" name="register-form-name" value=""
                                               class="form-control"/>
                                    </div>

                                    <div class="col-12 form-group">
                                        <label for="register-form-email">Email Address:</label>
                                        <input type="text" id="register-form-email" name="register-form-email" value=""
                                               class="form-control"/>
                                    </div>

                                    <div class="col-12 form-group">
                                        <label for="register-form-username">Choose a Username:</label>
                                        <input type="text" id="register-form-username" name="register-form-username"
                                               value=""
                                               class="form-control"/>
                                    </div>

                                    <div class="col-12 form-group">
                                        <label for="register-form-phone">Phone:</label>
                                        <input type="number" id="register-form-phone" name="register-form-phone" value=""
                                               class="form-control"/>
                                    </div>

                                    <div class="col-12 form-group">
                                        <label for="register-form-password">Choose Password:</label>
                                        <input type="password" id="register-form-password" name="register-form-password"
                                               value="" class="form-control"/>
                                    </div>

                                    <div class="col-12 form-group">
                                        <label for="register-form-repassword">Re-enter Password:</label>
                                        <input type="password" id="register-form-repassword"
                                               name="register-form-repassword"
                                               value="" class="form-control"/>
                                    </div>

                                    <div class="col-12 form-group">
                                        <button class="button button-3d button-black m-0" id="register-form-submit"
                                                name="register-form-submit" value="register">Register Now
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <div class="accordion-header">
                                <div class="accordion-icon">
                                    <i class="accordion-closed icon-lock3"></i>
                                    <i class="accordion-open icon-unlock"></i>
                                </div>
                                <div class="accordion-title">
                                    Login to your Account
                                </div>
                            </div>
                            <div class="accordion-content clearfix">
                                <form id="login-form" name="login-form" class="row mb-0" action="" method="post">
                                    <div class="col-12 form-group">
                                        <label for="login-form-username">Username:</label>
                                        <input type="text" id="login-form-username" name="login-form-username" value=""
                                               class="form-control"/>
                                    </div>

                                    <div class="col-12 form-group">
                                        <label for="login-form-password">Password:</label>
                                        <input type="password" id="login-form-password" name="login-form-password"
                                               value=""
                                               class="form-control"/>
                                    </div>

                                    <div class="col-12 form-group">
                                        <input type="checkbox" id="login-form-remember" name="rememberme"
                                               class="float-center" checked>
                                        <label class="form-check-label" id="login-form-remember">Remember me</label>
                                    </div>

                                    <div class="col-12 form-group">
                                        <button class="button button-3d button-black m-0" id="login-form-submit"
                                                name="login-form-submit" value="login">Login
                                        </button>
                                        <a href="" class="float-right">Forgot Password?</a>
                                    </div>
                                </form>
                            </div>
                        <?php } ?>
                    <?php } else {
                        if (!empty($data[0]['errors'])) {
                            ?>
                            <div class="accordion-header">
                                <div class="accordion-icon">
                                    <i class="accordion-closed icon-warning-sign"></i>
                                    <i class="accordion-open icon-warning-sign"></i>
                                </div>
                                <div class="accordion-title">
                                    Errors: <br>
                                </div>
                            </div>
                            <div class="accordion-content clearfix">
                                <div class="col-12 form-group">
                                    <?= implode("<br>", $data[0]['errors']); ?>
                                    <br>
                                    <br>
                                    <a href="javascript:history.go(-1)" class="btn btn-warning btn-lg">Back</a>
                                </div>
                            </div>
                            <?php
                        } else {
                            if (!empty($_POST['register-form-submit']) && $_POST['register-form-submit'] == "register") {
                                ?>
                                <div class="col-sm-16 col-lg-14">
                                    <div class="feature-box fbox-rounded fbox-effect">
                                        <div class="fbox-icon">
                                            <a href="#"><i class="icon-share i-alt"></i></a>
                                        </div>
                                        <div class="fbox-content">
                                            <h3>Congratulations</h3>
                                            <p>Your account has been successfully created.</p>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="fbox-content">
                                        <a href="<?php echo \MVC\controllers\UrlControllers::url("shop/login"); ?>">
                                            <button type="button" class="btn btn-success">Go to Login.</button>
                                        </a>
                                    </div>
                                </div>
                                <?php
                            } elseif (!empty($_POST['login-form-submit']) && $_POST['login-form-submit'] == "login") {
                                if (\MVC\libs\UserAccess::isLogin()) {
                                    $checkout_cart = !empty($data[1]) ? "shop/{$data[1]}" : "";
                                    \MVC\controllers\RenderControllers::redirectAfterSecondPage($checkout_cart);
                                }
                            }
                        }

                    }
                    ?>
                </div>
            </div>
        </div>
    </section><!-- #content end -->

    <?php require_once "./src/views/pages/blocks/footer.php"; ?>
