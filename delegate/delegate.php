<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2016/1/24
 * Time: 15:38
 */

class delegate {
    private $_songs = Array();
    private $_delegate = null;
    public function __construct($type){
        $objName = $type . 'PlayListDelegate';
        $this->_delegate = new $objName;
    }

    public function addSongs(Array $params){
        $this->_songs = $params;
    }

    public function getPlayList(){
        $this->_delegate->playList($this->_songs);
    }
}