<?php

namespace MVC\controllers;

use MVC\Models\CategoryModels;

class CategoryControllers extends CategoryModels
{
    public function getCategory($action, $params)
    {
        $data = $this->getCategorybyID($action, $params);
        ToolControllers::PrettyShow($data, true);


    }

    public function getAllCategoryWithoutParaReturn($action)
    {
        $data = $this->getAllCategory($action);
        return $data;
    }

    public function getAllCategoryWithoutPara($action)
    {
        $data = $this->getAllCategory($action);
        (new WebControllers())->view("category/shop-category-parallax", $data);
    }


}