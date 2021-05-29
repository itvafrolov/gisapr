<?php 
require_once "funclogin.php";
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
    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="/css/site.css" rel="stylesheet">
    
    <title>Ex 6</title>
</head>
<body>
<body>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"> X </a>
  <a href="#" >Новый клиент</a>
  <a href="#">Новый объект</a>
  <a href="#">Clients</a>
  <a href="#">Contact</a>  
</div>

<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="navbar-menu-3" id="mySidenav" onclick="openNav()">
<!-- <span style="font-size:30px;cursor:pointer" onclick="openNav()">☰ </span> -->
       
                <button class="navbar-left navbar-toggle-2">
                <div class="icon-bar2"></div>
                <div class="icon-bar2"></div>
                <div class="icon-bar2"></div>
                </button>
            </div> 
            <div class="container">            
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="#">Информация</a></li>
                    <li><a href="#">Рабочие справочники</a></li>
                    <li><a href="./phone.php">Телефонный справочник</a></li>                    
                </ul>
                <ul class="nav navbar-nav navbar-right">                   
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
      <th scope="col">Адрес объекта</th>
      <th scope="col">клиент</th>
      <th scope="col"> Печать </th>
      <th scope="col"> Исполнитель </th>
      <th scope="col"> Изменить </th>
      <!-- <th scope="col">email</th> -->
      <!-- <th scope="col">Примечание</th> -->
      <!-- <th scope="col"> <button><a href="index2.html" /> переход</button> </th> -->
    </tr>
  </thead>
  <tbody>
  <?php foreach($data as $item):?>
    <tr>      
      <td><?= $item['ordersid'] ?></td>
      <td><?= $item['numcontract'] ?></td>
      <td><?= $item['startcontract'] ?></td>
      <td><?= $item['typeorder'] ?></td>
      <td><?= $item['ordername'] ?></td>
      <td><?= $item['orderaddress'] ?></td>  
      <td><?= $item['name'] ?></td>    
      <td><?= $item['jobload'] ?></td> 
      <td><?= $item['fullname'] ?></td>
      <th> <button><a href="index.php?access=2&order=<? echo $item['ordersid'] ?>"> изменить </button> </th> 
      <!-- <td><?= $item['email'] ?></td> -->
      <!-- <td><?= $item['note'] ?></td> -->
      <!-- <td><?= $item['note2'] ?></td> -->
    </tr>
  <?php endforeach;?>
  </tbody>
</table>

<script>  
  function openNav() {
   
    document.getElementById("mySidenav").style.width = "250px";
  }

  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
  }
</script>

</body>
</html>
<!-- <?php
echo $log;
echo "<hr>";
echo $data;
print_r($data);
?> -->