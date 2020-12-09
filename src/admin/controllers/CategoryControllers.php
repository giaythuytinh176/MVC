<?php

namespace MVC\admin\controllers;

use MVC\admin\models\CategoryModels;
use MVC\controllers\ToolControllers;
use MVC\controllers\UrlControllers;
use MVC\controllers\RenderControllers;

class CategoryControllers
{
    protected $categorymodels;

    public function __construct()
    {
        $this->categorymodels = new CategoryModels();
    }

    public function getALlCategoryParent()
    {
        $data = $this->categorymodels->getALlCategoryParent();
        if (empty($data)) {
            return ["errors" => "Parent Category not found."];
        } else {
            return $data;
        }
    }

    public function getBrandByID($id)
    {
        $data = $this->categorymodels->getBrandByID($id);
        if (empty($data)) {
            return ["errors" => "Brand not found."];
        } else {
            return $data;
        }
    }

    public function getAllBrand()
    {
        $data = $this->categorymodels->getAllBrand();
        if (empty($data)) {
            return ["errors" => "Brand not found."];
        } else {
            return $data;
        }
    }

    public function getAllSubCate()
    {
        $data = $this->categorymodels->getAllSubCate();
        if (empty($data)) {
            return ["errors" => "Sub Category not found."];
        } else {
            return $data;
        }
    }

    public function getOnlySubCateIncludeCateParent()
    {
        $data = $this->categorymodels->getOnlySubCateIncludeCateParent();
        if (empty($data)) {
            return ["errors" => "Sub Category not found."];
        } else {
            return $data;
        }
    }

    public function getOnlySubCateParentbyID($ID)
    {
        $data = $this->categorymodels->getOnlySubCateParentbyID($ID);
        if (empty($data)) {
            return ["errors" => "Sub Category not found."];
        } else {
            return $data;
        }
    }

    public function getALlCategoryProduct()
    {
        $data = $this->categorymodels->getALlCategoryProduct();
        if (empty($data)) {
            return ["errors" => "Category Product not found."];
        } else {
            return $data;
        }
    }

    public function ActiveOrDisableCategory($id)
    {
        if ($this->getAllCateParentbyID($id)['is_disabled'] == 0) {
            $this->categorymodels->ActiveOrDisableCategory($id, 1);
            return "Disabled Category.";
        } else {
            $this->categorymodels->ActiveOrDisableCategory($id, 0);
            return "Enabled Category.";
        }
    }

    public function getAllCateParentbyID($id)
    {
        $data = $this->categorymodels->getAllCateParentbyID($id);
        if (empty($data)) {
            return ["errors" => "Category not found."];
        } else {
            return $data;
        }
    }

    public function getALlCategoryProductFromParentID($parent_id)
    {
        $data = $this->categorymodels->getALlCategoryProductFromParentID($parent_id);
        if (empty($data)) {
            return ["errors" => "Category Product not found."];
        } else {
            return $data;
        }
    }

    public function getAllCateSubParent()
    {
        $data = $this->categorymodels->getAllCateSubParent();
        if (empty($data)) {
            return ["errors" => "Cate-Sub-Parent not found."];
        } else {
            return $data;
        }
    }

    public function UpdateBrandbyID($brand_title, $brand_code, $parent_id, $category_id)
    {
        return $this->categorymodels->UpdateBrandbyID($brand_title, $brand_code, $parent_id, $category_id);
    }

    public function UpdateSubCatebyID($data)
    {
        return $this->categorymodels->UpdateSubCatebyID($data);
    }

    public function AddBrand($title, $code, $parent_id)
    {
        return $this->categorymodels->AddBrand($title, $code, $parent_id);
    }

    public function AddSubCate($title, $code, $cate_id, $parent_id)
    {
        return $this->categorymodels->AddSubCate($title, $code, $cate_id, $parent_id);
    }

    public function AddCategoryParrent($title, $code)
    {
        return $this->categorymodels->AddCategoryParrent($title, $code);
    }

