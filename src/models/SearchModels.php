<?php

namespace MVC\models;

use MVC\models\CRUDModels;

class SearchModels
{
    private $CRUDmodels;

    public function __construct()
    {
        $this->CRUDmodels = new CRUDModels();
    }

    public function search($data)
    {
        return $this->CRUDmodels->select("view_parentproduct_productcategory_subcategory", $data, "LIKE", 'All');
    }
}