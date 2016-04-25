<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2016/1/23
 * Time: 21:03
 */

include '../autoLoad.php';

class productBuilder
{

    private $_product = null;
    private $_config = array();

    public function __construct($config)
    {
        $this->_product = new product();
        $this->_config = $config;
    }

    public function builder()
    {
        foreach ($this->_config as $key => $value) {
//            if (!method_exists($this->_product, 'set' . $key)) continue;
//            $this->_product->{'set' . $key}($value);
            $this->_product->$key = $value;
        }
    }

    public function getProduct()
    {
        return $this->_product;
    }
}

$config = array('size' => '1000', 'type' => 'clothes', 'color' => 'black');
$productBuilder = new productBuilder($config);
$productBuilder->builder();
$product = $productBuilder->getProduct();
var_dump($product);