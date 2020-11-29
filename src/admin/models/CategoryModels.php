<?php

namespace MVC\admin\models;

use MVC\libs\Database;

class CategoryModels
{
    protected $db;

    public function __construct()
    {
        $this->db = Database::getInstance();
    }

    public function AddCategoryParrent($title, $code)
    {
        $sql1 = "SELECT * FROM parent_category WHERE category_title='$title'";
        $stmt1 = $this->db->query($sql1);
        $data1 = $stmt1->fetch($this->db::FETCH_ASSOC);
        if (!empty($data1)) {
            return "Category Title is existed.";
        }

        $sql2 = "SELECT * FROM parent_category WHERE category_code='$code'";
        $stmt2 = $this->db->query($sql2);
        $data2 = $stmt2->fetch($this->db::FETCH_ASSOC);
        if (!empty($data2)) {
            return "Category Code is existed.";
        }

        $stmt3 = $this->db->query("SELECT count(parent_id) as c FROM parent_category");
        $orderParent = $stmt3->fetch($this->db::FETCH_ASSOC);
        $orderParent = $orderParent["c"] + 1;
        $sql = "INSERT INTO parent_category (category_title, category_code, orderParent) VALUES ('$title', '$code', '$orderParent')";
        $this->db->query($sql);
        return "Added Category {$title}.";
    }

    public function getALlCategoryParent()
    {
        $sql = "SELECT * FROM parent_category ORDER BY OrderParent";
        $stmt = $this->db->query($sql);
        $data = $stmt->fetchAll($this->db::FETCH_ASSOC);
        if (empty($data)) {
            return ["errors" => "Parent Category not found."];
        } else {
            return $data;
        }
    }

    public function ActiveOrDisableCategory($id)
    {
        $category = $this->getAllCateParentbyID($id);
        if ($category['is_disabled'] == 0) {
            $sql = "UPDATE parent_category SET is_disabled='1' WHERE parent_id='$id'";
            $this->db->query($sql);
            return "Disabled Category.";
        } else {
            $sql = "UPDATE parent_category SET is_disabled='0' WHERE parent_id='$id'";
            $this->db->query($sql);
            return "Enabled Category.";
        }
    }

    public function getAllCateParentbyID($id)
    {
        $sql = "SELECT * FROM parent_category WHERE parent_id='$id'";
        $stmt = $this->db->query($sql);
        $data = $stmt->fetch($this->db::FETCH_ASSOC);
        if (empty($data)) {
            return ["errors" => "Category not found."];
        } else {
            return $data;
        }
    }

    public function UpdateCategorybyID($id, $data)
    {
        $sql = "UPDATE parent_category SET category_title='" . $data['category_title'] . "' WHERE parent_id='$id'";
        $this->db->query($sql);
        $sql1 = "UPDATE languages SET vietnamese_lang='" . $data['category_title'] . "' WHERE english_Lang='" . $data['category_code'] . "'";
        $this->db->query($sql1);
    }

}