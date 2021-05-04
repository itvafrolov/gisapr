<?php
$k = 100;
//echo $k;
var_dump($k);
echo "<hr>";
$k = 77.77;
var_dump($k);
echo "<hr>";
$k = "PHP";
var_dump($k);
echo "<hr>";
$k = 'PHP';
var_dump($k);

echo "<hr>";
$fruit = 'apple';
$winnie_pooh = "Hello, I 'm Winnie. Ihave 2 {$fruit}s";

echo $winnie_pooh;
echo "<hr>";
//контанты старый вариант
define("TITLE1", "Моя страница 1");
echo TITLE1;
echo "<hr>";
//контанты старый вариант
const TITLE2 = "Моя страница 2";
echo TITLE2;


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= TITLE1 ?></title>
</head>
<body>
    <h1><?php echo $winnie_pooh ?></h1>
</body>
</html>