<?php

namespace MVC\admin\controllers;

use MVC\admin\controllers\CategoryControllers;
use MVC\controllers\ToolControllers;

class AjaxControllers
{
    protected $categorycontrollers;
    protected $productcontroller;

    public function __construct()
    {
        $this->categorycontrollers = new CategoryControllers();
        $this->productcontroller = new ProductController();
    }

    public function TrashProduct(): void
    {
        if (!empty($_POST['id'])) {
            $id = $_POST['id'];
            $this->productcontroller->DeleteProduct($id);
        }
    }

    public function StatusProduct(): void
    {
        if (!empty($_POST['id'])) {
            $id = $_POST['id'];
            echo $this->productcontroller->ActiveOrDisableProduct($id);
        }
    }

    public function StatusCategory(): void
    {
        if (!empty($_POST['id'])) {
            $id = $_POST['id'];
            echo $this->categorycontrollers->ActiveOrDisableCategory($id);
        }
    }

    public function AddCategory(): void
    {
        if (!empty($_POST['category_title']) && !empty($_POST['category_code'])) {
            $category_title = $_POST['category_title'];
            $category_code = $_POST['category_code'];
            echo $this->categorycontrollers->AddCategoryParrent($category_title, $category_code);
        }
    }

    public function StatusBrand(): void
    {
        if (!empty($_POST['id'])) {
            $id = $_POST['id'];
            echo $this->categorycontrollers->ActiveOrDisableBrand($id);
        }
    }

    public function StatusSubCate(): void
    {
        if (!empty($_POST['id'])) {
            $id = $_POST['id'];
            echo $this->categorycontrollers->ActiveOrDisableSubCate($id);
        }
    }

    public function AddBrand(): void
    {
        if (!empty($_POST['brand_title']) && !empty($_POST['brand_code']) && !empty($_POST['parent_id'])) {
            $brand_title = $_POST['brand_title'];
            $brand_code = $_POST['brand_code'];
            $parent_id = $_POST['parent_id'];
            echo $this->categorycontrollers->AddBrand($brand_title, $brand_code, $parent_id);
        }
    }

    public function AddSubCate()
    {
        if (!empty($_POST['sub_title']) && !empty($_POST['sub_code']) && !empty($_POST['category_id']) && !empty($_POST['parent_id'])) {
            $sub_title = $_POST['sub_title'];
            $sub_code = $_POST['sub_code'];
            $category_id = $_POST['category_id'];
            $parent_id = $_POST['parent_id'];
            $CheckCorrectParentCatePro = CategoryControllers::AllowSelectSubCateFromCateProductParent();
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
                echo $this->OnlyAllow($category_id, $parent_id);
            } else {
                echo $this->categorycontrollers->AddSubCate($sub_title, $sub_code, $category_id, $parent_id);
            }
        }
    }

    public function OnlyAllow($category_id, $parent_id)
    {
        $cateInfo = $this->categorycontrollers->getCategoryProductFromCateID($category_id);
        $parInfo = $this->categorycontrollers->getParrentFromParentID($cateInfo['parent_id']);
        $parInfo2 = $this->categorycontrollers->getParrentFromParentID($parent_id);

        $cateInfo2 = $this->categorycontrollers->getALlCategoryProductFromParentID($parent_id);
        $list_cate = [];
        foreach ($cateInfo2 as $cate) {
            $list_cate[] = $cate['title'];
        }

        return "We only allowed [{$cateInfo['title']}] select with [{$parInfo['category_title']}].<br>"
            . "We only allowed [{$parInfo2['category_title']}] select with [" . implode(", ", $list_cate) . "].";
    }

    public function AddProduct()
    {
        if (!empty($_POST['parent_id']) && !empty($_POST['category_id'])) {//($_FILES['file']['error'] == 0) &&
            $product_name = $_POST['product_name'];
            $parent_id = $_POST['parent_id'];
            $category_id = $_POST['category_id'];
            $category_sub = !empty($_POST['category_sub']) ? $_POST['category_sub'] : null;
            $CheckCorrectParentCatePro = CategoryControllers::AllowSelectSubCateFromCateProductParent();
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
                echo $this->OnlyAllow($category_id, $parent_id);
            } else {
                if (!file_exists("uploads/" . ($_FILES['file']['name']))) {
                    move_uploaded_file($_FILES['file']['tmp_name'], "uploads/" . ($_FILES['file']['name']));
                }
                if (empty($_POST['img_link'])) {
                    $_POST['img_link'] = "http://localhost/" . \MVC\config\config::BASE_FOLDER . "/uploads/" . ($_FILES['file']['name']);
                }
                if (!empty($_POST['img_list'])) {
                    $list = explode(PHP_EOL, $_POST['img_list']);
                    $img_upload = "http://localhost/" . \MVC\config\config::BASE_FOLDER . "/uploads/" . ($_FILES['file']['name']);
                    array_push($list, $img_upload);
                    $_POST['img_list'] = implode(PHP_EOL, $list);
                } else {
                    $_POST['img_list'] = "http://localhost/" . \MVC\config\config::BASE_FOLDER . "/uploads/" . ($_FILES['file']['name']);
                }
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
            echo $this->categorycontrollers->UpdateBrandbyID($brand_title, $brand_code, $parent_id, $category_id);
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
            echo $this->categorycontrollers->UpdateSubCatebyID($data);
        }
    }
}
