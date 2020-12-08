<?php

namespace MVC\controllers;

use MVC\models\CategoryModels;
use MVC\models\SearchModels;

class SearchControllers
{
    protected $sm;

    public function __construct()
    {
        $this->sm = new SearchModels();
    }

    public function search()
    {
        $arr = ['ProductName' => $_POST['q']
            , 'category_parent' => $_POST['q']
            , 'parent_title' => $_POST['q']
            , 'category_title' => $_POST['q']
            , 'price' => $_POST['q']
            , 'description' => $_POST['q']
            , 'pc_code' => $_POST['q']
            , 'spc_codeSUB' => $_POST['q']
            , 'spc_title' => $_POST['q']
        ];
        $dataSQL = $this->sm->search($arr);
        if (empty($dataSQL)) {
            $dataSQL = ["errors" => "Search not found."];
        }
        return $dataSQL;
    }


}