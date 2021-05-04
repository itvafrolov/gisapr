<?php
namespace classes;
class MyRectangle extends MySque implements ICaclArea, ICalcPerimetr, IDraw
{
    public $len2; // obj MyLine!

    public function __construct($L1,$L2)
    {
        parent::__construct($L1);
        $this->len2 = $L2->dist;
    }

    public function CalcArea()
    {
        echo "<h4>Расчет площади.</h4>";
        $len1 = parent::getLen();
        return $this->len2 * $len1;

    }
    public function CalcPerimetr()
    {
        echo "<h4>Расчет периметра.</h4>";
        return $this->len2 * 2 + parent::getLen() * 2 ;
    } 
    public function Draw()
    {
        $out = "<h4>РИСУЮ: ПРЯМОУГОЛЬНИК</h4>";
        return $out;
    }

}

?>