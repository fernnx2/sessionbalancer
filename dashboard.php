<?php
include "header.php";
include "sessioncookie.php";
if(!isset($_COOKIE['user'])  || !isset($_COOKIE['password'])){
//unset($_COOKIE['user']);
//unset($_COOKIE['password']);
//setcookie("user",null,-1);
//setcookie('password',null,-1);
unset($_SESSION['user']);
unset($_SESSION['password']);
unset($_SESSION['config']);

}

if(isset($_SESSION['user']) && isset($_SESSION['password'])){

?>
	
	<div class="ed-container">
		<div class="ed-item s-1-5">
			<h3>Usuario Logueado</h3>
		</div>
		<div class="ed-item s-1-5">
			<h2><?php echo $_SESSION['user']; ?></h2>
		</div>
	</div>


<?php
}
else {
	sessioncookie();
	//header("location:dashboard.php");
}
?>
<center><a class="btn waves-effect waves-light s-100 orange" href="logout.php">Logout</a></center>

<?php
include("footer.php");
?>
