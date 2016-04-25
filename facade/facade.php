<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2016/1/24
 * Time: 16:51
 */

include '../autoLoad.php';
class facade {
    public static function markXMLCall(CD $cd){
        CDUpperCase::mark($cd, 'title');
        CDUpperCase::mark($cd, 'tracks');
        CDUpperCase::mark($cd, 'brand');
        var_dump($cd);
        CDCreateXML::create($cd);
    }
}
$params = array('title' => 'title', 'brand' => 'brand', 'tracks' => array('aaaa', 'bbbb', 'ccc'));
$cd = new CD($params);

var_dump(facade::markXMLCall($cd));