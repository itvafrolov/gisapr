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
        return $this->price*0.95;
    }

    public function print()
    {
        echo "<hr>";
        echo "Информация о Книге: <br>";
        echo $this->getProduct();
        echo "<hr>";
    }

    // МАГИЧЕСКИЕ МЕТОДЫ
    public function __toString()
    {
        return "<br> called __toString()".$this->getProduct()."<br>";
    }

    public function __get($name)
    {
        echo "<br> Произошло обращение __get к свойству $name <br>";
        if($name == "ttt")
        {
            return $this->price;
        } elseif($name == "price" || $name == "name" || $name == "numPages" )
        {
            return $this->$name;
        }
    }

    public function __set($name,  $value)
    {
        echo "<br> Произошло обращение __set к свойству $name <br>";
        if($name == "ttt")
        {
           $this->price = $value;
        }
    }

    public function __call($name,  $arguments)
    {
        if($name == "rrr")
        {
            echo "<br> Был вызван метод rrr";
            echo "<pre>";
            print_r($arguments);
            echo "</pre>";
        } elseif($name == "getProduct")
        {
            return $this->$name();
        }
    }

    public function __sleep()
    {
        return['name', 'price', 'numPages'];
    }

    public function __invoke($a)
    {
        echo "<br> Был вызван метод __invoke <br>";
        $this->price = $a;
    }
}