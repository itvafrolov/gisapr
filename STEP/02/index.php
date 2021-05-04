<?php
require_once "Student.php";
echo "<h1>Библиотека PDO</h1>";
try
{
$pdo = new PDO( 
    'mysql:host=localhost; dbname=l02; charset=utf8',
    'root',
    ''
    );
$sql = "SELECT * FROM students";
$res = $pdo->query($sql);
/*foreach($res as $row)
{
    echo "
    <p>
    {$row['fname']}  |
    {$row['lname']}  |
    {$row['mname']}  |
    {$row['age']}  |
    {$row['email']}      
    </p>";
}
*/
/*
while($row = $res->fetch(PDO::FETCH_ASSOC))
{
    echo "
    <p>
    {$row['fname']}  ||
    {$row['lname']}  ||
    {$row['mname']}  ||
    {$row['age']}  ||
    {$row['email']}      
    </p>";
}*/


// while($row = $res->fetch(PDO::FETCH_OBJ))
// {
//     echo "
//     <p>
//     {$row->fname}  |||
//     {$row->lname}  |||
//     {$row->mname}  |||
//     {$row->age}    |||
//     {$row->email}      
//     </p>";
// }


// $res->setFetchMode(PDO::FETCH_CLASS, 'Student');
// while($row = $res->fetch())
// {
//     echo "
//     <p>
//     {$row->getFname()}  |
//     {$row->getEmail()}    |
//     {$row->getId()}  
//     </p>";
// }
/*
$res->setFetchMode(PDO::FETCH_ASSOC);
$data = $res->fetchAll();
    echo "<pre>";
    print_r($data);
    echo "</pre>";
*/
/*
$sql_ins = "INSERT INTO 
students (fname, lname, mname, age, email)
VALUES
('tst1','tst1','tst1',100, 'tst1@iua')";

$rows_count = $pdo->exec($sql_ins);
echo $rows_count ;
*/
/*
$fname = 'tst2';
$lname = 'tst2';
$mname = 'tst2';
$age = 202;
$email = 'tst2@i.ua';
$sql_ins = "INSERT INTO 
students (fname, lname, mname, age, email)
VALUES
(?,?,?,?,?)";
$res_ins = $pdo->prepare($sql_ins);
$res_ins->execute([$fname,$lname,$mname,$age,$email]);
*/
/*
$fname = 'tst3';
$lname = 'tst3';
$mname = 'tst3';
$age = 33;
$email = 'tst3@i.ua';
$sql_ins = "INSERT INTO 
students (fname, lname, mname, age, email)
VALUES
(:fname, :lname, :mname, :age, :email)";
$res_ins = $pdo->prepare($sql_ins);
$res_ins->execute([
    ':fname' => $fname,
    ':lname'=> $lname,
    ':mname'=> $mname,
    ':age'=>$age,
    ':email'=>$email]);
*/

/*
$fname = 'tst4';
$lname = 'tst4';
$mname = 'tst4';
$age = 43;
$email = 'tst4@i.ua';
$sql_ins = "INSERT INTO 
students (fname, lname, mname, age, email)
VALUES
(:fname, :lname, :mname, :age, :email)";
$res_ins = $pdo->prepare($sql_ins);
$res_ins->bindParam (':fname', $fname, PDO::PARAM_STR,50);
$res_ins->bindParam (':lname', $lname, PDO::PARAM_STR,50);
$res_ins->bindParam (':mname', $mname, PDO::PARAM_STR,50);
$res_ins->bindParam (':age', $age, PDO::PARAM_INT);
$res_ins->bindParam (':email', $email, PDO::PARAM_STR,50);
$res_ins->execute();
*/

} //try
catch(PDOExeption $e)
{
    echo $e->getMessage();
}
?>