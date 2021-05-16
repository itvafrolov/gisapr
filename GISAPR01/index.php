<?php
//session_start();
require_once "connectdb.php";
require_once "funclogin.php";
if(!empty($_POST))
{
    if($_POST['btn'] == 'Выполнить вход')
    {
    //cохраняем данные от пользователя
        $log = my_login($_POST);
        $a_log = access_login($_POST);
    
        if(!empty($log) && $a_log==3)
        {

            $page = "zem3.php";
            zem3($log, $page);            
            exit;
        }
        if(!empty($log) && $a_log==2)
        {
            zem2();
            exit;
        }
        if(!empty($log) && $a_log==1)
        {

            $page = "zem1.php";
            zem3($log, $page);            
            exit;
        }
        else
        {
            $log = "nologin";    
        }    
    }


    if($_POST['add-btn-z3p'] == 'Добавить')
    {
        if(!empty($_POST['zemevent']) && !empty($_POST['orderid']))
        save_zem_event($_POST);
    }

    if($_POST['change-btn-z2p'] == 'Записать')
    {
        if(!empty($_POST['zemobj']) && !empty($_POST['orderid']))
        change_z2p_obj($_POST);
    }

    if($_POST['change-btn-z2p'] == 'Записать')
    {
        if(!empty($_POST['zemaddr']) && !empty($_POST['orderid']))
        change_z2p_addr($_POST);
    }
    if($_POST['change-btn-z2p'] == 'Записать')
    {
        if(!empty($_POST['zemTD']) && !empty($_POST['orderid']))
        change_z2p_TD($_POST);
    }



}

if(!empty($_GET['fullpage']))
    {
        $user=$_GET['fullpage'];
        $page = "zem3.php";
        zem3($user, $page);
        exit;
        
    }

if(!empty($_GET['fullobjpage']))
    {       
        zem2();
        exit;
        
    }


    if(!empty($_GET['order']))    
    {
        if ($_GET['access']==2)
        {
        $ordersid=$_GET['order'];
        $page = "zem2p.php";
        zem3p($ordersid, $page);
        // echo $_GET['order'];
        exit;
        }
        else 
        {
        $ordersid=$_GET['order'];
        $page = "zem3p.php";
        zem3p($ordersid, $page);
        // echo $_GET['order'];
        exit;
        }
      //zem1p();
    }




?>

<!DOCTYPE html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Выполнить вход в ГИСАПР</title>    
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/site.css" rel="stylesheet">    
<body>
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../index.php" value="ГИСАПР"></a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="#">Информация</a></li>
                    <li><a href="#">Рабочие справочники</a></li>
                    <li><a href="./phone.php">Телефонный справочник</a></li>
                    
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="../index.php" id="loginLink">Выполнить вход</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- *****************************************************  -->
    <div class="container body-content">
        <h2>Выполнить вход.</h2>
        <div class="row">
            <div class="col-md-8">
                <section id="loginForm">
                    <form class="form-horizontal" method="post" novalidate="novalidate">
                        <h4>Используйте для входа свою учетную запись.</h4>
                        <hr>
                        <div class="form-group">
                            <label class="col-md-2 control-label" >Пользователь</label>
                            <div class="col-md-10">
                                <input class="form-control" id="login" name="login">                                
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="Password">Пароль</label>
                            <div class="col-md-10">
                                <input class="form-control" id="Password" name="Password" type="password">                                
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-offset-2 col-md-10">
                                <div class="checkbox">
                                    <input data-val="true" id="RememberMe" name="RememberMe" type="checkbox" value="true">                                    
                                    <label for="RememberMe">Запомнить меня</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-offset-2 col-md-10">
                                <input type="submit" name="btn" value="Выполнить вход" class="btn btn-default" >
                            </div>
                        </div>
                    </form>
                </section>
            </div>
            <div class="col-md-4">
                <section id="socialLoginForm">

                    <h4>Используйте для входа учетную запись.</h4>
                    <hr>
                    <div>
                        <p>
                            В случае отсутствия учетной записи обратитесть к администратору системы для настройки входа в это приложение.
                        </p>
                    </div>


                </section>
            </div>
        </div>

        <hr>
        <footer>
            <p>© 2021 - Система учета ГИСАПР</p>
        </footer>
    
    <br/><br/><br/>
    <?php if($log=="nologin"):  ?>
        <div class="form-group">
        <h4> <span class="span-red"><? echo "Неверное имя или пароль, выполните вход заново."; ?> </span> </h4>
        </div>
    <?php endif; ?>
    </div>
</body>
</html>

