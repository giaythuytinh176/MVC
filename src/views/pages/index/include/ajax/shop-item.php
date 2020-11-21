<?php

require_once '/Users/letam/Library/Mobile Documents/com~apple~CloudDocs/webroot/MVC_shop_test/vendor/autoload.php';

?>
<div class="single-product shop-quick-view-ajax">

    <div class="ajax-modal-title">
        <h2>Pink Printed Dress</h2>
    </div>

    <div class="product modal-padding">

        <div class="row gutter-40 col-mb-50">
            <div class="col-md-6">
                <div class="product-image">
                    <div class="fslider" data-pagi="false">
                        <div class="flexslider">
                            <div class="slider-wrap">
                                <div class="slide"><a
                                            href="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/images/shop/dress/3.jpg"
                                            title="Pink Printed Dress - Front View"><img
                                                src="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/images/shop/dress/3.jpg"
                                                alt="Pink Printed Dress"></a></div>
                                <div class="slide"><a
                                            href="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/images/shop/dress/3-1.jpg"
                                            title="Pink Printed Dress - Side View"><img
                                                src="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/images/shop/dress/3-1.jpg"
                                                alt="Pink Printed Dress"></a></div>
                                <div class="slide"><a
                                            href="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/images/shop/dress/3-2.jpg"
                                            title="Pink Printed Dress - Back View"><img
                                                src="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/images/shop/dress/3-2.jpg"
                                                alt="Pink Printed Dress"></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="sale-flash badge badge-danger p-2">Sale!</div>
                </div>
            </div>
            <div class="col-md-6 product-desc">
                <div class="product-price">
                    <del>$39.99</del>
                    <ins>$24.99</ins>
                </div>
                <div class="product-rating">
                    <i class="icon-star3"></i>
                    <i class="icon-star3"></i>
                    <i class="icon-star3"></i>
                    <i class="icon-star-half-full"></i>
                    <i class="icon-star-empty"></i>
                </div>
                <div class="clear"></div>
                <div class="line"></div>

                <!-- Product Single - Quantity & Cart Button
                ============================================= -->
                <form class="cart mb-0" action="<?php echo \MVC\controllers\UrlControllers::url() ?>/shop/cart" method="post" enctype='multipart/form-data'>
                    <div class="quantity">
                        <input type="button" value="-" class="minus">
                        <input type="text" step="1" min="1" name="quantity" value="1" title="Qty" class="qty" size="4"/>
                        <input type="button" value="+" class="plus">
                    </div>
                    <button type="submit" class="add-to-cart button m-0">Add to cart</button>
                </form><!-- Product Single - Quantity & Cart Button End -->

                <div class="clear"></div>
                <div class="line"></div>
                <p>Libero velit id eaque ex quae laboriosam nulla optio doloribus! Perspiciatis, libero, neque,
                    perferendis at nisi optio dolor!</p>
                <ul class="iconlist">
                    <li><i class="icon-caret-right"></i> Dynamic Color Options</li>
                    <li><i class="icon-caret-right"></i> Lots of Size Options</li>
                    <li><i class="icon-caret-right"></i> 30-Day Return Policy</li>
                </ul>
                <div class="card product-meta mb-0">
                    <div class="card-body">
                        <span itemprop="productID" class="sku_wrapper">SKU: <span class="sku">8465415</span></span>
                        <span class="posted_in">Category: <a href="#" rel="tag">Shoes</a>.</span>
                        <span class="tagged_as">Tags: <a href="#" rel="tag">Barena</a>, <a href="#"
                                                                                           rel="tag">Blazers</a>, <a
                                    href="#" rel="tag">Tailoring</a>, <a href="#" rel="tag">Unconstructed</a>.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>