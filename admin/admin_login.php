<?php include 'connect.php';
session_start();
?>
<html>
<title>Admin_Login</title>
<head>
</head>
<body>
<h3>Admin Login</h3>
<?php
$error="";
if(isset($_POST['login']))
{
$user=$_POST['username'];
$pass=$_POST['password'];
$sql=mysql_query("select * from admin_login where username='$user' and password='$pass'");
if(mysql_num_rows($sql)==1)
{
	$_SESSION['user']=$user;
	header("location:admin_login_main.php");
	
}
else
{

		$error="Invalid Username or Password!!!!!";
}



}
?>
<form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
Username:<input type="text" name="username" required="required" placeholder="username"><br><br>
Password:<input type="password" name="password" required="required" placeholder="password"><br><br>
<input type="submit" name="login" value="Login"><br>
<?php echo $error ?>
</form>
</body>
</html>