<?php
$db = mysqli_connect('localhost', 'GISAPR01', '5', 'GISAPR01') or die('Ошибка соединения с БД!');
mysqli_set_charset($db, "utf8") or die('Не установлена кодировка!');
$res = mysqli_query($db, "SELECT * FROM clients");
$data = mysqli_fetch_all($res, MYSQLI_ASSOC);
?>