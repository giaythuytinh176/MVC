<?php

namespace MVC\controllers;

use MVC\libs\UserAccess;
use MVC\Models\UserModels;

class LoginControllers extends WebControllers
{
    public function loginControllers($params)
    {
        $this->logOut($params);
        if (UserAccess::isLogin() == true) {
            header("Location: " . \MVC\controllers\UrlControllers::url("homepage"));
        }
        if (!empty($_POST['register-form-submit']) && $_POST['register-form-submit'] == "register") {
            $this->regAcc($params);
        } elseif (!empty($_POST['login-form-submit']) && $_POST['login-form-submit'] == "login") {
            $this->logAcc($params);
        } else {
            $this->view("index/login-register");
        }
    }

    public function logAcc($params): void
    {
        $loginUser = \MVC\libs\LoginUser::checkLoginUser();
        if (!empty($loginUser['errors'])) {
            $this->view("index/login-register", [$loginUser]);
        } else {
            $loginUser = (new UserModels())->validateUser();
            if (empty($loginUser['errors'])) {
                \MVC\libs\Cookie::setRememberMe();
                \MVC\libs\Cookie::saveSession();
                $this->view("index/login-register", [$loginUser, (!empty($params[0]) ? $params[0] : [])]);
            } else $this->view("index/login-register", [$loginUser]);
        }
    }

    public function regAcc($params): void
    {
        $checkUSer = \MVC\libs\CreateUser::checkCreateUser();
        if (!empty($checkUSer['errors'])) {
            $this->view("index/login-register", [$checkUSer]);
        } else {
            $checkUSer = (new UserModels())->addUser();
            $this->view("index/login-register", [$checkUSer]);
        }
    }

    /**
     * @param $params
     */
    public function logOut($params): void
    {
        if (!empty($params[0]) && $params[0] == "logout") {
            $this->view("index/logout");
        }
    }
}