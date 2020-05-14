
<?php
require("header.php");
if(isset($_COOKIE['user']) && isset($_COOKIE['password'])){
        header("location:dashboard.php");
}
?>

	<div class="ed-container s-1-3"> <div class="ed-item s-1-2"><h2>Sign in</h2></div></div>

	<form  class="ed-container s-1-3" method="post" action="authenticate.php">
		<div class="ed-container">
		<div class="ed-item s-1-2"><label>User</label></div>
		<div class="ed-item s-1-2"><input type="text" name="user" required/> </div>
		</div>
		<div class="ed-container">
		<div class="ed-item s-1-2">
		<label>Password:</label>
		</div>
		<div class="ed-item s-1-2">
		<input type="password" name="password" required/>
		</div>
		</div>
		<div class="ed-item">
		  <button class="btn waves-effect waves-light" type="submit" name="action">Iniciar Session</button>
		</div>
	</form>

<?php
require("footer.php");
?>
