<?php

namespace MVC\admin\controllers;

class AjaxControllers extends ProductController
{
    public function StatusProduct(): void
    {
        if (!empty($_POST['id'])) {
            $id = $_POST['id'];
            echo $this->ActiveOrDisableProduct($id);
        }
    }

    public function StatusCategory(): void
    {
        if (!empty($_POST['id'])) {
            $id = $_POST['id'];
            echo (new \MVC\admin\controllers\CategoryControllers())->ActiveOrDisableCategory($id);
        }
    }

    public function AddCategory(): void
    {
        if (!empty($_POST['category_title']) && !empty($_POST['category_code'])) {
            $category_title = $_POST['category_title'];
            $category_code = $_POST['category_code'];
            echo (new \MVC\admin\controllers\CategoryControllers())->AddCategoryParrent($category_title, $category_code);
        }
    }

    public function StatusBrand(): void
    {
        if (!empty($_POST['id'])) {
            $id = $_POST['id'];
            echo (new \MVC\admin\controllers\CategoryControllers())->ActiveOrDisableBrand($id);
        }
    }

    public function StatusSubCate(): void
    {
        if (!empty($_POST['id'])) {
            $id = $_POST['id'];
            echo (new \MVC\admin\controllers\CategoryControllers())->ActiveOrDisableSubCate($id);
        }
    }

    public function AddBrand(): void
    {
        if (!empty($_POST['brand_title']) && !empty($_POST['brand_code']) && !empty($_POST['parent_id'])) {
            $brand_title = $_POST['brand_title'];
            $brand_code = $_POST['brand_code'];
            $parent_id = $_POST['parent_id'];
            echo (new \MVC\admin\controllers\CategoryControllers())->AddBrand($brand_title, $brand_code, $parent_id);
        }
    }

    public function UpdateBrand(): void
    {
        if (!empty($_POST['brand_title']) && !empty($_POST['brand_code']) && !empty($_POST['parent_id']) && !empty($_POST['category_id'])) {
            $brand_title = $_POST['brand_title'];
            $brand_code = $_POST['brand_code'];
            $parent_id = $_POST['parent_id'];
            $category_id = $_POST['category_id'];
            echo (new \MVC\admin\controllers\CategoryControllers())->UpdateBrandbyID($brand_title, $brand_code, $parent_id, $category_id);
        }
    }
}