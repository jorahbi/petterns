<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2016/1/23
 * Time: 20:58
 */

class product {
    protected $type;
    protected $color;
    protected $size;
//    public function setType($type){
//        $this->_type = $type;
//    }
//
//    public function setColor($color){
//        $this->_color = $color;
//    }
//
//    public function setSize($size){
//        $this->_size = $size;
//    }
    public function __set($key, $value){
        $this->$key = $value;
    }
    public function __get($key){
        return $this->$key;
    }
}