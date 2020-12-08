<?php

namespace MVC\controllers;

use MVC\models\CategoryModels;
use \MVC\controllers\UrlControllers;
use \MVC\libs\Languages;

class CategoryControllers
{
    protected $cm;

    public function __construct()
    {
        $this->cm = new CategoryModels();
    }

    public function getAllListCategoryByCode($code)
    {
        $dataSQL = $this->cm->getAllListCategoryByCode(['code' => $code, 'is_disabled_brand' => '0']);
        if (empty($dataSQL)) {
            $dataSQL = ["errors" => "Doesn't have any Product Category."];
        }
        return $dataSQL;
    }

    public function getAllListcategory()
    {
        $dataSQL = $this->cm->getAllListcategory(['is_disabled' => '0']);
        if (empty($dataSQL)) {
            $dataSQL = ["errors" => "Doesn't have any Category."];
        }
        return $dataSQL;
    }

    public function getAllSubCategory($code)
    {
        $dataSQL = $this->cm->getAllSubCategory(['code' => $code, 'is_disabled_sub' => '0']);
        if (empty($dataSQL)) {
            $dataSQL = ["errors" => "Doesn't have any sub Category."];
        }
        return $dataSQL;
    }

    public function getParentCategoryByCode($code)
    {
        $dataSQL = $this->cm->getParentCategoryByCode(['category_code' => $code, 'is_disabled' => '0']);
        if (empty($dataSQL)) {
            $dataSQL = ["errors" => "Doesn't have any Parent Category."];
        }
        return $dataSQL;
    }

    public function getAllCategorybyParentID($parentID)
    {
        $dataSQL = $this->cm->getAllCategorybyParentID(['parent_id' => $parentID, 'is_disabled_brand' => '0']);
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

    public function PrintListProductCategory($data)
    {

        $sout = "";
        if (!empty($data[0])) {
            foreach ($data[0] as $value) {
                if (!empty($value['img'])) {
                    $sout .= '<a title="' . $value['title'] . '" href="' . \MVC\Controllers\UrlControllers::url("category/{$data[1]}/{$value['code']}") . '"><div class="entry-image mb-0"
                                      style="background: url(' . $value['img'] . ') no-repeat center center / cover; height:600px;"
                                      data-center="background-position: 50% 0px;" data-top-bottom="background-position:50% 200px;">
                                  </div></a>';
                }
            }
        }
        return $sout;

    }

    public function getDetailElementbyCodeSub($code)
    {
        $dataSQL = $this->cm->getDetailElementbyCodeSub(['codeSUB' => $code]);
        if (empty($dataSQL)) {
            $dataSQL = ["errors" => "Code not found."];
        }
        return $dataSQL;
    }

    public function getAllCategoryView($code)
    {
        $ParentCategory = $this->getParentCategoryByCode($code);
        if (!empty($ParentCategory['parent_id'])) $ListParentCategory = $this->getAllCategorybyParentID($ParentCategory['parent_id']);
        else $ListParentCategory = [];
        (new RenderControllers())->view("category/shop-category-parallax", [$ListParentCategory, $ParentCategory['category_title']]);
    }

    public static function printListCategoryIncludeSub()
    {
        $sout = '';
        if (empty((new self)->getAllListcategory()['errors'])) {
            foreach ((new self)->getAllListcategory() as $value) {
                $sout .= '<li class="menu-item">';
                $sout .= '<a class="menu-link" href=' . UrlControllers::url("category/" . $value['category_code']) . '><div>' . Languages::getLangData($value['category_title']) . '</div></a>';
                $sout .= '<ul class="sub-menu-container">';
                foreach ((new self)->getAllCategorybyParentID($value['parent_id']) as $v) {
                    $sout .= '<li class="menu-item">';
                    if (empty($v['code'])) {
                        $sout .= '<a class="menu-link" href=""><div>You need add a Product Category.</div></a>';
                    } else {
                        $sout .= '<a class="menu-link" href=' . UrlControllers::url("category/{$value['category_code']}/{$v['code']}") . '><div>' . Languages::getLangData($v['title']) . '</div></a>';
                        if (empty((new self)->getAllSubCategory($v['code'])['errors'])) {
                            $sout .= '<ul class="sub-menu-container">';
                            foreach ((new self)->getAllSubCategory($v['code']) as $val) {
                                $sout .= ' <li class="menu-item"><a class="menu-link" href=' . UrlControllers::url("category/" . $value['category_code']) . "/{$v['code']}/" . $val['codeSUB'] . '><div>' . Languages::getLangData($val['title']) . '</div></a></li>';
                            }
                            $sout .= '</ul>';
                        }
                    }
                    $sout .= '</li>';
                }
                $sout .= '</ul>';
                $sout .= '</li>';
            }
        }
        return $sout;
    }
}