<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Урок № 1</h1>
    <?php include_once "t1.php"?>
    <?php require_once "t1.php"?>

    <?php include "t1.php"?>
    <?php require "t1.php"?>
<?php 
    require_once("t2_func.php");
    my_func($arr);
?>

</body>
</html>