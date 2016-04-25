<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2016/1/24
 * Time: 16:35
 */

class CD {
    public $title;
    public $brand;
    public $tracks = Array();

    public function __construct($params){
        $this->_setProp($params);
    }

    private function _setProp($params){
        foreach($params as $key => $value){
            $this->$key = $value;
        }
        return $this;
    }
}