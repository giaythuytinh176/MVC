<?php

namespace MVC\admin\controllers;

use MVC\admin\models\ProductModels;
use MVC\controllers\ToolControllers;

class ProductController extends ProductModels
{

    public static function PrintSubmitEditProduct($data)
    {
        if (!empty($_POST['btn'])) {
            $errors = [];
            $required_fields = ['product_name', 'price', 'description', 'img_link', 'img_list'];//, 'discount'
            foreach ($_POST as $key => $value) {
                if (empty($value) == true && in_array($key, $required_fields) == true) {
                    $errors[] = ucwords(str_replace("_", " ", $key)) . " is a required field.";
                }
            }
            if (!empty($errors)) {
                echo "<div class=\"alert alert-danger\" role=\"alert\">" . implode("<br>", $errors) . "</div>";
            } else {
                (new \MVC\admin\controllers\ProductController())->UpdateProductbyID($data[0][1], $_POST);
                echo '<div class="alert alert-success" role="alert">
                                Updated data sucessfully.
                             </div>';
                (new \MVC\controllers\RenderControllers())->redirectAfterSecondPage("admin/products", 3);
            }
        }
    }

    public static function PrintEditProduct($data)
    {
        $ProductDetail = (new \MVC\admin\Controllers\ProductController())->getAllCateOfProductbyID($data[0][1]);
        $sout = '';
        $sout .= '<form method="post">';
        $sout .= '<table id="EditProduct" class="table table-borderless" cellspacing="0"
                               width="100%">
                            <thead class="text-white thead-dark">
                            <tr>
                                <th class="success" colspan="4">General Settings</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th></th>
                                <th style="width: 30%" class="success">Title</th>
                                <th style="width: 30%" class="warning"><input type="text" class="form-control" name="product_name" value="' . $ProductDetail['ProductName'] . '"></th>
                                <th></th> 
                            </tr>
                            <tr>
                                <th></th>
                                <th style="width: 30%" class="success">Product Parent</th>
                                <th style="width: 30%" class="warning"><input type="text" class="form-control" name="category_parent" value="' . $ProductDetail['parent_title'] . '" disabled></th>
                                <th></th>
                            </tr>
                            <tr>
                                <th></th>
                                <th style="width: 30%" class="success">Product Category</th>
                                <th style="width: 30%" class="warning"><input type="text" class="form-control" name="category_title" value="' . $ProductDetail['category_title'] . '" disabled></th>
                                <th></th>
                            </tr>
                            <tr>
                                <th></th>
                                <th style="width: 30%" class="success">Product SubCategory</th>
                                <th style="width: 30%" class="warning"><input type="text" class="form-control" name="category_sub" value="' . (empty($ProductDetail['spc_title']) ? "Don't have" : $ProductDetail['spc_title']) . '" disabled></th>
                                <th></th>
                            </tr>
                            <tr>
                                <th></th>
                                <th style="width: 30%" class="success">Price</th>
                                <th style="width: 30%" class="warning"><input type="number" class="form-control" name="price" value="' . $ProductDetail['price'] . '"></th>
                                <th></th>
                            </tr>
                            <tr>
                                <th></th>
                                <th style="width: 30%" class="success">Discount</th>
                                <th style="width: 30%" class="warning"><input type="number" class="form-control" name="discount" value="' . (!empty($ProductDetail['discount']) ? $ProductDetail['discount'] : 0) . '"></th>
                                <th></th>
                            </tr>
                            <tr>
                                <th></th>
                                <th style="width: 30%" class="success">Img link</th>
                                <th style="width: 30%" class="warning"><input type="text" class="form-control" name="img_link" value="' . $ProductDetail['img_link'] . '"></th>
                                <th></th>
                            </tr>
                            <tr>
                                <th></th>
                                <th style="width: 30%" class="success">Img list</th>
                                <th style="width: 30%" class="warning"><textarea type="text" class="form-control" name="img_list" rows="5">' . $ProductDetail['img_list'] . '</textarea></th>
                                <th></th>
                            </tr>
                            <tr>
                                <th></th>
                                <th style="width: 30%" class="success">Description</th>
                                <th style="width: 30%" class="warning"><textarea type="text" class="form-control" name="description" rows="10">' . $ProductDetail['description'] . '</textarea></th>
                                <th></th>
                            </tr>
                             <tr><th style="text-align: center" colspan="4"><input class="btn btn-primary" type="submit" name="btn" value="Submit"></th></tr>
                            </tbody>
                        </table>';
        $sout .= '</form>';
        return $sout;
    }

    public static function PrintListProduct()
    {
        $sout = '';
        $sout .= ' 
                        <table id="ListProduct" class="table table-bordered table-hover" cellspacing="0"
                               width="100%">
                            <thead class="text-white thead-dark">
                            <tr>
                                <th style="width: 1%">
                                    <input type="checkbox" class="select-all checkbox" name="select-all"/>
                                </th>
                                <th style="width: 2%">#</th>
                                <th style="width: 22%" class="success">Title</th>
                                <th style="width: 10%" class="success">Img</th>
                                <th style="width: 45%" class="warning">Product Information</th>
                                <th style="width: 10%" class="warning">Price</th>
                                <th style="width: 5%" class="warning">Enable/Disable</th>
                                <th style="width: 5%" class="danger"></th>
                            </tr>
                            </thead>
                            <tbody>';
        if (empty((new \MVC\admin\controllers\ProductController())->getAllProductbyView()['errors'])) {
            foreach ((new \MVC\admin\controllers\ProductController())->getAllProductbyView() as $key => $value) {
                $NameProductToString = \MVC\controllers\ToolControllers::ConvertName($value);
                $sout .= '                            <tr>
                                <td class="active">
                                    <input type="checkbox" class="select-item checkbox" name="select-item"
                                           value="' . $value['product_id'] . '"/>
                                </td>
                                <td>' . ($key + 1) . '</td>
                                <td class="success">' . $value['ProductName'] . '</td>
                                <td class="success"><img src="' . $value['img_link'] . '" alt="' . $value['ProductName'] . '" class="img-thumbnail"></td>
                                <td class="warning">' . substr($value['description'], 0, 200) . ' ...</td>
                                <td class="warning">' . $value['price'] . '</td>
                                <td class="warning" id="spu' . $value['product_id'] . '">' . (($value['is_disabled'] == 0) ? "Enabled." : "Disabled.") . '</td>
                                <td class="danger">
                                       <a href="' . \MVC\controllers\UrlControllers::url("admin/products/edit/" . $value['product_id']) . '"><i class="fas fa-edit" title="Edit Product"></i></a>
                                       <button id="statusproduct' . $value['product_id'] . '" class="fas fa-ban mystatusproduct" title="Enable/Disable Product" value="' . $value['product_id'] . '"></button>
                                       <a href="' . \MVC\controllers\UrlControllers::url("category/" . $value['category_parent'] . "/" . $value['pc_code'] . "/" . $value['product_id'] . "-$NameProductToString.html") . '" target="_blank"><i class="fas fa-external-link-alt" title="Open this product"></i></a>
                                </td>
                            </tr>';
            }
            $sout .= '    </tbody>
                      </table>';
//                                                <button id="select-all" class="btn button-default">SelectAll/Cancel</button>
//                                                <button id="select-invert" class="btn button-default">Invert</button>
//                                                <button id="selected" class="btn button-default">GetSelected</button>
        } else {
            $sout .= "No product.";
        }
        return $sout;
    }

}