<?php 
	session_start();

	// connect to database
	$db = mysqli_connect("localhost", "root", "", "authenticat");

	if (isset($_POST['login_btn'])) {

		$username = mysql_real_escape_string($_POST['username']);
		$password = mysql_real_escape_string($_POST['password']);

		$password = md5($password); // remember we hashed password before storing last time
		$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
		$result = mysqli_query($db, $sql);

		if (mysqli_num_rows($result) == 1) {
			$_SESSION['message'] = "You are now logged in";
			$_SESSION['username'] = $username;
			header("location:new.php"); //redirect to home page
		}else{
			$_SESSION['message'] = "Username/password combination incorrect";
		}
	}
?>



<!DOCTYPE html>
<html>
<head>
	<title>ACTIVE FITNESS</title>
	<link rel="stylesheet" type="text/css" href="style12.css">
</head>
<body>
<div class="header"> 
	<h1>ACTIVE FITNESS</h1>
</div>
<?php
	if (isset($_SESSION['message'])) {
		echo "<div id='error_msg'>".$_SESSION['message']."</div>";
		unset($_SESSION['message']);
	}

?>


<form method="post" action="login10.php">
	<table>
		<tr>
			<td>Username:</td>
			<td><input type="text" name="username" class="textInput" required></td>
		</tr>

		<tr>			<td>Password:</td>
			<td><input type="password" name="password" class="textInput" required></td>
	</tr>

		<tr>
			<td></td>
			<td><input type="submit" name="login_btn" value="Login"> <br><a class="ac" href="reg.php">Signup</a></br></td>
		</tr>
	</table>
</form>
</body>
</html> 