<?php

namespace MVC\admin\Controllers;

use MVC\admin\Models\ProductModels;
use MVC\controllers\ToolControllers;

class ProductController extends ProductModels
{
    public function getAllProduct()
    {
        return parent::getAllProduct();
    }

    public function getAllProductbyView()
    {
        return parent::getAllProductbyView();
    }

    public function getAllCateOfProductbyID($id)
    {
        return parent::getAllCateOfProductbyID($id);
    }


    public function UpdateProductbyID($id, $data)
    {
        return parent::UpdateProductbyID($id, $data);
    }

}