<?php
require_once "connectdb.php";
require_once "funclogin.php";
if(!empty($_POST))
{
    if($_POST['btn'] == 'Выполнить вход')
    {
    //cохраняем данные от пользователя
    $log = my_login($_POST);
    //echo $log;
    if(!empty($log))
    {
        echo $log;
        exit;
    }
    else
    {
    $log = "nologin";
    //header("Location: {$_SERVER['PHP_SELF']}");    
    }
    //  exit;  
    }
}

// $datalogin = get_login();
// if(!isset($datalogin)){
//     echo $datalogin;
// }
// else 
//     echo "ПИПЕЦ!";
?>

<!DOCTYPE html>
<!-- saved from url=(0037)https://localhost:44315/Account/Login -->
<html class=" js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Выполнить вход в ГИСАПР</title>
    <link href="./css/bootstrap.css" rel="stylesheet">
    <link href="./css/site.css" rel="stylesheet">
    <!-- <script src="./Выполнить вход - приложение ASP.NET_files/modernizr-2.8.3.js.Без названия"></script> -->

    <!-- <object class="chrome-extension://jffafkigfgmjafhpkoibhfefeaebmccg/" style="display: none; visibility: hidden;"></object></head> -->

<body>
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../index.php">ГИСАПР</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="https://localhost:44315/Home/About">Информация</a></li>
                    <li><a href="https://localhost:44315/">Рабочие справочники</a></li>
                    <li><a href="./phone.php">Телефонный справочник</a></li>
                    <li><a href="./phone.php" value="User"></a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <!-- <li><a href="https://localhost:44315/Account/Register" id="registerLink">Регистрация</a></li> -->
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
                        <p>
                            <!-- <a href="https://localhost:44315/Account/Register">Регистрация нового пользователя</a> -->
                        </p>
                    </form>
                </section>
            </div>
            <div class="col-md-4">
                <section id="socialLoginForm">

                    <h4>Используйте для входа учетную запись.</h4>
                    <hr>
                    <div>
                        <p>
                            Внешние службы проверки подлинности не настроены. Обратитесть к администратору системы для 
                            настройки входа в это приложение.
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
    <?php if($log==="nologin"):  ?>
        <div class="form-group">
        <h4><?php echo "Неверное имя или пароль, выполните вход заново."; ?></h4>
        </div>
    <?php endif; ?>
    </div>
</body>
</html>

