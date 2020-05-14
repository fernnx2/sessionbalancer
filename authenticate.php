<?php 

require("auth.php");
$type="post";
$user="protocolos";
$password="pdc135";
if($_POST['user']==$user && $_POST['password']==$password){
auth($_POST['user'],$_POST['password'],$type);
}
else{
	header("location:index.php");
}

?>
