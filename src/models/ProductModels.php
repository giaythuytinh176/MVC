<?php

namespace MVC\Models;

use MVC\controllers\ToolControllers;
use MVC\libs\Database;

class ProductModels
{
    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance();
    }

    public function getDetailElementbyID($subcate, $productID)
    {
        $sql = "SELECT * FROM product_category JOIN product as p on product_category.category_id = p.category_id WHERE code='$subcate' AND p.product_id='$productID'";
        $stmt = $this->db->query($sql);
        $data = $stmt->fetch($this->db::FETCH_ASSOC);
        if (empty($data)) {
            return ["errors" => "Product not found."];
        } else {
            return $data;
        }
    }

    public function getAllElementbySubCateID($action, $category_id)
    {
        $sql = "SELECT * FROM sub_product_category JOIN product as p on sub_product_category.category_sub = p.category_sub WHERE sub_product_category.codeSUB='$category_id[1]'";
        $stmt = $this->db->query($sql);
        $data = $stmt->fetchAll($this->db::FETCH_ASSOC);
        if (empty($data)) {
            return ["errors" => "Sub Category not found."];
        } else {
            return $data;
        }
    }

    public function getProductDetailbyID($id)
    {
        //$sql = "SELECT * FROM product WHERE product_id='$id'";
        $sql = "SELECT * FROM product p JOIN product_category pc on pc.category_id = p.category_id JOIN parent_category c on c.parent_id = pc.parent_id WHERE p.product_id='$id'";
        $stmt = $this->db->query($sql);
        $data = $stmt->fetch($this->db::FETCH_ASSOC);
        if (empty($data)) {
            return ["errors" => "Doesn't have this product."];
        } else {
            return $data;
        }
    }

    public function getListProductinMainCategory($action, $params)
    {
        $sql = "SELECT * FROM product LEFT JOIN product_category pc on product.category_id = pc.category_id WHERE code='$params[0]' AND is_disabled='0'";
        $stmt = $this->db->query($sql);
        $data = $stmt->fetchAll($this->db::FETCH_ASSOC);
        if (empty($data)) {
            return ["errors" => "Doesn't have any this Category."];
        } else {
            return $data;
        }
    }
}
