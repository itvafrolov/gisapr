<?php
session_start();
$_SESSION['my_name'] = 'Viacheslav';
$_SESSION['role'] = 'admin';

echo "User: ".$_SESSION['my_name']."<br>";
echo "Role: ".$_SESSION['role']."<br>";

unset($_SESSION['role']); //Удаление данных из сессии
session_unset();   //удаление всех данных сессии
session_destroy(); //Удаление файла сессии
echo "<pre>";
print_r($_SESSION);
echo "</pre>";

echo "<br>".session_id()."<br>";
?>