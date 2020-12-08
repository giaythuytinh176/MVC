<?php

namespace MVC\libs;

use MVC\controllers\ToolControllers;

class Session
{
    public static function init()
    {
        @session_start();
    }

    public static function DeleteProductRemoved()
    {
        if (!empty($_SESSION['cart_items'][0])) {
            unset($_SESSION['cart_items'][0]);
        }
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
        unset($_SESSION["username"]);
        unset($_SESSION["password"]);
        unset($_SESSION["loggedIn"]);

        if (isset($_COOKIE['username'])) {
            \MVC\libs\Cookie::unset_cookie("username");
        }
        if (isset($_COOKIE['password'])) {
            \MVC\libs\Cookie::unset_cookie("password");
        }
        //session_destroy();
    }
}