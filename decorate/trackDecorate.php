<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2016/1/24
 * Time: 14:56
 */

//不破坏原有代码流，针对新需求进行调整
class trackDecorate {
    private $_CD;
    public function __construct(CD $CD){
        $this->_CD = $CD;
    }

    public function markCaps(){
        foreach($this->_CD->trackList as &$track){
            //针对新需求把CD音轨变成大写
            $track = strtoupper($track);
        }
    }
}

//外部调用
$CD = new CD();
$CD->addTrack(array());
$objTrack = new trackDecorate($CD);
$objTrack->markCaps();