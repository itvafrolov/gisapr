<?php
namespace classes;
class MyEllipse extends MyCircle implements ICaclArea, ICalcPerimetr, IDraw
{
    public $r2; // большая полуось

    public function __construct($L1,$L2)
    {
        parent::__construct($L1);
        $this->r2 = $L2->dist;
    }

    public function CalcArea()
    {
        echo "<h4>Расчет площади.</h4>";
        $r1 = parent::getR();

        return $this->r2 * $r1 * 3.1415926;

    }
    public function CalсPerimetr()
    {
        $r1 = parent::getR();
        echo "<h4>Расчет периметра.</h4>";
        $P=4*(3.1415926*$r1*$this->r2+($this->r2-$r1))/($r1+$this->r2);
        return $P;
    } 
    public function Draw()
    {
        $out = "<h4>РИСУЮ: ЭЛЛИПС</h4>";
        return $out;
    }

}

?>