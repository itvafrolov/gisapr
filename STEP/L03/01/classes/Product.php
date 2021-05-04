<?php
namespace classes;

abstract class Product
{

    public $name;
    public $price;

   
    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
       
    }
    public function getProduct()
    {
        $out = "<hr><b>О товаре:</b><br>
                Наименование: {$this->name}<br>
                Цена: {$this->price}<br>";
        
        return $out;
    }

    public abstract function getPriceWithDiscount();

}