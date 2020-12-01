<?php

namespace MVC\admin\controllers;

use MVC\admin\models\ProductModels;
use MVC\controllers\ToolControllers;

class ProductController extends ProductModels
{

    public function InsertProduct($post)
    {
        $product_name = $post['product_name'];
        $parent_id = $post['parent_id'];
        $category_id = $post['category_id'];
        $category_sub = $post['category_sub'] ? $post['category_sub'] : 'NULL';
        $category_sub = (strtolower($category_sub) === 'null') ? 'NULL' : $category_sub;
        $category_sub = (empty($category_sub)) ? 'NULL' : $category_sub;
        $price = $post['price'];
        $discount = $post['discount'];
        $img_link = $post['img_link'];
        $img_list = $post['img_list'];
        $description = $post['description'];
        $stmt1 = $this->db->query("SELECT * FROM product WHERE ProductName='$product_name' AND category_id='$category_id'");
        if (!empty($stmt1->fetch($this->db::FETCH_ASSOC))) {
            return "Product Name is existed.";
        }

//        $stmt2 = $this->db->query("SELECT * FROM sub_product_category WHERE codeSUB='$code' AND category_id='$cate_id'");
//        if (!empty($stmt2->fetch($this->db::FETCH_ASSOC))) {
//            return "Sub Category Code is existed.";
//        }

        $sql = "INSERT INTO product (ProductName, category_id, category_sub, price, discount, img_link, img_list, description) VALUES ('$product_name','$category_id'," . $category_sub . ",'$price','$discount','$img_link','$img_list','$description')";
        $this->db->query($sql);
        return "Added Product {$product_name}.";
    }

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

    public static function PrintAddProduct()
    {
        $sout = '';
        $sout .= '<table id="AddProduct" class="table table-borderless" cellspacing="0"
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
                                <th style="width: 30%" class="warning"><input type="text" class="form-control" id="product_name" value=""></th>
                                <th></th> 
                            </tr>
                            <tr>
                                <th></th>
                                <th style="width: 30%" class="success">Product Parent</th>
                                <th style="width: 30%" class="warning">
                                    <select id="parent_id" required="1">';
        if (!empty((new \MVC\admin\controllers\CategoryControllers())->getALlCategoryParent())) {
            foreach ((new \MVC\admin\controllers\CategoryControllers())->getALlCategoryParent() as $parent) {
                $sout .= '<option value="' . $parent['parent_id'] . '">' . $parent['category_title'] . '</option>';
            }
        }
        $sout .= '
                                    </select>
                                </th>
                                <th></th>
                            </tr>
                            <tr>
                                <th></th>
                                <th style="width: 30%" class="success">Product Category</th>
                                <th style="width: 30%" class="warning">';

        $sout .= '
                                    <select id="category_id" required="1">';
        if (!empty((new \MVC\admin\controllers\CategoryControllers())->getALlCategoryProduct())) {
            foreach ((new \MVC\admin\controllers\CategoryControllers())->getALlCategoryProduct() as $category) {
                $sout .= '<option value="' . $category['category_id'] . '">' . $category['title'] . '</option>';
            }
        }
        $sout .= '
                                    </select>
                                </th>
                                <th></th>
                            </tr>
                            <tr>
                                <th></th>
                                <th style="width: 30%" class="success">Product SubCategory</th>
                                <th style="width: 30%" class="warning">
                                    <select id="category_sub" required="1">';
        if (!empty((new \MVC\admin\controllers\CategoryControllers())->getAllSubCate())) {
            $sout .= '<option value="null">Not in these list below</option>';
            foreach ((new \MVC\admin\controllers\CategoryControllers())->getAllSubCate() as $sub) {
                $sout .= '<option value="' . $sub['category_sub'] . '">' . $sub['title'] . '</option>';
            }
        }
        $sout .= '
                                    </select>
                                </th>
                                <th></th>
                            </tr>
                            <tr>
                                <th></th>
                                <th style="width: 30%" class="success">Price</th>
                                <th style="width: 30%" class="warning"><input type="number" class="form-control" id="price" value=""></th>
                                <th></th>
                            </tr>
                            <tr>
                                <th></th>
                                <th style="width: 30%" class="success">Discount</th>
                                <th style="width: 30%" class="warning"><input type="number" class="form-control" id="discount" value=""></th>
                                <th></th>
                            </tr>
                            <tr>
                                <th></th>
                                <th style="width: 30%" class="success">Img link</th>
                                <th style="width: 30%" class="warning"><input type="text" class="form-control" id="img_link" value=""></th>
                                <th></th>
                            </tr>
                            <tr>
                                <th></th>
                                <th style="width: 30%" class="success">Img list</th>
                                <th style="width: 30%" class="warning"><textarea type="text" class="form-control" id="img_list" rows="5"></textarea></th>
                                <th></th>
                            </tr>
                            <tr>
                                <th></th>
                                <th style="width: 30%" class="success">Description</th>
                                <th style="width: 30%" class="warning"><textarea type="text" class="form-control" id="description" rows="10"></textarea></th>
                                <th></th>
                            </tr>
                             <tr><th style="text-align: center" colspan="4"><input class="btn btn-primary" type="submit" id="btnAddProduct" value="Submit"></th></tr>
                            </tbody>
                        </table>';
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