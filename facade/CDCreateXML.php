<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2016/1/24
 * Time: 16:42
 */

class CDCreateXML {
    public static function create(CD $cd){
        $doc = new DOMDocument();
        $root = $doc->createElement('CD');
        $doc->appendChild($root);

        $root = $doc->createElement('TITLE', $cd->title);
        $doc->appendChild($root);

        $root = $doc->createElement('BRAND', $cd->brand);
        $doc->appendChild($root);

        $root = $doc->createElement('TRACKS');
        $doc->appendChild($root);

        foreach($cd->tracks as $track){
            $root = $doc->createElement('TRACK', $track);
            $doc->appendChild($root);
        }

        return $doc->saveXML();
    }
}