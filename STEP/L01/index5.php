<?php
$goods = [[
    'title' => 'Nokia',
    'price' => 100,
    'description' => 'Description'
  ],[
    'title' => 'iPad',
    'price' => 200,
    'description' => 'Description'
  ]
];

//echo count($goods);
//echo count($goods, 1);

//Различие массивов
$array1 = array("a" => "green", "red", "blue", "red");
$array2 = array("b" => "green", "yellow", "red");
$result1 = array_diff($array1, $array2);
print_r($result1);
echo '<br>===========<br>';

//Схождение массивов
$result2 = array_intersect($array1, $array2);
print_r($result2);
echo '<br>===========<br>';

//Наличие ключей в массиве
if (array_key_exists('a', $array1)) {
    echo "Присутствует ключ 'a' в массиве";
}
else{
    echo "Нет ключа 'a' в массиве";
}
echo '<br>===========<br>';

//Получение ключей  массива
$array_keys = array_keys($array1);
print_r($array_keys);
echo '<br>===========<br>';

//Взять случ. значение ключа из  массива
echo $rand1 = array_rand($array1);
echo '<br>===========<br>';

//Перевернуть элементы  массива
$revers_array = array_reverse($array1);
print_r($revers_array);
echo '<br>===========<br>';
//--------------------

$var1 = 'Украина';
$var2 = 'Харьков';
$var3 = 'ул. Научная';
$arr = compact('var1', 'var2','var3');
echo "<pre>";    
print_r($arr);
echo "</pre>";
echo "<br>";

//Отправка эл-тов  массива в переменные
$var_array_1 = ['country' => 'Украина', 
    'city' => 'Харьков', 
    'street' => 'ул. Научная'];
extract($var_array_1);
echo $country." ".$city." ".$street;


?>