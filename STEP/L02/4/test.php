<?php
session_start();

echo "User: ".$_SESSION['my_name']."<br>";
echo "Role: ".$_SESSION['role']."<br>";
?>