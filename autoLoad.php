<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2016/1/20
 * Time: 22:48
 */
class autoLoad{
    public static function load($class){
        $path = "{$class}.php";
        if(file_exists($path)){
            include $path;
        }
    }
}
spl_autoload_register('autoLoad::load');

