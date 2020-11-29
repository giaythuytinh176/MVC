<?php

namespace MVC\libs;

use MVC\controllers\ToolControllers;
use MVC\models\UserModels;

class Cookie extends UserModels
{
    public static function setRememberMe()
    {
        $_SESSION['username'] = $_POST['login-form-username'];
        $_SESSION['password'] = (new self)->getPasswordHashFromUsername($_POST['login-form-username']);
        $_SESSION['loggedIn'] = 1;
        if (!empty($_POST['rememberme']) && $_POST['rememberme'] == 'on') {
            setcookie("username", $_POST['login-form-username'], time() + 3600 * 24, "/");  /* expire in 1 day */
            setcookie("password", sha1((new self)->getPasswordHashFromUsername($_POST['login-form-username'])), time() + 3600 * 24, "/");  /* expire in 1 day */
        }
    }

    public static function saveSession()
    {
        // Save to Database
        $session_id = session_id();
        (new UserModels())->addSessionUser($session_id);
    }

    public static function unset_cookie($name)
    {
        $host = $_SERVER['HTTP_HOST'];
        $domain = explode(':', $host)[0];

        $uri = $_SERVER['REQUEST_URI'];
        $uri = rtrim(explode('?', $uri)[0], '/');

        if ($uri && !filter_var('file://' . $uri, FILTER_VALIDATE_URL)) {
            throw new Exception('invalid uri: ' . $uri);
        }

        $parts = explode('/', $uri);

        $cookiePath = '';
        foreach ($parts as $part) {
            $cookiePath = '/' . ltrim($cookiePath . '/' . $part, '//');
            setcookie($name, '', 1, $cookiePath);
            $_domain = $domain;
            do {
                setcookie($name, '', 1, $cookiePath, $_domain);
            } while (strpos($_domain, '.') !== false && $_domain = substr($_domain, 1 + strpos($_domain, '.')));
        }
    }
}