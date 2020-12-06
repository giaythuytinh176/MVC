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
        return $this->CRUDmodels->select2("SELECT * FROM product_category JOIN product as p on product_category.category_id = p.category_id", $data);
    }

    public function getProductDetailbyID($data)
    {
        return $this->CRUDmodels->select2("SELECT * FROM product p JOIN product_category pc on pc.category_id = p.category_id JOIN parent_category c on c.parent_id = pc.parent_id", $data);
    }

    public function getListProductinMainCategory($data)
    {
        return $this->CRUDmodels->select2("SELECT * FROM product LEFT JOIN product_category pc on product.category_id = pc.category_id", $data, "All", );
    }

    public function getAllElementbySubCateID($data)
    {
        return $this->CRUDmodels->select2("SELECT * FROM sub_product_category JOIN product p on sub_product_category.category_sub = p.category_sub", $data, "All");
    }
}
