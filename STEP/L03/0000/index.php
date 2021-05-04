<?php

error_reporting(-1);   //выводить все ошибки
use classes\{Product, BookProduct, NotebookProduct};
use mylib\interfaces\{IGadget, IPrint};
use mylib\traits\{TColor};

require_once __DIR__ . '/vendor/autoload.php';
// require_once "classes/Product.php";
// require_once "classes/IPrint.php";
// require_once "classes/IGadget.php";

// require_once "classes/TColor.php";

// require_once "classes/BookProduct.php";
// require_once "classes/NotebookProduct.php";

// function autoloder1($class)
// {
//     $class = str_replace("\\", '/', $class);
//     $file = __DIR__ . "/{$class}.php";
//     if(file_exists($file)){
//         require_once $file;
//     }
// }

// spl_autoload_register('autoloder1');

echo "<hr>";
// $p = new Product('помидоры', 50);
$book = new BookProduct('Три мушкетера', 20, 1000);
$notebook = new NotebookProduct('Dell', 1000, 'Intel');
$notebook->setColor("зеленый");

$arr = [
    $book,
    $notebook
];

foreach($arr as $item)
{
    //echo $item->getProduct();
    $item->print();
    echo "<br>";
    echo $item->getPriceWithDiscount();
    echo "<br>";
    if($item instanceof IGadget)
    {
    $g = $item->getGadget();
    echo "Сопутствующие товары:";
    foreach($g as $i)
    {
        echo "<br>$i";
    }
    }
    if ($item instanceof NotebookProduct)
    {
        echo "<br> Цвет: ".$item->getColor();
    }
}

/* echo $book->getProduct();
echo $notebook->getProduct(); */

?>