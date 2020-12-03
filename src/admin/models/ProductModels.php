<?php

namespace MVC\admin\models;

use MVC\controllers\ToolControllers;
use MVC\libs\Database;
use MVC\models\CRUDModels;

class ProductModels
{
    private $CRUDmodels;

    public function __construct()
    {
        $this->CRUDmodels = new CRUDModels();
    }

    public function DeleteProduct($id)
    {
        $this->CRUDmodels->delete("product", ['product_id' => $id]);
    }

    public function getAllProductbyView()
    {
        return $this->CRUDmodels->select("view_parentproduct_productcategory_subcategory", [], '', 'All');
    }

    public function getAllProduct()
    {
        return $this->CRUDmodels->select("product", [], '', 'All');
    }

    public function getProductbyNameID($product_name, $category_id)
    {
        return $this->CRUDmodels->select("product", ['ProductName' => $product_name, 'category_id' => $category_id]);
    }

    public function getAllCateOfProductbyID($id)
    {
        return $this->CRUDmodels->select("view_parentproduct_productcategory_subcategory", ['product_id' => $id]);
    }

    public function ActiveOrDisableProduct($id)
    {
        if ($this->getAllCateOfProductbyID($id)['is_disabled'] == 0) {
            $this->CRUDmodels->update('product', ['is_disabled' => '1'], ['product_id' => $id]);
            return "Disabled Product.";
        } else {
            $this->CRUDmodels->update('product', ['is_disabled' => '0'], ['product_id' => $id]);
            return "Enabled Product.";
        }
    }

    public function AddProduct($data)
    {
        $this->CRUDmodels->insert("product", $data);
    }

    public function UpdateProductbyID($id, $data)
    {
        $this->CRUDmodels->update('product',
            ['ProductName' => $data['product_name'],
                'price' => $data['price'],
                'description' => $data['description'],
                'img_link' => $data['img_link'],
                'img_list' => $data['img_list'],
                'discount' => $data['discount'],
            ], ['product_id' => $id]);
    }
}