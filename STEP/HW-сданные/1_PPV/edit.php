<?php
require_once "connect.php";
require_once "func.php";

if(!empty($_GET))
{
   extract($_GET);
    
   $data1 = get_data($id);  
   foreach($data1 as $item)
   {    
    $fname = $item['fname'];
    $lname = $item['lname'];
    $mname = $item['mname'];
    $age = $item['age'];
    $email = $item['email'];
   }      
  }
  

   if(!empty($_POST))
   {
     
    save_messges($_POST);
    header("Location: {$_SERVER['PHP_SELF']}");
   } 
   $data = get_messages();   //контроль изменений
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
<form action="edit.php" method="post">
    <p>
      <label for="id" value="<?=$id?>"> <?=$id?></label>
      <input type="text" name="id" id="id" value="<?=$id?>">
    </p>

    <p>
      <label for="fname">Имя: </label>
      <input type="text" name="fname" id="fname" value="<?=$fname?>">
    </p>
    <p>
      <label for="lname">Фамилия: </label>
      <input type="text" name="lname" id="lname" value="<?=$lname?>">
    </p>
    <p>
      <label for="mname">Отчество: </label>
      <input type="text" name="mname" id="mname" value="<?=$mname?>">
    </p>   
    <p>
      <label for="age">Возраст: </label> 
      <input type="text" name="age" id="age" value="<?=$age?>">
    </p>
    <p>
      <label for="email">email: </label>
      <input type="text" name="email" id="email" value="<?=$email?>">
    </p>   
    <button type="submit" class="btn btn-success" href="index.php">Изменить</button>    
  </form>  
  <hr>
  <a href="index.php"><button type="button" class="btn btn-success">Перейти к базе</button></a>
  <hr>
  <?php if(!empty($data)):  ?>
<?php foreach($data as $item): ?>
<div>
    <p>Имя <?= $item['fname']?>  </p>
</div>
<?php endforeach?>
  <?php endif; ?>

</body>
</html>