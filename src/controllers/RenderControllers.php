<?php

namespace MVC\controllers;

class RenderControllers
{
    public static function redirectAfterSecondPage($page = "", $second = 1)
    {
        if (headers_sent()) {
            die("Redirect to new page ... <a href='" . \MVC\controllers\UrlControllers::url($page) . "'></a> <meta http-equiv=\"Refresh\" content=\"1; url=" . \MVC\controllers\UrlControllers::url($page) . "\">");
        } else {
            exit(header("Location: " . \MVC\controllers\UrlControllers::url($page)));
        }
    }

    public function homepage()
    {
        $this->view("index/index");
    }

    public function view($v, $data = [], $path = "")
    {
        if (!empty($path)) {
            require_once "./src/admin/views/pages/$v.php";
        } else {
            require_once "./src/views/pages/$v.php";
        }
        //exit();
    }

    public function errorPage($head = "")
    {
        $this->view("error/404", ["", "", $head]);
    }

    public function redirectPage($page = "")
    {
        header("Location: " . UrlControllers::url($page));
        exit();
    }
}
