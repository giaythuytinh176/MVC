<?php

namespace MVC\controllers;

class CartControllers
{
    protected $render;

    public function __construct()
    {
        $this->render = new renderControllers();
    }

    public function cartView()
    {
        $this->render->view("order/cart");
    }

    public function removeItems($params)
    {
        foreach ($_SESSION['cart_items'] as $key => $val) {
            if ($val['product_id'] === $params[0]) {
                unset($_SESSION['cart_items'][$key]);
                break;
            }
        }
        $_SESSION['cart_items'] = array_values($_SESSION['cart_items']);
        $message = '<div class="col-lg-6"><h3>Removed item successfully.</h3></div>';
        $this->render->view("order/cart", [[], $params, $message]);
    }

    public function AddProductToCart($req)
    {
        $this->render->view("order/cart", ["", "", "", $req]);
    }

    public static function DeleteCart()
    {
        if (!empty($_POST['dc']) && $_POST['dc'] == 'Delete Cart') {
            unset($_SESSION['cart_items']);
            echo '<div class="col-lg-6" id="hideUpdatedCart"><h3>Deleted items successfully.</h3></div>';
        }
    }

    public static function UpdateQuantityCart()
    {
        if (!empty($_REQUEST['uc']) && $_REQUEST['uc'] == 'Update Cart') {
            if ($_SESSION['cart_items'] == $_REQUEST['cart_items']) {
                echo '<div class="col-lg-6" id="hideUpdatedCart"><h3>Nothing to update.</h3></div>';
            } else {
                echo '<div class="col-lg-6" id="hideUpdatedCart"><h3>Updated items successfully.</h3></div>';
                $_SESSION['cart_items'] = $_REQUEST['cart_items'];
            }
        }
    }

    public function ShowCartProduct($items)
    {
        if (empty($_SESSION['cart_items'])) {// Neu chua co session thi them items vao session do luon
            $_SESSION['cart_items'] = $items['cart_items'];
        } else {
            foreach ($_SESSION['cart_items'] as $key_items => $cart_items) {
                if (!empty($cart_items['product_id']) && !empty($items['cart_items'][$key_items]['product_id']) && $cart_items['product_id'] === $items['cart_items'][$key_items]['product_id']) {
                    $items["cart_items"][$key_items]['qty'] = $cart_items['qty'] + $items['cart_items'][$key_items]['qty'];
                    $_SESSION["cart_items"][$key_items] = $items["cart_items"][$key_items];
                    break;
                }// neu ton tai product_id trong session roi thi + them so san pham
            }
            foreach ($items['cart_items'] as $key => $value) {
                if (empty($_SESSION['cart_items'][$key]) == true) {//neu chua co product_id thi them product_id nay vao
                    $_SESSION['cart_items'][$key] = $value;
                    break;
                }
            }
        }
        $sout = $this->ShowCartProductFromSession();
        return $sout;
    }

