<?php

namespace MVC\controllers;

use \MVC\controllers\ProductControllers;
use \MVC\controllers\UrlControllers;

class CheckoutControllers
{
    public function checkoutView()
    {
        (new RenderControllers())->view("checkout/checkout");
    }

    public static function CalculateTotalCheckOut()
    {
        if (!empty($_SESSION['cart_items'])) $totalPriceCart = ProductControllers::CalculateTotalCart();
        else $totalPriceCart = 0;
        $sout = '';
        $sout .= '<div class="table-responsive">
                            <table class="table cart">
                                <tbody>
                                <tr class="cart_item">
                                    <td class="border-top-0 cart-product-name">
                                        <strong>Cart Subtotal</strong>
                                    </td>

                                    <td class="border-top-0 cart-product-name">
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
                                </tr>
                                <tr class="cart_item">
                                    <td class="cart-product-name">
                                        <strong>Total</strong>
                                    </td>

                                    <td class="cart-product-name">
                                        <span class="amount color lead"><strong>' . number_format($totalPriceCart) . ' đ</strong></span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>';
        return $sout;
    }

    public function getListItemCheckout()
    {
        $sout = '';
        $sout .= '<table class="table cart"><thead>
                                <tr>
                                    <th class="cart-product-thumbnail">&nbsp;</th>
                                    <th class="cart-product-name">Product</th>
                                    <th class="cart-product-quantity">Quantity</th>
                                    <th class="cart-product-subtotal">Total</th>
                                </tr>';

        $sout .= '</thead><tbody>';
        if (!empty($_SESSION['cart_items'])) {
            foreach ($_SESSION['cart_items'] as $value) {
                $item = (new ProductControllers())->getProductDetailbyID($value['product_id']);
                $amount = ((!empty($item['discount']) && $item['discount'] > 0) ? ($item['price'] * (100 - $item['discount']) / 100) : ($item['price']));
                $NameProductToString = ToolControllers::ConvertName($item);
                $sout .= '<tr class="cart_item">
                                    <td class="cart-product-thumbnail">
                                        <a href="#"><img width="64" height="64"
                                                         src="' . $item['img_link'] . '"
                                                         alt="' . $item['ProductName'] . '"></a>
                                    </td>

                                    <td class="cart-product-name">
                                        <a href="' . UrlControllers::url("category/" . $item['category_code'] . "/" . $item['code'] . "/" . $value['product_id'] . "-$NameProductToString.html") . '">' . $item['ProductName'] . '</a>
                                    </td>

                                    <td class="cart-product-quantity">
                                        <div class="quantity clearfix">
                                            1 x ' . $value['qty'] . ' 
                                        </div>
                                    </td>

                                    <td class="cart-product-subtotal">
                                        <span class="amount">' . number_format($amount * $value['qty']) . ' đ</span>
                                    </td>
                                </tr>';
            }
        } else {
            $sout .= '<tr class="cart_item">
                     <td class="cart-product-name" colspan="4">Cart is empty.</td>
                     </tr>';
        }
        $sout .= '</tbody></table>';
        echo $sout;
    }
}