<?php

namespace MVC\controllers;

use MVC\models\ProductModels;

class ProductControllers extends ProductModels
{
    public function getListProductinMainCategory($action, $params)
    {
        $data = parent::getListProductinMainCategory($action, $params);
        (new \MVC\Controllers\RenderControllers())->view("category/shop", [$data, $action, $params]);
    }

    public function getAllElementbySubCateID($action, $category)
    {
        $data = parent::getAllElementbySubCateID($action, $category);
        (new \MVC\Controllers\RenderControllers())->view("category/shop", [$data, $action, $category]);
    }

    public static function CalculateTotalCart()
    {
        $totalPriceEachItem = 0;
        foreach ($_SESSION['cart_items'] as $item) {
            $valFromDB = (new \MVC\controllers\ProductControllers())->getProductDetailbyID($item['product_id']);
            $amount = ((!empty($valFromDB['discount']) && $valFromDB['discount'] > 0) ? ($valFromDB['price'] * (100 - $valFromDB['discount']) / 100) : ($valFromDB['price']));
            $totalPriceEachItem += $amount * $item['qty'];
        }
        return $totalPriceEachItem;
    }

    public function getDetailElementbyID($action, $params)
    {
        $product_id = current(explode("-", $params[1]));
        $data = parent::getDetailElementbyID($params[0], $product_id);
        if (empty($data['errors'])) {
            (new \MVC\Controllers\RenderControllers())->view("order/shop-single", [$data, $params[0], $product_id]);
        } else {
            (new \MVC\Controllers\RenderControllers())->errorPage();
        }
    }

