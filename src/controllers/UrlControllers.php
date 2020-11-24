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
        $parseurl = self::parseURL();

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
                            (new CartControllers())->removeItems($this->params);
                        }
                        if (empty($_REQUEST['btn']) || empty($_REQUEST['qty'])) {
                            (new CartControllers())->cartView();
                            break;
                        } elseif (!empty($_REQUEST['btn']) && !empty($_REQUEST['qty'])) {
                            (new CartControllers())->AddProductToCart($_REQUEST);
                            break;
                        }
                    case "checkout":
                        (new CheckoutControllers())->checkoutView();
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
                            (new \MVC\controllers\CategoryControllers())->getAllCategoryView($this->action);
                        } elseif (!empty($this->params[1]) && self::isNumberofProductBeforeMinus($this->params[1]) == true) {
                            (new \MVC\controllers\ProductControllers())->getDetailElementbyID($this->action, $this->params);
                        } elseif (!empty($this->params[1]) && self::isSubCategory($this->params[1]) == true) {
                            (new \MVC\controllers\ProductControllers())->getAllElementbySubCateID($this->action, $this->params);
                        } elseif (!empty($this->params[0])) {
                            (new \MVC\controllers\ProductControllers())->getListProductinMainCategory($this->action, $this->params);
                        }
                        break;

                    default:
                        $this->render->redirectPage();
                }
            case "api":
                \MVC\controllers\APIControllers::api($this->action, $this->params);
                break;

            case "homepage":
                $this->render->homepage();
                break;

            default:
                $this->render->errorPage();
        }
    }

    public static function isNumberofProductBeforeMinus($number)// kiem tra chu dau tien co phai so ko
    {
        $NumberBeforeMinus = current(explode("-", $number));
        if (ctype_digit($NumberBeforeMinus) == true) {
            return true;
        }
        return false;
    }

    public static function isSubCategory($character)// only a-zA_Z_- , not number include
    {
        $pattern = "/^[a-zA-Z\_\-]+$/";
        if (preg_match($pattern, $character)) {
            return true;
        }
        return false;
    }

    public static function parseURL()
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
