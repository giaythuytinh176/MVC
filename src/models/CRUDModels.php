<?php

namespace MVC\models;

use MVC\controllers\ToolControllers;
use PDO;
use MVC\libs\Database;

class CRUDModels extends Database
{
    private $crud;

    public function __construct()
    {
        $this->crud = parent::getInstance();
    }

    /**
     * SELECT
     *
     * @param string $table
     * @param array $where
     * @param string $sql
     * @param string $fetchType
     * @param int $fetchMode
     * @return array
     * Join 2 table, use [table_name1, table_name2, join_type, join_condition]
     */
    public function select(string $table, $where = array(), string $sql = "", string $fetchType = "", $fetchMode = PDO::FETCH_ASSOC)
    {
        if (empty($where)) {
            $stmt = $this->crud->prepare("SELECT * FROM $table $sql");
        } else {
            $stmt = $this->crud->prepare("SELECT * FROM $table $sql WHERE {$this->conditionToString($where)}");
            foreach ($where as $key => &$value) {
                $stmt->bindParam(":$key", $value);
            }
        }
        $stmt->execute();
        $fetch = "fetch$fetchType";
        return $stmt->$fetch($fetchMode);
    }

    public function select2(string $sql, $where = array(), string $sql2 = "", string $fetchType = "", $fetchMode = PDO::FETCH_ASSOC)
    {
        if (empty($where)) {
            $stmt = $this->crud->prepare("$sql $sql2");
        } else {
            $stmt = $this->crud->prepare("$sql $sql2 WHERE {$this->conditionToString($where)}");
            foreach ($where as $key => &$value) {
                $stmt->bindParam(":$key", $value);
            }
        }
        $stmt->execute();
        $fetch = "fetch$fetchType";
        return $stmt->$fetch($fetchMode);
    }

    /**
     * INSERT
     *
     * @param string $table for insert
     * @param array $data data for bindvalue
     * @return integer
     */
    public
    function insert(string $table, array $data)
    {
        ksort($data);
        $fieldkey = implode(', ', array_keys($data));
        $fieldvalue = ':' . implode(', :', array_keys($data));
        $stmt = $this->crud->prepare("INSERT INTO $table ($fieldkey) VALUES ($fieldvalue)");
        foreach ($data as $key => &$value) {
            if ($value == NULL) {
                $myNull = NULL;
                $stmt->bindParam(":$key", $myNull, PDO::PARAM_NULL);
            } else {
                $stmt->bindParam(":$key", $value);
            }
        }
        return $stmt->execute();
    }

    /**
     * @param string $table
     * @param array $data
     * @return string
     */
    public
    function insertid(string $table, array $data)
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
     * UPDATE
     *
     * @param string $table
     * @param array $data
     * @param array $where
     * @return integer
     */
    public
    function update(string $table, array $data, array $where)
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

    public
    function delete(string $table, array $where, int $limit = 1)
    {
        $fieldWhere = $this->conditionToString($where);
        $stmt = $this->crud->prepare("DELETE FROM $table WHERE $fieldWhere LIMIT $limit");
        foreach ($where as $k => &$val) {
            $stmt->bindParam(":$k", $val);
        }
        return $stmt->execute();
    }

    public
    function conditionToString($data = array())
    {
        $condition = '';
        if (!empty($data)) {
            $list_condition = [];
            foreach (array_keys($data) as $val) {
                $list_condition[] = "{$val}=:{$val}";
            }
            $condition .= (sizeof($data) == 1) ? $list_condition[0] : implode(" AND ", $list_condition);
        }
        return $condition;
    }
}
