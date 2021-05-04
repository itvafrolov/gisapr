<?php
namespace classes;
abstract class MyFigure
{    
    public function CalcArea()
    {
        echo "<h4>Расчет площади.</h4>";
        //return parent::CalcArea() + $res;

    }
    public function CalсPerimetr()
    {
        echo "<h4>Расчет периметра.</h4>";
        //return parent::CalсPerimetr() + $res;
    } 
    public function DrawFigure()
    {
        $out = "<h3>РИСУЮ:";
        return $out;
    }
}

?> 