    public function showDetailProduct($data)
    {
        $sout = '';
        $sout .= '                <div class="single-product">
                    <div class="product">
                        <div class="row gutter-40">
                            <div class="col-md-5">
                                <!-- Product Single - Gallery
                                ============================================= -->
                                <div class="product-image">
                                    <div class="fslider" data-pagi="false" data-arrows="false" data-thumbs="true">
                                        <div class="flexslider">
                                            <div class="slider-wrap" data-lightbox="gallery">';
        if (!empty($data[0]['img_list'])) {
            foreach (explode("\r\n", $data[0]['img_list']) as $value) {
                $sout .= '
                                                <div class="slide" data-thumb="' . $value . '">
                                                    <a href="' . $value . '" title="' . $data[0]['ProductName'] . ' - Front View"
                                                       data-lightbox="gallery-item"><img src="' . $value . '" alt="' . $data[0]['ProductName'] . '"></a></div>';
            }
        } else {
            $sout .= "Not Found.";
        }
        $product_price = (!empty($data[0]['discount']) && $data[0]['discount'] > 0) ? '<del>' . ((!empty($data[0]['price'])) ? number_format($data[0]['price']) : "0") . ' ₫ </del><ins>' . ((!empty($data[0]['price'])) ? number_format(($data[0]['price'] * (100 - $data[0]['discount']) / 100)) : "0") . '₫ </ins>' : '<ins>' . ((!empty($data[0]['price'])) ? number_format($data[0]['price']) : "0") . ' ₫ </ins>';
        if (!empty($data[0]['Stock'])) {
            $sale_flash = '' . (($data[0]['Stock'] < 1) ? '<div class="sale-flash badge badge-secondary p-2">' . \MVC\libs\Languages::getLangData("Out of Stock") . '</div>' : '') . '
                                ' . (($data[0]['Stock'] > 100) ? '<div class="sale-flash badge badge-danger p-2">Sale!</div>' : '') . '';
        } else {
            $sale_flash = "";
        }
        $sout .= '
                                            </div>
                                        </div>
                                    </div>
                                    ' . $sale_flash . '
                                </div><!-- Product Single - Gallery End -->
                            </div>

                            <div class="col-md-5 product-desc">
                                <div class="d-flex align-items-center justify-content-between">
                                    <!-- Product Single - Price
                                    ============================================= -->
                                    <div class="product-price">
                                        ' . $product_price . '
                                    </div><!-- Product Single - Price End -->
                                    <!-- Product Single - Rating
                                    ============================================= -->
                                    <div class="product-rating">
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star-half-full"></i>
                                        <i class="icon-star-empty"></i>
                                    </div><!-- Product Single - Rating End -->
                                </div>

                                <div class="line"></div>';
        if (!empty($data[0]['product_id'])) {
            $sout .= '
                                <!-- Product Single - Quantity & Cart Button
                                ============================================= -->
                                <form class="cart mb-0 d-flex justify-content-between align-items-center" action="' . UrlControllers::url("shop/cart") . '" method="post"
                                      enctype=\'multipart/form-data\'>
                                    <div class="quantity clearfix">
                                        <input type="button" value="-" class="minus">
                                        <input type="hidden" step="1" min="1" name="quantity" value="1" title="Qty" class="qty"/>
                                        <input type="hidden" name="qty" value="1"/>
                                        <input type="number" name="cart_items[' . $data[0]['product_id'] . '][qty]" value="1" title="Qty" class="qty"/>
                                        <input type="hidden" name="cart_items[' . $data[0]['product_id'] . '][product_id]" value="' . $data[0]['product_id'] . '">
                                        <input type="hidden" name="cart_items[' . $data[0]['product_id'] . '][price]" value="' . $data[0]['price'] . '">
                                        <input type="hidden" name="cart_items[' . $data[0]['product_id'] . '][product_name]" value="' . urlencode($data[0]['ProductName']) . '">
                                        <input type="button" value="+" class="plus">
                                    </div>
                                    <button type="submit" name="btn" value="submit" class="add-to-cart button m-0">Add to cart</button>
                                </form><!-- Product Single - Quantity & Cart Button End -->
                                <div class="line"></div>';
        }
        $sout .= '

                                <!-- Product Single - Short Description
                                ============================================= -->
                                ' . ((!empty($data[0]['cart_description'])) ? $data[0]['cart_description'] : "Not Found.") . '
                                <ul class="iconlist">
                                    <li><i class="icon-caret-right"></i> Dynamic Color Options</li>
                                    <li><i class="icon-caret-right"></i> Lots of Size Options</li>
                                    <li><i class="icon-caret-right"></i> 30-Day Return Policy</li>
                                </ul><!-- Product Single - Short Description End -->

                                <!-- Product Single - Meta
                                ============================================= -->
                                <div class="card product-meta">
                                    <div class="card-body">
                                        <span itemprop="productID" class="sku_wrapper">SKU: <span
                                                    class="sku">8465415</span></span>
                                        <span class="posted_in">Category: <a href="#" rel="tag">Dress</a>.</span>
                                        <span class="tagged_as">Tags: <a href="#" rel="tag">Pink</a>, <a href="#"
                                                                                                         rel="tag">Short</a>, <a
                                                    href="#" rel="tag">Dress</a>, <a href="#"
                                                                                     rel="tag">Printed</a>.</span>
                                    </div>
                                </div><!-- Product Single - Meta End -->

                                <!-- Product Single - Share
                                ============================================= -->
                                <div class="si-share border-0 d-flex justify-content-between align-items-center mt-4">
                                    <span>Share:</span>
                                    <div>
                                        <a href="#" class="social-icon si-borderless si-facebook">
                                            <i class="icon-facebook"></i>
                                            <i class="icon-facebook"></i>
                                        </a>
                                        <a href="#" class="social-icon si-borderless si-twitter">
                                            <i class="icon-twitter"></i>
                                            <i class="icon-twitter"></i>
                                        </a>
                                        <a href="#" class="social-icon si-borderless si-pinterest">
                                            <i class="icon-pinterest"></i>
                                            <i class="icon-pinterest"></i>
                                        </a>
                                        <a href="#" class="social-icon si-borderless si-gplus">
                                            <i class="icon-gplus"></i>
                                            <i class="icon-gplus"></i>
                                        </a>
                                        <a href="#" class="social-icon si-borderless si-rss">
                                            <i class="icon-rss"></i>
                                            <i class="icon-rss"></i>
                                        </a>
                                        <a href="#" class="social-icon si-borderless si-email3">
                                            <i class="icon-email3"></i>
                                            <i class="icon-email3"></i>
                                        </a>
                                    </div>
                                </div><!-- Product Single - Share End -->

                            </div>

                            <div class="col-md-2">

                                <a href="#" title="Brand Logo" class="d-none d-md-block"><img
                                            src="' . \MVC\controllers\UrlControllers::url("") . '/src/views/pages/index/images/shop/brand.jpg"
                                            alt="Brand Logo"></a>

                                <div class="divider divider-center"><i class="icon-circle-blank"></i></div>

                                <div class="feature-box fbox-plain fbox-dark fbox-sm">
                                    <div class="fbox-icon">
                                        <i class="icon-thumbs-up2"></i>
                                    </div>
                                    <div class="fbox-content fbox-content-sm">
                                        <h3>100% Original</h3>
                                        <p class="mt-0">We guarantee you the sale of Original Brands.</p>
                                    </div>
                                </div>

                                <div class="feature-box fbox-plain fbox-dark fbox-sm mt-4">
                                    <div class="fbox-icon">
                                        <i class="icon-credit-cards"></i>
                                    </div>
                                    <div class="fbox-content fbox-content-sm">
                                        <h3>Payment Options</h3>
                                        <p class="mt-0">We accept Nganluong.vn, Vietcombank and Paypal.</p>
                                    </div>
                                </div>

                                <div class="feature-box fbox-plain fbox-dark fbox-sm mt-4">
                                    <div class="fbox-icon">
                                        <i class="icon-truck2"></i>
                                    </div>
                                    <div class="fbox-content fbox-content-sm">
                                        <h3>Free Shipping</h3>
                                        <p class="mt-0">Free Delivery to 100+ Locations on orders above $40.</p>
                                    </div>
                                </div>

                                <div class="feature-box fbox-plain fbox-dark fbox-sm mt-4">
                                    <div class="fbox-icon">
                                        <i class="icon-undo"></i>
                                    </div>
                                    <div class="fbox-content fbox-content-sm">
                                        <h3>30-Days Returns</h3>
                                        <p class="mt-0">Return or exchange items purchased within 30 days.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="w-100"></div>
                            <div class="col-12 mt-5">
                                <div class="tabs clearfix mb-0" id="tab-1">
                                    <ul class="tab-nav clearfix">
                                        <li><a href="#tabs-1"><i class="icon-align-justify2"></i><span
                                                        class="d-none d-md-inline-block"> Description</span></a></li>
                                        <li><a href="#tabs-2"><i class="icon-info-sign"></i><span
                                                        class="d-none d-md-inline-block"> Additional Information</span></a>
                                        </li>
                                        <li><a href="#tabs-3"><i class="icon-star3"></i><span
                                                        class="d-none d-md-inline-block"> Reviews (2)</span></a></li>
                                    </ul>
                                    <div class="tab-container">

                                        <div class="tab-content clearfix" id="tabs-1">
                                            ' . ((!empty($data[0]['description'])) ? $data[0]['description'] : "Not Found.") . '
                                        </div>
                                        <div class="tab-content clearfix" id="tabs-2">

                                            <table class="table table-striped table-bordered">
                                                <tbody>
                                                <tr>
                                                    <td>Size</td>
                                                    <td>Small, Medium &amp; Large</td>
                                                </tr>
                                                <tr>
                                                    <td>Color</td>
                                                    <td>Pink &amp; White</td>
                                                </tr>
                                                <tr>
                                                    <td>Waist</td>
                                                    <td>26 cm</td>
                                                </tr>
                                                <tr>
                                                    <td>Length</td>
                                                    <td>40 cm</td>
                                                </tr>
                                                <tr>
                                                    <td>Chest</td>
                                                    <td>33 inches</td>
                                                </tr>
                                                <tr>
                                                    <td>Fabric</td>
                                                    <td>Cotton, Silk &amp; Synthetic</td>
                                                </tr>
                                                <tr>
                                                    <td>Warranty</td>
                                                    <td>3 Months</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-content clearfix" id="tabs-3">
                                            <div id="reviews" class="clearfix">
                                                <ol class="commentlist clearfix">
                                                    <li class="comment even thread-even depth-1" id="li-comment-1">
                                                        <div id="comment-1" class="comment-wrap clearfix">
                                                            <div class="comment-meta">
                                                                <div class="comment-author vcard">
																		<span class="comment-avatar clearfix">
																		<img alt=\'Image\'
                                                                             src=\'https://0.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?s=60\'
                                                                             height=\'60\' width=\'60\'/></span>
                                                                </div>
                                                            </div>

                                                            <div class="comment-content clearfix">
                                                                <div class="comment-author">John Doe<span><a href="#"
                                                                                                             title="Permalink to this comment">April 24, 2021 at 10:46AM</a></span>
                                                                </div>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing
                                                                    elit. Quo perferendis aliquid tenetur. Aliquid,
                                                                    tempora, sit aliquam officiis nihil autem eum at
                                                                    repellendus facilis quaerat consequatur commodi
                                                                    laborum saepe non nemo nam maxime quis error tempore
                                                                    possimus est quasi reprehenderit fuga!</p>
                                                                <div class="review-comment-ratings">
                                                                    <i class="icon-star3"></i>
                                                                    <i class="icon-star3"></i>
                                                                    <i class="icon-star3"></i>
                                                                    <i class="icon-star3"></i>
                                                                    <i class="icon-star-half-full"></i>
                                                                </div>
                                                            </div>
                                                            <div class="clear"></div>
                                                        </div>
                                                    </li>

                                                    <li class="comment even thread-even depth-1" id="li-comment-2">
                                                        <div id="comment-2" class="comment-wrap clearfix">

                                                            <div class="comment-meta">
                                                                <div class="comment-author vcard">
																		<span class="comment-avatar clearfix">
																		<img alt=\'Image\'
                                                                             src=\'https://0.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?s=60\'
                                                                             height=\'60\' width=\'60\'/></span>
                                                                </div>
                                                            </div>

                                                            <div class="comment-content clearfix">
                                                                <div class="comment-author">Mary Jane<span><a href="#"
                                                                                                              title="Permalink to this comment">June 16, 2021 at 6:00PM</a></span>
                                                                </div>
                                                                <p>Quasi, blanditiis, neque ipsum numquam odit
                                                                    asperiores hic dolor necessitatibus libero sequi
                                                                    amet voluptatibus ipsam velit qui harum temporibus
                                                                    cum nemo iste aperiam explicabo fuga odio ratione
                                                                    sint fugiat consequuntur vitae adipisci delectus eum
                                                                    incidunt possimus tenetur excepturi at accusantium
                                                                    quod doloremque reprehenderit aut expedita labore
                                                                    error atque?</p>
                                                                <div class="review-comment-ratings">
                                                                    <i class="icon-star3"></i>
                                                                    <i class="icon-star3"></i>
                                                                    <i class="icon-star3"></i>
                                                                    <i class="icon-star-empty"></i>
                                                                    <i class="icon-star-empty"></i>
                                                                </div>
                                                            </div>
                                                            <div class="clear"></div>
                                                        </div>
                                                    </li>
                                                </ol>

                                                <!-- Modal Reviews
    ============================================= -->
                                                <a href="#" data-toggle="modal" data-target="#reviewFormModal"
                                                   class="button button-3d m-0 float-right">Add a Review</a>

                                                <div class="modal fade" id="reviewFormModal" tabindex="-1" role="dialog"
                                                     aria-labelledby="reviewFormModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" id="reviewFormModalLabel">Submit
                                                                    a Review</h4>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                        aria-hidden="true">&times;
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form class="row mb-0" id="template-reviewform"
                                                                      name="template-reviewform" action="#"
                                                                      method="post">

                                                                    <div class="col-6 mb-3">
                                                                        <label for="template-reviewform-name">Name
                                                                            <small>*</small></label>
                                                                        <div class="input-group">
                                                                            <div class="input-group-prepend">
                                                                                <div class="input-group-text"><i
                                                                                            class="icon-user"></i></div>
                                                                            </div>
                                                                            <input type="text"
                                                                                   id="template-reviewform-name"
                                                                                   name="template-reviewform-name"
                                                                                   value=""
                                                                                   class="form-control required"/>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-6 mb-3">
                                                                        <label for="template-reviewform-email">Email
                                                                            <small>*</small></label>
                                                                        <div class="input-group">
                                                                            <div class="input-group-prepend">
                                                                                <div class="input-group-text">@</div>
                                                                            </div>
                                                                            <input type="email"
                                                                                   id="template-reviewform-email"
                                                                                   name="template-reviewform-email"
                                                                                   value=""
                                                                                   class="required email form-control"/>
                                                                        </div>
                                                                    </div>

                                                                    <div class="w-100"></div>

                                                                    <div class="col-12 mb-3">
                                                                        <label for="template-reviewform-rating">Rating</label>
                                                                        <select id="template-reviewform-rating"
                                                                                name="template-reviewform-rating"
                                                                                class="form-control">
                                                                            <option value="">-- Select One --</option>
                                                                            <option value="1">1</option>
                                                                            <option value="2">2</option>
                                                                            <option value="3">3</option>
                                                                            <option value="4">4</option>
                                                                            <option value="5">5</option>
                                                                        </select>
                                                                    </div>

                                                                    <div class="w-100"></div>

                                                                    <div class="col-12 mb-3">
                                                                        <label for="template-reviewform-comment">Comment
                                                                            <small>*</small></label>
                                                                        <textarea class="required form-control"
                                                                                  id="template-reviewform-comment"
                                                                                  name="template-reviewform-comment"
                                                                                  rows="6" cols="30"></textarea>
                                                                    </div>

                                                                    <div class="col-12">
                                                                        <button class="button button-3d m-0"
                                                                                type="submit"
                                                                                id="template-reviewform-submit"
                                                                                name="template-reviewform-submit"
                                                                                value="submit">Submit Review
                                                                         </button>
                                                                    </div>

                                                                </form>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Close
                                                                </button>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
                                                <!-- Modal Reviews End -->

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>
                </div>';
        return $sout;
    }