    public function getSubByID($id)
    {
        return $this->categorymodels->getSubByID($id);
    }

    public function ActiveOrDisableBrand($id)
    {
        return $this->categorymodels->ActiveOrDisableBrand($id);
    }

    public function ActiveOrDisableSubCate($id)
    {
        return $this->categorymodels->ActiveOrDisableSubCate($id);
    }

    public function getParrentFromParentID($parent_id)
    {
        return $this->categorymodels->getParrentFromParentID($parent_id);
    }

    public function getCategoryProductFromCateID($category_id)
    {
        return $this->categorymodels->getCategoryProductFromCateID($category_id);
    }

    public function UpdateCategorybyID($id, $data)
    {
        $this->categorymodels->UpdateCategorybyID($id, $data);
    }

    public static function AllowSelectSubCateFromCateProductParent()
    {
        $parent_category_product = [];
        if (empty((new self)->getALlCategoryParent()['errors'])) {
            foreach ((new self)->getALlCategoryParent() as $parent) {
                if (empty((new self)->getALlCategoryProductFromParentID($parent['parent_id'])['errors'])) {
                    foreach ((new self)->getALlCategoryProductFromParentID($parent['parent_id']) as $categories) {
                        $parent_category_product['parent_id'][$parent['parent_id']]['category_id'][] = $categories['category_id'];
                    }
                }
            }
        }
        ksort($parent_category_product['parent_id']);
        return $parent_category_product;
    }

    public static function PrintEditBrand($data)
    {
        $BrandDetail = (new self)->getBrandByID($data[0][1]);
        $sout = '';
        if (empty($BrandDetail['errors'])) {
            $sout .= '<table id="EditBrand" class="table table-borderless" cellspacing="0"
                               width="100%">
                            <thead class="text-white thead-dark">
                            <tr>
                                <th class="success" colspan="4">General Settings</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th></th>
                                <th style="width: 30%" class="success">Brand Title</th>
                                <th style="width: 30%" class="warning"><input type="text" class="form-control" id="brand_title" value="' . $BrandDetail['title'] . '"></th>
                                <th></th> 
                            </tr>
                            <tr>
                                <th></th>
                                <th style="width: 30%" class="success">Brand Code</th>
                                <th style="width: 30%" class="warning"><input type="text" class="form-control" id="brand_code" value="' . $BrandDetail['category_code'] . '"></th>
                                <th></th> 
                            </tr>
                            <tr>
                                <th></th>
                                <th style="width: 30%" class="success">Parent Category</th>
                                <th style="width: 30%" class="warning">
                                    <select id="parent_id" required>';
            if (empty((new self)->getALlCategoryParent()['errors'])) {
                foreach ((new self)->getALlCategoryParent() as $cate) {
                    $sout .= '<option value="' . $cate['parent_id'] . '" ' . (($BrandDetail['parent_id'] == $cate['parent_id']) ? 'selected' : '') . '>' . $cate['category_title'] . '</option>';
                }
            }
            $sout .= '
                                    </select>
                                 
                                
                                </th>
                                <th></th> 
                            </tr>
                            <input type="hidden" id="category_id" value="' . $BrandDetail['category_id'] . '">
                             <tr><th style="text-align: center" colspan="4"><input class="btn btn-primary" type="submit" id="submitUpdate" value="Submit"></th></tr>
                            </tbody>
                        </table>';
        } else {
            $sout .= '<div class="alert alert-danger" role="alert">Brand ID not found.</div>';
        }
        return $sout;
    }

