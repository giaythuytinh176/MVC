<?php

namespace MVC\models;

use MVC\controllers\ToolControllers;
use MVC\libs\Database;

class CategoryModels
{
    protected $db;
    private $CRUDmodels;

    public function __construct()
    {
        $this->db = Database::getInstance();
        $this->CRUDmodels = new \MVC\models\CRUDModels();
    }

    public function getAllSubCategory($data)
    {
        $sql = "SELECT * FROM product_category INNER JOIN sub_product_category as spc on product_category.category_id = spc.category_id";
        return $this->CRUDmodels->select($sql, $data, 'All');
    }

    public function getAllListcategory($data)
    {
        $sql = "SELECT * FROM parent_category";
        return $this->CRUDmodels->select($sql, $data, 'All', ' ORDER BY orderParent ASC');
    }

    public function getCategorybyID($data)
    {
        $sql = "SELECT * FROM parent_category RIGHT JOIN product_category as pc on parent_category.parent_id = pc.parent_id";
        return $this->CRUDmodels->select($sql, $data);
    }

    public function getDetailElementbyCodeSub($data)
    {
        $sql = "SELECT * FROM sub_product_category";
        return $this->CRUDmodels->select($sql, $data);
    }

    public function getDetaiElementbyCode($data)
    {
        $sql = "SELECT * FROM product_category";
        return $this->CRUDmodels->select($sql, $data);
    }

    public function getAllCategorybyParentID($data)
    {
        $sql = "SELECT * FROM product_category";
        return $this->CRUDmodels->select($sql, $data, 'All');
    }

    public function getSubCategorybyID($data)
    {
        $sql = "SELECT * FROM parent_category RIGHT JOIN product_category as pc on parent_category.parent_id = pc.parent_id";
        return $this->CRUDmodels->select($sql, $data);
    }
}