<?php require_once "./src/views/pages/blocks/css.php"; ?>

<!-- Document Title
============================================= -->
<title>Checkout | Tam Le</title>

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
            <h1>Checkout</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Shop</a></li>
                <li class="breadcrumb-item active" aria-current="page">Checkout</li>
            </ol>
        </div>

    </section><!-- #page-title end -->

    <!-- Content
    ============================================= -->
    <section id="content">
        <div class="content-wrap">
            <div class="container clearfix">
                <?php
                $dataUser = [];
                if (\MVC\libs\UserAccess::isLogin() === true) {
                    $dataUser = (new \MVC\controllers\UserControllers())->getAllInfoOfOneUserbyUserName($_SESSION['username']);
                }
                if (\MVC\libs\UserAccess::isLogin() === false) {
                    echo '<div class="col-12 alert-danger">
                            You must register to checkout. Returning customer?
                            <a href="' . \MVC\controllers\UrlControllers::url("shop/login/checkout") . '">Click here to login.</a>
                          </div>';
                } elseif (!empty($_POST['btnSM']) && empty($_SESSION['cart_items'])) {
                    echo '<div class="col-12 alert-danger">
                            Your cart is empty.';
                } elseif (!empty($_POST['btnSM']) && !empty($_POST['shipping-form-address']) && !empty($_POST['shipping-form-phone'])) {
                    (new \MVC\controllers\CheckoutControllers)->InsertCart($_POST, $dataUser);

                    echo '<h4><div class="col-lg-12">Bạn đã đặt hàng thành công, chúng tôi sẽ liên hệ lại sớm bạn.</div></h4>';
                } else {
                    ?>
                    <div class="row col-mb-30 gutter-50 mb-4">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <?php if (\MVC\libs\UserAccess::isLogin() == true) {
                                        echo '<i class="i-plain icon-user"></i>Welcome ' . $_SESSION['username'] . ', <a href="' . \MVC\controllers\UrlControllers::url("shop/login/logout") . '">Logout.</a>';
                                    } else { ?>
                                        Returning customer? <a
                                                href="<?php echo \MVC\controllers\UrlControllers::url("shop/login/checkout") ?>">Click
                                            here to login.</a>
                                        <p>You must register to checkout.</p>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    Have a coupon? <a href="#">Click here to enter your code</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row col-mb-50 gutter-50">
                        <div class="col-lg-6">
                            <h3>Địa chỉ cửa hàng:</h3>

                            <p>Văn Phòng CodeGym – Nhà số 23, TT-01, Khu đô thị MonCity – Đường, Hàm Nghi, Mỹ Đình 1,
                                Nam Từ Liêm, Hà Nội. </p>

                            <!--                                                    <form id="billing-form" name="billing-form" class="row mb-0" action="" method="post">-->
                            <!---->
                            <!--                                                        <div class="col-md-6 form-group">-->
                            <!--                                                            <label for="billing-form-name">Name:</label>-->
                            <!--                                                            <input type="text" id="billing-form-name" name="billing-form-name" value=""-->
                            <!--                                                                   class="sm-form-control"/>-->
                            <!--                                                        </div>-->
                            <!---->
                            <!--                                                        <div class="col-md-6 form-group">-->
                            <!--                                                            <label for="billing-form-lname">Last Name:</label>-->
                            <!--                                                            <input type="text" id="billing-form-lname" name="billing-form-lname" value=""-->
                            <!--                                                                   class="sm-form-control"/>-->
                            <!--                                                        </div>-->
                            <!---->
                            <!--                                                        <div class="w-100"></div>-->
                            <!---->
                            <!--                                                        <div class="col-12 form-group">-->
                            <!--                                                            <label for="billing-form-companyname">Company Name:</label>-->
                            <!--                                                            <input type="text" id="billing-form-companyname" name="billing-form-companyname"-->
                            <!--                                                                   value="" class="sm-form-control"/>-->
                            <!--                                                        </div>-->
                            <!---->
                            <!--                                                        <div class="col-12 form-group">-->
                            <!--                                                            <label for="billing-form-address">Address:</label>-->
                            <!--                                                            <input type="text" id="billing-form-address" name="billing-form-address" value=""-->
                            <!--                                                                   class="sm-form-control"/>-->
                            <!--                                                        </div>-->
                            <!---->
                            <!--                                                        <div class="col-12 form-group">-->
                            <!--                                                            <input type="text" id="billing-form-address2" name="billing-form-adress" value=""-->
                            <!--                                                                   class="sm-form-control"/>-->
                            <!--                                                        </div>-->
                            <!---->
                            <!--                                                        <div class="col-12 form-group">-->
                            <!--                                                            <label for="billing-form-city">City / Town</label>-->
                            <!--                                                            <input type="text" id="billing-form-city" name="billing-form-city" value=""-->
                            <!--                                                                   class="sm-form-control"/>-->
                            <!--                                                        </div>-->
                            <!---->
                            <!--                                                        <div class="col-md-6 form-group">-->
                            <!--                                                            <label for="billing-form-email">Email Address:</label>-->
                            <!--                                                            <input type="email" id="billing-form-email" name="billing-form-email" value=""-->
                            <!--                                                                   class="sm-form-control"/>-->
                            <!--                                                        </div>-->
                            <!---->
                            <!--                                                        <div class="col-md-6 form-group">-->
                            <!--                                                            <label for="billing-form-phone">Phone:</label>-->
                            <!--                                                            <input type="text" id="billing-form-phone" name="billing-form-phone" value=""-->
                            <!--                                                                   class="sm-form-control"/>-->
                            <!--                                                        </div>-->
                            <!---->
                            <!--                                                    </form>-->
                        </div>
                        <?php
                        if ($dataUser['fullname'] == trim($dataUser['fullname']) && strpos($dataUser['fullname'], ' ') !== false) $arr = explode(" ", $dataUser['fullname']);
                        ?>

                        <div class="col-lg-6">
                            <h3>Shipping Address</h3>

                            <form id="shipping-form" name="shipping-form" class="row mb-0" action="" method="post">

                                <div class="col-md-6 form-group">
                                    <label for="shipping-form-name">Name:</label>
                                    <input type="text" id="shipping-form-name" name="shipping-form-name"
                                           value="<?php echo(!empty($arr) ? current($arr) : ''); ?>"
                                           class="sm-form-control"
                                           placeholder="<?php echo(!empty($arr) ? current($arr) : ''); ?>"/>
                                </div>

                                <div class="col-md-6 form-group">
                                    <label for="shipping-form-lname">Last Name:</label>
                                    <input type="text" id="shipping-form-lname" name="shipping-form-lname"
                                           value="<?php echo(!empty($arr) ? end($arr) : ''); ?>"
                                           class="sm-form-control"
                                           placeholder="<?php echo(!empty($arr) ? end($arr) : ''); ?>"/>
                                </div>

                                <div class="col-12 form-group">
                                    <label for="shipping-form-address">Address:</label>
                                    <input type="text" id="shipping-form-address" name="shipping-form-address" value=""
                                           class="sm-form-control" required/>
                                </div>

                                <div class="col-6 form-group">
                                    <label for="shipping-form-city">City / Town</label>
                                    <input type="text" id="shipping-form-city" name="shipping-form-city" value=""
                                           class="sm-form-control"/>
                                </div>

                                <div class="col-6 form-group">
                                    <label for="shipping-form-phone">Phone:</label>
                                    <input type="text" id="shipping-form-phone" name="shipping-form-phone"
                                           value="<?php echo $dataUser['phone']; ?>"
                                           class="sm-form-control" placeholder="<?php echo $dataUser['phone']; ?>"
                                           required/>
                                </div>

                                <div class="col-12 form-group">
                                    <label for="shipping-form-message">Notes <small>*</small></label>
                                    <textarea class="sm-form-control" id="shipping-form-message"
                                              name="shipping-form-message" rows="6" cols="30"></textarea>
                                </div>

                        </div>

                        <div class="w-100"></div>

                        <div class="col-lg-6">
                            <h4>Your Orders</h4>

                            <div class="table-responsive">
                                <?php echo (new \MVC\controllers\CheckoutControllers())->getListItemCheckout(); ?>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <h4>Cart Totals</h4>

                            <?php
                            echo \MVC\controllers\CheckoutControllers::CalculateTotalCheckOut();
                            ?>

                            <div class="accordion clearfix">
                                <div class="accordion-header">
                                    <div class="accordion-icon">
                                        <i class="accordion-closed icon-line-minus"></i>
                                        <i class="accordion-open icon-line-check"></i>
                                    </div>
                                    <div class="accordion-title">
                                        Nganluong.vn
                                    </div>
                                </div>
                                <div class="accordion-content clearfix">NgânLượng.vn là Ví điện tử và Cổng Thanh
                                    toán
                                    Trực
                                    tuyến (TTTT) tiên phong và uy tín hàng đầu tại Việt Nam, cả về sản phẩm dịch vụ,
                                    độ
                                    phủ
                                    thị trường và lưu lượng thanh toán. Được phát triển bởi Nexttech Group (tiền
                                    thân là
                                    PeaceSoft Group) từ năm 2009, Ngân Lượng cho phép các cá nhân và doanh nghiệp
                                    gửi và
                                    nhận tiền thanh toán trên Internet một cách nhanh chóng, an toàn, tiện lợi.
                                </div>

                                <div class="accordion-header">
                                    <div class="accordion-icon">
                                        <i class="accordion-closed icon-line-minus"></i>
                                        <i class="accordion-open icon-line-check"></i>
                                    </div>
                                    <div class="accordion-title">
                                        Paypal
                                    </div>
                                </div>
                                <div class="accordion-content clearfix">Paypal là một công ty hoạt động trong lĩnh
                                    vực
                                    thương mại điện tử, chuyên cung cấp các dịch vụ thanh toán và chuyển tiền qua
                                    mạng
                                    Internet. Đây là dịch vụ thanh toán và chuyển khoản điện tử thay thế cho các
                                    phương
                                    thức
                                    truyền thống sử dụng giấy tờ như séc và các lệnh chuyển tiền. Paypal thu phí
                                    thông
                                    qua
                                    thực hiện việc xử lý thanh toán cho các hãng hoạt động trực tuyến, các trang đấu
                                    giá, và
                                    các khách hàng doanh nghiệp khác. Vào tháng 10 năm 2002, eBay đã mua lại toàn bộ
                                    Paypal.
                                    Trụ sở chính của Paypal hiện đặt tại khu các công ty con của eBay trong toà nhà
                                    North
                                    First Street, thung lũng Sillicon, San Jose, California. Paypal cũng có các hoạt
                                    động
                                    quan trọng tại Omaha, Nebraska; Dublin, Ireland; và Berlin, Đức.
                                </div>

                                <div class="accordion-header">
                                    <div class="accordion-icon">
                                        <i class="accordion-closed icon-line-minus"></i>
                                        <i class="accordion-open icon-line-check"></i>
                                    </div>
                                    <div class="accordion-title">
                                        Direct Bank Transfer
                                    </div>
                                </div>
                                <div class="accordion-content clearfix">Wire transfer, bank transfer or credit
                                    transfer,
                                    is
                                    a method of electronic funds transfer from one person or entity to another. A
                                    wire
                                    transfer can be made from one bank account to another bank account, or through a
                                    transfer of cash at a cash office.
                                </div>
                                <input type="submit" class="button button-3d float-right" name="btnSM"
                                       value="Place Order">
                                </form>

                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </section><!-- #content end -->

    <?php require_once "./src/views/pages/blocks/footer.php"; ?>
