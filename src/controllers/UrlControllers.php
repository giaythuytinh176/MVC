<?php

namespace MVC\controllers;

class UrlControllers
{
    protected $controllers = "homepage";
    protected $action = "index";
    protected $params = [];
    private $render;

    public function index()
    {
        $this->render = new renderControllers();
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
                        if (!empty($this->params) && is_numeric($this->params[0]) == true && !empty($_SESSION['cart_items'])) {
                            (new CartControllers())->removeItems($this->action, $this->params);
                        }
                        if (empty($_REQUEST['btn']) || empty($_REQUEST['qty']) || empty($_REQUEST['product_id']) || empty($_REQUEST['price'])) {
                            (new CartControllers())->cartView($this->params);
                            break;
                        } elseif (!empty($_REQUEST['btn']) && !empty($_REQUEST['qty']) && !empty($_REQUEST['product_id']) && !empty($_REQUEST['price'])) {
                            (new CartControllers())->AddProductToCart($this->action, $this->params, $_REQUEST);
                            break;
                        }
                    case "checkout":
                        (new CheckoutControllers())->checkoutView($this->params);
                        break;
                    default:
                        $this->render->view("category/shop");
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
                            (new \MVC\controllers\ProductControllers())->getListProductinMainCategory($this->action, $this->params);
                        }
                        break;

                    default:
                        $this->render->redirectPage();
                }
            case "api"://Hoan thien cuoi


            case "homepage":
                $this->render->homepage();
                break;

            default:
                $this->render->errorPage();
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
