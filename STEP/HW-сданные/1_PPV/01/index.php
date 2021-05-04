<?php
// ******  Самостоятельная работа   
//- найти все нечетные числа от 0 до 20 
for($i = 0 ; $i < 20; $i++){
    if ($i %2 != 0){
        echo $i.",  ";
    }
}
echo "<hr>";

/*- найти все числа, которые делятся на 3*/   
for($i = 0 ; $i < 43; $i++){
    if ($i %3 == 0){
        echo $i.",  ";
    }
}
echo "<hr>";
/*- получить сумму: 1^1 + 2^2 + ... 10^10*/
$sum1 = 0;
for($i = 1 ; $i < 11; $i++){
    $sum1 += $i * $i;
    }
echo $sum1;
echo "<hr>";

/*- решить квадратные уровнения:  2x^2 – 5x + 3 = 0 10x^2 + 7x + 25 = 0
Если корни есть - вывести в табличном виде корни. 
Если корней нет - вывести сообщение корней нет без таблицы.   */
$a = 2;
$b = -5;
$c = 3;
$D=($b * $b) - (4 * $a * $c);
if ($D>0){
    $x1=($b* -1 + (sqrt($D)))/(2*$a);
    $x2=($b* -1 - (sqrt($D)))/(2*$a);  
    //echo $D."<br>";    
echo "<table border='1'><tr><td>x1</td><td>".$x1."</td></tr>";
echo "<tr><td>x2</td><td>".$x2."</td></tr></table>";
}
if ($D==0){
    $x3=($b* -1 + (sqrt($D)))/(2*$a);    
    //echo $D."<br>";    
echo "<table border='1'><tr><td>x1</td><td>".$x3."</td></tr></table>";
}
if ($D<0){
    $x3=($b* -1 + (sqrt($D)))/(2*$a);    
    //echo $D."<br>";    
echo "<p>Уравнение не имеет решения</p>";
}

/*
- сформировать массив последовательности Фибоначи из 20 элементов  */
$arrFibo  = array(1,2);
for($i = 2 ; $i < 20; $i++){    
    array_push($arrFibo, ($arrFibo[$i-2] + $arrFibo[$i-1]));       
}
foreach($arrFibo as $item){
    echo $item.", ";
    }
echo "<hr>";

/*
- сформировать массив случайных чисел от -50 до 50 из 10 элементов 
- вывести массив */
$arrRand = array();
for($i = 0 ; $i < 10; $i++){    
    array_push($arrRand, rand(-50,50));
    echo $arrRand[$i].", ";
}
echo "<hr>";
/*- перемешать массив (вывести массив) */
shuffle($arrRand);
foreach($arrRand as $item){
    echo $item.", ";
    }
echo "<hr>";

/*- отсортировать массив по убыванию (вывести массив)   */
rsort($arrRand);
foreach($arrRand as $item){
    echo $item.", ";
    }
echo "<hr>";
/*- сформировать ассоциативный массив студентов группы ("Фамилия" => "Имя") 
- вывести всех студентов в табличном виде №№ Фамилия Имя  */
$students = array('Фролов' => 'Вячеслав', 'Иванов' => 'Евгений', 'Ленский' => 'Евгений', 'Смирнов' => 'Андрей', 'Трофимов' => 'Виктор', 'Маркус' => 'Виктор', 'Будыкина' => 'Оксана');

echo "<table border='1'>";
$i=1;
foreach($students as $k=>$v)
{    
    echo "<tr>";        
        echo "<td>";
        echo "$i";
        echo "</td>";
        echo "<td>";
        echo "$k";
        echo "</td>";
        echo "<td>";
        echo "$v";
        echo "</td>";    
    echo "</tr>";
    $i+=1;
}
echo "</table>";
/* - Вывести отсортированные по алфавиту все имена студентов */
sort($students);
foreach($students as $item){
        echo $item.", ";
    }
echo "<hr>";

/*- вывести в случайном порядке 3 студентов группы.*/