    public static function PrintAddBrand()
    {
        $sout = '';
        $sout .= '<table id="AddBrand" class="table table-borderless" cellspacing="0" width="100%">
                            <thead class="text-white thead-dark">
                            <tr>
                                <th class="success" colspan="4">General Settings</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th></th>
                                <th style="width: 30%" class="success">Brand Title</th>
                                <th style="width: 30%" class="warning"><input type="text" class="form-control" required id="brand_title" value=""></th>
                                <th></th> 
                            </tr>
                            <tr>
                                <th></th>
                                <th style="width: 30%" class="success">Brand Code</th>
                                <th style="width: 30%" class="warning"><input type="text" class="form-control" required id="brand_code" value=""></th>
                                <th></th> 
                            </tr>
                            <tr>
                                <th></th>
                                <th style="width: 30%" class="success">Parent Category</th>
                                <th style="width: 30%" class="warning">
                                    <select id="parent_id" required>';
        if (empty((new self)->getALlCategoryParent()['errors'])) {
            foreach ((new self)->getALlCategoryParent() as $cate) {
                $sout .= '<option value="' . $cate['parent_id'] . '">' . $cate['category_title'] . '</option>';
            }
        }
        $sout .= '
                                    </select>
                                </th>
                                <th></th> 
                            </tr>
                            <tr>
                                 <th style="text-align: center" colspan="4"><input class="btn btn-primary" type="submit" id="submitAddBrand" value="Submit"></th>
                            </tr>
                            </tbody>
                        </table>';
        return $sout;
    }

    public static function PrintAddSubCategory()
    {
        $sout = '';
        $sout .= '<table id="AddSubCate" class="table table-borderless" cellspacing="0"
                               width="100%">
                            <thead class="text-white thead-dark">
                            <tr>
                                <th class="success" colspan="4">General Settings</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th></th>
                                <th style="width: 30%" class="success">Sub Category Title</th>
                                <th style="width: 30%" class="warning"><input type="text" class="form-control" id="sub_title" value=""></th>
                                <th></th> 
                            </tr>
                            <tr>
                                <th></th>
                                <th style="width: 30%" class="success">Sub Category Code</th>
                                <th style="width: 30%" class="warning"><input type="text" class="form-control" id="sub_code" value=""></th>
                                <th></th> 
                            </tr>
                            <tr>
                                <th></th>
                                <th style="width: 30%" class="success">Category Product</th>
                                <th style="width: 30%" class="warning">';

        $sout .= '
                                    <select id="category_id" required>';
        if (empty((new self)->getALlCategoryProduct()['errors'])) {
            foreach ((new self)->getALlCategoryProduct() as $category) {
                $sout .= '<option value="' . $category['category_id'] . '">' . $category['title'] . ' [' . (new self())->getBrandByID($category['category_id'])['category_title'] . '] </option>';
            }
        }
        $sout .= '
                                    </select>
                                </th>
                                <th></th> 
                            </tr>
                            <tr>
                                <th></th>
                                <th style="width: 30%" class="success">Parent Category</th>
                                <th style="width: 30%" class="warning">
                                    <select id="parent_id" required>';
        if (empty((new self)->getALlCategoryParent()['errors'])) {
            foreach ((new self)->getALlCategoryParent() as $parent) {
                $sout .= '<option value="' . $parent['parent_id'] . '">' . $parent['category_title'] . '</option>';
            }
        }
        $sout .= '
                                    </select>
                                </th>
                                <th></th> 
                            </tr>
                             <tr><th style="text-align: center" colspan="4"><input class="btn btn-primary" type="submit" id="submitAddSubCate" value="Submit"></th></tr>
                            </tbody>
                        </table>';
        return $sout;
    }

    public static function PrintAddCategory()
    {
        $sout = '';
        $sout .= '<table id="AddCategory" class="table table-borderless" cellspacing="0" width="100%">
                            <thead class="text-white thead-dark">
                            <tr>
                                <th class="success" colspan="4">General Settings</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th></th>
                                <th style="width: 30%" class="success">Category Title</th>
                                <th style="width: 30%" class="warning"><input type="text" class="form-control" id="category_title" value=""></th>
                                <th></th> 
                            </tr>
                            <tr>
                                <th></th>
                                <th style="width: 30%" class="success">Category Code</th>
                                <th style="width: 30%" class="warning"><input type="text" class="form-control" id="category_code" value=""></th>
                                <th></th> 
                            </tr>
                            <tr>
                                 <th style="text-align: center" colspan="4"><input class="btn btn-primary" type="submit" id="submitAdd" value="Submit"></th>
                            </tr>
                            </tbody>
                        </table>';
        return $sout;
    }

