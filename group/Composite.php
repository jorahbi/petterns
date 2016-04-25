<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2016/2/20
 * Time: 20:22
 */

abstract class Composite extends Unit
{
    private $_units = Array();
    public function getComposite(){
        return $this;
    }

    public function getUnits(){
        return $this->_units;
    }

    public function addUnit(Unit $unit)
    {
        if (in_array($unit, $this->_units, true)) {
            return;
        }
        array_push($this->_units, $unit);
    }

    public function removeUnit(Unit $unit)
    {
        $this->_units = array_udiff($this->_units, array($unit), function ($a, $b) {
            return ($a === $b ? 0 : 1);
        });
    }
}