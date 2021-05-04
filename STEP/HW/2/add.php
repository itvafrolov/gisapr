<?php
require_once "connect.php";
require_once "func.php";

if(!empty($_POST))
{
    //cохраняем данные от пользователя
    
    add_messges($_POST);
    header("Location: {$_SERVER['PHP_SELF']}");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<form action="add.php" method="post">
    <p>
      <label for="fname">Имя: </label>
      <input type="text" name="fname" id="fname">
    </p>
    <p>
      <label for="lname">Фамилия: </label>
      <input type="text" name="lname" id="lname">
    </p>
    <p>
      <label for="mname">Отчество: </label>
      <input type="text" name="mname" id="mname">
    </p>   
    <p>
      <label for="age">Возраст: </label> 
      <input type="text" name="age" id="age">
    </p>
    <p>
      <label for="email">email: </label>
      <input type="text" name="email" id="email">
    </p>   
    <button type="submit" class="btn btn-success" href="index.php">Добавить</button>    
  </form>  
  <hr>
  <a href="index.php"><button type="button" class="btn btn-success">Перейти к базе</button></a>
</body>
</html>