<?php
error_reporting(-1);

$arr = array(1000 => 'Ivanov' , 1002 =>'Petrov' , array(100,102,103), 'Sidorov' , 777 , 5.5 , true);

//var_dump($arr);
/*
echo "<pre>";
print_r($arr);
echo "</pre>";
*/
$arr[12] = 'new element';
echo "<pre>";
print_r($arr);
echo "</pre>";

$arr[6] = 'new element';
echo "<pre>";
print_r($arr);
echo "</pre>";

echo $arr[3];
echo "<br>";
echo $arr[2][1];

$arr2 = [
100,
101,
105,
1000

];
echo "<pre>";
print_r($arr2);
echo "</pre>";

$arr3 = [
"title" => "Холодильник" ,
"price" => 25000,
"description" => "Очень хороший холодильник"
];
echo "<br>";
echo "<pre>";
print_r($arr3);
echo "</pre>";

echo $arr3["title"];

echo "Название товара: " .$arr3["title"]
    ."<br> Цена: " .$arr3["price"] 
    ."<br> Описание: {$arr3["description"]}";

echo "<hr>";
$var = '111111';
unset($var);
var_dump(isset($var));

?>