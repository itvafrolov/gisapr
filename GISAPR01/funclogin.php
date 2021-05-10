<?php
function my_login($post)
{
    global $db;
    extract($post); // создаем переменные $name и $password 
    $sql_sel = "SELECT * FROM employees";
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

function access_login($post)
{
    global $db;
    extract($post); // создаем переменные $name и $password    
    $sql_sel = "SELECT * FROM employees";
    $res = mysqli_query($db, $sql_sel);
    $data1 = mysqli_fetch_all($res, MYSQLI_ASSOC);
    if(!empty($data1)){    
        foreach($data1 as $item){
            if($item['login']==$login && $item['password']==$Password){
                return $item['access'];               
            }            
        }                   
    }
    return null;    
}

function get_login()
{    
    echo $log;
}


function zem1($log, $page){
global $db;    
$res = mysqli_query($db, "SELECT * FROM `orders` 
                          INNER JOIN `clients` ON orders.clientid=clients.id 
                          INNER JOIN `ordersemlp` ON orders.id = ordersemlp.ordersid 
                          WHERE ordersemlp.employid=$log");
$data = mysqli_fetch_all($res, MYSQLI_ASSOC);
require_once $page;
}

?>