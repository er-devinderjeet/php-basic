<?php

require("connect.php");

session_start();

if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$password = $_POST['password'];
	
	$login_query = "SELECT * FROM `users` WHERE `name`= '".$name."' and `password`='".$password."'";

	$result = mysqli_query($conn, $login_query);
	if (mysqli_fetch_assoc($result)){
		$_SESSION['login_user'] = $name;
		header("Location:dashboard.php");

		}
		else{
			
			header("Location:.php");

		}
	}
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
	Name: <input type="text" name="name" >
	Password: <input type="password" name="password" >
	<input type="submit" name="submit">
</form>