    public static function PrintSubmitEditCategory($data): void
    {
        if (!empty($_POST['btn'])) {
            $errors = [];
            $required_fields = ['category_name'];
            foreach ($_POST as $key => $value) {
                if (empty($value) == true && in_array($key, $required_fields) == true) {
                    $errors[] = ucwords(str_replace("_", " ", $key)) . " is a required field.";
                }
            }
            if (!empty($errors)) {
                echo "<div class=\"alert alert-danger\" role=\"alert\">" . implode("<br>", $errors) . "</div>";
            } else {
                (new self)->UpdateCategorybyID($data[0][1], $_POST);
                echo '<div class="alert alert-success" role="alert">
                                Updated data sucessfully.
                             </div>';
                (new RenderControllers())->redirectAfterSecondPage("admin/category", 3);
            }
        }
    }

    public static function PrintEditCategory($data)
    {
        $CategoryDetail = (new self)->getAllCateParentbyID($data[0][1]);
        $sout = '';
        if (empty($CategoryDetail['errors'])) {
            $sout .= '<form method="post">';
            $sout .= '<table id="EditCategory" class="table table-borderless" cellspacing="0"
                               width="100%">
                            <thead class="text-white thead-dark">
                            <tr>
                                <th class="success" colspan="4">General Settings</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th></th>
                                <th style="width: 30%" class="success">Category Title</th>
                                <th style="width: 30%" class="warning"><input type="text" class="form-control" name="category_title" value="' . $CategoryDetail['category_title'] . '"></th>
                                <th></th> 
                            </tr>
                            <tr>
                                <th></th>
                                <th style="width: 30%" class="success">Category Code</th>
                                <th style="width: 30%" class="warning"><input type="text" class="form-control" name="category_code" value="' . $CategoryDetail['category_code'] . '" readonly></th>
                                <th></th> 
                            </tr>
                             <tr><th style="text-align: center" colspan="4"><input class="btn btn-primary" type="submit" name="btn" value="Submit"></th></tr>
                            </tbody>
                        </table>';
            $sout .= '</form>';
        } else {
            $sout .= '<div class="alert alert-danger" role="alert">Category ID not found.</div>';
        }
        return $sout;
    }

    public static function PrintEditSubCategory($data)
    {
        $SubCategoryDetail = (new self)->getOnlySubCateParentbyID($data[0][1]);
        $sout = '';
        if (empty($SubCategoryDetail['errors'])) {
            $sout .= '<table id="EditBrand" class="table table-borderless" cellspacing="0"
                               width="100%">
                            <thead class="text-white thead-dark">
                            <tr>
                                <th class="success" colspan="4">General Settings</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th></th>
                                <th style="width: 30%" class="success">Sub Category Title</th>
                                <th style="width: 30%" class="warning"><input type="text" class="form-control" id="sub_title" value="' . $SubCategoryDetail['spc_title'] . '"></th>
                                <th></th> 
                            </tr>
                            <tr>
                                <th></th>
                                <th style="width: 30%" class="success">Sub Category Code</th>
                                <th style="width: 30%" class="warning"><input type="text" class="form-control" id="sub_code" value="' . $SubCategoryDetail['codeSUB'] . '"></th>
                                <th></th> 
                            </tr>
                            <tr>
                                <th></th>
                                <th style="width: 30%" class="success">Category Product</th>
                                <th style="width: 30%" class="warning">
                                    <select id="category_id" required>';
            if (!empty((new self)->getALlCategoryProduct())) {
                foreach ((new self)->getALlCategoryProduct() as $cate) {
                    $sout .= '<option value="' . $cate['category_id'] . '"'.(($cate['category_id'] == $SubCategoryDetail['spc_category_id']) ? "selected" : '').'>' . $cate['title'] . '</option>';
                }
            }
            $sout .= '
                                    </select>
                                </th>
                                <th></th> 
                            </tr>
                            <tr>
                                <th></th>
                                <th style="width: 30%" class="success">Parent Category</th>
                                <th style="width: 30%" class="warning">
                                    <select id="sub_parent_id" required>';
            if (empty((new self)->getALlCategoryParent()['errors'])) {
                foreach ((new self)->getALlCategoryParent() as $cate) {
                    $sout .= '<option value="' . $cate['parent_id'] . '" ' . (($SubCategoryDetail['parent_id'] == $cate['parent_id']) ? 'selected' : '') . '>' . $cate['category_title'] . '</option>';
                }
            }
            $sout .= '
                                    </select>
                                </th>
                                <th></th> 
                            </tr>
                            <input type="hidden" id="sub_cate_id" value="' . $SubCategoryDetail['spc_category_sub'] . '">
                            <input type="hidden" id="sub_parent_id" value="' . $SubCategoryDetail['parent_id'] . '">
                             <tr><th style="text-align: center" colspan="4"><input class="btn btn-primary" type="submit" id="submitSubCate" value="Submit"></th></tr>
                            </tbody>
                        </table>';
        } else {
            $sout .= '<div class="alert alert-danger" role="alert">Brand ID not found.</div>';
        }
        return $sout;
    }

