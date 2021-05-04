<?php
function save_messges($post)
{
    global $db;
    extract($post); // создаем переменные $name и $text
    $sql_ins = "
    INSERT INTO gb (`name`, `text`)
        VALUES 
        ('$name', '$text')";

    mysqli_query($db, $sql_ins);
}

function get_messages()
{
    global $db;
    $sql_sel = "SELECT id, name, text, date FROM gb";
    $res = mysqli_query($db, $sql_sel);
    $data = mysqli_fetch_all($res, MYSQLI_ASSOC);
    return $data;
}


?>