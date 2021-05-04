<?php
//error_reporting(-1);
require_once "classes/Product.php";
require_once "classes/Bookproduct.php";
require_once "classes/PCProduct.php";


$book1 = new BookProduct('Три мушкетера', 120, "Издательство Одиссей", "А.Дюма");
$book2 = new BookProduct('Война и мир', 200,  "Издательство Харків", "Л.Толстой");
$pc1 = new PCProduct('RedLine', 10000, "Спецвузавтоматика" ,1000);
$pc2 = new PCProduct('Lenovo', 13000, "МКС",2000);

$arr = [
    $book1,
    $pc1,
    $pc2,
    $book2
];

foreach($arr as $item)
{    
    $item->print();
    $d = 0;
    if($item instanceof BookProduct)
    {
    $d = 10;
    }
    if ($item instanceof PCProduct)
    {
        $d = 10;
    }
    echo "Скидка: {$d}% <br>";
    echo "Цена со скидкой: ".$item->getPriceWithDiscount($d);
}
?>