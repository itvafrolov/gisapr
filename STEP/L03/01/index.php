<?php

error_reporting(-1);//выводить все ошибки
use  classes\{Product, BookProduct, NotebookProduct};
use mylib\interfaces\IGadget;

require_once __DIR__ . '/vendor/autoload.php';

/* require_once "classes/Product.php";
require_once "classes/IPrint.php";
require_once "classes/IGadget.php";
require_once "classes/TColor.php";

require_once "classes/BookProduct.php";
require_once "classes/NotebookProduct.php"; */

/* function autoloder1($class)
{
    $class = str_replace("\\", '/', $class);
    $file = __DIR__ . "/{$class}.php";
    if(file_exists($file)){
        require_once $file;
    }
}

spl_autoload_register('autoloder1'); */

echo "<hr>";
//$p = new Product('помидоры', 50);
$book = new BookProduct('Три мушкетера', 20, 1000);
$notebook = new NotebookProduct('Dell', 1000, 'Intel');
$notebook->setColor("green");

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
    if ($item instanceof IGadget)
    {
        $g = $item->getGadget();
        echo "Сопутсвующие товары:";
        foreach($g as $i)
        {
            echo "<br>$i</br>";
        }
    }
    if ($item instanceof NotebookProduct)
    {
        echo "<br> Цвет: ".$item->getColor()."<br>";
    }

}

/* echo $book->getProduct();
echo $notebook->getProduct(); */

// МАГИЧЕСКИЕ МЕТОДЫ
echo "<hr>";

echo $book;
echo "<hr>";
$book->ttt = '3333';
//var_dump($book);
$book->price = 88888;
// __call
$book->rrr('arg1', 'arg2', 'arg3');
echo "<hr>";
$str = serialize($book);
echo $str;
$b = unserialize($str);
echo "<hr>";
var_dump($b);

echo "<hr>";
$book(55555);

var_dump($book);

?>