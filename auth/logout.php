<?php
session_start();
unset($_COOKIE['user']);
unset($_COOKIE['password']);
setcookie("user",null,-1);
setcookie('password',null,-1);
unset($_SESSION['user']);
unset($_SESSION['password']);
unset($_SESSION['config']);
echo "Session Cerrada";
header("location: ../index.php");
?>
<a href="../index.php">Volver al login</a>
