<?php
namespace classes;
class MySque extends MyFigure implements ICaclArea, ICalcPerimetr, IDraw
{
    public $len; // obj MyLine!

    public function __construct($L)
    {
        $this->len = $L->dist;
    }

    public function getLen()
    {
        $out = $this->len;
        return $out;
    }

    public function CalcArea()
    {     
        $res = $this->getLen() * $this->getLen();
        //$res = $this->len->dist * $this->len->dist;
        return parent::CalcArea() + $res;

    }
    public function CalcPerimetr()
    {      
        $res = $this->len * 4;
        return parent::CalcPerimetr() + $res;
    } 
    public function Draw()
    {
        $out = parent::DrawFigure();
        $out .=" КВАДРАТ";
        return $out;
    }

}

?>