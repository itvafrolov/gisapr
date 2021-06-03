<?php 
require_once "funclogin.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <link href="./css/bootstrap.css" rel="stylesheet">
    <link href="./css/site.css" rel="stylesheet">
    
    <title>Новый клиент</title>
</head>
<body>
<body>
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li> <a href="index.php?fullobjpage=1"> К списку объектов</a></li>                    
                    <li><a href="./phone.php" target="_blank">Телефонный справочник</a></li>                    
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="../index.php" id="loginLink">Выход</a></li>
                </ul>
            </div>
        </div>
    </div> 
    <!-- /*------------------*/ -->
    <br/>
    <div class="container body-content">
        <h2>Новый клиент:</h2>
        <div class="row">
            <div class="col-md-8">
                <section id="newClient">                
                    <form class="form-horizontal" method="post" novalidate="novalidate">
                        <div class="form-group">
                            <label class="col-md-2 " >Название*</label>
                            <div class="col-md-10">
                                <input class="form-control" id="cl_name" name="cl_name">                                
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2" >Ид. код</label>
                            <div class="col-md-10">
                                <input class="form-control" id="cl_idnum" name="cl_idnum">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2">Юр. адрес</label>
                            <div class="col-md-10">
                                <input class="form-control" id="cl_address" name="cl_address">                                
                            </div>
                        </div>
                        <hr>
                        <h4>Контактное лицо:</h4>
                        <div class="form-group">
                            <label class="col-md-2">Название</label>
                            <div class="col-md-10">
                                <input class="form-control" id="cl_kontact" name="cl_kontact">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2">Телефон*</label>
                            <div class="col-md-10">
                                <input class="form-control" id="cl_k_phone" name="cl_k_phone">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2">email</label>
                            <div class="col-md-10">
                                <input class="form-control" id="cl_k_email" name="cl_k_email">
                            </div>
                        </div>
                        <hr>
                        <h4>Дополнительная информация / примечания:</h4>
                        <div class="form-group">
                            <label class="col-md-2">Примечание 1</label>
                            <div class="col-md-10">
                                <input class="form-control" id="cl_pr1" name="cl_pr1">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2">Примечание 2</label>
                            <div class="col-md-10">
                                <input class="form-control" id="cl_pr2" name="cl_pr2">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-offset-2 col-md-10">
                                <input type="submit" name="btn_z2_cl" value=">>>  Записать  <<<" class="btn btn-default" >
                            </div>
                        </div>
                    </form>
                </section>
            </div>
        
            <div class="col-md-4">
                <section id="socialLoginForm">
                    <h4> Ввод данных для нового клиента.</h4>
                        <hr>
                        <div>
                            <h4>Обязательные поля ввода: </h4>
                            <p>Название клиента и Телефон</p>
                            <hr>
                            <h4>Используются 3 секции: </h4>
                            <p>Общая информация: </p>
                            <p>Во все поля допускается ввод до 255 символов.</p>
                            <h4>Контактное лицо: </h4>
                            <p>Ввод данных по контактному лицу или лицам (если несколько - разделитель писать: '< hr>' без пробела, то же самое и в телефонах и эл. почте)  </p>
                            <h4>Дополнительная информация / примечания:</h4>
                            <p>Любая нужная дополнительная информация</p>
                        </div>
                </section>
            </div>
        </div>
    </div>



</body>
</html>
