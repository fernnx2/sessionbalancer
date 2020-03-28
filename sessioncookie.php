<?php 

function  sessioncookie(){

if(isset($_COOKIE['user'])){
	$_SESSION['login'] =$_COOKIE['user'];

}
else {
	header("location:index.php");
}

}

?>
