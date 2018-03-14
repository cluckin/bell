<?php	
	$host="localhost";
	$user="root";
	$password="";
	$db="users";

	mysqli_connect($host,$user,$password);

	if(isset($_POST['username']))	{
		$uname=$_POST['username'];
		$pssd=$_POST['password'];
		$sql="";
	}                               
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>cluckin' Bell - most delicious pizza in the world at your door</title>
	<link rel="stylesheet" href="style2.css">
</head>
<body>
	<div class="loginBox">
		<h2>Register, Mitron!</h2>
		<form method="POST" action="#">
			<p>Username</p>
			<input type="text" name="username" placeholder="e.g. modiji@56inchpizza ">
			<p>Password</p>
            <input type="password" name="password" placeholder="••••••••••••••••••">
            <p>email</p>
            <input type="email" name="email" placeholder="someone@mail">
            <p>phone</p>
            <input type="phone" name="phone" placeholder="0512987654">
            <p>Aadhar</p>
            <input type="Aadhar" name="Aadhar" placeholder="XXXX-XXXX-XXXX-XXXX">
			<input type="submit" name="" value="Register">
		</form>
	</div>
</body>
</html>
