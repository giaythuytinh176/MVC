<?php

namespace MVC\controllers;

use MVC\libs\UserAccess;
use MVC\Models\UserModels;

class WebControllers
{
    private $usermodels;

    public function __construct()
    {
        $this->usermodels = new UserModels();
    }

    public function homepage()
    {
        $this->view("index/index");
    }

    public function loginControllers($params)
    {
        if (!empty($params[0]) && $params[0] == "logout") {
            $this->view("index/logout");
        }
        if (UserAccess::isLogin() == true) {
            header("Location: ".\MVC\controllers\UrlControllers::url("homepage"));
        }
        if (!empty($_POST['register-form-submit']) && $_POST['register-form-submit'] == "register") {
            $checkUSer = \MVC\libs\CreateUser::checkCreateUser();
            if (!empty($checkUSer['errors'])) {
                $this->view("index/login-register", [$checkUSer]);
            } else {
                $checkUSer = $this->usermodels->addUser();
                $this->view("index/login-register", [$checkUSer]);
            }
        } elseif (!empty($_POST['login-form-submit']) && $_POST['login-form-submit'] == "login") {
            $loginUser = \MVC\libs\LoginUser::checkLoginUser();
            if (!empty($loginUser['errors'])) {
                $this->view("index/login-register", [$loginUser]);
            } else {
                $loginUser = $this->usermodels->validateUser();
                if (empty($loginUser['errors'])) {
                    \MVC\libs\Cookie::setRememberMe();
                    $this->view("index/login-register", [$loginUser]);
                } else $this->view("index/login-register", [$loginUser]);
            }
        } else {
            $this->view("index/login-register");
        }
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