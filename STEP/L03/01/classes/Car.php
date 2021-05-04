<?php

namespace classes;

class Car
{

    public $color;
    public $wheels = 4;
    public $speed = 180;
    public $brand;

    public static $counter = 0;

    const TEST1 = 'TEST11111!!!!!';

    public function Car($c, $b, $s=150, $w=4)
    {
        $this->color = $c;
        $this->brand = $b;
        $this->speed = $s;
        $this->wheels = $w;
        echo "<br>called Car <br>";
    }

    public function __construct($c, $b, $s=150, $w=4)
    {
        $this->color = $c;
        $this->brand = $b;
        $this->speed = $s;
        $this->wheels = $w;
        self::$counter++;
        echo "<br>called __construct <br>";
    }

    public static function getCount()
    {
        return self::$counter;
    }

    public function getCarInfo(){
        return "<h3>О моем авто:</h3>
            Марка: {$this->brand}<br>
            Цвет: {$this->color}<br>
            Кол-во колес: {$this->wheels}<br>
            Скорость: {$this->speed}<br>";
    }
    public function test1()
    {
        ?>
        <div>Hello ))))</div>
        <?php
    }

    public function test2()
    {
        return "Константа = ".self::TEST1;
    }

    public function __destruct()
    {
        echo "<br>called __destruct <br>";
    }

}