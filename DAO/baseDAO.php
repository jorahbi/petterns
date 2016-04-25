<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2016/1/23
 * Time: 21:55
 */

define('HOST', '127.0.0.1');

abstract class baseDAO
{
    private $_conn;

    public function __construct()
    {
        $this->_connection(HOST, DBNAME, UNAME, UPWD);
    }

    private function _connection($host, $dbName, $uName, $uPwd)
    {
        try {
            //数据库连接
            $this->_conn = new PDO("mysql:host={$host}; dbname={$dbName}", $uName, $uPwd);
            //设置错误模式
            $this->_conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch (PDOException $exception) {
            die($exception->getMessage);
        }

    }


    public function fetchAll($columns = '*', $filter = array(), $offset = 0, $limit = -1, $order = null)
    {
        if(is_array($columns)){
            $columns = join(',', $columns);
        }
        $where = '';
        foreach($filter as $key => $value){
            $where .=" AND  `{$key}`=`{$value}`  ";
        }
        $sql = "SELECT {$columns } FROM  {$this ->tableName} WHERE 1  {$where} {$order} LIMIT {$limit}, {$offset}";
        $result = $this->_conn->prepare($sql);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $result->execute();
        return $result->fetchAll();
    }
}

