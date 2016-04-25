<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2016/1/24
 * Time: 16:28
 */

//先把对象转换成大写
class CDUpperCase {
    public static function mark(CD $cd , $type){
        if(is_array($cd->$type)){
            array_map('strtoupper', $cd->$type);
        }else{
            $cd->$type = strtoupper($cd->$type);
        }
    }
}