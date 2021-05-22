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


function zem3($user, $page){
global $db;    
$res = mysqli_query($db, "SELECT * FROM `orders` 
                          INNER JOIN `clients` ON orders.clientid=clients.id 
                          INNER JOIN `ordersemlp` ON orders.id = ordersemlp.ordersid 
                          WHERE ordersemlp.employid=$user");
$data = mysqli_fetch_all($res, MYSQLI_ASSOC);
require_once $page;
}

function zem3p ($ordersid, $page){
    global $db;    
    $res = mysqli_query($db, "SELECT * FROM `orders` 
                              INNER JOIN `clients` ON orders.clientid=clients.id
                              INNER JOIN `ordersemlp` ON orders.id = ordersemlp.ordersid
                              LEFT JOIN `historyorders` ON orders.id = historyorders.ordersid
                              WHERE orders.id=$ordersid");
    $data = mysqli_fetch_all($res, MYSQLI_ASSOC);
    require_once $page;
    }

    function zem2(){
        global $db;    
        $res = mysqli_query($db, "SELECT * FROM `orders` 
                                  INNER JOIN `clients` ON orders.clientid=clients.id
                                  INNER JOIN `ordersemlp` ON orders.id = ordersemlp.ordersid
                                  INNER JOIN `employees` ON  ordersemlp.employid = employees.id");
        $data = mysqli_fetch_all($res, MYSQLI_ASSOC);
        require_once "zem2.php";
        }
    


function save_zem_event($post)
{
    global $db;
    extract($post); // создаем переменные
    $ddd= date("Y-m-d");
    $sql_ins = "INSERT INTO historyorders (`ordersid`, `event`,`dataevent`) VALUES ('$orderid', '$zemevent','$ddd')";    
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

function change_z2p_obj($post)
{
    global $db;
    extract($post); // создаем переменные
    $sql_ins = "UPDATE orders SET ordername='$zemobj' WHERE id = $orderid";
    mysqli_query($db, $sql_ins);
}

function change_z2p_addr($post)
{
    global $db;
    extract($post); // создаем переменные    
    $sql_ins = "UPDATE orders SET orderaddress='$zemaddr' WHERE id = $orderid";
    mysqli_query($db, $sql_ins);
}

function change_z2p_TD($post)
{
    global $db;
    extract($post); // создаем переменные    
    $sql_ins = "UPDATE orders SET typeorder='$zemTD' WHERE id = $orderid";
    mysqli_query($db, $sql_ins);
}

?>