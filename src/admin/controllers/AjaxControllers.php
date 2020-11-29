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

}