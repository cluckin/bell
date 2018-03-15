<?php	
	session_start();
	$_SESSION['message']='';
	$mysqli= new mysqli("localhost", "root", "", "users");
if($_SERVER['REQUEST_METHOD']=='POST')	{

	if(isset($_POST['username']))	{
		$uname=$_POST['username'];
		$pssd=$_POST['password'];
		$result = $mysqli->query("SELECT * FROM userinfo WHERE user='$uname'");
		
		if ( $result->num_rows == 0 ){ 
			$_SESSION['message'] = "User with that username doesn't exist!";
		}
		else { 
			$userx = $result->fetch_assoc();
			$pssd='';
			$mysqli->query("SELECT pass FROM userinfo WHERE user='$uname' as $pssd2");
			if ( strcmp($pssd,$pssd2)==0 ) {
				
				$_SESSION="SUCCESS";
		
				header("location: index.php");
			}
			else {
				$_SESSION['message'] = "You have entered wrong password, try again!";
			}
		}
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
	
		<img src="img\user.png" class="user">
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
		<div class="alert alert-error"><?= $_SESSION['message'] ?></div>
	</div>
</body>
</html>
