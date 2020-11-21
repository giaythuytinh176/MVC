<?php

namespace MVC\controllers;

class UrlControllers extends CategoryControllers
{
    protected $controllers = "homepage";
    protected $action = "index";
    protected $params = [];
    private $webcontrollers;

    public function index()
    {
        $this->webcontrollers = new WebControllers();
        $parseurl = $this->parseURL();

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
        $this->parseController();
    }

    public function parseController()
    {
        switch ($this->controllers) {
            case "shop":
                switch ($this->action) {
                    case "login":
                        (new LoginControllers())->loginControllers($this->params);
                        break;
                    case "cart":
                        (new CartControllers())->cartView($this->params);
                        break;
                    case "checkout":
                        (new CheckoutControllers())->checkoutView($this->params);
                        break;
                    default:
                        $this->webcontrollers->view("category/shop");
                }
            case "lang":
                switch ($this->action) {
                    case "vietnamese":
                        (new \MVC\libs\Languages())->setLang("vietnamese");
                        break;
                    case "english":
                        (new \MVC\libs\Languages())->setLang("english");
                        break;
                    case "french":
                        (new \MVC\libs\Languages())->setLang("french");
                        break;
                    default:
                        (new \MVC\libs\Languages())->setLang("vietnamese");
                }
            case "category":
                switch ($this->action) {
                    case "accessories":
                    case "telephone":
                    case "laptop":
                    case "smarthome":
                        if (empty($this->params)) {
                            $this->getAllCategoryView($this->action);
                        } elseif (!empty($this->params[2])) {
                            $this->getDetaiElementbyID($this->action, $this->params);
                        } elseif (!empty($this->params[1])) {
                            $this->getAllElementbyCateID($this->action, $this->params);
                        } elseif (!empty($this->params[0])) {
                            $this->getListProductinMainCategory($this->action, $this->params);
                        }
                        break;

                    default:
                        $this->webcontrollers->redirectPage();
                }
            //case "api":


            case "homepage":
                $this->webcontrollers->homepage();
                break;

            default:
                $this->webcontrollers->errorPage();
        }
    }

    public function parseURL()
    {
        if (!empty($_GET['url'])) {
            return explode("/", filter_var(trim(strtolower($_GET['url']), "/")));
        }
    }

    public static function url($q = "", $p = "MVC_shop_test")
    {
        return sprintf(
            "%s://%s/%s" . (($q == "") ? "" : "/%s"),
            isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
            $_SERVER['SERVER_NAME'], $p, $q
        );
    }
}
