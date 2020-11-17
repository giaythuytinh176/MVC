<?php

namespace MVC\libs;

use MVC\controllers\ToolControllers;
use MVC\Models\UserModels;

class UserAccess extends UserModels
{
    public static function user_controller()
    {
        $isLogin = Session::get('loggedIn');
        if (!$isLogin) {
            \MVC\controllers\UrlControllers::url("shop/login");
        }
    }

    public static function isLogin()
    {
        $isLogined = Session::get('loggedIn');
        $isLoginU = Session::get('username');
        $isLoginP = Session::get('password');
        if (!empty($isLogined) && !empty($isLoginU) && !empty($isLoginP)) {
            return true;
        }
        return false;
    }

    public static function reSetSession()
    {
        if ((self::isLogin() == false) && !empty($_COOKIE['username']) && !empty($_COOKIE['password'])) {
            $passwordFromHashDB = (new self)->getPasswordHashFromUsername($_COOKIE['username']);
            if (sha1($passwordFromHashDB) === $_COOKIE['password']) {
                $_SESSION['username'] = $_COOKIE['username'];
                $_SESSION['password'] = $passwordFromHashDB;
                $_SESSION['loggedIn'] = 1;
            } else {
                Session::destroy();
            }
        }
    }

    public static function admin_controller()
    {
        $isLogin = Session::get('loggedIn_admin');
        if (!$isLogin) {
            header('location: ' . URL . 'admin/login');
            exit();
        }
    }
}
