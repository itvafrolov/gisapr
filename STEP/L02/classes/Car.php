<?php

namespace classes;

class Car
{
    public $color;
    public $wheels = 4;
    public $speed = 180;
    public $brand;

    public static $counter = 0;

    const TEST1 = 'TESTCONSTANTA';

    //конструктор
    public function Car($c, $b, $w=4, $s=150)
    {
        $this->color = $c;
        $this->wheels = $w;
        $this->speed = $s;
        $this->brand = $b;
    }

    public function __constuct($c, $b, $w=4, $s=150)
    {
        $this->color = $c;
        $this->wheels = $w;
        $this->speed = $s;
        $this->brand = $b;
        self::$counter++;
        echo "<br>called __construct <br>";
    }

    public function getCarInfo(){
        return "<h3>О моем авто:</h3>
            Марка: {$this->brand}<br>
            Цвет: {$this->color}<br>
            Кол-во колес: {$this->wheels}<br>
            Скорость: {$this->speed}<br>";
    }

    public function __destruct()
    {
        // echo "<br>called __destruct <br>";
    }

    public function test2()
    {
        return "Константа = ".self::TEST1;
    }

}