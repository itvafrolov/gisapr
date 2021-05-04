<?php
require_once "connect.php";
require_once "func.php";
if(!empty($_GET))
{
   extract($_GET);       
   //echo $id;
   del_messages($id);
   echo "Данные удалены!<br>";
   echo '<a href="index.php"><button type="button">Перейти к базе</button></a>';
   exit;
}
?>
