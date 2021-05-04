<?php
namespace classes;
class MyLine 
{
    public $dist;

    public function __construct($D)
    {
        $this->dist = $D;        
    }


    public function getLineDist()
    {
        return "Длина линии: {$this->dist}";
    } 

}


// на основе 2х точек -- в принципе не нужна, так, для экспериментов
/*
class MyLine
{    
    public  $pointStart;
    public  $pointEnd;  

    public function __construct($pS, $pE)
    {
        $this->pointStart = $pS;
        $this->pointEnd = $pE;     
    }

    public function getLine()
    {
        return "Точка начала: Х: {$this->pointStart->X}, Y: {$this->pointStart->Y} <br> Точка конца: Х: {$this->pointEnd->X}, Y: {$this->pointEnd->Y}";     
    } 
}
*/
?>