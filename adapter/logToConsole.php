<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2016/1/20
 * Time: 22:26
 */

//原始类调用
class logToConsole
{
    private $_errorObject;
    private $_path;
    public function __construct($errorObject){
        $this->_errorObject = $errorObject;
    }

    public function write(){
        file_put_contents($this->_path, $this->_errorObject->getError());
    }
}