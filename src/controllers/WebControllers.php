<?php

namespace MVC\controllers;

use MVC\Models\UserModels;

class WebControllers
{
    //private $studentmodels;
    private $usermodels;

    public function __construct()
    {
        //$this->studentmodels = new StudentModels();
        $this->usermodels = new UserModels();
    }

    public function homepage()
    {
        echo 1111;
        //$this->view("homepage");
    }

    public function loginControllers()
    {
        if (!empty($_POST['register-form-submit']) && $_POST['register-form-submit'] == "register") {
            $checkUSer = \MVC\libs\CreateUser::checkCreateUser();
            if (!empty($checkUSer['errors'])) {
                $this->view("index/login-register", [$checkUSer]);
            } else {
                $checkUSer = $this->usermodels->addUser();
                $this->view("index/login-register", [$checkUSer]);
            }
        } elseif (!empty($_POST['login-form-submit']) && $_POST['login-form-submit'] == "login") {
            $loginUser = \MVC\libs\LoginUser::checkLoginUser();
            if (!empty($loginUser['errors'])) {
                $this->view("index/login-register", [$loginUser]);
            } else {
                $loginUser = $this->usermodels->validateUser();
                if (empty($loginUser['errors'])) {
                    \MVC\libs\Cookie::setRememberMe();
                    $this->view("index/login-register", [$loginUser]);
                } else $this->view("index/login-register", [$loginUser]);
            }
        } else {
            $this->view("index/login-register");
        }
    }

    public function getAllStudent()
    {
        $studentlist = $this->studentmodels->getListStudent();
        $this->view("ListStudent", [$studentlist]);
    }

    public function editStudent($params)
    {
        if (!empty($_POST['btn'])) {
            $editmodels = $this->studentmodels->updateModels($params);
            $this->view("Student", [$editmodels, $params, "Updated"]);
        } else {
            $editmodels = $this->studentmodels->editModels($params);
            $this->view("edit", [$editmodels, $params]);
        }
    }

    public function deleteStudent($params)
    {
        if (!empty($_POST['btn'])) {
            $delmodels = $this->studentmodels->deleteModels($params);
            $this->view("Student", [$delmodels, $params, "Deleted"]);
        } else {
            $this->view("delete", ["", $params]);
        }
    }

    public function addStudent()
    {
        if (!empty($_POST['btn'])) {
            $addmodels = $this->studentmodels->addModel();
            $this->view("Student", [$addmodels, [], "Added"]);
        } else {
            $addmodels = $this->studentmodels->getStudentColumModels();
            $this->view("add", [$addmodels]);
        }
    }

    public function errorPage($head = "")
    {
        $this->view("404", ["", "", $head]);
    }

    public function view($v, $data = [])
    {
        require_once "./src/views/pages/$v.php";
    }
}