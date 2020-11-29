<?php

namespace MVC\admin\controllers;

use MVC\controllers\RenderControllers;

class UrlControllers
{
    protected $controllers = "homepage";
    protected $action = "index";
    protected $params = [];
    private $render;

    public function index()
    {
        $this->render = new RenderControllers();
        $this->ParseActionsParams(\MVC\controllers\UrlControllers::parseURL());
        $this->parseController();
    }

    public function parseController()
    {
        switch ($this->controllers) {
            case "admin":
                switch ($this->action) {
                    case "products":
                        $params = !empty($this->params[0]) ? $this->params[0] : null;
                        switch ($params) {
                            default:
                                if (file_exists("./src/admin/views/pages/product/$params.php") == true) {
                                    $this->render->view("product/$params", [$this->params], "./src/admin/views/pages/");
                                } else {
                                    $this->render->view("product/products", [], "./src/admin/views/pages/");
                                }
                        }
                        break;
                    case "ajax":
                        $class = "\MVC\admin\controllers\\" . ucfirst($this->action) . "Controllers";
                        $action = new $class();
                        $params = !empty($this->params[0]) ? $this->params[0] : null;
                        if (method_exists($action, $params)) {
                            $action->$params();
                        }
                        break;
                    case "category":
                        $params = !empty($this->params[0]) ? $this->params[0] : null;
                        switch ($params) {
                            default:
                                if (file_exists("./src/admin/views/pages/category/$params.php") == true) {
                                    $this->render->view("category/$params", [$this->params], "./src/admin/views/pages/");
                                } else {
                                    $this->render->view("category/categories", [], "./src/admin/views/pages/");
                                }
                        }
                        break;
                    default :
                        $this->render->view("index/index", [], "./src/admin/views/pages/");
                }
                break;

            default:
                $this->render->errorPage();
        }
    }

    public function ParseActionsParams($parseurl): void
    {
        if (!empty($parseurl[0])) {
            $this->controllers = $parseurl[0];
        }
        if (!empty($parseurl[1])) {
            $this->action = $parseurl[1];
        }
        if (!empty($parseurl[0]) && !empty($parseurl[1]) && !empty($parseurl[2])) {
            unset($parseurl[0]);
            unset($parseurl[1]);
            $this->params = array_values($parseurl);
        }
    }
}