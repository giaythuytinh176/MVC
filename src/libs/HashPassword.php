<?php

namespace MVC\libs;

class HashPassword
{
    public static function getHashPassword($password)
    {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        return $hashed_password;
    }

    public static function verifyPassword($password, $hashed_password)//$hashed_password from DB
    {
        if (password_verify($password, $hashed_password)) {
            return true;
        } else return false;
    }
}