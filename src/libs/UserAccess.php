<?php

namespace MVC\libs;

use MVC\controllers\ToolControllers;
use MVC\models\UserModels;
use \MVC\controllers\UrlControllers;

class UserAccess extends UserModels
{
    public static function user_controller()
    {
        $isLogin = Session::get('loggedIn');
        if (!$isLogin) {
            UrlControllers::url("shop/login");
        }
    }

    public static function isUserDeleteFromDB()
    {
        if (!empty($_SESSION['username']) || !empty($_COOKIE['username'])) {
            $username = !empty($_SESSION['username']) ? $_SESSION['username'] : $_COOKIE['username'];
            $PwdHash = (new self)->getPasswordHashFromUsername($username);
            if (!empty($PwdHash['errors'])) {
                Session::destroy();
            }
        }
    }

    public static function deleteAloneCookie()
    {
        if ((!empty($_COOKIE['username']) && empty($_COOKIE['password']))
            || (empty($_COOKIE['username']) && !empty($_COOKIE['password']))) {
            Session::destroy();
        }
    }

    public static function isAdmin()
    {
        $isLogined = Session::get('loggedIn');
        $isLoginU = Session::get('username');
        $isLoginP = Session::get('password');
        if (!empty($_SESSION['AdminLogged']) && $_SESSION['AdminLogged'] == $isLoginP) {
            return true;
        }
        if (empty($_SESSION['AdminLogged'])) {
            $password = !empty($isLoginP) ? $isLoginP : $_COOKIE['password'];
            $dataUser = (new self)->getAllInfoOfOneUserbyPwd($password);
            if (!empty($dataUser['errors'])) {
                return false;
            }
            if ($dataUser['is_admin'] == 1) {
                $_SESSION['AdminLogged'] = $isLoginP;
                return true;
            }
        }
    }

    public static function reSetSession()
    {
        if ((self::isLogin() == false) && !empty($_COOKIE['username']) && !empty($_COOKIE['password'])) {
            $passwordFromHashDB = (new self)->getPasswordHashFromUsername($_COOKIE['username']);
            if (empty($passwordFromHashDB['errors']) && sha1($passwordFromHashDB) === $_COOKIE['password']) {
                $_SESSION['username'] = $_COOKIE['username'];
                $_SESSION['password'] = $passwordFromHashDB;
                $_SESSION['loggedIn'] = 1;
            } else {
                Session::destroy();
            }
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

    public static function admin_controller()
    {
        $isLogin = Session::get('loggedIn_admin');
        if (!$isLogin) {
            header('location: ' . URL . 'admin/login');
            exit();
        }
    }
}
