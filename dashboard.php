<?php
include "sessioncookie.php";
session_start();

if(!isset($_COOKIE['user'])){
	unset($_SESSION['login']);
}

if(isset($_SESSION['login'])){
 echo "<center><h2>Bienvenido Usuario : </h2>" ."<h1>". $_SESSION['login'] ."</h1>". "<h2>---- IP 172.17.0.5 ----</h2></center>";
}
else {
	sessioncookie();
	header("location:dashboard.php");
}

?>
<center><a href="logout.php">Logout</a></center>
