<?php	
	$host="localhost";
	$user="root";
	$password="";
	$db="users";

	$con=mysqli_connect($host,$user,$password);

	if(isset($_POST['username']))	{
		$uname=$_POST['username'];
		$pssd=$_POST['password'];
		$sql="select * from userinfo where user='".$uname."' AND pass='".$pssd."' limit 1";
		
		$result=mysqli_query($con,$sql);
		if($result)	{
			echo "success";
			exit();
		}
		else{
			echo "not found! wanna register?";
			exit();
		}
	}


                                  
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>cluckin' Bell - most delicious pizza in the world at your door</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="loginBox">
		<img src="C:\Users\rishursx\Documents\bell-master\img\user.png" class="user">
		<h2>Welcome to          
Cluckin' bell</h2>
		<form method="POST" action="#">
			<p>Username</p>
			<input type="text" name="username" placeholder="Enter username/mail">
			<p>Password</p>
			<input type="password" name="password" placeholder="••••••••••••••••••">
			<input type="submit" name="" value="Sign In">
			<a href="register.php">New user? Register></a>
		</form>
	</div>
</body>
</html>
