<?php

namespace MVC\controllers;

use MVC\Models\CategoryModels;

class CategoryControllers extends CategoryModels
{
    public function getCategorybyID($action, $params)
    {
        $data = parent::getCategorybyID($action, $params);
        return $data;
    }

    public function getDetaiElementbyID($action, $category)
    {

    }

    public function getDetaiElementbyCode($code)
    {
        return parent::getDetaiElementbyCode($code); // TODO: Change the autogenerated stub
    }

    public function getAllElementbyCateID($action, $category)
    {
        ToolControllers::PrettyShow($action);
        ToolControllers::PrettyShow($category, true);

    }

    public function checkSubCategory($action, $params)
    {
        $data = $this->checkSubCategorybyID($action, $params);
        ToolControllers::PrettyShow($data, true);


    }

    public function getListProductinMainCategory($action, $params)
    {
        $data = parent::getListProductinMainCategory($action, $params); // TODO: Change the autogenerated stub
        (new \MVC\Controllers\WebControllers())->view("category/shop", [$data, $action, $params]);
    }

    public function getAllSubCategoryControllers($code)
    {
        $data = parent::getAllSubCategoryModels($code);
        return $data;
    }

    public static function printListItems($data)
    {
        $sout = '';
        foreach ($data as $value) {
            $sout .= '<div class="product col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="grid-inner">
                            <div class="product-image">';

            foreach (explode("\r\n", $value['img_list']) as $ImgList) {
                if (!empty($ImgList)) {
                    $sout .= '<a href="#"><img src="' . $ImgList . '" alt="' . $value['ProductName'] . '"></a>';
                }
            }
            $sout .= '' . (($value['Stock'] < 1) ? '<div class="sale-flash badge badge-secondary p-2">Out of Stock</div>' : '') . '
                                ' . (($value['Stock'] > 100) ? '<div class="sale-flash badge badge-success p-2 text-uppercase">Sale!</div>' : '') . '
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content align-items-end justify-content-between"
                                         data-hover-animate="fadeIn" data-hover-speed="400">
                                        <a href="#" class="btn btn-dark mr-2"><i class="icon-shopping-basket"></i></a>
                                        <a href="include/ajax/shop-item.html" class="btn btn-dark" data-lightbox="ajax"><i
                                                    class="icon-line-expand"></i></a>
                                    </div>
                                    <div class="bg-overlay-bg bg-transparent"></div>
                                </div>
                            </div>
                            <div class="product-desc">
                                <div class="product-title"><h3><a href="#">' . $value['ProductName'] . '</a></h3></div>
                                <div class="product-price">';

            $sout .= (!empty($value['discount']) && $value['discount'] > 0) ? '<del>' . number_format($value['price']) . ' ₫ </del><ins>' . number_format(($value['price'] * (100 - $value['discount']) / 100)) . '₫ </ins>' : '<ins>' . number_format($value['price']) . ' ₫ </ins>';

            $sout .= '</div>
                                <div class="product-rating">
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star-half-full"></i>
                                    <i class="icon-star-empty"></i>
                                </div>
                            </div>
                        </div>
                    </div>';
        }
        return $sout;
    }

    public static function printListCategory()// Not used
    {
        $sout = '';
        foreach ((new \MVC\controllers\CategoryControllers)->getAllListcategory() as $value) {
            $sout .= '<li class="menu-item">';
            $sout .= '<a class="menu-link" href=' . \MVC\controllers\UrlControllers::url("category/" . $value['category_name']) . '><div>' . \MVC\libs\Languages::getLangData($value['category_name']) . '</div></a>';
            $sout .= '<ul class="sub-menu-container">';
            foreach ((new \MVC\controllers\CategoryControllers())->getAllCategorybyParentID($value['parent_id']) as $v) {
                $sout .= '<li class="menu-item">';
                $sout .= '<a class="menu-link" href=' . \MVC\controllers\UrlControllers::url("category/{$value['category_name']}/{$v['code']}") . '><div>' . \MVC\libs\Languages::getLangData($v['title']) . '</div></a>';
                if (empty((new \MVC\controllers\CategoryControllers())->getAllSubCategoryControllers($v['code'])['errors'])) {
                    $sout .= '<ul class="sub-menu-container">';
                    foreach ((new \MVC\controllers\CategoryControllers())->getAllSubCategoryControllers($v['code']) as $val) {
                        $sout .= ' <li class="menu-item"><a class="menu-link" href=' . \MVC\controllers\UrlControllers::url("category/" . $value['category_name']) . "/" . $val['codeSUB'] . '><div>' . \MVC\libs\Languages::getLangData($val['title']) . '</div></a></li>';
                    }
                    $sout .= '</ul>';
                }
                $sout .= '</li>';
            }
            $sout .= '</ul>';
            $sout .= '</li>';
        }
        return $sout;
    }

    public static function printListCategoryIncludeSub()
    {
        $sout = '';
        foreach ((new \MVC\controllers\CategoryControllers)->getAllListcategory() as $value) {
            $sout .= '<li class="menu-item">';
            $sout .= '<a class="menu-link" href=' . \MVC\controllers\UrlControllers::url("category/" . $value['category_name']) . '><div>' . \MVC\libs\Languages::getLangData($value['category_name']) . '</div></a>';
            $sout .= '<ul class="sub-menu-container">';
            foreach ((new \MVC\controllers\CategoryControllers())->getAllCategorybyParentID($value['parent_id']) as $v) {
                $sout .= '<li class="menu-item">';
                $sout .= '<a class="menu-link" href=' . \MVC\controllers\UrlControllers::url("category/{$value['category_name']}/{$v['code']}") . '><div>' . \MVC\libs\Languages::getLangData($v['title']) . '</div></a>';
                if (empty((new \MVC\controllers\CategoryControllers())->getAllSubCategoryControllers($v['code'])['errors'])) {
                    $sout .= '<ul class="sub-menu-container">';
                    foreach ((new \MVC\controllers\CategoryControllers())->getAllSubCategoryControllers($v['code']) as $val) {
                        $sout .= ' <li class="menu-item"><a class="menu-link" href=' . \MVC\controllers\UrlControllers::url("category/" . $value['category_name']) . "/" . $val['codeSUB'] . '><div>' . \MVC\libs\Languages::getLangData($val['title']) . '</div></a></li>';
                    }
                    $sout .= '</ul>';
                }
                $sout .= '</li>';
            }
            $sout .= '</ul>';
            $sout .= '</li>';
        }
        return $sout;
    }

    public function getAllCategorybyParentID($action)
    {
        $data = parent::getAllCategorybyParentID($action); // TODO: Change the autogenerated stub
        return $data;
    }

    public function getAllCategoryView($action)
    {
        $data = $this->getAllCategorybyParentID($action);
        (new WebControllers())->view("category/shop-category-parallax", $data);
    }
}