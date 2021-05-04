<?php

class Product
{
    public $name;
    public $price;
    public $provider;
   
    public function __construct($name, $price, $provider)
    {
        $this->name = $name;
        $this->price = $price;
        $this->provider = $provider;
       
    }
    public function getProduct()
    {
        $out = "<hr><b>О товаре:</b><br>
                Наименование: {$this->name}<br>
                Цена: {$this->price}<br>
                Поставщик: {$this->provider}<br>";

        
        return $out;
    }
}