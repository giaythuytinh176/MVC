<?php

namespace MVC\admin\controllers;

use MVC\controllers\ToolControllers;

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

    public function AddSubCate()
    {
        if (!empty($_POST['sub_title']) && !empty($_POST['sub_code']) && !empty($_POST['category_id']) && !empty($_POST['parent_id'])) {
            $sub_title = $_POST['sub_title'];
            $sub_code = $_POST['sub_code'];
            $category_id = $_POST['category_id'];
            $parent_id = $_POST['parent_id'];
            $CheckCorrectParentCatePro = \MVC\admin\controllers\CategoryControllers::AllowSelectSubCateFromCateProductParent();
            $check = false;
            if (!empty($CheckCorrectParentCatePro['parent_id'][$parent_id]['category_id'])) {
                foreach ($CheckCorrectParentCatePro['parent_id'][$parent_id]['category_id'] as $cate_id) {
                    if ($cate_id == $category_id) {
                        $check = true;
                        break;
                    }
                }
            }
            if ($check == false) {
                $cateInfo = (new \MVC\admin\controllers\CategoryControllers())->getCategoryProductFromCateID($category_id);
                $parInfo = (new \MVC\admin\controllers\CategoryControllers())->getParrentFromParentID($cateInfo['parent_id']);
                $parInfo2 = (new \MVC\admin\controllers\CategoryControllers())->getParrentFromParentID($parent_id);

                $cateInfo2 = (new \MVC\admin\controllers\CategoryControllers())->getALlCategoryProductFromParentID($parent_id);
                $list_cate = [];
                foreach ($cateInfo2 as $cate) {
                    $list_cate[] = $cate['title'];
                }

                echo "We only allowed [{$cateInfo['title']}] select with [{$parInfo['category_title']}].<br>";
                echo "We only allowed [{$parInfo2['category_title']}] select with [" . implode(", ", $list_cate) . "].";
            } else {
                echo (new \MVC\admin\controllers\CategoryControllers())->AddSubCate($sub_title, $sub_code, $category_id, $parent_id);
            }
        }
    }

    public function AddProduct()
    {
        if (!empty($_POST['product_name']) && !empty($_POST['parent_id']) && !empty($_POST['category_id'])) {
            $product_name = $_POST['product_name'];
            $parent_id = $_POST['parent_id'];
            $category_id = $_POST['category_id'];
            $category_sub = !empty($_POST['category_sub']) ? $_POST['category_sub'] : null;
            $CheckCorrectParentCatePro = \MVC\admin\controllers\CategoryControllers::AllowSelectSubCateFromCateProductParent();
            $check = false;
            if (!empty($CheckCorrectParentCatePro['parent_id'][$parent_id]['category_id'])) {
                foreach ($CheckCorrectParentCatePro['parent_id'][$parent_id]['category_id'] as $cate_id) {
                    if ($cate_id == $category_id) {
                        $check = true;
                        break;
                    }
                }
            }
            if ($check == false) {
                $cateInfo = (new \MVC\admin\controllers\CategoryControllers())->getCategoryProductFromCateID($category_id);
                $parInfo = (new \MVC\admin\controllers\CategoryControllers())->getParrentFromParentID($cateInfo['parent_id']);
                $parInfo2 = (new \MVC\admin\controllers\CategoryControllers())->getParrentFromParentID($parent_id);

                $cateInfo2 = (new \MVC\admin\controllers\CategoryControllers())->getALlCategoryProductFromParentID($parent_id);
                $list_cate = [];
                foreach ($cateInfo2 as $cate) {
                    $list_cate[] = $cate['title'];
                }

                echo "We only allowed [{$cateInfo['title']}] select with [{$parInfo['category_title']}].<br>";
                echo "We only allowed [{$parInfo2['category_title']}] select with [" . implode(", ", $list_cate) . "].";
            } else {
                echo (new \MVC\admin\controllers\ProductController())->InsertProduct($_POST);
            }
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

    public function UpdateSubCate(): void
    {
        if (!empty($_POST['sub_title']) && !empty($_POST['sub_code']) && !empty($_POST['sub_cate_id']) && !empty($_POST['category_id']) && !empty($_POST['sub_parent_id'])) {
            $data['sub_title'] = $_POST['sub_title'];
            $data['sub_code'] = $_POST['sub_code'];
            $data['sub_cate_id'] = $_POST['sub_cate_id'];
            $data['category_id'] = $_POST['category_id'];
            $data['sub_parent_id'] = $_POST['sub_parent_id'];
            echo (new \MVC\admin\controllers\CategoryControllers())->UpdateSubCatebyID($data);
        }
    }
}
