<?php

namespace MVC\controllers;

class renderControllers
{
    public function homepage()
    {
        $this->view("index/index");
    }

    public function errorPage($head = "")
    {
        $this->view("error/404", ["", "", $head]);
    }

    public function view($v, $data = [])
    {
        require_once "./src/views/pages/$v.php";
        exit();
    }

    public function redirectPage($page = "")
    {
        header("Location: " . UrlControllers::url($page));
        exit();
    }
}