    public function ShowCartProductOnRightTop()
    {
        if (!empty($_SESSION['cart_items'])) $totalPriceCart = \MVC\controllers\ProductControllers::CalculateTotalCart();
        else $totalPriceCart = 0;
        $sout = '';
        $sout .= '<div class="header-misc">
                        <!-- Top Search
                        ============================================= -->
                        <div id="top-search" class="header-misc-icon">
                            <a href="#" id="top-search-trigger"><i class="icon-line-search"></i><i
                                        class="icon-line-cross"></i></a>
                        </div><!-- #top-search end -->

                        <!-- Top Cart
                        ============================================= -->
                        <div id="top-cart" class="header-misc-icon d-none d-sm-block">
                            <a href="#" id="top-cart-trigger"><i class="icon-line-bag"></i><span
                                        class="top-cart-number">' . (!empty(($_SESSION['cart_items'])) ? count($_SESSION['cart_items']) : 0) . '</span></a>
                            <div class="top-cart-content">
                                <div class="top-cart-title">
                                    <h4>Shopping Cart</h4>
                                </div>
                                <div class="top-cart-items">';
        if (!empty($_SESSION['cart_items'])) {
            foreach ($_SESSION['cart_items'] as $value) {
                $items_detail = (new \MVC\controllers\ProductControllers())->getProductDetailbyID($value['product_id']);
                $amount = ((!empty($items_detail['discount']) && $items_detail['discount'] > 0) ? ($items_detail['price'] * (100 - $items_detail['discount']) / 100) : ($items_detail['price']));
                $sout .= '
                                    <div class="top-cart-item">
                                        <div class="top-cart-item-image">
                                            <a href="#"><img src="' . $items_detail['img_link'] . '" alt="' . $items_detail['ProductName'] . '"/></a>
                                        </div>
                                        <div class="top-cart-item-desc">
                                            <div class="top-cart-item-desc-title">
                                                <a href="#">' . $items_detail['ProductName'] . '</a>
                                                <span class="top-cart-item-price d-block">' . number_format($amount) . ' đ</span>
                                            </div>
                                            <div class="top-cart-item-quantity">x ' . $value['qty'] . '</div>
                                        </div>
                                    </div>
                                    ';
            }
        } else {
            $sout .= "Cart is empty.";
        }

        $sout .= '
                                </div>
                                <div class="top-cart-action">
                                    <span class="top-checkout-price">' . number_format($totalPriceCart) . ' đ</span>
                                    <a href="' . \MVC\controllers\UrlControllers::url("shop/cart") . '" class="button button-3d button-small m-0">View Cart</a>
                                </div>
                            </div>
                        </div><!-- #top-cart end -->

                    </div>';
        return $sout;
    }