    public static function printListItems($data)
    {
        $parseURL = \MVC\controllers\UrlControllers::parseURL($_GET['url']);
        $sout = '';
        foreach ($data as $value) {
            $NameProductToString = ToolControllers::ConvertName($value);
            $sout .= '<div class="product col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="grid-inner">
                            <div class="product-image">';

//            foreach (explode("\r\n", $value['img_list']) as $ImgList) {
//                if (!empty($ImgList)) {
//                    $sout .= '<a href="#"><img src="' . $ImgList . '" alt="' . $value['ProductName'] . '"></a>';
//                }
//            }
            // chi lay 2 anh ko bi loi
            if (!empty(explode("\r\n", $value['img_list'])[0])) $sout .= '<a href="#"><img src="' . explode("\r\n", $value['img_list'])[0] . '" alt="' . $value['ProductName'] . '"></a>';
            if (!empty(explode("\r\n", $value['img_list'])[1])) $sout .= '<a href="#"><img src="' . explode("\r\n", $value['img_list'])[1] . '" alt="' . $value['ProductName'] . '"></a>';
            $sout .= '' . (($value['Stock'] < 1) ? '<div class="sale-flash badge badge-secondary p-2">' . \MVC\libs\Languages::getLangData("Out of Stock") . '</div>' : '') . '
                                ' . (($value['Stock'] > 100) ? '<div class="sale-flash badge badge-success p-2 text-uppercase">Sale!</div>' : '') . '';
            if ($value['Stock'] > 0) {
                $sout .= '<div class="bg-overlay"><div class="bg-overlay-content align-items-end justify-content-between" data-hover-animate="fadeIn" data-hover-speed="400">';
                $sout .= '<form class="cart mb-0" action="' . \MVC\controllers\UrlControllers::url("shop/cart") . '" method="post" enctype=\'multipart/form-data\'>
                        <input type="hidden" name="qty" value="1"/>
                        <input type="hidden" name="cart_items[' . $value['product_id'] . '][qty]" value="1"/>
                        <input type="hidden" name="cart_items[' . $value['product_id'] . '][price]" value="' . ((!empty($value['discount']) && $value['discount'] > 0) ? ($value['price'] * (100 - $value['discount']) / 100) : $value['price']) . '"/>
                        <input type="hidden" name="cart_items[' . $value['product_id'] . '][product_id]" value="' . $value['product_id'] . '"/>
                        <input type="hidden" name="cart_items[' . $value['product_id'] . '][product_name]" value="' . urlencode($value['ProductName']) . '"/>
                    <button type="submit" name="btn" value="submit" class="btn btn-dark mr-2"><i class="icon-shopping-basket"></i></button>
                </form>';
                $sout .= '<a href="' . \MVC\controllers\UrlControllers::url("src/views/pages/index/include/ajax/shop-item.php?product_id=" . $value['product_id']) . '" class="btn btn-dark" data-lightbox="ajax"><i class="icon-line-expand"></i></a>';
                $sout .= '</div><div class="bg-overlay-bg bg-transparent"></div></div>';
            }
            $sout .= '     </div>
                            <div class="product-desc">
                                <div class="product-title"><h3><a href="' . \MVC\controllers\UrlControllers::url("$parseURL[0]/$parseURL[1]/$parseURL[2]/" . $value['product_id'] . "-$NameProductToString.html") . '">' . $value['ProductName'] . '</a></h3>
                            </div>
                                <div class="product-price">';

            $sout .= (!empty($value['discount']) && $value['discount'] > 0) ? '<del>' . number_format($value['price']) . ' ₫ </del><ins>' . number_format(($value['price'] * (100 - $value['discount']) / 100)) . '₫ </ins>' : '<ins>' . number_format($value['price']) . ' ₫ </ins>';

            $sout .= '</div>
                                <div class="product-rating">
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star-half-full"></i>
                                    <i class="icon-star-empty"></i>
                                </div> 
                            </div>
                        </div>
                    </div>';
        }
        return $sout;
    }
}