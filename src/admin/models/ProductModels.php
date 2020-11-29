<?php

namespace MVC\admin\models;

use MVC\controllers\ToolControllers;
use MVC\libs\Database;

class ProductModels
{
    protected $db;

    public function __construct()
    {
        $this->db = Database::getInstance();
    }

    public function getAllProductbyView()
    {
        $sql = "SELECT * FROM allcategoryproducts";
        $stmt = $this->db->query($sql);
        $data = $stmt->fetchAll($this->db::FETCH_ASSOC);
        if (empty($data)) {
            return ["errors" => "Product not found."];
        } else {
            return $data;
        }
    }

    public function getAllProduct()
    {
        $sql = "SELECT * FROM product";
        $stmt = $this->db->query($sql);
        $data = $stmt->fetchAll($this->db::FETCH_ASSOC);
        if (empty($data)) {
            return ["errors" => "Product not found."];
        } else {
            return $data;
        }
    }

    public function getAllCateOfProductbyID($id)
    {
        $sql = "SELECT * FROM allcategoryproducts WHERE product_id='$id'";//From View
        $stmt = $this->db->query($sql);
        $data = $stmt->fetch($this->db::FETCH_ASSOC);
        if (empty($data)) {
            return ["errors" => "Product not found."];
        } else {
            return $data;
        }
    }

    public function ActiveOrDisableProduct($id)
    {
        $items = $this->getAllCateOfProductbyID($id);
        if ($items['is_disabled'] == 0) {
            $sql = "UPDATE product SET is_disabled='1' WHERE product_id='$id'";
            $this->db->query($sql);
            return "Disabled Product.";
        } else {
            $sql = "UPDATE product SET is_disabled='0' WHERE product_id='$id'";
            $this->db->query($sql);
            return "Enabled Product.";
        }
    }

    public function UpdateProductbyID($id, $data)
    {
        $sql = "UPDATE product SET ProductName='" . $data['product_name'] . "'
                                , price='" . $data['price'] . "'
                                , description='" . $data['description'] . "'
                                , img_link='" . $data['img_link'] . "'
                                , img_list='" . $data['img_list'] . "'
                                , discount='" . $data['discount'] . "' 
                                WHERE product_id='$id'";
        $this->db->query($sql);
    }

}