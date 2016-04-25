<?php

/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2016/1/20
 * Time: 22:22
 */

//原始类
class errorObject
{
    private $_error;
    public function __construct($error){
        $this->_error = $error;
    }

    public function getError(){
        return $this->_error;
    }
}