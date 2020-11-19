<?php

namespace MVC\Models;

use MVC\controllers\ToolControllers;
use MVC\libs\Database;

class CategoryModels
{
    private $db;

    public function __construct()
    {
        $this->db = \MVC\libs\Database::getInstance();
    }

    public function getAllCategory($action)
    {
        $sql = "SELECT * FROM product_category WHERE parent_id='$action'";
        $stmt = $this->db->query($sql);
        $data = $stmt->fetchAll($this->db::FETCH_ASSOC);
        if (empty($data)) {
            return ["errors" => "Doesn't have any Category."];
        } else {
            return $data;
        }
    }

    public function getCategorybyID($action, $category_id)
    {
        $sql = "SELECT * FROM product_category WHERE parent_id='$action' AND code='$category_id[0]'";
        $stmt = $this->db->query($sql);
        $data = $stmt->fetch($this->db::FETCH_ASSOC);
        if (empty($data)) {
            return ["errors" => "Category not found."];
        } else {
            return $data;
        }
    }

}