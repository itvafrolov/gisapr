<?php
error_reporting(-1);

use classes\{MyPoint2D,MyLine,MyFigure,MySque,MyCircle,MyTrigon,MyPoligon,MyEllipse,MyRectangle,ICaclArea,ICalcPerimetr,IDraw};
// require_once "classes/ICaclArea.php";
// require_once "classes/ICalcPerimetr.php";
// require_once "classes/IDraw.php";
// require_once "classes/MyPoint2D.php";
// require_once "classes/MyLine.php";
// require_once "classes/MyFigure.php";
// require_once "classes/MySque.php";
// require_once "classes/MyCircle.php";
// require_once "classes/MyEllipse.php";
// require_once "classes/MyPoligon.php";
// require_once "classes/MyRectangle.php";
// require_once "classes/MyTrigon.php";
require_once __DIR__.'/vendor/autoload.php';

$ps1 = new MyPoint2D (0, 0);
$ps2 = new MyPoint2D (0, 10);
$ps3 = new MyPoint2D (0, 20);
$ps4 = new MyPoint2D (10, 20);
$ps5 = new MyPoint2D (10, 0);


// var_dump($ps);
$pe = new MyPoint2D (10, 10);
 echo $ps1->getPoint();
 echo "<br>";
 echo $pe->getPoint();

 //$Line = new MyLine($ps, $pe);
 $Line = new MyLine(30);
 $Line2 = new MyLine(40);
 $Line3 = new MyLine(50);
 echo "<hr>";
 
 echo $Line->getLineDist();
//квадрат
$sque = new MySque ($Line);
echo $sque->Draw();
echo $sque->CalcArea();
echo $sque->CalсPerimetr();

//прямоугольник
$rect = new MyRectangle ($Line, $Line2);
echo $rect->Draw();
echo $rect->CalcArea();
echo $rect->CalсPerimetr();

//круг
$cir = new MyCircle ($Line);
echo $cir->Draw();
echo $cir->CalcArea();
echo $cir->CalсPerimetr();

//эллипс
$ellps = new MyEllipse ($Line, $Line2);
echo $ellps->Draw();
echo $ellps->CalcArea();
echo $ellps->CalсPerimetr();

//треугольник
$tri = new MyTrigon ($Line, $Line2, $Line3);
echo $tri->Draw();
echo $tri->CalcArea();
echo $tri->CalсPerimetr();

//полигон
$arrPoints = array($ps1,$ps2,$ps3,$ps4,$ps5);
//echo "<br>";
//print_r($arrPoints);
//echo "<br>";
//echo count($arrPoints);
//echo "<br>";

$poli = new MyPoligon ($arrPoints);
echo $poli->Draw();
echo $poli->CalcArea();
echo $poli->CalсPerimetr();

?>