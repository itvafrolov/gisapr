<?php
use classes\Car;

error_reporting(-1);
require_once "classes/Car.php";
require_once "classes/Product.php";
require_once "classes/Bookproduct.php";
require_once "classes/NotebookProduct.php";

$car1 = new Car("черный","BMW");
// $car1->color = "черный";
// $car1->brand = "BMW";

//$car2 = new Car("синий", "VW");
// $car2->color = "синий";
// $car2->brand = "VW";

//$car3 = new Car("желтый", "жигули");

// echo $car1->getCarInfo();
// //echo $car2->getCarInfo();
// //echo $car3->getCarInfo();

// echo $car1->test2();
// echo "<hr>";
// echo Car::TEST1;
// echo "<hr>";
// echo Car::class;
// echo "<hr>";

$book = new BookProduct('Три мушкетера', 20, 1000);
$notebook = new NotebookProduct('Dell', 1000, 'Intel');

//echo $car1->getProduct();
echo $book->getProduct();
echo $notebook->getProduct();


?>