<?php
require_once "connectdb.php";

//require_once "funclogin.php";
//phone();
if(!empty($_POST)){

if($_POST['btn-search_ph'] == 'TR')
{
    if(!empty($_POST['search_ph'])){         
      extract($_POST);
      $res = mysqli_query($db, "SELECT * FROM `clients`                            
                                  WHERE `name` LIKE '%$search_ph%' OR
                                  `address` LIKE '%$search_ph%' OR
                                  `code` LIKE '%$search_ph%' OR
                                  `contact` LIKE '%$search_ph%' OR
                                  `phone` LIKE '%$search_ph%' OR
                                  `email` LIKE '%$search_ph%' OR
                                  `note` LIKE '%$search_ph%'                              
                              ");
      $dataph = mysqli_fetch_all($res, MYSQLI_ASSOC); 
      //print_r($dataph);
    }
    else {
      $resph = mysqli_query($db, "SELECT * FROM clients");
      $dataph = mysqli_fetch_all($resph, MYSQLI_ASSOC);
    }
    //exit;
}
}
else{
  $resph = mysqli_query($db, "SELECT * FROM clients");
$dataph = mysqli_fetch_all($resph, MYSQLI_ASSOC);
}
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
    <link href="./css/font-awesome.min.css" rel="stylesheet">
    <link href="./css/bootstrap.css" rel="stylesheet">
    <link href="./css/site.css" rel="stylesheet">
    
    <title>Телефонный справочник</title>
</head>
<body>
<body>
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="#">Рабочие справочники</a></li>
                    <li><a href="./phone.php">Телефонный справочник</a></li>
                </ul>
                <ul class="nav navbar-nav">
                  <div class="search-container">
                    <form method="post">
                      <input placeholder="Поиск..." id="search_ph" name="search_ph" value=""></input>
                        <button type="submit" name="btn-search_ph" value="TR"><i class="fa fa-search"></i></button>
                    </form>
                  </div>      
                </ul>
                <ul class="nav navbar-nav navbar-right">                
                    <li><a href="../index.php" id="loginLink">Выполнить вход</a></li>
                </ul>

            </div>
        </div>
    </div>


<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Имя / Название</th>
      <th scope="col">Юридический адрес</th>
      <th scope="col">Идентиф. код</th>
      <!-- <th scope="col">Паспорт / Устав</th> -->
      <th scope="col">Контактное лицо</th>
      <th scope="col">Телефон 1</th>      
      <th scope="col">email</th>
      <th scope="col">Примечание</th>      
    </tr>
  </thead>
  <tbody>
  <?php foreach($dataph as $item):?>
    <tr>      
      <td><?= $item['id'] ?></td>
      <td><?= $item['name'] ?></td>
      <td><?= $item['address'] ?></td>
      <td><?= $item['code'] ?></td>
      <!-- <td><?= $item['passport'] ?></td> -->
      <td><?= $item['contact'] ?></td>      
      <td><?= $item['phone'] ?></td>      
      <td><?= $item['email'] ?></td>
      <td><?= $item['note'] ?></td>      
    </tr>
  <?php endforeach;?>
  </tbody>
</table>
</body>
</html>