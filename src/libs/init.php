<?php

namespace MVC\libs;

class init
{
    public static function start()
    {
        //ob_start();
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        \MVC\libs\UserAccess::isLogin();
        \MVC\libs\UserAccess::reSetSession();
        \MVC\libs\UserAccess::isUserDeleteFromDB();
        \MVC\libs\UserAccess::deleteAloneCookie();
        error_reporting(E_ALL);
        ini_set("display_errors", 1);
    }
}