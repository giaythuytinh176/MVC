<?php

namespace MVC\admin\controllers;

use MVC\admin\models\CategoryModels;

class CategoryControllers extends CategoryModels
{





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
                (new \MVC\admin\controllers\CategoryControllers())->UpdateCategorybyID($data[0][1], $_POST);
                echo '<div class="alert alert-success" role="alert">
                                Updated data sucessfully.
                             </div>';
                (new \MVC\controllers\RenderControllers())->redirectAfterSecondPage("admin/category", 3);
            }
        }
    }

    public static function PrintEditCategory($data)
    {
        $CategoryDetail = (new \MVC\admin\Controllers\CategoryControllers())->getAllCateParentbyID($data[0][1]);
        $sout = '';
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
        if (empty((new CategoryControllers())->getALlCategoryParent()['errors'])) {
            foreach ((new CategoryControllers())->getALlCategoryParent() as $key => $value) {
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
                                       <a href="' . \MVC\controllers\UrlControllers::url("admin/category/edit/" . $value['parent_id']) . '"><i class="fas fa-edit" title="Edit Category"></i></a>
                                       <button id="statuscategory' . $value['parent_id'] . '" class="fas fa-ban mystatuscategory" title="Enable/Disable Category" value="' . $value['parent_id'] . '"></button>
                                       <a href="' . \MVC\controllers\UrlControllers::url("category/" . $value['category_code']) . '" target="_blank"><i class="fas fa-external-link-alt" title="Open this category"></i></a>
                                       <strong><p style="color: red" id="sc' . $value['parent_id'] . '"></p></strong>
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