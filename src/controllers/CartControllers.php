<?php

namespace MVC\controllers;

use MVC\models\CartModels;

class CartControllers extends CartModels
{
    public function cartView($params)
    {
        (new renderControllers())->view("order/cart");
    }

    public function AddProductToCart($action, $params, $req)
    {
        $data = parent::AddProductToCart($action, $params, $req);
        (new renderControllers())->view("order/cart", [$data, $action, $params, $req]);
    }

    public function ShowCartProductFromSession()
    {
        $sout = '';
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
        foreach ($_SESSION['cart_items'] as $item) {
            $valFromDB = (new \MVC\controllers\ProductControllers())->getProductDetailbyID($item['product_id']);
            $amount = ((!empty($valFromDB['discount']) && $valFromDB['discount'] > 0) ? ($valFromDB['price'] * (100 - $valFromDB['discount']) / 100) : ($valFromDB['price']));
            $sout .= '<tr class="cart_item">
                        <td class="cart-product-remove">
                            <a href="#" class="remove" title="Remove this item"><i class="icon-trash2"></i></a>
                        </td>

                        <td class="cart-product-thumbnail">
                            <a href="#"><img width="64" height="64"
                                             src="' . $valFromDB['img_link'] . '"
                                             alt="Pink Printed Dress"></a>
                        </td>

                        <td class="cart-product-name">
                            <a href="#">' . $valFromDB['ProductName'] . '</a>
                        </td>

                        <td class="cart-product-price">
                            <span class="amount">' . number_format($amount) . ' đ</span>
                        </td>

                        <td class="cart-product-quantity">
                            <div class="quantity">
                                <input type="button" value="-" class="minus">
                                <input type="text" name="quantity" value="' . $item['qty'] . '" class="qty"/>
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
                                            <input type="text" value="" class="sm-form-control text-center text-md-left"
                                                   placeholder="Enter Coupon Code.."/>
                                        </div>
                                        <div class="col-md-4 mt-3 mt-md-0">
                                            <a href="#" class="button button-3d button-black m-0">Apply Coupon</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-auto pr-lg-0">
                                    <a href="#" class="button button-3d m-0">Update Cart</a>
                                    <a href="shop.html" class="button button-3d mt-2 mt-sm-0 mr-0">Proceed to
                                        Checkout</a>
                                </div>
                            </div>
                        </td>
                    </tr>';
        $sout .= '</tbody>';
        $sout .= '</table>';
        // \MVC\controllers\ToolControllers::PrettyShow($_SESSION);
        return $sout;
    }

    public function ShowCartProduct($data)
    {
        $items = ["product_id" => $data[3]['product_id'], 'price' => $data[3]['price'], 'qty' => $data[3]['qty']];
        if (empty($_SESSION['cart_items']) || empty($_SESSION['cart_items'][0])) {
            $_SESSION["cart_items"][] = $items;
        } else {
            foreach ($_SESSION['cart_items'] as $key_items => $cart_items) {
                if (!empty($cart_items['product_id']) && $cart_items['product_id'] === $data[3]['product_id']) {
                    $_SESSION["cart_items"][$key_items] = ["product_id" => $data[3]['product_id'], 'price' => $data[3]['price'], 'qty' => $cart_items['qty'] + $data[3]['qty']];
                    break;
                } elseif (empty($_SESSION['cart_items'][$key_items + 1])) {
                    $_SESSION["cart_items"][] = $items;
                    //$_SESSION["cart_items"] = array_merge($_SESSION["cart_items"], $items);//other way
                }
            }
        }

        $sout = $this->ShowCartProductFromSession();
        return $sout;
    }
}