<?php

namespace MVC\controllers;

class UrlControllers
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
//            for ($i = 2; $i < count($parseurl); $i++) {
//                $this->params[] = $parseurl[$i];
//            }
            // use 1 trong 2 cach deu duoc
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
                $this->parseAction();
                break;
            case "lang":
                $this->parseAction();
                break;
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
            return explode("/", filter_var(trim($_GET['url'], "/")));
        }
    }

    public function parseAction()
    {
        switch ($this->action) {
            case "login":
                if ($this->controllers == "shop") {
                    (new LoginControllers())->loginControllers($this->params);
                    break;
                }
            case "cart":
                if ($this->controllers == "shop") {
                    (new CartControllers())->cartView($this->params);
                    break;
                }
            case "checkout":
                if ($this->controllers == "shop") {
                    (new CheckoutControllers())->checkoutView($this->params);
                    break;
                }
            case "vietnamese":
                if ($this->controllers == "lang") {
                    (new \MVC\libs\Languages())->setLang("vietnamese");
                    break;
                }
            case "english":
                if ($this->controllers == "lang") {
                    (new \MVC\libs\Languages())->setLang("english");
                    break;
                }
            case "french":
                if ($this->controllers == "lang") {
                    (new \MVC\libs\Languages())->setLang("french");
                    break;
                }


            default:
                $this->webcontrollers->errorPage();
        }
    }

    public static function url($q = "homepage", $p = "MVC_shop_test")
    {
        return sprintf(
            "%s://%s/%s/%s",
            isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
            $_SERVER['SERVER_NAME'], $p, $q
        );
    }
}
