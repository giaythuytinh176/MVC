<?php

require_once realpath("../../../../../../vendor/autoload.php");

if (!empty($_GET['product_id'])) {
    $product_id = $_GET['product_id'];
    $valFromDB = (new \MVC\controllers\ProductControllers())->getProductDetailbyID($product_id);
}

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
                                <?php
                                foreach (explode("\r\n", $valFromDB['img_list']) as $value) {
                                    echo '<div class="slide">
                                        <a href="' . $value . '" title="' . $valFromDB['ProductName'] . ' - Front View">
                                        <img src="' . $value . '" alt="' . $valFromDB['ProductName'] . '"></a></div>';
                                }
                                ?>
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
<!--                <div class="clear"></div>-->
<!--                <div class="line"></div>-->


                <!-- Product Single - Quantity & Cart Button
                ============================================= -->
<!--                <form class="cart mb-0" action="--><?php //echo \MVC\controllers\UrlControllers::url("shop/cart"); ?><!--"-->
<!--                      method="post" enctype='multipart/form-data'>-->
<!--                    <div class="quantity">-->
<!--                        <input type="button" value="-" class="minus">-->
<!--                        <input type="number" step="1" min="1" name="quantity" value="1" title="Qty" class="qty"/>-->
<!--                        <input type="hidden" name="qty" value="1"/>-->
<!--                        --><?php
//                        echo '<input type="hidden" name="cart_items[' . $valFromDB['product_id'] . '][qty]" value="1"/>
//                              <input type="hidden" name="cart_items[' . $valFromDB['product_id'] . '][price]" value="' . ((!empty($valFromDB['discount']) && $valFromDB['discount'] > 0) ? ($valFromDB['price'] * (100 - $valFromDB['discount']) / 100) : $valFromDB['price']) . '"/>
//                              <input type="hidden" name="cart_items[' . $valFromDB['product_id'] . '][product_id]" value="' . $valFromDB['product_id'] . '"/>
//                              <input type="hidden" name="cart_items[' . $valFromDB['product_id'] . '][product_name]" value="' . urlencode($valFromDB['ProductName']) . '"/>';
//                        ?>
<!--                        <input type="button" value="+" class="plus">-->
<!--                    </div>-->
<!--                    <button type="submit" name="btn" value="submit" class="add-to-cart button m-0">Add to cart</button>-->
<!--                </form>-->
                <!-- Product Single - Quantity & Cart Button End -->


                <div class="clear"></div>
                <div class="line"></div>



                <form class="cart mb-0" action="<?php echo \MVC\controllers\UrlControllers::url("shop/cart"); ?>"
                      method="post" enctype='multipart/form-data'>
                    <?php echo '<input type="hidden" id="qty" name="cart_items[' . $valFromDB['product_id'] . '][qty]" value="1"/>
                        <input type="hidden" name="cart_items[' . $valFromDB['product_id'] . '][price]" value="' . ((!empty($valFromDB['discount']) && $valFromDB['discount'] > 0) ? ($valFromDB['price'] * (100 - $valFromDB['discount']) / 100) : $valFromDB['price']) . '"/>
                        <input type="hidden" name="cart_items[' . $valFromDB['product_id'] . '][product_id]" value="' . $valFromDB['product_id'] . '"/>
                        <input type="hidden" name="cart_items[' . $valFromDB['product_id'] . '][product_name]" value="' . urlencode($valFromDB['ProductName']) . '"/>';
                    ?>
                    <div class="input-group">
                        <span class="input-group-btn">
                           <button type="button" class="btn btn-danger btn-number" data-type="minus" data-field="quant[2]">
                <span class="glyphicon glyphicon-minus">-</span>
              </button>
                        </span>
                        <input type="hidden" id="qty" name="qty" value="1"/>
                        <input type="number" name="quant[2]" class="form-control input-number" value="1" min="1" max="100">
                        <span class="input-group-btn">
                            <button type="button" class="btn btn-success btn-number" data-type="plus" data-field="quant[2]">
                                 <span class="glyphicon glyphicon-plus">+</span>
                            </button>
                        </span>
                        <span class="input-group-btn">
                                 <button type="submit" name="btn" value="submit" class="add-to-cart button m-0">Add to cart</button>
                        </span>
                     </div>
                </form>



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

<script type="text/javascript">
    //plugin bootstrap minus and plus
    //http://jsfiddle.net/laelitenetwork/puJ6G/
    $('.btn-number').click(function (e) {
        e.preventDefault();

        fieldName = $(this).attr('data-field');
        type = $(this).attr('data-type');
        var input = $("input[name='" + fieldName + "']");
        var currentVal = parseInt(input.val());
        if (!isNaN(currentVal)) {
            if (type == 'minus') {

                if (currentVal > input.attr('min')) {
                    input.val(currentVal - 1).change();
                }
                if (parseInt(input.val()) == input.attr('min')) {
                    $(this).attr('disabled', true);
                }

            } else if (type == 'plus') {

                if (currentVal < input.attr('max')) {
                    input.val(currentVal + 1).change();
                }
                if (parseInt(input.val()) == input.attr('max')) {
                    $(this).attr('disabled', true);
                }

            }
        } else {
            input.val(0);
        }
    });
    $('.input-number').focusin(function () {
        $(this).data('oldValue', $(this).val());
    });
    $('.input-number').change(function () {

        minValue = parseInt($(this).attr('min'));
        maxValue = parseInt($(this).attr('max'));
        valueCurrent = parseInt($(this).val());

        name = $(this).attr('name');
        if (valueCurrent >= minValue) {
            $(".btn-number[data-type='minus'][data-field='" + name + "']").removeAttr('disabled')
        } else {
            alert('Sorry, the minimum value was reached');
            $(this).val($(this).data('oldValue'));
        }
        if (valueCurrent <= maxValue) {
            $(".btn-number[data-type='plus'][data-field='" + name + "']").removeAttr('disabled')
        } else {
            alert('Sorry, the maximum value was reached');
            $(this).val($(this).data('oldValue'));
        }
        document.getElementById('qty').value = valueCurrent;
    });
    $(".input-number").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
            // Allow: Ctrl+A
            (e.keyCode == 65 && e.ctrlKey === true) ||
            // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
            // let it happen, don't do anything
            return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
</script>