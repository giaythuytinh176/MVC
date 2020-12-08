<?php

namespace MVC\controllers;

use \MVC\libs\Languages;
use \MVC\config\config;
use \MVC\controllers\APIControllers;

/**
 * Class UrlControllers
 * @package MVC\controllers
 */
class UrlControllers
{
    protected $controllers = "homepage";
    protected $action = "index";
    protected $params = [];

    public function index()
    {
        static::ParseActionsParams(self::parseURL());
        static::parseController();
    }

    /**
     *
     */
    public function parseController()
    {
        switch ($this->controllers) {
            case "admin":
                (new \MVC\admin\controllers\UrlControllers)->index();
                break;
            case "search":
                (new RenderControllers)->view("index/search");
                break;

            case "shop":
                switch ($this->action) {
                    case "login":
                        (new LoginControllers)->loginControllers($this->params);
                        break;
                    case "cart":
                        $param = !empty($this->params[0]) ? $this->params[0] : "";
                        switch ($param) {
                            case "delete" :
                                if (!empty($this->params) && (is_numeric($this->params[1]) == true) && !empty($_SESSION['cart_items'])) {
                                    (new CartControllers)->removeItems($this->params);
                                }
                                break;
                        }
                        if (empty($_REQUEST['btn']) || empty($_REQUEST['qty'])) {
                            (new CartControllers)->cartView();
                            break;
                        } elseif (!empty($_REQUEST['btn']) && !empty($_REQUEST['qty'])) {
                            (new CartControllers)->AddProductToCart($_REQUEST);
                            break;
                        }
                        break;
                    case "checkout":
                        (new CheckoutControllers)->checkoutView();
                        break;
                    default:
                        (new RenderControllers)->view("category/shop");
                }
                break;
            case "lang":
                switch ($this->action) {
                    default:
                        if (in_array($this->action, ["vietnamese", "english", "french"]) == true) $lang = $this->action;
                        else $lang = "vietnamese";
                        (new Languages)->setLang($lang);
                }
                break;
            case "category":
                if (empty((new CategoryControllers)->getAllListcategory()['errors'])) {
                    $list_parent_category = [];
                    foreach ((new CategoryControllers)->getAllListcategory() as $value) {
                        $list_parent_category[] = $value['category_code'];
                    }
                    if (in_array($this->action, $list_parent_category) == true) {
                        foreach ($list_parent_category as $val) {
                            if ($val == $this->action) {
                                if (!empty($this->params[1]) && self::isNumberofProductBeforeMinus($this->params[1]) == true) {
                                    (new ProductControllers)->getDetailElementbyID($this->params);
                                } elseif (!empty($this->params[1]) && $this->isSubCategory($this->params[1]) == true) {
                                    (new ProductControllers)->getAllElementbySubCateID($this->action, $this->params);
                                } elseif (!empty($this->params[0])) {
                                    (new ProductControllers)->getListProductinMainCategory($this->action, $this->params);
                                } else {
                                    (new CategoryControllers)->getAllCategoryView($this->action);
                                }
                                break;
                            }
                        }
                    } else {
                        (new RenderControllers)->errorPage();
                    }
                }
                break;
            case "api":
                APIControllers::api($this->action, $this->params);
                break;

            case "homepage":
                (new RenderControllers)->homepage();
                break;

            default:
                (new RenderControllers)->errorPage();
        }
    }

    /**
     * @param $number
     * @return bool
     */
    public static function isNumberofProductBeforeMinus($number)// kiem tra chu dau tien co phai so ko
    {
        $NumberBeforeMinus = current(explode("-", $number));
        if (ctype_digit($NumberBeforeMinus) == true) {
            return true;
        }
        return false;
    }

    /**
     * @param $codeSUB
     * @return bool
     *
     */
    public function isSubCategory($codeSUB)
    {
        $isSubCate = (new CategoryControllers)->getDetailElementbyCodeSub($codeSUB);
        if (empty($isSubCate['errors'])) {
            return true;
        }
        return false;
    }

    /**
     * @return false|string[]
     */
    public static function parseURL()
    {
        if (!empty($_GET['url'])) {
            //return explode("/", filter_var(trim(strtolower($_GET['url']), "/")));
            return explode('/', filter_var(rtrim(strtolower($_GET['url']), '/'), FILTER_SANITIZE_URL));
        }
    }

    /**
     * @param string $q
     * @param string $p
     * @return string
     */
    public static function url($q = "", $p = config::BASE_FOLDER)
    {
        return sprintf(
            "%s://%s/%s" . (($q == "") ? "" : "/%s"),
            isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
            $_SERVER['SERVER_NAME'], $p, $q
        );
    }

    /**
     * @param $parseurl
     */
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
