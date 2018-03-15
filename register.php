<?php	
	session_start();
	$_SESSION['message']='';
	$mysqli= new mysqli("localhost", "root", "", "users");
if($_SERVER['REQUEST_METHOD']=='POST')	{
	if(isset($_POST['username']))	{
		$uname=$_POST['username'];
		$pssd=$_POST['password'];
		$em=$_POST['email'];
		$ph=$_POST['phone'];
		$aadh=$_POST['Aadhar'];
		$sql="INSERT INTO userinfo (user,pass,phone,email,Aadhar)"
			."VALUES ('$uname','$pssd','$ph','$em','$aadh')";
		if ($mysqli->query($sql) === true)	{
				$_SESSION['message'] = "Registration successful!"
				."Added $uname to the database!";
				header("location: login.php");
			}
		else	{
			$_SESSION['message'] = 'User could not be added to the database!';
		}
	}    
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
		<form method="POST" action="register.php">
			<p>Username</p>
			<input type="text" name="username" placeholder="e.g. modiji@56inchpizza " required>
			<p>Password</p>
            <input type="password" name="password" placeholder="•••••••••••••••••"required>
            <p>email</p>
            <input type="email" name="email" placeholder="someone@mail"required>
            <p>phone</p>
            <input type="phone" name="phone" placeholder="0512987654"required>
            <p>Aadhar</p>
            <input type="Aadhar" name="Aadhar" placeholder="XXXX-XXXX-XXXX-XXXX"required>
			<input type="submit" name="" value="Register">
		</form>
	<?= $_SESSION['message'] ?></div>
</body>
</html>
