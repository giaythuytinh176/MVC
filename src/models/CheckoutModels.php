<?php

namespace MVC\models;

class CheckoutModels
{
    /**
     * @var CRUDModels
     */
    protected $CRUDmodels;

    public function __construct()
    {
        $this->CRUDmodels = new CRUDModels();
    }

    public function UpdateAddress($data, $where)
    {
        return $this->CRUDmodels->update('user', $data, $where);
    }

    public function InsertOrders($data)
    {
        return $this->CRUDmodels->insert("orders", $data);
    }

    public function InsertOrderDetails($data)
    {
        return $this->CRUDmodels->insert("orderdetails", $data);
    }

    public function SelectLastOrderNumber()
    {
        return $this->CRUDmodels->select2("SELECT MAX(orderNumber) as LastOrderNumber FROM orders");
    }

    public function lastInsertId()
    {
        return $this->CRUDmodels->lastInsertId();
    }

}