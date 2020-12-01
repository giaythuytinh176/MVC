<?php

namespace MVC\models;

use MVC\controllers\ToolControllers;
use \MVC\models\CRUDModels;

class ProductModels
{
    private $CRUDmodels;

    public function __construct()
    {
        $this->CRUDmodels = new CRUDModels();
    }

    public function getDetailElementbyID($data)
    {
        return $this->CRUDmodels->select("product_category", $data, "JOIN product as p on product_category.category_id = p.category_id");
    }

    public function getProductDetailbyID($data)
    {
        return $this->CRUDmodels->select("product", $data, "p JOIN product_category pc on pc.category_id = p.category_id JOIN parent_category c on c.parent_id = pc.parent_id");
    }

    public function getListProductinMainCategory($data)
    {
        return $this->CRUDmodels->select("product", $data, "LEFT JOIN product_category pc on product.category_id = pc.category_id", "All");
    }

    public function getAllElementbySubCateID($data)
    {
        return $this->CRUDmodels->select("sub_product_category", $data, "JOIN product as p on sub_product_category.category_sub = p.category_sub", "All");
    }
}
