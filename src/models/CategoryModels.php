<?php

namespace MVC\models;

use MVC\controllers\ToolControllers;
use MVC\libs\Database;

class CategoryModels
{
    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance();
    }

    public function getAllSubCategoryModels($code)
    {
        $sql = "SELECT * FROM product_category INNER JOIN sub_product_category as spc on product_category.category_id = spc.category_id WHERE code='$code'";
        $stmt = $this->db->query($sql);
        $data = $stmt->fetchAll($this->db::FETCH_ASSOC);
        if (empty($data)) {
            return ["errors" => "Doesn't have any sub Category."];
        } else {
            return $data;
        }
    }

    public function getAllListcategory()
    {
        $sql = "SELECT * FROM parent_category WHERE is_disabled='0' ORDER BY orderParent ASC";
        $stmt = $this->db->query($sql);
        $data = $stmt->fetchAll($this->db::FETCH_ASSOC);
        if (empty($data)) {
            return ["errors" => "Doesn't have any Category."];
        } else {
            return $data;
        }
    }

    public function getCategorybyID($categoryName, $category_id)
    {
        $sql = "SELECT * FROM parent_category RIGHT JOIN product_category as pc on parent_category.parent_id = pc.parent_id WHERE code='$category_id[0]' AND category_name='$categoryName'";
        $stmt = $this->db->query($sql);
        $data = $stmt->fetch($this->db::FETCH_ASSOC);
        if (empty($data)) {
            return ["errors" => "Category not found."];
        } else {
            return $data;
        }
    }

    public function getDetailElementbyCodeSub($code)
    {
        $sql = "SELECT * FROM sub_product_category WHERE codeSUB='$code'";
        $stmt = $this->db->query($sql);
        $data = $stmt->fetch($this->db::FETCH_ASSOC);
        if (empty($data)) {
            return ["errors" => "Code not found."];
        } else {
            return $data;
        }
    }

    public function getDetaiElementbyCode($code)
    {
        $sql = "SELECT * FROM product_category WHERE code='$code'";
        $stmt = $this->db->query($sql);
        $data = $stmt->fetch($this->db::FETCH_ASSOC);
        if (empty($data)) {
            return ["errors" => "Code not found."];
        } else {
            return $data;
        }
    }

    public function getAllCategorybyParentID($parentID)
    {
        $sql = "SELECT * FROM product_category WHERE parent_id='$parentID'";
        $stmt = $this->db->query($sql);
        $data = $stmt->fetchAll($this->db::FETCH_ASSOC);
        if (empty($data)) {
            return ["errors" => "Doesn't have any Category."];
        } else {
            return $data;
        }
    }

    public function getSubCategorybyID($action, $category_id)
    {
        $sql = "SELECT * FROM parent_category RIGHT JOIN product_category as pc on parent_category.parent_id = pc.parent_id WHERE code='$category_id[0]' AND category_name='$action'";
        $stmt = $this->db->query($sql);
        $data = $stmt->fetch($this->db::FETCH_ASSOC);
        if (empty($data)) {
            return ["errors" => "Category not found."];
        } else {
            return $data;
        }
    }

}