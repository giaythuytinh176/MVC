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

    public function getAllListcategory($data)
    {
        return $this->CRUDmodels->select("parent_category", $data, "", 'All');
    }

    public function getAllListCategoryByCode($data)
    {
        return $this->CRUDmodels->select("product_category", $data, "", 'All');
    }

    public function getParentCategoryByCode($data)
    {
        return $this->CRUDmodels->select("parent_category", $data);
    }

    public function getAllSubCategory($data)
    {
        return $this->CRUDmodels->select2("SElECT * FROM product_category INNER JOIN sub_product_category as spc on product_category.category_id = spc.category_id", $data, 'All');
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