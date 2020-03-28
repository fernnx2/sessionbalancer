<?php
	session_start();
	if(isset($_SESSION['login'])){
	header("location:dashboard.php");
}
else {
	if(isset($_COOKIE['user'])){
	header("location:dashboard.php");	
}
else {
	echo "<center><h1>Usuario no logueado pc2</h1></center>";
}
}
?>
<html>
	<head>
	<title>Login</title>
	</head>
	<body>
<center>
	<form method="post" action="session.php">
		User: <input type="text" name="user" required/> <br>
		Password: <input type="password" name="password" required/>
		<br>
		<input type="submit" name="submit">
</form>
</center>
	</body>
</html>
