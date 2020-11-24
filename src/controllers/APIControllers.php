<?php

namespace MVC\controllers;

class APIControllers
{
    public static function api($action, $params)
    {
        switch ($action) {


            default:
                $data = ["error" => "Invalid method {$action} or invalid request."];
                header("Content-type: application/json; charset=utf-8");
                echo json_encode($data, JSON_PRETTY_PRINT);
        }
    }
}