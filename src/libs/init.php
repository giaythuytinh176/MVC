<?php

namespace MVC\libs;

use MVC\controllers\ToolControllers;
use MVC\libs\UserAccess;
use MVC\libs\Session;

class init
{
    public static function start()
    {
        //ob_start();
        \MVC\libs\Session::init();
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        if (empty($_SESSION['lang'])) $_SESSION['lang'] = "vietnamese";
        UserAccess::isLogin();
        UserAccess::reSetSession();
        UserAccess::isUserDeleteFromDB();
        UserAccess::deleteAloneCookie();
        Session::DeleteProductRemoved();
        error_reporting(E_ALL);
        ini_set("display_errors", 1);
    }
}