<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2016/1/24
 * Time: 14:52
 */

class CD {
    public $trackList;
    public function __construct(){
        $this->trackList = array();
    }

    public function addTrack($track){
        $this->trackList[] = $track;
    }
}