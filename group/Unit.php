<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2016/2/20
 * Time: 18:50
 */

abstract class Unit {
    //战斗力计算
    abstract function bombardStrength();
//    public function addUnit(Unit $unit){
//        throw new unitException(get_class($unit) . '未找到');
//    }
//    public function removeUnit(Unit $unit){
//        throw new unitException(get_class($unit) . '未找到');
//    }
    public function getComposite(){
        return Null;
    }
}