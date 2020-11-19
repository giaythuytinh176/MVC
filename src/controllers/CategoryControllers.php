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

    public function getAllSubCategoryControllers($code)
    {
        $data = $this->getAllSubCategoryModels($code);
        return $data;
    }

    public static function printListCategory()
    {
        $sout = '';
        foreach ((new \MVC\controllers\CategoryControllers)->getAllListcategory() as $value) {
            $sout .= '<li class="menu-item">';
            $sout .= '<a class="menu-link" href=' . \MVC\controllers\UrlControllers::url("category/" . $value['category_name']) . '><div>' . \MVC\libs\Languages::getLangData($value['category_name']) . '</div></a>';
            $sout .= '<ul class="sub-menu-container">';
            foreach ((new \MVC\controllers\CategoryControllers())->getAllCategoryWithoutParaReturn($value['parent_id']) as $v) {
                $sout .= '<li class="menu-item">';
                $sout .= '<a class="menu-link" href=' . \MVC\controllers\UrlControllers::url("category/{$value['category_name']}/{$v['code']}") . '><div>' . \MVC\libs\Languages::getLangData($v['title']) . '</div></a>';
                $sout .= '</li>';
            }
            $sout .= '</ul>';
            $sout .= '</li>';
        }
        return $sout;
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