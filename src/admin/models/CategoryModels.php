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

    public function getOnlySubCateIncludeCateParent()
    {
        $sql = "SELECT spc.category_id as spc_category_id,
                       spc.title as spc_title,
                       pc.category_id as pc_category_id,
                       pc.title as pc_title,
                       pc.code as pc_code,
                       p.category_code as p_category_code,
                       p.category_title as p_category_title,
                       p.parent_id,
                       spc.codeSUB,
                       spc.is_disabled_sub,
                       spc.category_sub
                FROM sub_product_category as spc LEFT JOIN product_category pc on pc.category_id = spc.category_id LEFT JOIN parent_category p on p.parent_id = pc.parent_id";
        $stmt = $this->db->query($sql);
        $data = $stmt->fetchAll($this->db::FETCH_ASSOC);
        if (empty($data)) {
            return ["errors" => "Sub Category not found."];
        } else {
            return $data;
        }
    }

    public function getAllSubCate()
    {
        $sql = "SELECT * FROM sub_product_category";
        $stmt = $this->db->query($sql);
        $data = $stmt->fetchAll($this->db::FETCH_ASSOC);
        if (empty($data)) {
            return ["errors" => "Sub Category not found."];
        } else {
            return $data;
        }
    }

    public function getAllCateSubParent()
    {
        $sql = "SELECT * FROM allcatesubparent";
        $stmt = $this->db->query($sql);
        $data = $stmt->fetchAll($this->db::FETCH_ASSOC);
        if (empty($data)) {
            return ["errors" => "Cate-Sub-Parent not found."];
        } else {
            return $data;
        }
    }

    public function UpdateBrandbyID($brand_title, $brand_code, $parent_id, $category_id)
    {
        $sql = "UPDATE product_category SET title='" . $brand_title . "', code='" . $brand_code . "' WHERE parent_id='$parent_id' AND category_id='$category_id'";
        $this->db->query($sql);
        return "Updated Brand {$brand_title}.";
    }

    public function AddBrand($title, $code, $parent_id)
    {
        $stmt1 = $this->db->query("SELECT * FROM product_category WHERE title='$title' AND parent_id='$parent_id'");
        if (!empty($stmt1->fetch($this->db::FETCH_ASSOC))) {
            return "Brand Title is existed.";
        }

        $stmt2 = $this->db->query("SELECT * FROM product_category WHERE code='$code' AND parent_id='$parent_id'");
        if (!empty($stmt2->fetch($this->db::FETCH_ASSOC))) {
            return "Brand Code is existed.";
        }

        $stmt4 = $this->db->query("SELECT * FROM product_category WHERE code='$code' AND title='$title' AND parent_id='$parent_id'");
        if (!empty($stmt4->fetch($this->db::FETCH_ASSOC))) {
            return "Brand Title- Code is existed.";
        }

        $CheckParentCate = $this->getAllCateParentbyID($parent_id);
        if (!empty($CheckParentCate['errors'])) {
            return "Parent Category not found.";
        }

        $stmt3 = $this->db->query("SELECT count(category_id) as c FROM product_category");
        $sort_order = $stmt3->fetch($this->db::FETCH_ASSOC)["c"] + 1;

        $sql = "INSERT INTO product_category (title, code, sort_order, parent_id) VALUES ('$title', '$code', '$sort_order', '$parent_id')";
        $this->db->query($sql);
        return "Added Brand {$title}.";
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

    public function getAllBrand()
    {
        //$sql = "SELECT * FROM product_category ORDER BY sort_order";
        $sql = "SELECT * FROM product_category pc LEFT JOIN parent_category pac on pc.parent_id = pac.parent_id ORDER BY sort_order";
        $stmt = $this->db->query($sql);
        $data = $stmt->fetchAll($this->db::FETCH_ASSOC);
        if (empty($data)) {
            return ["errors" => "Brand not found."];
        } else {
            return $data;
        }
    }

    public function getSubByID($id)
    {
        //$sql = "SELECT * FROM product_category WHERE category_id='$id'";
        $sql = "SELECT * FROM sub_product_category WHERE category_sub='$id'";
        $stmt = $this->db->query($sql);
        $data = $stmt->fetch($this->db::FETCH_ASSOC);
        if (empty($data)) {
            return ["errors" => "Sub Category not found."];
        } else {
            return $data;
        }
    }

    public function getBrandByID($id)
    {
        //$sql = "SELECT * FROM product_category WHERE category_id='$id'";
        $sql = "SELECT * FROM product_category pc LEFT JOIN parent_category pac on pc.parent_id = pac.parent_id WHERE category_id='$id'";
        $stmt = $this->db->query($sql);
        $data = $stmt->fetch($this->db::FETCH_ASSOC);
        if (empty($data)) {
            return ["errors" => "Brand not found."];
        } else {
            return $data;
        }
    }

    public function ActiveOrDisableBrand($id)
    {
        $category = $this->getBrandByID($id);
        if ($category['is_disabled_brand'] == 0) {
            $sql = "UPDATE product_category SET is_disabled_brand='1' WHERE category_id='$id'";
            $this->db->query($sql);
            return "Disabled Brand.";
        } else {
            $sql = "UPDATE product_category SET is_disabled_brand='0' WHERE category_id='$id'";
            $this->db->query($sql);
            return "Enabled Brand.";
        }
    }

    public function ActiveOrDisableSubCate($id)
    {
        $category = $this->getSubByID($id);
        if ($category['is_disabled_sub'] == 0) {
            $sql = "UPDATE sub_product_category SET is_disabled_sub='1' WHERE category_sub='$id'";
            $this->db->query($sql);
            return "Disabled Sub Category.";
        } else {
            $sql = "UPDATE sub_product_category SET is_disabled_sub='0' WHERE category_sub='$id'";
            $this->db->query($sql);
            return "Enabled Sub Category.";
        }
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