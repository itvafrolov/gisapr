<?php
namespace classes;
class MyCircle extends MyFigure implements ICaclArea, ICalcPerimetr, IDraw
{
    public $r; // радиус

    public function __construct($L)
    {
        $this->r = $L->dist;
    }

    public function getR()
    {
        $out = $this->r;
        return $out;
    }
    public function CalcArea()
    {
        $res = $this->r * $this->r * 3.1416;
        return parent::CalcArea() + $res;
    }
    public function CalcPerimetr()
    {
        $res = $this->r * 2 * 3.1416;
        return parent::CalcPerimetr() + $res;

    } 
    public function Draw()
    {
        $out = parent::DrawFigure();
        $out .=" КРУГ";
        return $out;
    }

}

?>