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
        return $this->CRUDmodels->select2("SELECT * FROM product_category LEFT JOIN product on product_category.category_id = product.category_id", $data);
    }

    public function getProductDetailbyID($data)
    {
        return $this->CRUDmodels->select2("SELECT * FROM product JOIN product_category on product.category_id = product_category.category_id JOIN parent_category on product_category.parent_id = parent_category.parent_id", $data);
    }

    public function getListProductinMainCategory($data)
    {
        return $this->CRUDmodels->select2("SELECT * FROM product LEFT JOIN product_category pc on product.category_id = pc.category_id", $data, "", "All", );
    }

    public function getAllElementbySubCateID($data)
    {
        return $this->CRUDmodels->select2("SELECT * FROM sub_product_category JOIN product on sub_product_category.category_sub = product.category_sub", $data, "", "All");
    }
}
