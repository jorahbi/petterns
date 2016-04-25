<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2016/1/23
 * Time: 23:02
 */

include '../autoLoad.php';
class user extends baseDAO{
    protected $tableName;

    public function getList(){
        $filter = array();
        $result = $this->fetchAll('*', $filter);
        return $result;
    }
}