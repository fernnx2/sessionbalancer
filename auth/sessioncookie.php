<?php 

require("auth.php");
function  sessioncookie(){
$type='cookie';
if(isset($_COOKIE['user']) && isset($_COOKIE['password'])){
	auth($_COOKIE['user'],$_COOKIE['password'],$type);

}
else {
	header("location:../index.php");
}

}

?>
