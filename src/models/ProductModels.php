<?php

namespace MVC\models;

use MVC\controllers\ToolControllers;
use MVC\libs\Database;

class ProductModels
{
    protected $db;
    private $CRUDmodels;

    public function __construct()
    {
        $this->db = Database::getInstance();
        $this->CRUDmodels = new \MVC\models\CRUDModels();
    }

    public function getDetailElementbyID($data)
    {
        $sql = "SELECT * FROM product_category JOIN product as p on product_category.category_id = p.category_id";
        return $this->CRUDmodels->select($sql, $data);
    }

    public function getProductDetailbyID($data)
    {
        $sql = "SELECT * FROM product p JOIN product_category pc on pc.category_id = p.category_id JOIN parent_category c on c.parent_id = pc.parent_id";
        return $this->CRUDmodels->select($sql, $data);
    }

    public function getListProductinMainCategory($data)
    {
        $sql = "SELECT * FROM product LEFT JOIN product_category pc on product.category_id = pc.category_id";
        return $this->CRUDmodels->select($sql, $data, "All");
    }

    public function getAllElementbySubCateID($data)
    {
        $sql = "SELECT * FROM sub_product_category JOIN product as p on sub_product_category.category_sub = p.category_sub";
        return $this->CRUDmodels->select($sql, $data, "All");
    }
}
