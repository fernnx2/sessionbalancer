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
		<div class="ed-item">
			<table>
				<thead>
					<tr>
						<th>Usuario</th>
						<th>IP server</th>
						<th>Balanceador</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><?php echo $_SESSION['user']; ?></td>
						<td><?php echo $_SERVER['SERVER_ADDR']; ?></td>
						<td><?php echo $_SERVER['HTTP_HOST'];?></td>
					</tr>
				</tbody>
			</table>
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