    public static function PrintListBrandes()
    {
        $sout = '';
        $sout .= '      
                        <table id="ListBrand" class="table table-bordered table-hover" cellspacing="0"
                               width="100%">
                            <thead class="text-white thead-dark">
                            <tr>
                                <th style="width: 1%">
                                    <input type="checkbox" class="select-all checkbox" name="select-all"/>
                                </th>
                                <th style="width: 2%">#</th>
                                <th style="width: 22%" class="success">Brand Title</th>
                                <th style="width: 22%" class="success">Brand Code</th>
                                <th style="width: 5%" class="warning">Enable/Disable</th>
                                <th style="width: 5%" class="danger"></th>
                            </tr>
                            </thead>
                            <tbody>';
        if (empty((new self)->getAllBrand()['errors'])) {
            foreach ((new self)->getAllBrand() as $key => $value) {
                $sout .= '      <tr>
                                <td class="active">
                                    <input type="checkbox" class="select-item checkbox" name="select-item" value="' . $value['category_id'] . '"/>
                                </td>
                                <td>' . ($key + 1) . '</td>
                                <td class="success">' . $value['title'] . '</td>
                                <td class="success">' . $value['code'] . '</td>
                                <td class="warning" id="bu' . $value['category_id'] . '">' . (($value['is_disabled_brand'] == 0) ? "Enabled." : "Disabled.") . '</td>
                                <td class="danger">
                                       <a href="' . UrlControllers::url("admin/brand/edit/" . $value['category_id']) . '"><i class="fas fa-edit" title="Edit Brand"></i></a>
                                       <button id="statusbrand' . $value['category_id'] . '" class="fas fa-ban mystatusbrand" title="Enable/Disable Brand" value="' . $value['category_id'] . '"></button>
                                       <a href="' . UrlControllers::url("category/" . $value['category_code'] . "/" . $value['code']) . '" target="_blank"><i class="fas fa-external-link-alt" title="Open this brand"></i></a>
                                </td>
                            </tr>';
            }
            $sout .= '</tbody>
                        </table>';
        } else {
            $sout .= "No brand.";
        }
        return $sout;
    }

