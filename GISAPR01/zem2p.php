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
                    <li> <a href="index.php?fullobjpage=1"> К списку объектов</a></li>                    
                    <li><a href="#">Рабочие справочники</a></li>
                    <li><a href="./phone.php" target="_blank">Телефонный справочник</a></li>                    
                </ul>
                <ul class="nav navbar-nav navbar-right">                 
                    <li><a href="../index.php" id="loginLink">Выход</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- ************ -->
    <br/>
    <div class="row">
    <div class="col-md-7">
        <section id="inputinfo">
            <div class="container input-event-13" >
                <div>
                    <label class="col-md-2 control-label" > Заказчик: </label>
                    <p class="col-md-10 " > <?= $data[0]['name'] ?> </p>
                    <br/>
                    <hr/>
                    <div >
                        <form  method="post" novalidate="novalidate">      
                            <tr>
                                <td><label class="col-md-2 "> Объект: </label></td>
                                <td><input class="col-md-3 event-form" id="zemobj" name="zemobj" value="<?= $data[0]['ordername'] ?>"> </input></td>
                                <td><input style="display: none" id="orderid" name="orderid" value="<?=  $ordersid ?>"> </input></td>
                                <td><input type="submit" name="change-btn-z2p" value="Записать" class="btn btn-default" ><td>
                            </tr>
                        </form>
                    </div>
                    <br>
                    <form  method="post" novalidate="novalidate">      
                        <label class="col-md-2 control-label"> Место расположения участка: </label>
                        <input class="col-md-2 event-form" id="zemaddr" name="zemaddr" value="<?= $data[0]['orderaddress'] ?>"> </input>
                        <input style="display: none" id="orderid" name="orderid" value="<?=  $ordersid ?>"> </input>
                        <input type="submit" name="change-btn-z2p" value="Записать" class="btn btn-default" >
                    </form>
                    <br><br><br>
                    <form  method="post" novalidate="novalidate">      
                        <label class="col-md-2 control-label"> Состав работы: </label>
                        <input class="col-md-2 event-form" id="zemTD" name="zemTD" value="<?= $data[0]['typeorder'] ?>"> </input>
                        <input style="display: none" id="orderid" name="orderid" value="<?=  $ordersid ?>"> </input>
                        <input type="submit" name="change-btn-z2p" value="Записать" class="btn btn-default" >
                    </form>      
                    <hr/>
                    <label class="col-md-2 control-label" > Исполнители: </label>
                        <!-- <?php foreach($data as $item):?>
                            <p class="col-md-13" > <?= $item['event'] ?> : <?= $item['dataevent'] ?> </p> <br>
                        <?php endforeach;?>
                        <br/><hr/>     -->
                    <!-- <div>
                        <form  method="post" novalidate="novalidate">      
                            <label class="col-md-2 control-label"> Событие: </label>
                            <input class="col-md-2 event-form" id="zemevent" name="zemevent"> </input>
                            <input style="display: none" id="orderid" name="orderid" value="<?=  $ordersid ?>"> </input>
                            <input type="submit" name="add-btn-z3p" value="Добавить" class="btn btn-default" >
                        </form>
                    </div> -->
                </div>    
            </div>
        </section>
        </div>
    <div class="col-md-4">
                <section id="socialLoginForm">

                    <h4> Ход выполнения:</h4>
                    <hr>
                    <div>
                    <?php foreach($data as $item):?>
                            <p class="col-md-8" > <?= $item['event'] ?> : <?= $item['dataevent'] ?> </p> <br>
                        <?php endforeach;?>
                    </div>
                    <div>
                        <form  method="post" novalidate="novalidate">      
                            <!-- <label class="col-md-2 control-label" >  </label> -->
                            <input class="event-form" id="zemevent" name="zemevent"> </input>
                            <input style="display: none" id="orderid" name="orderid" value="<?=  $ordersid ?>"> </input>
                            <input type="submit" name="add-btn-z3p" value="Добавить событие" class="col-md-4 btn btn-default" >
                        </form>
                    </div>

                </section>
            </div>
            </div>
    <br/>
    <hr/>
    
      <!-- <?php echo $log?> -->
    <!-- <? print_r($data) ?> -->
    </div>
    </div>



</body>
</html>
