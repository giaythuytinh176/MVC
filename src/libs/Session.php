<?php

namespace MVC\libs;

class Session
{
    public static function init()
    {
        @session_start();
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        \MVC\libs\UserAccess::isLogin();
        \MVC\libs\UserAccess::reSetSession();
    }

    public static function set($key, $value)
    {
        $_SESSION[$key] = $value;
    }

    public static function get($key)
    {
        if (isset($_SESSION[$key])) {
            return $_SESSION[$key];
        } else {
            return FALSE;
        }
    }

    public static function unset($key)
    {
        if (isset($_SESSION[$key])) {
            unset($_SESSION[$key]);
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public static function destroy()
    {
        session_destroy();
        unset($_COOKIE['username']);
        unset($_COOKIE['password']);
        unset($_SESSION["username"]);
        unset($_SESSION["password"]);
        setcookie("username", "", time() - 3600);
        setcookie("password", "", time() - 3600);
    }
}