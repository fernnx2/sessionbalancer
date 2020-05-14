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
		<div class="ed-item s-1-2">
			<h3>Usuario Logueado</h3>
		</div>
		<div class="ed-item s-1-2">
			<h2><?php echo $_SESSION['user']; ?></h2>
		</div>
		<div class="ed-item">
			<h4>Peticion procesada por el nodo con ip: <?php echo $_SERVER['SERVER_ADDR']; ?></h4>
		<div>
		<div class="ed-item">
			<h4>En el server balanceador: <?php echo $_SERVER['SERVER_HOST']; ?></h4>
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
