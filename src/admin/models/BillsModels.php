<?php

namespace MVC\admin\models;

use MVC\models\CRUDModels;

class BillsModels
{
    private $CRUDmodels;

    public function __construct()
    {
        $this->CRUDmodels = new CRUDModels();
    }

    public function getListOrders()
    {
        return $this->CRUDmodels->select("orders", "", "", "All");
    }

    public function getOrderDetailByOrderNumber($product_id, $ordernumber)
    {
        return $this->CRUDmodels->select("orderdetails", ['product_id' => $product_id, 'orderNumber' => $ordernumber]);
    }

    public function getOrderDetail($ordernumber)
    {
        return $this->CRUDmodels->select2("SELECT orderNumber, GROUP_CONCAT(product_id) as ListProductEachOrder, SUM(qty * amount) as TotalEachOrder, GROUP_CONCAT(qty) as ListQty, GROUP_CONCAT(amount) as ListAmount  FROM orderdetails GROUP BY orderNumber HAVING orderNumber = {$ordernumber}");
    }

    public function getPriceDiscountByID($product_id)
    {
        return $this->CRUDmodels->select("product", ['product_id' => $product_id]);
    }
}