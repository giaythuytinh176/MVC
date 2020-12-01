<?php

namespace MVC\models;

use MVC\controllers\ToolControllers;
use PDO;

class CRUDModels
{
    private $crud;

    public function __construct()
    {
        $this->crud = \MVC\libs\Database::getInstance();
    }

    public function select($sql, $data = array(), $fetch = "", $condition2 = '' , $fetchStyle = PDO::FETCH_ASSOC)
    {
        $stmt = $this->crud->prepare($sql . $this->condition($data) . $condition2);
        foreach ($data as $key => &$value) {
            $stmt->bindParam(':' . $key, $value, PDO::PARAM_STR);
        }
        $stmt->execute();
        if ($fetch == "All") {
            return $stmt->fetchAll($fetchStyle);
        } else {
            return $stmt->fetch($fetchStyle);
        }
    }

    public function condition($data = array())
    {
        $condition = '';
        if (!empty($data)) {
            $list_condition = [];
            foreach (array_keys($data) as $val) {
                $list_condition[$val] = ":{$val}";
            }
            if (count($data) == 1) {
                $condition .= " WHERE " . urldecode(http_build_query($list_condition));
            } else {
                $condition .= " WHERE " . urldecode(http_build_query($list_condition, '', ' AND '));
            }
        }
        return $condition;
    }
}