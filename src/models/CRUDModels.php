<?php

namespace MVC\models;

use MVC\controllers\ToolControllers;
use PDO;
use MVC\libs\Database;

/**
 * Class CRUDModels
 * @package MVC\models
 */
class CRUDModels extends Database
{
    private $crud;

    /**
     * CRUDModels constructor.
     */
    public function __construct()
    {
        $this->crud = parent::getInstance();
    }

    /**
     * @param string $table
     * @param array $where
     * @param string $like
     * @param string $fetchType
     * @param int $fetchMode
     * @return mixed
     */
    public function select(string $table, $where = array(), string $like = "", string $fetchType = "", int $fetchMode = PDO::FETCH_ASSOC)
    {
        if (empty($where)) {
            $stmt = $this->crud->prepare("SELECT * FROM $table");
        } else {
            $stmt = $this->crud->prepare("SELECT * FROM $table WHERE {$this->conditionToString($where, $like)}");
            if ($like == 'LIKE') {
                foreach ($where as $key => $value) {
                    $stmt->bindValue(":$key", "%{$value}%");
                }
            } else {
                foreach ($where as $key => &$value) {
                    $stmt->bindParam(":$key", $value);
                }
            }
        }
        $stmt->execute();
        $fetch = "fetch$fetchType";
        return $stmt->$fetch($fetchMode);
    }

    /**
     * @param array $data
     * @param string $like
     * @return string/**
     */
    public function conditionToString(array $data = array(), string $like = '')
    {
        $condition = '';
        if (!empty($data)) {
            $list_condition = [];
            foreach (array_keys($data) as $val) {
                $list_condition[] = "{$val}" . (($like == 'LIKE') ? "LIKE" : "=") . ":{$val}";
            }
            $condition .= (sizeof($data) == 1) ? $list_condition[0] : implode(" AND ", $list_condition);
        }
        return $condition;
    }

    /**
     * @param string $sql
     * @param array $where
     * @param string $fetchType
     * @param int $fetchMode
     * @return mixed
     */
    public function select2(string $sql, $where = array(), string $fetchType = "", int $fetchMode = PDO::FETCH_ASSOC)
    {
        if (empty($where)) {
            $stmt = $this->crud->prepare("$sql");
        } else {
            $stmt = $this->crud->prepare("$sql WHERE {$this->conditionToString($where)}");
            foreach ($where as $key => &$value) {
                $stmt->bindParam(":$key", $value);
            }
        }
        $stmt->execute();
        $fetch = "fetch$fetchType";
        return $stmt->$fetch($fetchMode);
    }

    /**
     * @param string $table
     * @param array $data
     * @return bool
     */
    public function insert(string $table, array $data)
    {// ko can insert field auto-increment
        ksort($data);
        $fieldkey = implode(', ', array_keys($data));
        $fieldvalue = ':' . implode(', :', array_keys($data));
        $stmt = $this->crud->prepare("INSERT INTO $table ($fieldkey) VALUES ($fieldvalue)");
        foreach ($data as $key => &$value) {
            switch (gettype($value)) {
                case 'integer':
                case 'double':
                    $stmt->bindParam(":$key", $value, PDO::PARAM_INT);
                    break;
                case 'boolean':
                    $stmt->bindParam(":$key", $value, PDO::PARAM_BOOL);
                    break;
                case 'NULL':
                    $stmt->bindParam(":$key", $value, PDO::PARAM_NULL);
                    break;
                default:
                    $stmt->bindParam(":$key", $value, PDO::PARAM_STR);
            }
        }
        return $stmt->execute();
    }

    /**
     * @param string $table
     * @param array $data
     * @return string
     */
    public function insertid(string $table, array $data)
    {
        ksort($data);
        $fieldkey = implode(', ', array_keys($data));
        $fieldvalue = ':' . implode(', :', array_keys($data));
        $stmt = $this->crud->prepare("INSERT INTO $table ($fieldkey) VALUES ($fieldvalue)");
        foreach ($data as $key => &$value) {
            $stmt->bindParam(":$key", $value);
        }
        $stmt->execute();
        $id = $this->crud->lastInsertId();
        return $id;
    }

    /**
     * @param string $table
     * @param array $data
     * @param array $where
     * @return bool
     */
    public function update(string $table, array $data, array $where)
    {
        ksort($data);
        $fieldDetails = "";
        foreach ($data as $key => $value) {
            $fieldDetails .= " `$key`=:$key ,";
        }
        $fieldDetails = rtrim($fieldDetails, ' ,');
        $fieldWhere = $this->conditionToString($where);
        $stmt = $this->crud->prepare("UPDATE $table SET $fieldDetails WHERE $fieldWhere");
        foreach ($data as $k => &$val) {
            $stmt->bindParam(":$k", $val);
        }
        foreach ($where as $kw => &$valw) {
            $stmt->bindParam(":$kw", $valw);
        }
        return $stmt->execute();
    }

    /**
     * @param string $table
     * @param array $where
     * @param int $limit
     * @return bool
     */
    public function delete(string $table, array $where, int $limit = 1)
    {
        $fieldWhere = $this->conditionToString($where);
        $stmt = $this->crud->prepare("DELETE FROM $table WHERE $fieldWhere LIMIT $limit");
        foreach ($where as $k => &$val) {
            $stmt->bindParam(":$k", $val);
        }
        return $stmt->execute();
    }
}
