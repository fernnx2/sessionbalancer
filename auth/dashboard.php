<?php
include "../header.php";
include "sessioncookie.php";
session_start();

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
                <table>
                        <thead>
                                <tr>
					<th>UID</th>
					<th>Nombre CN</th>
					<th>Apellido SN</th>
					<th>Actions</th>
				</tr> 
                        </thead> 
                        <tbody>
                </tbody>
                </table>
                </div>


<?php
}
else {
	sessioncookie();
	//header("location:dashboard.php");
}
?>
	<h1>Usuario Logueado</h1>
<center><a class="btn waves-effect waves-light s-100 orange" href="../auth/logout.php">Logout</a></center>

<?php
include("../footer.php");
?>
