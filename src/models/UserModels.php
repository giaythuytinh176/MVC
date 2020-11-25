<?php

namespace MVC\Models;

use MVC\libs\Database;

class UserModels
{
    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance();
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

    public function getAllInfoOfOneUserbyPwd($password)
    {
        $sql = "SELECT * FROM User WHERE password='" . $password . "' LIMIT 1";
        $stmt = $this->db->query($sql);
        $data = $stmt->fetch($this->db::FETCH_ASSOC);
        if (empty($data)) {
            return ["errors" => ["Username not found."]];
        } else {
            return $data;
        }
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

    public function addSessionUser(string $ss)
    {
        $sql = "UPDATE User SET last_session='$ss' WHERE username='" . $_POST['login-form-username'] . "' LIMIT 1";
        $stmt = $this->db->query($sql);
        $data = $stmt->fetch($this->db::FETCH_ASSOC);
        if (empty($data)) {
            return ["errors" => ["Username not found or can not find session."]];
        } else {
            return ["Added successful."];
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

    public function isNotExistUser($user)
    {
        $sql = "SELECT * FROM User WHERE username='" . $user . "' LIMIT 1";
        $stmt = $this->db->query($sql);
        $data = $stmt->fetch($this->db::FETCH_ASSOC);
        if (empty($data)) {
            return ["errors" => ["Username not found."]];
        }
    }

    public function checkUserExist($user)
    {
        $sql = "SELECT * FROM User WHERE username='" . $user . "' LIMIT 1";
        $stmt = $this->db->query($sql);
        $data = $stmt->fetch($this->db::FETCH_ASSOC);
        if (!empty($data)) {
            return ["errors" => ["Username existed."]];
        }
    }

    public function checkEmailExist($email)
    {
        $sql = "SELECT * FROM User WHERE email='" . $email . "' LIMIT 1";
        $stmt = $this->db->query($sql);
        $data = $stmt->fetch($this->db::FETCH_ASSOC);
        if (!empty($data)) {
            return ["errors" => ["Email existed."]];
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
        $arr['last_ip'] = \MVC\libs\IP::getUserIpAddr();
        $arr['last_session'] = null;
        $arr['user_agent'] = $_SERVER['HTTP_USER_AGENT'];
        $arr['last_user_agent'] = null;

        $userExist = $this->checkUserExist($arr['username']);
        if (!empty($userExist['errors'])) return $userExist;
        $emailExist = $this->checkEmailExist($arr['email']);
        if (!empty($emailExist['errors'])) return $emailExist;

        $getColUser = $this->getUserColumModels();
        unset($getColUser[0]);
        $getColUser = array_values($getColUser);
        $sql = "INSERT INTO User (" . implode(", ", array_values($getColUser)) . ") VALUE (:" . implode(", :", array_values($getColUser)) . ")";
        $stmt = $this->db->prepare($sql);
        $stmt->execute($arr);
        return ["Added successfully."];
    }
}