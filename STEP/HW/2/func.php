<?php

function get_messages()
{
    global $db;
    $sql_sel = "SELECT id, fname, lname, mname, age, email FROM students";
    $res = mysqli_query($db, $sql_sel);
    $data = mysqli_fetch_all($res, MYSQLI_ASSOC);
    return $data;
}

function add_messges($post)
{
    global $db;
    //var_dump($db);
    extract($post); // создаем переменные
    $sql_ins = "
    INSERT INTO students (`fname`, `lname`, `mname`, `age`, `email`)
        VALUES 
        ('$fname', '$lname', '$mname', '$age', '$email')";
       // var_dump($sql_ins);
    mysqli_query($db, $sql_ins); 
}


function del_messages($id)
{
    global $db;
    //var_dump($db);
    $sql_del = "DELETE FROM students WHERE `id`='$id'";    
    mysqli_query($db, $sql_del);
}

function get_data($id)
{    
    global $db;
    $sql_sel = "SELECT fname, lname, mname, age, email FROM students WHERE `id`='$id'";
    $res = mysqli_query($db, $sql_sel);
    $data = mysqli_fetch_all($res, MYSQLI_ASSOC);
    return $data;
}


function save_messges($post)
{

    global $db;    
    extract($post);
    $sql_sav = "
    UPDATE students 
    SET `fname`= '$fname', `lname` = '$lname', `mname` = '$mname', `age` = '$age', `email`= '$email'
    WHERE `id`='$id'";
    //var_dump($db);            
    mysqli_query($db, $sql_sav);
}

?>