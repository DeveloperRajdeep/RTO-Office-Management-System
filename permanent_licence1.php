<?php
include 'connect.php';
session_start();
$user=$_SESSION['name'];
$user_id=$_SESSION['user_id'];
//$v=$_SESSION['licencevalidity'];
if($user==null)
{
	header("location:user_login.php");
}

?>
<?php
$error="";
if(isset($_POST['submit']))
{
	$name=$_POST['fullname'];
	$fathern=$_POST['fname'];
	$paddress=$_POST['address'];
	$email=$_POST['email'];
	$phone=$_POST['contact'];
	$ltype=$_POST['licence'];
	$dob=$_POST['dob'];
	$gender=$_POST['gender'];
	$bgroup=$_POST['blood'];
	$quali=$_POST['qualification'];
	$licence=$_POST['licencevalidity'];
	
	
	
$sql="insert into permanent(fullname,fname,address,email,contact,licence,dob,gender,blood,qualification,licencevalidity,date,usr_id) values('$name','$fathern','$paddress','$email','$phone','$ltype','$dob','$gender','$bgroup','$quali','$licence','$date',$user_id)";


$res=mysql_query($sql);
if($res=1)
{
	$_SESSION['fullname']=$name;
	$error="Successfully Registered!!!";
	header("refresh:5;url=permanent_licence.php");
}
	else
	{
$error="Registration Failed";

}
}
?>