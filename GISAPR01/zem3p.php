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
                    <li> <a href="index.php?fullpage=<? echo $user ?>"> К списку объектов</a></li>                    
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
    <br/>
    <div class="container input-event-13" >
    <div>
    <label class="col-md-2 control-label" > Заказчик: </label>
    <p class="col-md-10 " > <?= $data[0]['name'] ?> </p>
    <br/>
    <hr/>
    <label class="col-md-2 control-label" > Объект: </label>
    <p class="col-md-10 " > <?= $data[0]['ordername'] ?> </p>
    <br/>
    <hr/>
    <label class="col-md-2 control-label" > Место расположения участка: </label>
    <p class="col-md-10 " > <?= $data[0]['orderaddress'] ?> </p>
    <br/>
    <hr/>
    <label class="col-md-2 control-label" > Тип документации: </label>
    <p class="col-md-10 " > <?= $data[0]['typeorder'] ?> </p>
    <br/>
    <hr/>
    <label class="col-md-2 control-label" > Исполнение: </label>

    <?php foreach($data as $item):?>
    <p class="col-md-13" > <?= $item['event'] ?> : <?= $item['dataevent'] ?> </p> <br>
    <?php endforeach;?>
    <br/>
    <hr/>    
    <div >
    <form  method="post" novalidate="novalidate">      
      <label class="col-md-2 control-label"> Событие: </label>
      <input class="event-form" id="zemevent" name="zemevent"> </input>
      <input style="display: none" id="orderid" name="orderid" value="<?=  $ordersid ?>"> </input>
      <input type="submit" name="add-btn-z3p" value="Добавить" class="btn btn-default" >
</form>
    </div>

    <br/>
    <hr/>
    
      <!-- <?php echo $log?> -->
    <? print_r($data) ?>
    </div>
    </div>



</body>
</html>
