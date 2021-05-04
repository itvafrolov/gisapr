<?php
require_once "connect.php";
require_once "func.php";

if(!empty($_POST))
{
    //cохраняем данные от пользователя
    save_messges($_POST);
    header("Location: {$_SERVER['PHP_SELF']}");
    exit;
}

$data = get_messages();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="index.php" method="post">
    <p>
      <label for="name">Имя:</label><br>
      <input type="text" name="name" id="name">
    </p>
    <p>
      <label for="text">Текст:</label><br>
      <textarea name="text" id="text"></textarea>
    </p>
    <button type="submit">Написать</button>
  </form>  
  <hr>
  <?php if(!empty($data)):  ?>
<?php foreach($data as $item): ?>
<div>
    <p>Автор <?= $item['name']?> | Дата: <?= $item['date']?> </p>
    <div>
        <?= nl2br(htmlspecialchars($item['text'])) ?>
    </div>
</div>
<?php endforeach?>
  <?php endif; ?>
  <?php print_r($name); ?>
</body>
</html>