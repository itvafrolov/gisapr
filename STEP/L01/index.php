<?php

if(empty($_POST))
{
    if(
        isset($_POST['my_btn'])
        && 
        $_POST['my_btn'] == "btn_send" )
    {
        echo "<pre>";
        print_r($_POST);
        echo "<pre>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        <input type="text" name="my_name" id="">
        <br>
        <textarea 
        name="my_area" 
        id=""
        cols="30" 
        fows="20"></textarea>
        <br>
        <select name="" id="" multiple="">
        <option value="">Ukr</option>
        <option value="">Ukr1</option>
        <option value="">Ukr2</option>
        </select>
        <button 
        type="submit"
        name="my_btn"
        value="btn_send"
        >Отправить</button>
    </form>
    <hr>
    <a href="action3.php">кликни меня</a>
</body>
</html>