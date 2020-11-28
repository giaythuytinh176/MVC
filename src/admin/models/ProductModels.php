<?php

namespace MVC\admin\Models;

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

    public function UpdateProductbyID($id, $data)
    {
        $sql = "UPDATE product SET ProductName='" . $data['product_name'] . "', price='" . $data['price'] . "', description='" . $data['description'] . "' WHERE product_id='$id'";
        $this->db->query($sql);
    }


}