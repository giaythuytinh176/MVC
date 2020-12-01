<?php

namespace MVC\models;

use MVC\controllers\ToolControllers;
use \MVC\models\CRUDModels;

class CategoryModels
{
    private $CRUDmodels;

    public function __construct()
    {
        $this->CRUDmodels = new CRUDModels();
    }

//    public function getCategorybyID($data)
//    {
//        return $this->CRUDmodels->select("parent_category", $data, "RIGHT JOIN product_category as pc on parent_category.parent_id = pc.parent_id");
//    }

    public function getAllListcategory($data)
    {
        return $this->CRUDmodels->select("parent_category", $data, "", 'All');
    }

    public function getAllSubCategory($data)
    {
        return $this->CRUDmodels->select("product_category", $data, "INNER JOIN sub_product_category as spc on product_category.category_id = spc.category_id", 'All');
    }

    public function getAllCategorybyParentID($data)
    {
        return $this->CRUDmodels->select("product_category", $data, "", 'All');
    }

    public function getDetaiElementbyCode($data)
    {
        return $this->CRUDmodels->select("product_category", $data);
    }

    public function getDetailElementbyCodeSub($data)
    {
        return $this->CRUDmodels->select("sub_product_category", $data);
    }
}