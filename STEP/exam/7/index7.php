<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>		
    .table{width:70%;margin-bottom:1rem;}
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
      <th scope="col">Номер</th>
      <th scope="col">Название</th>
      <th scope="col">Автор</th>
      <th scope="col">Обложка</th>
    </tr>
  </thead>
  <tbody>
  <?php $f = file('7.txt');?>
  <?php foreach($f as $item): ?>    
  <?php $ff = explode('#', $item) ?>
    <tr >     
      <td><?= $ff[0] ?></td>
      <td><?= $ff[1] ?></td>
      <td><?= $ff[2] ?></td>   
      <?php $img = "img/".$ff[0].".jpg";?>
      <td><img width="100" src=<?=$img?>> <figcaption><?=$ff[1]?></figcaption></td>         
    </tr>
  <?php endforeach; ?>
  </tbody>
</table>
</body>
</html>