for($i = 0 ; $i < 3; $i++){       
    echo $students[rand(0,7)]."<br>";
}
echo "<hr>";
// 2й вариант
for($i = 0 ; $i < 3; $i++){       
    echo $students[array_rand($students)]."<br>";
}
echo "<hr>";
/* - сформировать ассоц.массив вида ("user1" => "Иванов Иван"). В массиве должно быть минимум 3 элемента.
Из массива создать переменные и вывести их значения */
$arrAssoc = array("user1" => "Иванов Иван","user2" => "Петров Петр","user3" => "Сидоров Сидр","user4" => "Дураков тоже Иван");
print_r($arrAssoc);
echo "<hr>";
/*- сформировать 3 переменные и присвоить им значения. Например, $product1 = "Телефон"
Сформировать ассоциативный массив из переменных. */
$pr1 = "Телефон";
$pr2 = "Часы";
$pr3 = "Пистолет";
$arrProduct = compact("pr1","pr2","pr3");
print_r($arrProduct);
echo "<hr>";

/* - сформировать вложенный массив студентов группы. В массиве должны быть перечислены все студенты группы. 
По каждому студенту указать его скилы.  
Вывести в форматированном виде всех студентов с полной информацией. 
Вывести всех студентов, которые содержат скилы PHP */
$arrStud = array(
    array(
            'name' => 'Frolov V',
            'age' =>'43',
            'like_skills' => array("PHP", "C#", "C++", "C++ ООП", "MS Sql")
    ),
    array(
            'name' => 'Ivanov I',
            'age' =>'42',
            'like_skills' => array("C#", "C++", "C++ ООП", "MS Sql")
    ),
    array(
            'name' => 'Lenskiy E',
            'age' =>'43',
            'like_skills' => array("PHP", "C#", "C++", "C++ ООП", "JS")
    ),
    array(
            'name' => 'Injagin A',
            'age' =>'43',
            'like_skills' => array("C#", "C++", "C++ ООП", "MS Sql")
    )
);

//Функция вывода на экран данных про студентов ---- на ее основе лучше сделать функцию и ее использовать еще раз
// foreach($arrStud as $k=>$v)
// {   
//     echo $k + 1;
//     echo " : ";
//     foreach($v as $k1 => $v1)
//     {        
//         if($k1 != "like_skills" )
//         {
//             echo "$k1".":  "."$v1".", ";
//         }                
//         else
//         {
//             echo "Skills: ";
//             foreach($v1 as $v2){  
//                 echo "$v2".", ";
//             }
//         }
//         echo "<br>";                
//     }
//     echo "<hr>"; 
// }

//Функция вывода на экран данных про конкретного студента
function printArrStud($arrDataStud){
   foreach($arrDataStud as $k1 => $v1)
        {        
            if($k1 != "like_skills" )
            {
                echo "$k1".":  "."$v1".", ";
            }                
            else
            {
                echo "Skills: ";
                foreach($v1 as $v2){  
                    echo "$v2".", ";
                }
            }
            echo "<br>";                
        }
        echo "<hr>"; 
}

//перебираем массив студентов и выводим их на печать
foreach($arrStud as $k=>$v)
{   
    echo $k + 1;
    echo " : ";
    printArrStud($v);
}
echo "<hr>"; 
echo "<hr>"; 

//функция поиска скилов
function sourceSkill($arrDataStud, $skill){
    foreach($arrDataStud as $k1 => $v1)
         {        
             if($k1 == "like_skills" )
             {
                foreach($v1 as $v2){  
                    if ($v2==$skill)
                   return true;
                }
            }
        }
    }

//перебираем массив студентов и выводим на печать по определенному скилу PHP, JS, или можно любой поставить!
foreach($arrStud as $k=>$v)
{   
    if(sourceSkill($v, "MS Sql"))
    {        
        echo $k + 1;
        echo " : ";    
        printArrStud($v);
    }    
}
?>