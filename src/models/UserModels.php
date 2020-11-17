<?php

namespace MVC\Models;

use MVC\controllers\ToolControllers;

class UserModels
{
    private $db;

    public function __construct()
    {
        $this->db = \MVC\libs\Database::getInstance();
    }

    public function getUserColumModels()
    {
        $sql = "SHOW COLUMNS FROM User";
        $stmt = $this->db->query($sql);
        $data = $stmt->fetchAll($this->db::FETCH_ASSOC);
        $arr = [];
        foreach ($data as $val) {
            $arr[] = $val['Field'];
        }
        return $arr;
    }

    function getUserIpAddr()
    {
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            //ip from share internet
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            //ip pass from proxy
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }

    public function getPasswordHashFromUsername($username)
    {
        $sql = "SELECT * FROM User WHERE username='" . $username . "' LIMIT 1";
        $stmt = $this->db->query($sql);
        $data = $stmt->fetch($this->db::FETCH_ASSOC);
        if (empty($data)) {
            return ["errors" => ["Username not found."]];
        } else {
            return $data['password'];
        }
    }

    public function validateUser()
    {
        $sql = "SELECT * FROM User WHERE username='" . $_POST['login-form-username'] . "' LIMIT 1";
        $stmt = $this->db->query($sql);
        $data = $stmt->fetch($this->db::FETCH_ASSOC);
        if (empty($data)) {
            return ["errors" => ["Username not found."]];
        } else {
            if (\MVC\libs\HashPassword::verifyPassword($_POST['login-form-password'], $data['password']) == true) {
                return ["Login successful."];
            } else return ["errors" => ["Password is incorrect."]];
        }
    }

    public function addUser()
    {
        unset($_POST['url']);

        $arr = [];
        $arr['fullname'] = $_POST['register-form-name'] ? $_POST['register-form-name'] : "";
        $arr['phone'] = $_POST['register-form-phone'] ? $_POST['register-form-phone'] : "";
        $arr['email'] = $_POST['register-form-email'];
        $arr['username'] = $_POST['register-form-username'];
        $arr['password'] = \MVC\libs\HashPassword::getHashPassword($_POST['register-form-password']);
        $arr['remote_addr'] = $_SERVER['REMOTE_ADDR'];
        $arr['reg_date'] = date("Y-m-d H:i:s");
        $arr['last_login'] = null;
        $arr['last_ip'] = $this->getUserIpAddr();
        $arr['last_session'] = null;
        $arr['user_agent'] = $_SERVER['HTTP_USER_AGENT'];
        $arr['last_user_agent'] = null;

        $sql = "SELECT * FROM User WHERE username='" . $arr['username'] . "' LIMIT 1";
        $stmt = $this->db->query($sql);
        $data = $stmt->fetch($this->db::FETCH_ASSOC);
        if (!empty($data)) {
            return ["errors" => ["Username existed."]];
        }

        $sql = "SELECT * FROM User WHERE email='" . $arr['email'] . "' LIMIT 1";
        $stmt = $this->db->query($sql);
        $data = $stmt->fetch($this->db::FETCH_ASSOC);
        if (!empty($data)) {
            return ["errors" => ["Email existed."]];
        }

        $getColUser = $this->getUserColumModels();
        unset($getColUser[0]);
        $getColUser = array_values($getColUser);
        $sql = "INSERT INTO User (" . implode(", ", array_values($getColUser)) . ") VALUE (:" . implode(", :", array_values($getColUser)) . ")";
        $stmt = $this->db->prepare($sql);
        $stmt->execute($arr);
        return ["Added successfully."];
    }


}