<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2016/1/24
 * Time: 15:27
 */

include '../autoLoad.php';
class playList {
    private $_songs;
    public function __construct(){
        $this->_songs = array();
    }

    public function addSongs(Array $params){
        $this->_songs = $params;
    }

    public function getM3U(){
        return true;
    }

    public function getPLS(){
        return true;
    }
}

//外部调用要判断到底是需要调用哪个方法

//调用委托设计模式
//传入type属性让委托类自动识别调用合适的业务处理类
$delegate = new delegate('m3u');
$delegate->addSongs(array('11111' => '22222'));
$delegate->getPlayList();


















