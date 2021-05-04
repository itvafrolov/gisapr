<?php
namespace classes;
use mylib\interfaces\IPrint;

class BookProduct extends Product implements IPrint
{
    public $numPages;

    public function __construct($name, $price, $numPages)
    {
        $this->numPages = $numPages;
        parent::__construct($name, $price);
    }

    public function getProduct()
    {
        $out = parent::getProduct();
        $out .= "Кол-во страниц: {$this->numPages}<br>";
        return $out;
    }
     public function getPriceWithDiscount()
     {
         return $this->price*1.2;
     }

     public function print()
     {
         echo "<hr>";
         echo "Информация о книге: <br>";
         echo $this->getProduct();
         echo "<br>";
     }

}