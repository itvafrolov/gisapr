<?php
$db = mysqli_connect('127.0.0.1', 'root', '', 'exam_db') or die('Ошибка соединения с БД!');
mysqli_set_charset($db, "utf8") or die('Не установлена кодировка!');
$res = mysqli_query($db, "SELECT * FROM birthday");
$data = mysqli_fetch_all($res, MYSQLI_ASSOC);

/* echo "<pre>";
print_r($data);
echo "</pre>";
*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <style>
    .table{width:70%;margin-bottom:1rem;}
    .table td{padding:1rem;border-top:1px solid #dee2e6}
    .table thead th{vertical-align:bottom;border-bottom:1px solid #dee2e6}
    .table th{text-align:left;padding:1rem;border-top:1px solid #dee2e6 }
    </style>
    
    <title>Ex 6</title>
</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Фамилия</th>
      <th scope="col">День рожденья</th>      
    </tr>
  </thead>
  <tbody>
  <?php foreach($data as $item):?>
    <tr>      
      <td><?= $item['id'] ?></td>
      <td><?= $item['Family'] ?></td>
      <td><?= $item['Birthday'] ?></td>
    </tr>
  <?php endforeach;?>
  </tbody>
</table>
</body>
</html>