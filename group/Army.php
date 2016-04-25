<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2016/2/20
 * Time: 18:58
 */

//军队战斗力计算
include '../autoLoad.php';

class Army extends Composite
{
//    private $_units = Array();
//
//    public function addUnit(Unit $unit)
//    {
//        if (in_array($unit, $this->_units, true)) {
//            return;
//        }
//        array_push($this->_units, $unit);
//    }
//
//    public function removeUnit(Unit $unit)
//    {
//        $this->_units = array_udiff($this->_units, array($unit), function ($a, $b) {
//            return ($a === $b ? 0 : 1);
//        });
//    }

    public function bombardStrength()
    {
        $ret = 0;
        foreach ($this->getUnits() as $unit) {
            $ret += $unit->bombardStrength();
        }
        return $ret;
    }
}

//调用
$army = new Army();
$army->addUnit(new Archer());
$army->addUnit(new LaserCannonUnit());
$newArmy = new Army();
$newArmy->addUnit(new Archer());
$newArmy->addUnit(new Archer());
$newArmy->addUnit(new Archer());
$army->addUnit($newArmy);
var_dump($army->bombardStrength());