<?php
$file = file_get_contents('text.txt');
//echo nl2br($file);

$file = file_get_contents('https://www.google.com/');
$file2 = file_get_contents('https://php.net/');
//echo  htmlspecialchars($file);
file_put_contents('t.txt', $file);
file_put_contents('t.txt', $file2);

?>