    public static function PrintListSubCategories()
    {
        $sout = '';
        $sout .= '      
                        <table id="ListSubCate" class="table table-bordered table-hover" cellspacing="0"
                               width="100%">
                            <thead class="text-white thead-dark">
                            <tr>
                                <th style="width: 1%">
                                    <input type="checkbox" class="select-all checkbox" name="select-all"/>
                                </th>
                                <th style="width: 2%">#</th>
                                <th style="width: 11%" class="success">Sub Category Title</th>
                                <th style="width: 11%" class="warning">Sub Category Code</th>
                                <th style="width: 11%" class="warning">Category Product</th>
                                <th style="width: 11%" class="warning">Category Parent</th>
                                <th style="width: 5%" class="warning">Enable/Disable</th>
                                <th style="width: 5%" class="danger"></th>
                            </tr>
                            </thead>
                            <tbody>';
        if (empty((new self)->getOnlySubCateIncludeCateParent()['errors'])) {
            foreach ((new self)->getOnlySubCateIncludeCateParent() as $key => $value) {
                $sout .= '                            <tr>
                                <td class="active">
                                    <input type="checkbox" class="select-item checkbox" name="select-item"
                                           value="' . $value['category_sub'] . '"/>
                                </td>
                                <td>' . ($key + 1) . '</td>
                                <td class="success">' . $value['spc_title'] . '</td>
                                <td class="warning">' . $value['codeSUB'] . '</td>
                                <td class="warning">' . $value['pc_title'] . '</td>
                                <td class="warning">' . $value['p_category_title'] . '</td>
                                <td class="warning" id="subcu' . $value['category_sub'] . '">' . (($value['is_disabled_sub'] == 0) ? "Enabled." : "Disabled.") . '</td>
                                <td class="danger">
                                       <a href="' . UrlControllers::url("admin/subcate/edit/" . $value['category_sub']) . '"><i class="fas fa-edit" title="Edit Category"></i></a>
                                       <button id="statussubcategory' . $value['category_sub'] . '" class="fas fa-ban mystatussubcategory" title="Enable/Disable Sub Category" value="' . $value['category_sub'] . '"></button>
                                       <a href="' . UrlControllers::url("category/" . $value['p_category_code'] . "/" . $value['pc_code'] . "/" . $value['codeSUB']) . '" target="_blank"><i class="fas fa-external-link-alt" title="Open this sub category"></i></a>
                                </td>
                            </tr>';
            }
            $sout .= '</tbody>
                        </table>';
        } else {
            $sout .= "No category.";
        }
        return $sout;
    }

    public static function PrintListCategories()
    {
        $sout = '';
        $sout .= '      
                        <table id="ListCategory" class="table table-bordered table-hover" cellspacing="0"
                               width="100%">
                            <thead class="text-white thead-dark">
                            <tr>
                                <th style="width: 1%">
                                    <input type="checkbox" class="select-all checkbox" name="select-all"/>
                                </th>
                                <th style="width: 2%">#</th>
                                <th style="width: 22%" class="success">Category Title</th>
                                <th style="width: 22%" class="success">Category Code</th>
                                <th style="width: 5%" class="warning">Enable/Disable</th>
                                <th style="width: 5%" class="danger"></th>
                            </tr>
                            </thead>
                            <tbody>';
        if (empty((new self)->getALlCategoryParent()['errors'])) {
            foreach ((new self)->getALlCategoryParent() as $key => $value) {
                $sout .= '                            <tr>
                                <td class="active">
                                    <input type="checkbox" class="select-item checkbox" name="select-item"
                                           value="' . $value['parent_id'] . '"/>
                                </td>
                                <td>' . ($key + 1) . '</td>
                                <td class="success">' . $value['category_title'] . '</td>
                                <td class="success">' . $value['category_code'] . '</td>
                                <td class="warning" id="scu' . $value['parent_id'] . '">' . (($value['is_disabled'] == 0) ? "Enabled." : "Disabled.") . '</td>
                                <td class="danger">
                                       <a href="' . UrlControllers::url("admin/category/edit/" . $value['parent_id']) . '"><i class="fas fa-edit" title="Edit Category"></i></a>
                                       <button id="statuscategory' . $value['parent_id'] . '" class="fas fa-ban mystatuscategory" title="Enable/Disable Category" value="' . $value['parent_id'] . '"></button>
                                       <a href="' . UrlControllers::url("category/" . $value['category_code']) . '" target="_blank"><i class="fas fa-external-link-alt" title="Open this category"></i></a>
                                </td>
                            </tr>';
            }
            $sout .= '</tbody>
                        </table>';
        } else {
            $sout .= "No category.";
        }
        return $sout;
    }
}