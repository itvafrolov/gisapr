<?php
$db = mysqli_connect('server:8081', 'GISAPR01', '5', 'GISAPR01') or die('Ошибка соединения с БД!');
mysqli_set_charset($db, "utf8") or die('Не установлена кодировка!');
$res = mysqli_query($db, "SELECT * FROM clients");
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
      <th scope="col">Имя / Название</th>
      <th scope="col">Юридический адрес</th>
      <th scope="col">Идентиф. код</th>
      <th scope="col">Паспорт / Устав</th>
      <th scope="col">Контактное лицо</th>
      <th scope="col">Телефон 1</th>
      <th scope="col">Телефон 2</th>
      <th scope="col">email</th>
      <th scope="col">Примечание</th>
      <th scope="col">Примечание 2</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($data as $item):?>
    <tr>      
      <td><?= $item['id'] ?></td>
      <td><?= $item['name'] ?></td>
      <td><?= $item['address'] ?></td>
      <td><?= $item['code'] ?></td>
      <td><?= $item['passport'] ?></td>
      <td><?= $item['contact'] ?></td>      
      <td><?= $item['phone'] ?></td>
      <td><?= $item['phone2'] ?></td>
      <td><?= $item['email'] ?></td>
      <td><?= $item['note'] ?></td>
      <td><?= $item['note2'] ?></td>
    </tr>
  <?php endforeach;?>
  </tbody>
</table>
</body>
</html>