<?php

namespace MVC\admin\models;

use MVC\controllers\ToolControllers;
use MVC\models\CRUDModels;

class CategoryModels
{
    private $CRUDmodels;

    public function __construct()
    {
        $this->CRUDmodels = new CRUDModels();
    }

    public function getALlCategoryParent()
    {
        return $this->CRUDmodels->select2("SELECT * FROM parent_category ORDER BY OrderParent", "", 'All');
    }

    public function getBrandByID($id)
    {
        return $this->CRUDmodels->select2("SELECT * FROM product_category pc LEFT JOIN parent_category pac on pc.parent_id = pac.parent_id", ['category_id' => $id]);
    }

    public function getAllBrand()
    {
        return $this->CRUDmodels->select2("SELECT * FROM product_category pc LEFT JOIN parent_category pac on pc.parent_id = pac.parent_id ORDER BY pc.sort_order", "", "All");
    }

    public function getAllSubCate()
    {
        return $this->CRUDmodels->select("sub_product_category", [], '', 'All');
    }

    public function getOnlySubCateIncludeCateParent()
    {
        return $this->CRUDmodels->select("v_spc_pc_pac", [], '', 'All');
    }

    public function getOnlySubCateParentbyID($ID)
    {
        return $this->CRUDmodels->select("allcatesubparent", ['spc_category_sub' => $ID]);
    }

    public function getALlCategoryProduct()
    {
        return $this->CRUDmodels->select2("SELECT * FROM product_category ORDER BY sort_order", "", "All");
    }

    public function ActiveOrDisableCategory($id, int $status)
    {
        $this->CRUDmodels->update('parent_category', ['is_disabled' => $status], ['parent_id' => $id]);
    }

    public function getAllCateParentbyID($id)
    {
        return $this->CRUDmodels->select("parent_category", ['parent_id' => $id]);
    }

    public function getALlCategoryProductFromParentID($parent_id)
    {
        return $this->CRUDmodels->select("product_category", ['parent_id' => $parent_id], '', 'All');
    }

    public function getAllCateSubParent()
    {
        return $this->CRUDmodels->select("allcatesubparent", [], '', 'All');
    }

    public function UpdateBrandbyID($brand_title, $brand_code, $parent_id, $category_id)
    {
        $this->CRUDmodels->update('product_category', ['title' => $brand_title, 'code' => $brand_code, 'parent_id' => $parent_id,], ['category_id' => $category_id]);
        return "Updated Brand {$brand_title}.";
    }

    public function UpdateSubCatebyID($data)
    {
        $checkCatePro = $this->CRUDmodels->select("product_category", ['category_id' => $data['category_id']]);
        if (empty($checkCatePro)) {
            return "Category Product is not existed.";
        } else {
            $this->CRUDmodels->update('sub_product_category', ['title' => $data['sub_title'], 'codeSUB' => $data['sub_code'], 'category_id' => $data['category_id']], ['category_sub' => $data['sub_cate_id']]);
            return "Updated Sub Category {$data['sub_title']}.";
        }
    }

    public function AddBrand($title, $code, $parent_id)
    {
        $stmt1 = $this->CRUDmodels->select("product_category", ['title' => $title, 'parent_id' => $parent_id]);
        if (!empty($stmt1)) {
            return "Brand Title is existed.";
        }
        $stmt2 = $this->CRUDmodels->select("product_category", ['code' => $code, 'parent_id' => $parent_id]);
        if (!empty($stmt2)) {
            return "Brand Code is existed.";
        }
        $stmt4 = $this->CRUDmodels->select("product_category", ['code' => $code, 'title' => $title, 'parent_id' => $parent_id]);
        if (!empty($stmt4)) {
            return "Brand Title- Code is existed.";
        }
        $CheckParentCate = $this->getAllCateParentbyID($parent_id);
        if (!empty($CheckParentCate['errors'])) {
            return "Parent Category not found.";
        }
        $this->CRUDmodels->insert("product_category", ['title' => $title, 'code' => $code, 'sort_order' => sizeof($this->getALlCategoryProduct()) + 1, 'parent_id' => $parent_id]);
        return "Added Brand {$title}.";
    }

    public function AddSubCate($title, $code, $cate_id, $parent_id)
    {
        $stmt1 = $this->CRUDmodels->select("sub_product_category", ['title' => $title, 'category_id' => $cate_id]);
        if (!empty($stmt1)) {
            return "Sub Category Title is existed.";
        }
        $stmt2 = $this->CRUDmodels->select("sub_product_category", ['codeSUB' => $code, 'category_id' => $cate_id]);
        if (!empty($stmt2)) {
            return "Sub Category Code is existed.";
        }
        $this->CRUDmodels->insert("sub_product_category", ['category_id' => $cate_id, 'title' => $title, 'codeSUB' => $code]);
        return "Added Sub Category {$title}.";
    }

    public function AddCategoryParrent($title, $code)
    {
        $data1 = $this->CRUDmodels->select("parent_category", ['category_title' => $title]);
        if (!empty($data1)) {
            return "Category Title is existed.";
        }
        $data2 = $this->CRUDmodels->select("parent_category", ['category_code' => $code]);
        if (!empty($data2)) {
            return "Category Code is existed.";
        }
        $this->CRUDmodels->insert("parent_category", ['category_title' => $title, 'category_code' => $code, 'orderParent' => sizeof($this->getALlCategoryParent()) + 1]);
        return "Added Category {$title}.";
    }

    public function getSubByID($id)
    {
        $data = $this->CRUDmodels->select("sub_product_category", ['category_sub' => $id]);
        if (empty($data)) {
            return ["errors" => "Sub Category not found."];
        } else {
            return $data;
        }
    }

    public function ActiveOrDisableBrand($id)
    {
        if ($this->getBrandByID($id)['is_disabled_brand'] == 0) {
            $this->CRUDmodels->update('product_category', ['is_disabled_brand' => '1'], ['category_id' => $id]);
            return "Disabled Brand.";
        } else {
            $this->CRUDmodels->update('product_category', ['is_disabled_brand' => '0'], ['category_id' => $id]);
            return "Enabled Brand.";
        }
    }

    public function ActiveOrDisableSubCate($id)
    {
        if ($this->getSubByID($id)['is_disabled_sub'] == 0) {
            $this->CRUDmodels->update('sub_product_category', ['is_disabled_sub' => '1'], ['category_sub' => $id]);
            return "Disabled Sub Category.";
        } else {
            $this->CRUDmodels->update('sub_product_category', ['is_disabled_sub' => '0'], ['category_sub' => $id]);
            return "Enabled Sub Category.";
        }
    }

    public function getParrentFromParentID($parent_id)
    {
        $data = $this->CRUDmodels->select("parent_category", ['parent_id' => $parent_id]);
        if (empty($data)) {
            return ["errors" => "Category Product not found."];
        } else {
            return $data;
        }
    }

    public function getCategoryProductFromCateID($category_id)
    {
        $data = $this->CRUDmodels->select("product_category", ['category_id' => $category_id]);
        if (empty($data)) {
            return ["errors" => "Category Product not found."];
        } else {
            return $data;
        }
    }

    public function UpdateCategorybyID($id, $data)
    {
        $this->CRUDmodels->update('parent_category', ['category_title' => $data['category_title']], ['parent_id' => $id]);
        $this->CRUDmodels->update('languages', ['vietnamese_lang' => $data['category_title']], ['english_Lang' => $data['category_code']]);
    }
}