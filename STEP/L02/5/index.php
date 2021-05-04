<?php
$db = mysqli_connect('127.0.0.1', 'root', '', 'l02') or die('Ошибка соединения с БД!');

mysqli_set_charset($db, "utf8") or die('Не установлена кодировка!');

$res = mysqli_query($db, "SELECT * FROM students");

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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<a href="add.php"><button type="button" class="btn btn-success">Добавить</button></a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Имя</th>
      <th scope="col">Фамилия</th>
      <th scope="col">Отчество</th>
      <th scope="col">возраст</th>
      <th scope="col">Email</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($data as $item): ?>
    <tr>
      <th scope="row"><?= $item['id'] ?></th>
      <td><?= $item['fname'] ?></td>
      <td><?= $item['lname'] ?></td>
      <td><?= $item['mname'] ?></td>
      <td><?= $item['age'] ?></td>
      <td><?= $item['email']?></td>
      <td>
          <a href="del.php?id=<?= $item['id']?>"><button type="button" class="btn btn-danger">Удалить</button></a>
      </td>
      <td>
          <a href="edit.php?id=<?= $item['id']?>"><button type="button" class="btn btn-primary">Редактировать</button></a>
      </td>
    </tr>
  <?php endforeach; ?>
  </tbody>
</table>
<a href="add.php"><button type="button" class="btn btn-success">Добавить</button></a>
</body>
</html>