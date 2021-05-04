<?php
namespace classes;
class MyTrigon extends MyFigure implements ICaclArea, ICalcPerimetr, IDraw
{
    public $l1; 
    public $l2;
    public $l3;

    public function __construct($L1, $L2, $L3)
    {
        $this->l1 = $L1->dist;
        $this->l2 = $L2->dist;
        $this->l3 = $L3->dist;
    }

    public function CalcArea()
    {
        $p=($this->l1+$this->l2+$this->l3)/2;
        $S = sqrt($p*($p-$this->l1)*($p-$this->l2)*($p-$this->l3));
        return parent::CalcArea() + $S;
    }
    public function CalcPerimetr()
    {
        $res = $this->l1+$this->l2+$this->l3;
        return parent::CalсPerimetr() + $res;
    } 
    public function Draw()
    {
        $out = parent::DrawFigure();
        $out .=" ТРЕУГОЛЬНИК";
        return $out;
    }

}

?>