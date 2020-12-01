<?php

namespace MVC\models;

use MVC\controllers\ToolControllers;
use \MVC\models\CRUDModels;

class UserModels
{
    private $CRUDmodels;

    public function __construct()
    {
        $this->CRUDmodels = new CRUDModels();
    }

    public function getAllInfoOfOneUserbyPwd($password)
    {
        $data = $this->CRUDmodels->select("user", ['password' => $password]);
        if (empty($data)) {
            return ["errors" => ["Username not found."]];
        } else {
            return $data;
        }
    }

    public function getPasswordHashFromUsername($username)
    {
        $data = $this->CRUDmodels->select("user", ['username' => $username]);
        if (empty($data)) {
            return ["errors" => ["Username not found."]];
        } else {
            return $data['password'];
        }
    }

    public function addSessionUser(string $ss)
    {
        $data = $this->CRUDmodels->update("User", ['last_session' => $ss], ['username' => $_POST['login-form-username']]);
        if (empty($data)) {
            return ["errors" => ["Username not found or can not find session."]];
        } else {
            return ["Added successful."];
        }
    }

    public function validateUser()
    {
        $data = $this->CRUDmodels->select("user", ['username' => $_POST['login-form-username']]);
        if (empty($data)) {
            return ["errors" => ["Username not found."]];
        } else {
            if (\MVC\libs\HashPassword::verifyPassword($_POST['login-form-password'], $data['password']) == true) {
                return ["Login successful."];
            } else return ["errors" => ["Password is incorrect."]];
        }
    }

    public function isNotExistUser($user)
    {
        $data = $this->CRUDmodels->select("user", ['username' => $user]);
        if (empty($data)) {
            return ["errors" => ["Username not found."]];
        }
    }

    public function checkUserExist($user)
    {
        $data = $this->CRUDmodels->select("user", ['username' => $user]);
        if (!empty($data)) {
            return ["errors" => ["Username existed."]];
        }
    }

    public function checkEmailExist($email)
    {
        $data = $this->CRUDmodels->select("user", ['email' => $email]);
        if (!empty($data)) {
            return ["errors" => ["Email existed."]];
        }
    }

    public function addUser()
    {
        $arr = [];
        $arr['username'] = $_POST['register-form-username'];
        $arr['password'] = \MVC\libs\HashPassword::getHashPassword($_POST['register-form-password']);
        $arr['email'] = $_POST['register-form-email'];
        $arr['fullname'] = $_POST['register-form-name'] ? $_POST['register-form-name'] : "";
        $arr['phone'] = $_POST['register-form-phone'] ? $_POST['register-form-phone'] : "";
        $arr['remote_addr'] = $_SERVER['REMOTE_ADDR'];
        $arr['reg_date'] = date("Y-m-d H:i:s");
        $arr['last_login'] = null;
        $arr['last_ip'] = \MVC\libs\IP::getUserIpAddr();
        $arr['last_session'] = null;
        $arr['user_agent'] = $_SERVER['HTTP_USER_AGENT'];
        $arr['last_user_agent'] = null;
        $arr['is_admin'] = 0;

        $userExist = $this->checkUserExist($arr['username']);
        if (!empty($userExist['errors'])) return $userExist;
        $emailExist = $this->checkEmailExist($arr['email']);
        if (!empty($emailExist['errors'])) return $emailExist;

        $this->CRUDmodels->insert("user", $arr);
        return ["Added successfully."];
    }
}