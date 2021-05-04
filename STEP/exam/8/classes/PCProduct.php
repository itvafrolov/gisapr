<?php
class PCProduct extends Product
{

    public $capacity;

    public function __construct($name, $price, $provider, $capacity)
    {
        parent::__construct($name, $price, $provider);
        $this->capacity = $capacity;
    }

    public function getProduct()
    {
        $out = parent::getProduct();
        $out .= "Емкость диска: {$this->capacity} Mb<br>";
        return $out;
    }

    public function getPC()
    {
        return $this->capacity;
    }

    public function print()
    {
        echo "<hr>";
        echo "Информация о цифровом продукте: <br>";
        echo $this->getProduct();
    }

    public function getPriceWithDiscount($dis)
    {
        return $this->price*(1-$dis/100);
    }

}