<?php

namespace MVC\controllers;

use MVC\models\UserModels;

class UserControllers
{
    protected $uc;

    public function __construct()
    {
        $this->uc = new UserModels();
    }

    public function getAllInfoOfOneUserbyUserName($user)
    {
        return $this->uc->getAllInfoOfOneUserbyUserName($user);
    }

    public function getAllInfoUserbyID($user_id)
    {
        return $this->uc->getAllInfoUserbyID($user_id);
    }
}