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

    function zem200(){
        global $db;    
        $res = mysqli_query($db, "SELECT * FROM `orders` 
                                  INNER JOIN `clients` ON orders.clientid=clients.id
                                  INNER JOIN `ordersemlp` ON orders.id = ordersemlp.ordersid
                                  INNER JOIN `employees` ON  ordersemlp.employid = employees.id");                                  
        $data = mysqli_fetch_all($res, MYSQLI_ASSOC);
        //print_r($data);
        require_once "zem2.php";
        }
    
        /*---- второй вариант zem2  ----- */

        /*
        SELECT * FROM (SELECT id, typeorder, ordername, orderaddress, clientid, jobload FROM orders ) as work
SELECT * FROM (SELECT id, typeorder, ordername, clientid, jobload FROM orders) as work
SELECT  FROM clients 
SELECT  FROM ordersemlp
SELECT fullname FROM (SELECT id, fullname FROM employees) as empl 
        
        */


        function zem2(){
            global $db;    
            $res = mysqli_query($db, "SELECT * FROM (SELECT id, numcontract, startcontract,typeorder, ordername, orderaddress, clientid, jobload FROM orders ) as work 
                                      INNER JOIN (SELECT id as idcl, `name` FROM clients) as clnt ON work.clientid=clnt.idcl
                                      INNER JOIN `ordersemlp` ON work.id = ordersemlp.ordersid
                                      INNER JOIN (SELECT id as idempl, fullname FROM employees) as empl ON  ordersemlp.employid = empl.idempl
                                      ");                                    
            $data = mysqli_fetch_all($res, MYSQLI_ASSOC);
            print_r($data);
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

function search_z2p_TD($post){
global $db;    
extract($post);
$res = mysqli_query($db, "SELECT * FROM `orders`
                          INNER JOIN `clients` ON orders.clientid=clients.id
                          INNER JOIN `ordersemlp` ON orders.id = ordersemlp.ordersid 
                          INNER JOIN `employees` ON  ordersemlp.employid = employees.id
                            WHERE jobload LIKE '%$search2%' OR                    
                            typeorder LIKE '%$search2%' OR
                            ordername LIKE '%$search2%' OR
                            orderaddress LIKE '%$search2%' OR
                            `name` LIKE '%$search2%' OR    
                            fullname LIKE '%$search2%'                           
                        ");
$data = mysqli_fetch_all($res, MYSQLI_ASSOC);
require_once "zem2.php";
}

/* БЛОК РАБОТЫ С ТАБЛИЦЕЙ  КЛИЕНТЫ  */

function z2client ()
{
    require_once "zem2client.php";
}  

function add_clients($post)
{
    global $db;
    extract($post); // создаем переменные    
    $sql_ins = "INSERT INTO `clients` (`name`, `address`,`code`, `contact`, `phone`, `email`, `note`,`note2`) 
                VALUES ('$cl_name', '$cl_address','$cl_idnum','$cl_kontact','$cl_k_phone','$cl_k_email','$cl_pr1','$cl_pr2')";
    mysqli_query($db, $sql_ins);  
}
/* функции предупреждения о не записанных данных  в базу или успешно записанных*/
function error101 (){
    echo '<div class="form-group">';
    echo '<h4> <span class="span-red2"> Данные не записаны!</span> </h4>';
    echo '</div>';
}


/*
SELECT * FROM (SELECT id, typeorder, ordername, orderaddress, clientid, jobload FROM orders ) as work
SELECT * FROM (SELECT id, typeorder, ordername, clientid, jobload FROM orders) as work
SELECT  FROM clients 
SELECT  FROM ordersemlp
SELECT fullname FROM (SELECT id, fullname FROM employees) as empl 
*/


?>