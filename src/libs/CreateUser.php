<?php

namespace MVC\libs;

use MVC\controllers\ToolControllers;

class CreateUser
{
    public static function checkCreateUser()
    {
        $errors = [];

        $email = $_POST['register-form-email'];
        $username = $_POST['register-form-username'];
        $password = $_POST['register-form-password'];
        $repassword = $_POST['register-form-repassword'];

        $required_fields = ["register-form-username", "register-form-email", "register-form-password", "register-form-repassword"];
        foreach ($_POST as $key => $value) {
            if (empty($value) == true && in_array($key, $required_fields) == true) {
                $errors[] = strtoupper(str_replace("register-form-", "", $key)[0]) . str_replace(str_replace("register-form-", "", $key)[0], "", str_replace("register-form-", "", $key)) . " is a required field.";
            }
        }
        if (!empty($errors)) return ["errors" => $errors];
        if (empty($errors) == true) {
            $username = filter_var($username, FILTER_SANITIZE_STRING);
            $email = strtolower($email);

            $blockedUsers = ["admin", "administrator", "root"];
            $worstPassword = ['123456', 'password', '12345678', 'qwerty', '12345', '123456789', 'football', '1234', '1234567', 'baseball', 'wellcome', '1234567890', 'abc123', '111111', '1qaz2wsx', 'dragon', 'master', 'monkey', 'letmein', 'login', 'princess', 'qwertyuiop', 'solo', 'starwars'];

            if (in_array(strtolower($username), $blockedUsers) == true) {
                $errors[] = "User blacklisted.";
            }
            if (strpos($username, "@") !== false) {
                $errors[] = "Username not allowed.";
            }

            // check user exist or not here

            if (filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
                $errors[] = "Invalid email.";
            }
            if (strlen($username) > 30) {
                $errors[] = "Username is too long.";
            }
            if (strlen($username) < 3) {
                $errors[] = "Username is too short.";
            }
            if (strlen($email) < 6) {
                $errors[] = "Email is too short.";
            }
            if (in_array($password, $worstPassword) == true) {
                $errors[] = "Bad password.";
            }
            if ($username == $password) {
                $errors[] = "Username can not same with password.";
            }
            if (strlen($password) < 6) {
                $errors[] = "Password is too short.";
            }
            if ($password !== $repassword) {
                $errors[] = "Passwords do not match.";
            }
        }

        if (empty($errors) == true) {
            return $_POST;
        } else {
            return ["errors" => $errors];
        }
    }
}