    public function ShowCartProductFromSession()
    {
        if (!empty($_SESSION['cart_items'])) $totalPriceCart = \MVC\controllers\ProductControllers::CalculateTotalCart();
        else $totalPriceCart = 0;
        $sout = '';
        $sout .= '<form action="' . \MVC\controllers\UrlControllers::url("shop/cart") . '" method="post" enctype="multipart/form-data">';
        $sout .= '<table class="table cart mb-5"><thead>';
        $sout .= ' <tr>
                        <th class="cart-product-remove">&nbsp;</th>
                        <th class="cart-product-thumbnail">&nbsp;</th>
                        <th class="cart-product-name">Product</th>
                        <th class="cart-product-price">Unit Price</th>
                        <th class="cart-product-quantity">Quantity</th>
                        <th class="cart-product-subtotal">Total</th>
                    </tr>
                    </thead>
                    <tbody>';
        foreach ($_SESSION['cart_items'] as $keyItems => $item) {
            $valFromDB = (new \MVC\controllers\ProductControllers())->getProductDetailbyID($item['product_id']);

            $NameProductToString = preg_replace("/^[\W]+$/", "-", $valFromDB['ProductName']);
            $NameProductToString = str_replace(array("\r", "\n", "\s", "\t", " "), "-", $NameProductToString);
            $NameProductToString = strtolower($NameProductToString);
            $NameProductToString = html_entity_decode($NameProductToString, ENT_QUOTES, "utf-8");// xoa cac ki tu dac biet trong chuoi
            $NameProductToString = transliterator_transliterate('Any-Latin; Latin-ASCII; [\u0080-\u7fff] remove', $NameProductToString);//convert chu co dau sang ko dau

            $amount = ((!empty($valFromDB['discount']) && $valFromDB['discount'] > 0) ? ($valFromDB['price'] * (100 - $valFromDB['discount']) / 100) : ($valFromDB['price']));
            $sout .= '<tr class="cart_item">
                        <td class="cart-product-remove">
                            <a href="' . \MVC\controllers\UrlControllers::url("shop/cart/" . $item['product_id']) . '" onclick="return confirm(\'Are you sure want to delete it?\')" class="remove" title="Remove this item"><i class="icon-trash2"></i></a>
                        </td>

                        <td class="cart-product-thumbnail">
                            <a href="#"><img width="64" height="64"
                                             src="' . $valFromDB['img_link'] . '"
                                             alt="' . $valFromDB['ProductName'] . '"></a>
                        </td>

                        <td class="cart-product-name">
                            <a href="' . \MVC\controllers\UrlControllers::url("category/".$valFromDB['category_name']."/".$valFromDB['code']."/" . $item['product_id'] . "-$NameProductToString.html") . '">' . $valFromDB['ProductName'] . '</a>
                        </td>

                        <td class="cart-product-price">
                            <span class="amount">' . number_format($amount) . ' đ</span>
                        </td>

                        <td class="cart-product-quantity">
                            <div class="quantity">
                                <input type="button" value="-" class="minus">
                                <input type="text" name="quantity-' . $item['product_id'] . '" value="' . $item['qty'] . '" class="qty"/>
                                <input type="hidden" name="cart_items[' . $item['product_id'] . '][qty]" value="' . $item['qty'] . '" class="qty"/>
                                <input type="hidden" name="cart_items[' . $item['product_id'] . '][product_id]" value="' . $item['product_id'] . '">
                                <input type="hidden" name="cart_items[' . $item['product_id'] . '][price]" value="' . $item['price'] . '">
                                <input type="hidden" name="cart_items[' . $item['product_id'] . '][product_name]" value="' . urlencode($valFromDB['ProductName']) . '">
                                <input type="button" value="+" class="plus">
                            </div>
                        </td>

                        <td class="cart-product-subtotal">
                            <span class="amount">' . number_format($item['qty'] * $amount) . ' đ</span>
                        </td>
                    </tr>
                    ';
        }
        $sout .= '<tr class="cart_item">
                        <td colspan="6">
                            <div class="row justify-content-between py-2 col-mb-30">
                                <div class="col-lg-auto pl-lg-0">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <input type="text" name="coupon" value="" class="sm-form-control text-center text-md-left"
                                                   placeholder="Enter Coupon Code.."/>
                                        </div>
                                        <div class="col-md-4 mt-3 mt-md-0">
                                            <a href="#" class="button button-3d button-black m-0">Apply Coupon</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-auto pr-lg-0">
                                    <input type="submit" name="dc" class="btn2 btn-danger" onclick="return confirm(\'Are you sure you want to delete this?\');" value="Delete Cart">
                                    <input type="submit" name="uc" class="button button-3d m-0" value="Update Cart">
                                    <a href="' . \MVC\controllers\UrlControllers::url("shop/checkout") . '" class="button button-3d mt-2 mt-sm-0 mr-0">Proceed to Checkout</a>
                                </div>
                            </div>
                        </td>
                    </tr>';
        $sout .= '</tbody>';
        $sout .= '</table>';

        $sout .= '<div class="row col-mb-30">
                    <div class="col-lg-6">
                        <h4>Calculate Shipping</h4>
                        <form class="row">
                            <div class="col-12 form-group">
                                <select class="sm-form-control">
                                    <option value="AX">&#197;land Islands</option>
                                    <option value="AF">Afghanistan</option>
                                    <option value="AL">Albania</option>
                                    <option value="DZ">Algeria</option>
                                    <option value="AD">Andorra</option>
                                    <option value="AO">Angola</option>
                                    <option value="AI">Anguilla</option>
                                    <option value="AQ">Antarctica</option>
                                    <option value="AG">Antigua and Barbuda</option>
                                    <option value="AR">Argentina</option>
                                    <option value="AM">Armenia</option>
                                    <option value="AW">Aruba</option>
                                    <option value="AU">Australia</option>
                                    <option value="AT">Austria</option>
                                    <option value="AZ">Azerbaijan</option>
                                    <option value="BS">Bahamas</option>
                                    <option value="BH">Bahrain</option>
                                    <option value="BD">Bangladesh</option>
                                    <option value="BB">Barbados</option>
                                    <option value="BY">Belarus</option>
                                    <option value="PW">Belau</option>
                                    <option value="BE">Belgium</option>
                                    <option value="BZ">Belize</option>
                                    <option value="BJ">Benin</option>
                                    <option value="BM">Bermuda</option>
                                    <option value="BT">Bhutan</option>
                                    <option value="BO">Bolivia</option>
                                    <option value="BQ">Bonaire, Saint Eustatius and Saba</option>
                                    <option value="BA">Bosnia and Herzegovina</option>
                                    <option value="BW">Botswana</option>
                                    <option value="BV">Bouvet Island</option>
                                    <option value="BR">Brazil</option>
                                    <option value="IO">British Indian Ocean Territory</option>
                                    <option value="VG">British Virgin Islands</option>
                                    <option value="BN">Brunei</option>
                                    <option value="BG">Bulgaria</option>
                                    <option value="BF">Burkina Faso</option>
                                    <option value="BI">Burundi</option>
                                    <option value="KH">Cambodia</option>
                                    <option value="CM">Cameroon</option>
                                    <option value="CA">Canada</option>
                                    <option value="CV">Cape Verde</option>
                                    <option value="KY">Cayman Islands</option>
                                    <option value="CF">Central African Republic</option>
                                    <option value="TD">Chad</option>
                                    <option value="CL">Chile</option>
                                    <option value="CN">China</option>
                                    <option value="CX">Christmas Island</option>
                                    <option value="CC">Cocos (Keeling) Islands</option>
                                    <option value="CO">Colombia</option>
                                    <option value="KM">Comoros</option>
                                    <option value="CG">Congo (Brazzaville)</option>
                                    <option value="CD">Congo (Kinshasa)</option>
                                    <option value="CK">Cook Islands</option>
                                    <option value="CR">Costa Rica</option>
                                    <option value="HR">Croatia</option>
                                    <option value="CU">Cuba</option>
                                    <option value="CW">Cura&Ccedil;ao</option>
                                    <option value="CY">Cyprus</option>
                                    <option value="CZ">Czech Republic</option>
                                    <option value="DK">Denmark</option>
                                    <option value="DJ">Djibouti</option>
                                    <option value="DM">Dominica</option>
                                    <option value="DO">Dominican Republic</option>
                                    <option value="EC">Ecuador</option>
                                    <option value="EG">Egypt</option>
                                    <option value="SV">El Salvador</option>
                                    <option value="GQ">Equatorial Guinea</option>
                                    <option value="ER">Eritrea</option>
                                    <option value="EE">Estonia</option>
                                    <option value="ET">Ethiopia</option>
                                    <option value="FK">Falkland Islands</option>
                                    <option value="FO">Faroe Islands</option>
                                    <option value="FJ">Fiji</option>
                                    <option value="FI">Finland</option>
                                    <option value="FR">France</option>
                                    <option value="GF">French Guiana</option>
                                    <option value="PF">French Polynesia</option>
                                    <option value="TF">French Southern Territories</option>
                                    <option value="GA">Gabon</option>
                                    <option value="GM">Gambia</option>
                                    <option value="GE">Georgia</option>
                                    <option value="DE">Germany</option>
                                    <option value="GH">Ghana</option>
                                    <option value="GI">Gibraltar</option>
                                    <option value="GR">Greece</option>
                                    <option value="GL">Greenland</option>
                                    <option value="GD">Grenada</option>
                                    <option value="GP">Guadeloupe</option>
                                    <option value="GT">Guatemala</option>
                                    <option value="GG">Guernsey</option>
                                    <option value="GN">Guinea</option>
                                    <option value="GW">Guinea-Bissau</option>
                                    <option value="GY">Guyana</option>
                                    <option value="HT">Haiti</option>
                                    <option value="HM">Heard Island and McDonald Islands</option>
                                    <option value="HN">Honduras</option>
                                    <option value="HK">Hong Kong</option>
                                    <option value="HU">Hungary</option>
                                    <option value="IS">Iceland</option>
                                    <option value="IN">India</option>
                                    <option value="ID">Indonesia</option>
                                    <option value="IR">Iran</option>
                                    <option value="IQ">Iraq</option>
                                    <option value="IM">Isle of Man</option>
                                    <option value="IL">Israel</option>
                                    <option value="IT">Italy</option>
                                    <option value="CI">Ivory Coast</option>
                                    <option value="JM">Jamaica</option>
                                    <option value="JP">Japan</option>
                                    <option value="JE">Jersey</option>
                                    <option value="JO">Jordan</option>
                                    <option value="KZ">Kazakhstan</option>
                                    <option value="KE">Kenya</option>
                                    <option value="KI">Kiribati</option>
                                    <option value="KW">Kuwait</option>
                                    <option value="KG">Kyrgyzstan</option>
                                    <option value="LA">Laos</option>
                                    <option value="LV">Latvia</option>
                                    <option value="LB">Lebanon</option>
                                    <option value="LS">Lesotho</option>
                                    <option value="LR">Liberia</option>
                                    <option value="LY">Libya</option>
                                    <option value="LI">Liechtenstein</option>
                                    <option value="LT">Lithuania</option>
                                    <option value="LU">Luxembourg</option>
                                    <option value="MO">Macao S.A.R., China</option>
                                    <option value="MK">Macedonia</option>
                                    <option value="MG">Madagascar</option>
                                    <option value="MW">Malawi</option>
                                    <option value="MY">Malaysia</option>
                                    <option value="MV">Maldives</option>
                                    <option value="ML">Mali</option>
                                    <option value="MT">Malta</option>
                                    <option value="MH">Marshall Islands</option>
                                    <option value="MQ">Martinique</option>
                                    <option value="MR">Mauritania</option>
                                    <option value="MU">Mauritius</option>
                                    <option value="YT">Mayotte</option>
                                    <option value="MX">Mexico</option>
                                    <option value="FM">Micronesia</option>
                                    <option value="MD">Moldova</option>
                                    <option value="MC">Monaco</option>
                                    <option value="MN">Mongolia</option>
                                    <option value="ME">Montenegro</option>
                                    <option value="MS">Montserrat</option>
                                    <option value="MA">Morocco</option>
                                    <option value="MZ">Mozambique</option>
                                    <option value="MM">Myanmar</option>
                                    <option value="NA">Namibia</option>
                                    <option value="NR">Nauru</option>
                                    <option value="NP">Nepal</option>
                                    <option value="NL">Netherlands</option>
                                    <option value="AN">Netherlands Antilles</option>
                                    <option value="NC">New Caledonia</option>
                                    <option value="NZ">New Zealand</option>
                                    <option value="NI">Nicaragua</option>
                                    <option value="NE">Niger</option>
                                    <option value="NG">Nigeria</option>
                                    <option value="NU">Niue</option>
                                    <option value="NF">Norfolk Island</option>
                                    <option value="KP">North Korea</option>
                                    <option value="NO">Norway</option>
                                    <option value="OM">Oman</option>
                                    <option value="PK">Pakistan</option>
                                    <option value="PS">Palestinian Territory</option>
                                    <option value="PA">Panama</option>
                                    <option value="PG">Papua New Guinea</option>
                                    <option value="PY">Paraguay</option>
                                    <option value="PE">Peru</option>
                                    <option value="PH">Philippines</option>
                                    <option value="PN">Pitcairn</option>
                                    <option value="PL">Poland</option>
                                    <option value="PT">Portugal</option>
                                    <option value="QA">Qatar</option>
                                    <option value="IE">Republic of Ireland</option>
                                    <option value="RE">Reunion</option>
                                    <option value="RO">Romania</option>
                                    <option value="RU">Russia</option>
                                    <option value="RW">Rwanda</option>
                                    <option value="ST">S&atilde;o Tom&eacute; and Pr&iacute;ncipe</option>
                                    <option value="BL">Saint Barth&eacute;lemy</option>
                                    <option value="SH">Saint Helena</option>
                                    <option value="KN">Saint Kitts and Nevis</option>
                                    <option value="LC">Saint Lucia</option>
                                    <option value="SX">Saint Martin (Dutch part)</option>
                                    <option value="MF">Saint Martin (French part)</option>
                                    <option value="PM">Saint Pierre and Miquelon</option>
                                    <option value="VC">Saint Vincent and the Grenadines</option>
                                    <option value="SM">San Marino</option>
                                    <option value="SA">Saudi Arabia</option>
                                    <option value="SN">Senegal</option>
                                    <option value="RS">Serbia</option>
                                    <option value="SC">Seychelles</option>
                                    <option value="SL">Sierra Leone</option>
                                    <option value="SG">Singapore</option>
                                    <option value="SK">Slovakia</option>
                                    <option value="SI">Slovenia</option>
                                    <option value="SB">Solomon Islands</option>
                                    <option value="SO">Somalia</option>
                                    <option value="ZA">South Africa</option>
                                    <option value="GS">South Georgia/Sandwich Islands</option>
                                    <option value="KR">South Korea</option>
                                    <option value="SS">South Sudan</option>
                                    <option value="ES">Spain</option>
                                    <option value="LK">Sri Lanka</option>
                                    <option value="SD">Sudan</option>
                                    <option value="SR">Suriname</option>
                                    <option value="SJ">Svalbard and Jan Mayen</option>
                                    <option value="SZ">Swaziland</option>
                                    <option value="SE">Sweden</option>
                                    <option value="CH">Switzerland</option>
                                    <option value="SY">Syria</option>
                                    <option value="TW">Taiwan</option>
                                    <option value="TJ">Tajikistan</option>
                                    <option value="TZ">Tanzania</option>
                                    <option value="TH">Thailand</option>
                                    <option value="TL">Timor-Leste</option>
                                    <option value="TG">Togo</option>
                                    <option value="TK">Tokelau</option>
                                    <option value="TO">Tonga</option>
                                    <option value="TT">Trinidad and Tobago</option>
                                    <option value="TN">Tunisia</option>
                                    <option value="TR">Turkey</option>
                                    <option value="TM">Turkmenistan</option>
                                    <option value="TC">Turks and Caicos Islands</option>
                                    <option value="TV">Tuvalu</option>
                                    <option value="UG">Uganda</option>
                                    <option value="UA">Ukraine</option>
                                    <option value="AE">United Arab Emirates</option>
                                    <option value="GB">United Kingdom (UK)</option>
                                    <option value="US">United States (US)</option>
                                    <option value="UY">Uruguay</option>
                                    <option value="UZ">Uzbekistan</option>
                                    <option value="VU">Vanuatu</option>
                                    <option value="VA">Vatican</option>
                                    <option value="VE">Venezuela</option>
                                    <option value="VN" selected="selected">Vietnam</option>
                                    <option value="WF">Wallis and Futuna</option>
                                    <option value="EH">Western Sahara</option>
                                    <option value="WS">Western Samoa</option>
                                    <option value="YE">Yemen</option>
                                    <option value="ZM">Zambia</option>
                                    <option value="ZW">Zimbabwe</option>
                                </select>
                            </div>
                            <div class="col-6 form-group">
                                <input type="text" class="sm-form-control" placeholder="State / Country"/>
                            </div>
                            <div class="col-6 form-group">
                                <input type="text" class="sm-form-control" placeholder="PostCode / Zip"/>
                            </div>
                            <div class="col-12 form-group">
                                <button class="button button-3d m-0 button-black">Update Totals</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-6">
                        <h4>Cart Totals</h4>
                        <div class="table-responsive">
                            <table class="table cart cart-totals">
                                <tbody>
                                <tr class="cart_item">
                                    <td class="cart-product-name">
                                        <strong>Cart Subtotal</strong>
                                    </td>
                                    <td class="cart-product-name">
                                        <span class="amount">' . number_format($totalPriceCart) . ' đ</span>
                                    </td>
                                </tr>
                                <tr class="cart_item">
                                    <td class="cart-product-name">
                                        <strong>Shipping</strong>
                                    </td>
                                    <td class="cart-product-name">
                                        <span class="amount">Free Delivery</span>
                                    </td>
                                </tr>';

        if (!empty($_POST['coupon']) && $_POST['coupon'] == '10percent') { // chua hoan thien chuc nang apply coupon de tru gia san pham.
            $sout .= '
                                <tr class="cart_item">
                                    <td class="cart-product-name">
                                        <strong>Total</strong>
                                    </td>
                                    <td class="cart-product-name">
                                        <span class="amount color lead"><strong>' . number_format($totalPriceCart * 0.9) . ' đ</strong></span>
                                    </td>
                                </tr>';
            $sout .= '
                                      <tr class="cart_item">
                                           <td>
                                           <strong>Discount</strong>
                                           </td>
                                       <td>
                                       <span class="amount color lead"><strong>10%</strong></span>
                                       </td>
                                     </tr>';
        } else {
            $sout .= '
                                <tr class="cart_item">
                                    <td class="cart-product-name">
                                        <strong>Total</strong>
                                    </td>
                                    <td class="cart-product-name">
                                        <span class="amount color lead"><strong>' . number_format($totalPriceCart) . ' đ</strong></span>
                                    </td>
                                </tr>';
        }
        $sout .= '
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>';
        $sout .= "</form>";
        return $sout;
    }
//total = total prices of products in cart (with tax) + shipping cost + fees + tax on fees - discount
//subtotal = total prices of products in cart (with tax)
}