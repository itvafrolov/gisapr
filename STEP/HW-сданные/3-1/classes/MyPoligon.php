<?php
namespace classes;
class MyPoligon extends MyFigure implements ICaclArea, ICalcPerimetr, IDraw
{
    public $arrPoints; // радиус

    public function __construct($arrP)
    {
        $this->arrPoints = $arrP;
        array_push( $this->arrPoints, $this->arrPoints[0]);
    }

    public function CalcArea()
    {

        $n = count($this->arrPoints);       
        $s = 0;
        echo "<br>";
        for($i=0;$i<$n-1;$i++)
        {
            $s =$s + $this->arrPoints[$i]->X * $this->arrPoints[$i+1]->Y;
        }
        for($i=0;$i<$n-1;$i++)
        {
            $s =$s - $this->arrPoints[$i]->Y * $this->arrPoints[$i+1]->X;
        }
        $s=abs($s/2);
        return parent::CalcArea() + $s;
        

    }
    public function CalcPerimetr()
    {
        $n = count($this->arrPoints);       
        $P = 0;
        echo "<br>";
        for($i=0;$i<$n-1;$i++)
        {
            $dX = abs($this->arrPoints[$i]->X - $this->arrPoints[$i+1]->X);
            $dY = abs($this->arrPoints[$i]->Y - $this->arrPoints[$i+1]->Y);
            $P = $P + sqrt( pow($dX, 2) + pow($dY, 2));
        }
        
        return parent::CalcPerimetr() + $P;
    } 
    public function Draw()
    {
        $out = parent::DrawFigure();
        $out .=" ПОЛИГОН";
        return $out;
    }

}

?>