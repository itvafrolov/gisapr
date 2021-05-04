<?php
setcookie('my_name','Viacheslav',time()+60*60*24*5);
setcookie('age','100',time()+60*60*24*5);
setcookie('age','100',time()-60*60*24*5);
echo $_COOKIE['my_name'];
echo "<br>";
echo $_COOKIE['age'];


?>