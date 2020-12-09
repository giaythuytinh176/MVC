<?php

namespace MVC\controllers;

use \MVC\controllers\ProductControllers;
use \MVC\controllers\UrlControllers;
use MVC\models\CheckoutModels;

class CheckoutControllers
{
    protected $cm;

    public function __construct()
    {
        $this->cm = new CheckoutModels();
    }

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

    public function InsertCart($post, $userData)
    {
        $fname = $post['shipping-form-name'];
        $lname = $post['shipping-form-lname'];
        $address = $post['shipping-form-address'];
        $city = $post['shipping-form-city'];
        $phone = $post['shipping-form-phone'];
        $message = $post['shipping-form-message'];
        $datetime = date("Y-m-d H:i:s");

        $dataInsert = [
            'user_id' => $userData['user_id'],
            'orderDate' => $datetime,
        ];
        $this->cm->InsertOrders($dataInsert);
        //$last_orderNumber = $this->cm->SelectLastOrderNumber();
        $lastInsertNumber = $this->cm->lastInsertId();
        foreach ($_SESSION['cart_items'] as $key => $value) {
            $orders = [
                'orderNumber' => $lastInsertNumber,//$last_orderNumber['LastOrderNumber'],
                'product_id' => $value['product_id'],
                'qty' => $value['qty'],
                'amount' => $value['price'],
            ];
            $this->cm->InsertOrderDetails($orders);
        }
        unset($_SESSION['cart_items']);
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
        return $sout;
    }
}