<?php	
	session_start();
	$_SESSION['message']='';
	$mysqli= new mysqli("localhost", "root", "", "users");
if($_SERVER['REQUEST_METHOD']=='POST')	{
	if(isset($_POST['email']))	{
        $uname=$_POST['email'];
        $ph=$_POST['phone'];
		$result = $mysqli->query("SELECT * FROM userinfo WHERE email='$uname' AND phone='$ph'");
		if ( $result->num_rows == 0 ){ 
			$_SESSION['message'] = "User with that username/phone doesn't exist!";
		}
		else { 
				$_SESSION="generating OTP";
		
				header("location: pssd2.php");
			}
			
		}
	}    
                          
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>cluckin' Bell - most delicious pizza in the world at your door</title>
	<link rel="stylesheet" href="style3.css">
</head>
<body>
	<div class="loginBox">
		<h2>change password Step1</h2>
		<form method="POST" action="pssdchange.php">
            <p>email</p>
            <input type="email" name="email" placeholder="someone@mail"required>
            <p>phone</p>
            <input type="phone" name="phone" placeholder="0512987654"required>
            
            
			<input type="submit" name="" value="Get OTP">
		</form>
	<?= $_SESSION['message'] ?></div>
</body>
</html>
