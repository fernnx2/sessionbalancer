<?php
session_start();
unset($_COOKIE['user']);
setcookie("user",null,-1);
unset($_SESSION['login']);
echo "Session Cerrada";
?>
<a href="index.php">Volver al login</a>
