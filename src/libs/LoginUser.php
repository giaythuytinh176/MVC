<?php

namespace MVC\libs;

use MVC\Models\UserModels;

class LoginUser
{
    public static function checkLoginUser()
    {
        $errors = [];

        $username = $_POST['login-form-username'];
        $password = $_POST['login-form-password'];

        $required_fields = ["login-form-username", "login-form-password"];
        foreach ($_POST as $key => $value) {
            if (empty($value) == true && in_array($key, $required_fields) == true) {
                $errors[] = strtoupper(str_replace("login-form-", "", $key)[0]) . str_replace(str_replace("login-form-", "", $key)[0], "", str_replace("login-form-", "", $key)) . " is a required field.";
            }
        }
        if (!empty($errors)) return ["errors" => $errors];

        $isExistUser = (new UserModels())->isNotExistUser($username);
        if (!empty($isExistUser['errors'])) return $isExistUser;

        if (strlen($password) < 6) {
            $errors[] = "Username is too short.";
        }
        if (strlen($password) < 6) {
            $errors[] = "Password is too short.";
        }
        if (empty($errors) == true) {
            return $_POST;
        } else {
            return ["errors" => $errors];
        }
    }

}