<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2016/1/29
 * Time: 21:42
 */
class Di
{

    private $_di = Array();
    public function setDi($key, $funObj){
        $this->_di[$key] = $funObj;
    }

    public function getDi($key){
        if(empty($this->_di[$key])) return null;
        return $this->_di[$key]();
    }
}

class study
{
    public $label = 'cccccc';
    public function test(){
        return $this->label . 'aaaaaaaaaaaaaaaaaaaaaaaaa';
    }
}

$di = new Di();
$testFun = function(){
    return new study();
};
//$di->setDi('test', function(){
//   return new study();
//    });
$di->setDi('test', $testFun);
$test = $di->getDi('test');
echo $test->test();

















