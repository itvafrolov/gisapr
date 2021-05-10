<?php 
require_once "funclogin.php";
echo $log;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <style>
    .table{width:100%;margin-bottom:1rem;}
    .table td{padding:1rem;border-top:1px solid #dee2e6}
    .table thead th{vertical-align:bottom;border-bottom:1px solid #dee2e6}
    .table th{text-align:left;padding:1rem;border-top:1px solid #dee2e6 }
    </style>
    <link href="./css/bootstrap.css" rel="stylesheet">
    <link href="./css/site.css" rel="stylesheet">
    
    <title>Ex 6</title>
</head>
<body>
<body>
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>                   
                </button>                
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li> <a href="zem1.php">Краткая информация</a></li>
                    <li><a href="#">Рабочие справочники</a></li>
                    <li><a href="./phone.php">Телефонный справочник</a></li>                    
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <!-- <li><a href="https://localhost:44315/Account/Register" id="registerLink">Регистрация</a></li> -->
                    <li><a href="../index.php" id="loginLink">Выход</a></li>
                </ul>

            </div>
        </div>
    </div>


<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Номер договора</th>
      <th scope="col">Дата договора</th>
      <th scope="col">Тип объекта</th>
      <th scope="col">Название объекта</th>
      <!-- <th scope="col">Адрес объекта</th> -->
      <!-- <th scope="col">клиент</th> -->
      <!-- <th scope="col">Телефон 2</th> -->
      <!-- <th scope="col">email</th> -->
      <!-- <th scope="col">Примечание</th> -->
      <!-- <th scope="col"> <button><a href="index2.html" /> переход</button> </th> -->
    </tr>
  </thead>
  <tbody>
  <?php foreach($data as $item):?>
    <tr>      
      <td><?= $item['id'] ?></td>
      <td><?= $item['numcontract'] ?></td>
      <td><?= $item['startcontract'] ?></td>
      <td><?= $item['typeorder'] ?></td>
      <td><?= $item['ordername'] ?></td>
      <!-- <td><?= $item['orderaddress'] ?></td>   -->
      <!-- <td><?= $item['name'] ?></td>     -->
      <!-- <td><?= $item['phone'] ?></td> -->      
      <!-- <td><?= $item['email'] ?></td> -->
      <!-- <td><?= $item['note'] ?></td> -->
      <!-- <td><?= $item['note2'] ?></td> -->
    </tr>
  <?php endforeach;?>
  </tbody>
</table>
</body>
</html>
