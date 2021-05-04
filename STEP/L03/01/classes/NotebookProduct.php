<?php
namespace classes;

use mylib\interfaces\{IPrint, IGadget};
use mylib\traits\TColor;

class NotebookProduct extends Product implements IPrint, IGadget
{

    use TColor;

    public $cpu;

    public function __construct($name, $price, $cpu)
    {
        parent::__construct($name, $price);
        $this->cpu = $cpu;
    }

    public function getProduct()
    {
        $out = parent::getProduct();
        $out .= "Процессор: {$this->cpu}<br>";
        return $out;
    }

    public function getCpu()
    {
        return $this->cpu;
    }

    public function getPriceWithDiscount()
    {
        return $this->price*0.80;
    }

    public function print()
    {
        echo "<hr>";
        echo "Ноутбук: <br>";
        echo $this->getProduct();
        echo "<hr>";
    }

    public function getGadget()
    {
        return [
                    "Сумка",
                    "Флешка",
                    "Монитор"
        ];
    }

}