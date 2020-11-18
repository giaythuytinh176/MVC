<?php

namespace MVC\controllers;


class WebControllers
{
    public function homepage()
    {
        $this->view("index/index");
    }

    public function errorPage($head = "")
    {
        $this->view("404", ["", "", $head]);
    }

    public function view($v, $data = [])
    {
        require_once "./src/views/pages/$v.php";
    }
}