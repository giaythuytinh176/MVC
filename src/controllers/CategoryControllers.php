<?php

namespace MVC\controllers;

use MVC\models\CategoryModels;

class CategoryControllers
{
    protected $cm;

    public function __construct()
    {
        $this->cm = new CategoryModels();
    }

    public function getCategorybyID($categoryName, $category_id)
    {
        $data = ['code' => $category_id[0], 'category_code' => $categoryName];
        $dataSQL = $this->cm->getCategorybyID($data);
        if (empty($dataSQL)) {
            $dataSQL = ["errors" => "Category not found."];
        }
        return $dataSQL;
    }

    public function getAllListcategory()
    {
        $data = ['is_disabled' => '0'];
        $dataSQL = $this->cm->getAllListcategory($data);
        if (empty($dataSQL)) {
            $dataSQL = ["errors" => "Doesn't have any Category."];
        }
        return $dataSQL;
    }

    public function getAllSubCategory($code)
    {
        $data = ['code' => $code, 'is_disabled_sub' => '0'];
        $dataSQL = $this->cm->getAllSubCategory($data);
        if (empty($dataSQL)) {
            $dataSQL = ["errors" => "Doesn't have any sub Category."];
        }
        return $dataSQL;
    }

    public function getAllCategorybyParentID($parentID)
    {
        $data = ['parent_id' => $parentID, 'is_disabled_brand' => '0'];
        $dataSQL = $this->cm->getAllCategorybyParentID($data);
        if (empty($dataSQL)) {
            $dataSQL = ["errors" => "Doesn't have any Category."];
        }
        return $dataSQL;
    }

    public function getDetaiElementbyCode($code)
    {
        $data = ['code' => $code];
        $dataSQL = $this->cm->getDetaiElementbyCode($data);
        if (empty($dataSQL)) {
            $dataSQL = ["errors" => "Code not found."];
        }
        return $dataSQL;
    }

    public function getSubCategorybyID($category_code, $category_id)
    {
        $data = ['code' => $category_id[0], 'category_code' => $category_code];
        $dataSQL = $this->cm->getSubCategorybyID($data);
        if (empty($dataSQL)) {
            $dataSQL = ["errors" => "Category not found."];
        }
        return $dataSQL;
    }

    public function getDetailElementbyCodeSub($code)
    {
        $data = ['codeSUB' => $code];
        $dataSQL = $this->cm->getDetailElementbyCodeSub($data);
        if (empty($dataSQL)) {
            $dataSQL = ["errors" => "Code not found."];
        }
        return $dataSQL;
    }

    public function getAllCategoryView($action)
    {
        $data = $this->getAllCategorybyParentID($action);
        (new RenderControllers())->view("category/shop-category-parallax", $data);
    }

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
}