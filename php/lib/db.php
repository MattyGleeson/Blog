<?php

class DB {

    const _DB_HOST = "localhost";
    const _DB_USER = "blog";
    const _DB_PASS = "blogdbpassword";
    const _DB_DB = "blog";

    var $_conn;

    function __construct()
    {
//        $this->_conn = new mysqli(self::_DB_HOST, self::_DB_USER, self::_DB_PASS, self::_DB_DB);
    }

    function prepareStatement($rawQuery, $types, ...$params)
    {
        $q = $this->_conn->prepare($rawQuery);
//        if( ! $q)
//         trigger_error("Types is ". $types. " and they are ".$params." (size: ".sizeof($params).")");

        $q->bind_param($types, $params);
        return $q;
    }

    function prepareStatementAndExecute($rawQuery, $types, $params)
    {
        $mysqli = new mysqli(self::_DB_HOST, self::_DB_USER, self::_DB_PASS, self::_DB_DB);

        if (mysqli_connect_errno()) {
            trigger_error("Connect failed");
            exit();
        }

        $stmt = $mysqli->prepare($rawQuery);
        $queryParams = array();
        $queryParams[] = $types;

        foreach ($params as $id => $term)
        {
            $queryParams[] = &$params[$id];
        }

        foreach ($queryParams as $t)
        {
            trigger_error($t);
        }

        call_user_func_array(array($stmt, 'bind_param'), $queryParams);

        $stmt->execute();

        return $stmt;
    }
}