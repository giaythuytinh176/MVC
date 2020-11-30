<?php

namespace MVC\libs;

class HashPassword
{
    public static function getHashPassword($password)
    {
        return password_hash($password, PASSWORD_DEFAULT);
    }

    public static function verifyPassword($password, $hashed_password)//$hashed_password from DB
    {
        if (password_verify($password, $hashed_password)) {
            return true;
        } else return false;
    }
}