<?php

namespace MVC\admin\controllers;

use MVC\admin\models\BillsModels;
use MVC\controllers\ToolControllers;
use MVC\controllers\UrlControllers;

class BillsControllers
{
    private $billsmodels;

    public function __construct()
    {
        $this->billsmodels = new BillsModels();
    }

    public function getListOrders()
    {
        return $this->billsmodels->getListOrders();
    }

    public function getOrderDetail($ordernumber)
    {
        return $this->billsmodels->getOrderDetail($ordernumber);
    }

    public function PrintOrderDetail($ordernumber)
    {
        $sout = '';
        if (empty((new self)->getOrderDetail($ordernumber)['errors'])) {
            $detail = (new self)->getOrderDetail($ordernumber);

            $sout .= '      
                        <table id="OrderDetail" class="table table-bordered table-hover" cellspacing="0"
                               width="100%">
                            <thead class="text-white thead-dark">
                            <tr>
                                <th style="width: 10%" class="success">Order Number</th>
                                <th style="width: 40%" class="success">Product List</th>
                                <th style="width: 10%" class="success">Quantity</th>
                                <th style="width: 15%" class="success">Amount</th>
                                <th style="width: 15%" class="success">Total Price</th>
                            </tr>
                            </thead>
                            <tbody>';

            $sout .= '   <tr>
                                <td class="success">DH-' . $ordernumber . '</td>
                                <td class="success">';
            if (strpos($detail['ListProductEachOrder'], ',') !== false) {
                $product_list = [];
                foreach (explode(",", $detail['ListProductEachOrder']) as $val) {
                    $product_list[] = (new \MVC\controllers\ProductControllers)->getProductDetailbyID($val)['ProductName'];
                }
                $sout .= implode("</br>\n", $product_list);

            } else {
                $sout .= (new \MVC\controllers\ProductControllers)->getProductDetailbyID($detail['ListProductEachOrder'])['ProductName'];
            }
            $sout .= '                     
                                </td>
                                <td class="success">';

            if (strpos($detail['ListQty'], ',') !== false) {
                $qty_list = [];
                foreach (explode(",", $detail['ListQty']) as $val) {
                    $qty_list[] = $val;
                }
                $sout .= implode("</br>\n", $qty_list);

            } else {

                $sout .= $detail['ListQty'];
            }
            $sout .= '                     
                                </td> 
                                <td class="success">';
            if (strpos($detail['ListAmount'], ',') !== false) {
                $amount_list = [];
                foreach (explode(",", $detail['ListAmount']) as $val) {
                    $amount_list[] = number_format($val) . " đ";
                }
                $sout .= implode("</br>\n", $amount_list);

            } else {
                $sout .= number_format($detail['ListAmount']) . " đ";
            }
            $sout .= '                     
                                </td>   
                                <td>
                                    ' . number_format($detail['TotalEachOrder']) . ' đ 
                                </td>
                            </tr>';
            $sout .= '</tbody>
                        </table>';
        }

        return $sout;
    }

    public static function PrintListOrders()
    {
        $sout = '';
        $sout .= '      
                        <table id="ListOrders" class="table table-bordered table-hover" cellspacing="0"
                               width="100%">
                            <thead class="text-white thead-dark">
                            <tr>
                                <th style="width: 1%">
                                    <input type="checkbox" class="select-all checkbox" name="select-all"/>
                                </th>
                                <th style="width: 2%">#</th>
                                <th style="width: 7%" class="success">Order Number</th>
                                <th style="width: 10%" class="success">Username</th>
                                <th style="width: 15%" class="success">Order Date</th>
                                <th style="width: 15%" class="warning">Shipped Date</th>
                                <th style="width: 5%" class="warning"></th>
                            </tr>
                            </thead>
                            <tbody>';
        if (empty((new self)->getListOrders()['errors'])) {
            foreach ((new self)->getListOrders() as $key => $value) {
                $sout .= '   <tr>
                                <td class="active">
                                    <input type="checkbox" class="select-item checkbox" name="select-item"
                                           value="' . $value['orderNumber'] . '"/>
                                </td>
                                <td>' . ($key + 1) . '</td>
                                <td class="success"><a href="' . UrlControllers::url("admin/bills/detail/" . $value['orderNumber']) . '">DH-' . $value['orderNumber'] . '</a></td>
                                <td class="success">' . (new \MVC\controllers\UserControllers)->getAllInfoUserbyID($value['user_id'])['username'] . '</td>
                                <td class="success">' . $value['orderDate'] . '</td>
                                <td class="warning">' . $value['shippedDate'] . '</td>
                                <td class="danger">
                                       <button id="trashbills' . $value['orderNumber'] . '" class="fas fa-trash-alt mytrashbills" title="Delete Bills ' . $value['orderNumber'] . '" value="' . $value['orderNumber'] . '"></button>
                                </td>
                            </tr>';
            }
            $sout .= '</tbody>
                        </table>';
        } else {
            $sout .= "No Bills.";
        }
        return $sout;
    }

}