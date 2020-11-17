<?php

namespace MVC\libs;

use MVC\controllers\ToolControllers;
use MVC\Models\UserModels;

class Cookie extends UserModels
{
    public static function setRememberMe()
    {
        $_SESSION['username'] = $_POST['login-form-username'];
        $_SESSION['password'] = (new self)->getPasswordHashFromUsername($_POST['login-form-username']);
        $_SESSION['loggedIn'] = 1;
        if (!empty($_POST['rememberme']) && $_POST['rememberme'] == 'on') {
            setcookie("username", $_POST['login-form-username'], time() + 3600 * 24);  /* expire in 1 day */
            setcookie("password", sha1((new self)->getPasswordHashFromUsername($_POST['login-form-username'])), time() + 3600 * 24);  /* expire in 1 day */
        }
    }
}