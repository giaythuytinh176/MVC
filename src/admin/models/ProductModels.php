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

    public function getAllProductbyView()
    {
        $data = $this->CRUDmodels->select("allcategoryproducts", [], '', 'All');
        if (empty($data)) {
            return ["errors" => "Product not found."];
        } else {
            return $data;
        }
    }

    public function getAllProduct()
    {
        $data = $this->CRUDmodels->select("product", [], '', 'All');
        if (empty($data)) {
            return ["errors" => "Product not found."];
        } else {
            return $data;
        }
    }

    public function getAllCateOfProductbyID($id)
    {
        $data = $this->CRUDmodels->select("allcategoryproducts", ['product_id' => $id]);
        if (empty($data)) {
            return ["errors" => "Product not found."];
        } else {
            return $data;
        }
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