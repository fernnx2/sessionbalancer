<?php
$user = "grupo2";
$password="parcial2";
session_start();

if($_POST['user']==$user && $_POST['password']==$password){
	$_SESSION['login'] = $user;
	setcookie('user', $_POST['user'], time()+30);
	//echo "Bienvenido usuario :  " . $_SESSION['login'] . " ---- IP 172.17.0.4 ----";
	header("location:dashboard.php");
}
else{
	header("location:index.php");
}

?>

