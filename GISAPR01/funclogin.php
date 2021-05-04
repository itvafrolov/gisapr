<?php
function my_login($post)
{
    global $db;
    extract($post); // создаем переменные $name и $password 
    $sql_sel = "SELECT `id`, `fullname`, `login`, `password` FROM employees";
    $res = mysqli_query($db, $sql_sel);
    $data1 = mysqli_fetch_all($res, MYSQLI_ASSOC);
    if(!empty($data1)){    
        foreach($data1 as $item){
            if($item['login']==$login && $item['password']==$Password){
                return $item['id'];               
            }            
        }                   
    }
    return null;    
}

function post_login($post)
{
    //global $db;
    extract($post); // создаем переменные $name и $password    
    return $login;   
}

function get_login()
{    
    return $login;
}



?>