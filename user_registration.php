<?php include 'connect.php';
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
#apDiv1 {
	position: absolute;
	width: 1358px;
	height: 634px;
	z-index: 1;
	left: 3px;
	top: 2px;
	background-image: url(images/bg.jpg);
}
#apDiv2 {
	position: absolute;
	width: 351px;
	height: 552px;
	z-index: 1;
	left: 541px;
	top: 64px;
	font-size: 18px;
	font-weight: bold;
	color: #777;
	color: #FF4747;
	border: 1px #000;
	border: 1px solid #F1F1F1;
	-moz-border-radius: 5px;
	border-radius: 15px;
	-moz-box-shadow: 10px 10px 24px #000000;
	-webkit-box-shadow: 10px 10px 24px #000000;
	box-shadow: 10px 10px 24px #000000;
	background-color: #FFF;
}

#apDiv4 {
	position: absolute;
	width: 341px;
	height: 544px;
	z-index: 2;
	left: 5px;
	top: 5px;
}
.txtGen{
	border: 1px solid #B9C4CF;
	background: #FFFFFF;
	margin: 5px 30px 0px 30px;
	border-radius:5px;
	padding: 9px;
	display:block;
	font-size:13px;
	width:75%;
	background: 
		-webkit-gradient(
			linear,
			left top,
			left 25,
			from(#FFFFFF),
			color-stop(4%, #fff),
			to(#FFFFFF)
		);
	background: 
		-moz-linear-gradient(
			top,
			#FFFFFF,
			#fff 1px,
			#fff 25px
			);
	-moz-box-shadow: 0px 0px 3px #fff;
	-webkit-box-shadow: 0px 0px 3px #fff;
	box-shadow: 0px 2px 1px rgba(0, 0, 0, 0.1), 0px 2px 3px rgba(104, 122, 144, 0.25) inset;

}
.txtGen:focus{
	background:#fff;
	 -webkit-box-shadow:0px 1px 1px rgba(255,255,255,0.8) inset, 1px 1px 5px rgba(0,0,0,0.4);
    -moz-box-shadow:0px 1px 1px rgba(255,255,255,0.8) inset, 1px 1px 5px rgba(0,0,0,0.4);
    box-shadow:0px 1px 1px rgba(255,255,255,0.8) inset, 1px 1px 5px rgba(0,0,0,0.4);
	text-shadow:0px 1px 1px rgba(0,0,0,0.2);
}
.styled-button-1 {
	-webkit-box-shadow:rgba(0,0,0,0.2) 0 1px 0 0;
	-moz-box-shadow:rgba(0,0,0,0.2) 0 1px 0 0;
	box-shadow:rgba(0,0,0,0.2) 0 1px 0 0;
	color:#ffffff;
	background-color: #136EAC;
	border-radius:5px;
	-moz-border-radius:5px;
	-webkit-border-radius:5px;
	border:none;
	font-family:'Helvetica Neue',Arial,sans-serif;
	font-size:16px;
	font-weight:700;
	height:32px;
	width:335px;
	padding:4px 16px;
}
.styled-button-1:hover{
     height:32px;
	 cursor:pointer;
    -webkit-box-shadow:0px 1px 1px rgba(255,255,255,0.8) inset, 1px 1px 5px rgba(0,0,0,0.4);
    -moz-box-shadow:0px 1px 1px rgba(255,255,255,0.8) inset, 1px 1px 5px rgba(0,0,0,0.4);
    box-shadow:0px 1px 1px rgba(255,255,255,0.8) inset, 1px 1px 5px rgba(0,0,0,0.4);
	
    color:#fff;}
	.styled-buttn-1:active{
    position:relative;
    top:1px;
    background:#fec354;
    background:-webkit-gradient(linear,left top,left bottom,color-stop(#fec354,0),color-stop(#fecd61,1));
    background:-webkit-linear-gradient(top, #fec354 0%, #fecd61 100%);
    background:-moz-linear-gradient(top, #fec354 0%, #fecd61 100%);
    background:-o-linear-gradient(top, #fec354 0%, #fecd61 100%);
    background:linear-gradient(top, #fec354 0%, #fecd61 100%);
    filter:progid:DXImageTransform.Microsoft.gradient( startColorstr='#fec354', endColorstr='#fecd61',GradientType=0 );
    border-color:#d29a3a #cc9436 #c89133;
    text-shadow:0 1px 0 #fee1a0;
    -webkit-box-shadow:0 1px 1px #d4d4d4, inset 0 1px 0 #fed17e;
    -moz-box-shadow:0 1px 1px #d4d4d4, inset 0 1px 0 #fed17e;
    box-shadow:0 1px 1px #d4d4d4, inset 0 1px 0 #fed17e;
}
#apDiv3 {
	position: absolute;
	width: 349px;
	height: 48px;
	z-index: 2;
	left: 542px;
	top: 12px;
	text-align: center;
	font-family:Aparajita;
	font-size: 35px;
	font-weight: normal;
	background-color: #000066;
	border-radius: 5px;
	color: #E6E6E6;
}

#apDiv5 {
	position: absolute;
	width: 165px;
	height: 17px;
	z-index: 2;
	left: 6px;
	top: 515px;
	font-size: 14px;
}
#apDiv6 {
	position: absolute;
	width: 162px;
	height: 17px;
	z-index: 2;
	left: 173px;
	top: 516px;
	font-size: 14px;
}
</style>
</head>

<body>
<?php
session_start();
$error="";
if(isset($_POST['register']))
{
	$name=$_POST['fullname'];
	$address=$_POST['paddress'];
	$contact=$_POST['cno'];
	$email=$_POST['emailid'];
	$password=$_POST['password'];
	$securityques=$_POST['securityques'];
	$securityans=$_POST['securityans'];
	
	
$sql="insert into user_registration(fullname,paddress,cno,emailid,password,securityques,securityans) values('$name','$address','$contact','$email','$password','$securityques','$securityans')";
	
	
$res=mysql_query($sql);
if($res=1)
{
	$_SESSION['fullname']=$name;
	$error= "Successfully Registered!!!";
	header("refresh:5;url=user_login.php");
}
	else
	{
$error="Registration Failed";

}
}
?>
<div id="apDiv1">
  <div id="apDiv2">
   
    <div id="apDiv4">
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
      <table width="330" height="538">
        <tr>
          <td height="54"><label for="textfield"></label>
          <input type="text" required='required' placeholder="Enter Your Full Name" name="fullname" class="txtGen"  id="textfield" /></td>
        </tr>
        <tr>
          <td height="57"><input type="text" required='required'  placeholder="Enter Your Permanent Address" class="txtGen" name="paddress" id="textfield2" /></td>
        </tr>
        <tr>
          <td><input type="text" required='required' placeholder="Enter Your Contact Number" class="txtGen" name="cno" id="textfield3" /></td>
        </tr>
   
        <tr>
          <td><input type="text" required='required' placeholder="Enter Your Email Id" class="txtGen" name="emailid" id="textfield5" /></td>
        </tr>
        <tr>
          <td><input type="password" required='required' placeholder="Enter Your Password" class="txtGen" name="password" id="textfield6" /></td>
        </tr>
        <tr>
          <td><input type="password" required='required' placeholder="Enter Confirm Password" class="txtGen" name="confirmpass" id="textfield7" /></td>
        </tr>
        <tr>
          <td><label for="select"></label>
            <select name="securityques"  class="txtGen" id="">
            <option value=' '>Choose Your Sequrity Question:</option>
               <option value="petname">What is your pet name?</option>
           <option value="bestfrnd">Who is your best friend?</option>
           <option value="sitemost">Which site do you visit most?</option>
          </select></td>
        </tr>
        <tr>
          <td height="58"><input type="text"  required='required' placeholder="Enter Security Answer" class="txtGen" name="securityans" id="textfield8" /></td>
        </tr>
        <tr>
          <td height="33"><input type="submit" class="styled-button-1" name="register" id="button" value="Register" /></td>
        </tr>
        <tr>
          <td height="22"><div id="apDiv5"><a style="text-decoration:none;" href="user_login.php">I already have an account</a></div>
          <div id="apDiv6"><?php echo $error;?></div></td>
        </tr>
      </table>
      </form>
    </div>
  </div>
  <div id="apDiv3">User Registration Form</div>
</div>
</body>
</html>