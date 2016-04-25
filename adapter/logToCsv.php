<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2016/1/20
 * Time: 22:29
 */

//新需求加入csv文件
class logToCsv
{
    const CSV_LOCATION = 'log.csv';
    private $_errorObject;
    public function __construct($errorObject){
        $this->_errorObject = $errorObject;
    }

    public function write(){
        $content = $this->_errorObject->getTitle();
        $content .= $this->_errorObject->getText();
        //file_put_contents(CSV_LOCATION, $content);
        print_r($content);
    }
}