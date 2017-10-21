<?php
session_start();
$db=mysqli_connect("localhost","root","","authenticat");
if(isset($_POST['regbtn'])){
	$username=mysql_real_escape_string($_POST['username']);
	$email=mysql_real_escape_string($_POST['email']);
	$password=mysql_real_escape_string($_POST['password']);
	$password2=mysql_real_escape_string($_POST['password2']);
	if($password==$password2){
		$password=md5($password);//hash
		$sql="INSERT INTO users(username,email,password) VALUES('$username','$email','$password')";
		mysqli_query($db,$sql);
		$_SESSION['message']="your logged in";
		$_SESSION['username']=$username;
		header("location:login10.php");
	}
	else{
		$_SESSION['message']="The passwords does not match";
	}
}
?>

<!doctype html>
<html>
<head>

<meta charset="utf-8">
<title>fitness training</title>
<link href="style12.css" rel="stylesheet" type="text/css">
</head>

<body>
<div class="header">
<h1 align="center">ACTIVE FITNESS </h1>
</div>
<?php
	if (isset($_SESSION['message'])) {
		echo "<div id='error_msg'>".$_SESSION['message']."</div>";
		unset($_SESSION['message']);
	}

?>
<div id="frm">
<form action="reg.php" method="post" >
	<table>
		<tr>
			<td>Username:</td>
			<td><input type="text" name="username" class="textInput" required></td>
		</tr>
		<tr>
			<td>Email:</td>
			<td><input type="email" name="email" class="textInput" required></td>
		</tr>
		<tr>
			<td>Password:</td>
			<td><input type="password" name="password" class="textInput" required></td>
		</tr>
		<tr>
			<td>re-Password:</td>
			<td><input type="password" name="password2" class="textInput" required></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="regbtn" id="log" value="register"> <b><a class="ac" href="logout.php">Login</a></b></td>
		</tr>
	</table>
</form>
</div>
</div>
</body>
</html>

<?php