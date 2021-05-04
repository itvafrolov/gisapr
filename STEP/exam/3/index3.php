<!-- 
3. Сформировать таблицу телефонов в три столбца по данными из текстового
файла. Содержимое файла:
Василий # Пупкин # 0677454541
Иннокентий # Мышь # 0681234541
Анна # Семенова # 0993213212
Ирина # Жэк # 0487745551
Ольга # Посольство # 0504125452
... и т.д.
(1 балл) 
 -->  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>		
    .table{width:50%;margin-bottom:1rem;}
    .table td{padding:1rem;border-top:1px solid #dee2e6}
    .table thead th{vertical-align:bottom;border-bottom:1px solid #dee2e6}
    .table th{text-align:left;padding:1rem;border-top:1px solid #dee2e6 }
    </style>
	</style>
</head>
<body>
	<h2>Телефонный справочник</h2>
  <table class="table">
  <thead>
      <th scope="col">Имя</th>
      <th scope="col">Организация</th>
      <th scope="col">Телефон</th>
    </tr>
  </thead>
  <tbody>
  <?php $f = file('3.txt');?>
  <?php foreach($f as $item): ?>    
  <?php $ff = explode('#', $item) ?>
    <tr >     
      <td><?= $ff[0] ?></td>
      <td><?= $ff[1] ?></td>
      <td><?= $ff[2] ?></td>      
    </tr>
  <?php endforeach; ?>
  </tbody>
</table>
</body>
</html>