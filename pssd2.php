<?php	
	session_start();
	$_SESSION['message']='';
	$mysqli= new mysqli("localhost", "root", "", "users");
if($_SERVER['REQUEST_METHOD']=='POST')	{
	if(isset($_POST['user']))	{
        $uname=$_POST['user'];
        $pssd=$_POST['password'];
        $otp=$_POST['otp'];
		$result = $mysqli->query("SELECT * FROM userinfo WHERE user='$uname'");
		if ( $result->num_rows == 0 ){ 
			$_SESSION['message'] = "User with that username doesn't exist!";
		}
		else { 
			
            if (strcmp($otp,'37383953')==0 ){ 
                $res=$mysqli->query("UPDATE userinfo SET pass='$pssd' WHERE user='$uname'");
                $_SESSION['message']="OTP";
                header("location: login.php");
            }
			else  {
				$_SESSION['message']="incorrect OTP";
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
	<link rel="stylesheet" href="style4.css">
</head>
<body>
	<div class="loginBox">
		<h2>change password Step2</h2>
		<form method="POST" action="pssd2.php">
        
            <p>username</p>
            <input type="user" name="user" placeholder="username"required>
            <p>new Password</p>
			<input type="password" name="password" placeholder="••••••••••••••••••">
            <p>OTP</p>
            <input type="otp" name="otp" placeholder="XXXX-XXXX"required>
            
			<input type="submit" name="" value="Change Password">
		</form>
	<?= $_SESSION['message'] ?></div>
</body>
</html>
