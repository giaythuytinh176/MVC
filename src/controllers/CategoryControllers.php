<?php

namespace MVC\controllers;

use MVC\models\CategoryModels;

class CategoryControllers extends CategoryModels
{
    public static function printListCategoryIncludeSub()
    {
        $sout = '';
        foreach ((new \MVC\controllers\CategoryControllers)->getAllListcategory() as $value) {
            $sout .= '<li class="menu-item">';
            $sout .= '<a class="menu-link" href=' . \MVC\controllers\UrlControllers::url("category/" . $value['category_code']) . '><div>' . \MVC\libs\Languages::getLangData($value['category_code']) . '</div></a>';
            $sout .= '<ul class="sub-menu-container">';
            foreach ((new \MVC\controllers\CategoryControllers())->getAllCategorybyParentID($value['parent_id']) as $v) {
                $sout .= '<li class="menu-item">';
                if (empty($v['code'])) {
                    $sout .= '<a class="menu-link" href=""><div>You need add a Product Category.</div></a>';
                } else {
                    $sout .= '<a class="menu-link" href=' . \MVC\controllers\UrlControllers::url("category/{$value['category_code']}/{$v['code']}") . '><div>' . \MVC\libs\Languages::getLangData($v['title']) . '</div></a>';
                    if (empty((new \MVC\controllers\CategoryControllers())->getAllSubCategory($v['code'])['errors'])) {
                        $sout .= '<ul class="sub-menu-container">';
                        foreach ((new \MVC\controllers\CategoryControllers())->getAllSubCategory($v['code']) as $val) {
                            $sout .= ' <li class="menu-item"><a class="menu-link" href=' . \MVC\controllers\UrlControllers::url("category/" . $value['category_code']) . "/{$v['code']}/" . $val['codeSUB'] . '><div>' . \MVC\libs\Languages::getLangData($val['title']) . '</div></a></li>';
                        }
                        $sout .= '</ul>';
                    }
                }
                $sout .= '</li>';
            }
            $sout .= '</ul>';
            $sout .= '</li>';
        }
        return $sout;
    }

    public function getAllCategoryView($action)
    {
        $data = parent::getAllCategorybyParentID($action);
        (new RenderControllers())->view("category/shop-category-parallax", $data);
    }
}