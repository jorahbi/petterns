<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2016/1/20
 * Time: 22:35
 */

//适配器对象满足csv需求
include'../autoLoad.php';
class logToCsvAdapter extends errorObject{
    private $_errorTitle;
    private $_errorText;
    public function __construct($error){
        parent::__construct($error);
        $params = explode(':', $this->getError());
        $this->_errorTitle = $params[0];
        $this->_errorText = $params[1];
    }

    public function getTitle(){
        return $this->_errorTitle;
    }

    public function getText(){
        return $this->_errorText;
    }
}
//调用

$objError = new logToCsvAdapter('404 : notFound');

$objLog = new logToCsv($objError);

$objLog ->write();