<?php

namespace MVC\admin\controllers;

class UrlControllers
{
    protected $controllers = "homepage";
    protected $action = "index";
    protected $params = [];
    private $render;

    public function index()
    {
        $this->render = new \MVC\controllers\RenderControllers();
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
//                            case "edit":
//                                $this->render->view("product/edit", [$this->params], "./src/admin/views/pages/");
//                                break;
//                            case "action":
//                                $this->render->view("product/action", [$this->params], "./src/admin/views/pages/");
//                                break;
//                            default:
//                                $this->render->view("product/products", [], "./src/admin/views/pages/");
//                                break;
                            default:
                                if (file_exists("./src/admin/views/pages/product/$params.php") == true) {
                                    $this->render->view("product/$params", [$this->params], "./src/admin/views/pages/");
                                } else {
                                    $this->render->view("product/products", [], "./src/admin/views/pages/");
                                }
                                break;
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

                    default :
                        $this->render->view("index/index", [], "./src/admin/views/pages/");
                        break;
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