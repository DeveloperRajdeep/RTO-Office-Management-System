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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home</title>
<style type="text/css">
#apDiv1 {
	position: absolute;
	width: 1354px;
	height: 804px;
	z-index: 1;
	left: -10px;
	top: 3px;
	text-align: center;
}
#apDiv2 {
	position: absolute;
	width: 557px;
	height: 61px;
	z-index: 2;
	left: 350px;
	top: 11px;
	font-family: Verdana, Geneva, sans-serif;
	font-size: 36px;
	text-align: center;
	color: #009;
}
#apDiv3 {
	position: absolute;
	width: 1293px;
	height: 52px;
	z-index: 3;
	left: 43px;
	top: 98px;
}
#apDiv1 #apDiv3 table {
	font-family: Verdana, Geneva, sans-serif;
}
#apDiv3 table {
	font-size: 24px;
}
#apDiv3 table {
	font-size: 16px;
}
#apDiv3 table {
	text-align: center;
	font-weight: bold;
}
#apDiv3 table {
	font-weight: normal;
}


#apDiv4 {
	position: absolute;
	width: 284px;
	height: 28px;
	z-index: 2;
	left: 420px;
	top: 162px;
	font-family: Verdana, Geneva, sans-serif;
	font-size: 18px;
}
#apDiv5 {
	position: absolute;
	width: 372px;
	height: 590px;
	z-index: 4;
	left: 420px;
	top: 202px;
	text-align: justify;
}
#apDiv1 #apDiv5 table {
	font-family: Verdana, Geneva, sans-serif;
	font-size: 16px;
	text-align: justify;
}
#apDiv1 #apDiv5 form table tr td {
	font-size: 14px;
}
#apDiv6 {
	position: absolute;
	width: 219px;
	height: 28px;
	z-index: 2;
	top: -39px;
	left: 291px;
}
</style>
</head>

<body>
<div id="apDiv1">
  <div id="apDiv5">
  <form action="prm.php"  method="POST">
    <table width="368" height="584" border="0">
    <?php
	$date=date('Y-m-d');
	  $sql="select DISTINCT(usr_id),fullname,fname,address,email,contact,licence,dob,gender,blood,qualification,date,status,approvedate,licencevalidity from learner where usr_id=$user_id limit 1";
  $res=mysql_query($sql);
  while($row=mysql_fetch_array($res))
  {
  ?>
  		<tr>
  		 <td>Full Name</td>
        <td>:</td>
        <td>
         <input type="text" value='<?php print $row['fullname'];?>' name="txtfullname" readonly required/>
        </td>
      </tr>
     
      <tr>
        <td>Father Name</td>
        <td>:</td>
        <td>
         <input type="text" value='<?php print $row['fname'];?>' name="txtfname" readonly required/> </td>
      </tr>
      <tr>
        <td>Address</td>
        <td>:</td>
        <td>
         <input type="text" value='<?php print $row['address'];?>' name="txtaddress" readonly required/>
        </td>
      </tr>
      <tr>
        <td>Email_Id</td>
        <td>:</td>
        <td>
        <input type="text" value='<?php print $row['email'];?>' name="txtemail" readonly required/></td>
      </tr>
      <tr>
        <td>Phone No.</td>
        <td>:</td>
        <td>
         <input type="text" value='<?php print $row['contact'];?>' name="txtcontact" readonly required/></td>
      </tr>
      <tr>
        <td>Licence Type</td>
        <td>:</td>
        <td>
       <input type="text" value='<?php print $row['licence'];?> wheeler' name="txtlicence" readonly required/> </td>
      </tr>
      <tr>
        <td>Date of Birth</td>
        <td>:</td>
        <td>
        <input type="text" value='<?php print $row['dob'];?>' name="txtdob" readonly required/></td>
      </tr>
      <tr>
        <td>Gender</td>
        <td>:</td>
        <td>
        <input type="text" value='<?php print $row['gender'];?>' name="txtgender" readonly required/></td>
      </tr>
      <tr>
        <td>Blood Group</td>
        <td>:</td>
        <td>
        <input type="text" value='<?php print $row['blood'];?>' name="txtblood" readonly required/></td>
      </tr>
      <tr>

        <td>Qualification</td>
        <td>:</td>
        <td>
        <input type="text" value='<?php print $row['qualification'];?>' name="txtqualification" readonly required/></td>
      </tr>
      <tr>
        <td>Learner Validity</td>
        <td>:</td>
        <td>
        <input type="text" value='<?php print $row['licencevalidity'];?>' name="txtlicencevalidity" readonly required/></td>
      </tr>
      <tr>
        <td>Date of Apply</td>
        <td>:</td>
        <td>
        <input type="text" value='<?php print $date;?>' name="txtdate" readonly required/></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><input type="submit" name="button" id="button" value="Submit" />
          <div id="apDiv6"></div>
          <input type="reset" name="button2" id="button2" value="Reset" /></td>
      </tr>
      <?php
      }
	  ?>    </table>
    </form>
  </div>
<div id="apDiv4">Permanent Licence Form:</div>

  
  <div id="apDiv3">
    <table width="1290" height="48" border="0">
      <tr>
        <td width="81" height="44" bgcolor="#D6D6D6"><a style="text-decoration:none;" href="user_home.php">Profile</a></td>
        <td width="129" bgcolor="#D6D6D6"><a style="text-decoration:none;" href="license.php">Licence</a></td>
        <td width="182" bgcolor="#D6D6D6"><a style="text-decoration:none;" href="status.php">Status of Licence</a></td>
        <td width="154" bgcolor="#D6D6D6"><a style="text-decoration:none;" href="registration.php">Registration</a></td>
        <td width="218" bgcolor="#D6D6D6"><a style="text-decoration:none;" href="statusr.php">Status of Registration</a></td>
        <td width="102" bgcolor="#D6D6D6"><a style="text-decoration:none;" href="tax.php">Tax</a></td>
        <td width="166" bgcolor="#D6D6D6"><a style="text-decoration:none;" href="statust.php">Status of Tax</a></td>
        <td width="107" bgcolor="#D6D6D6"><a style="text-decoration:none;" href="renewal.php">Renewal</a></td>
        <td width="93" bgcolor="#D6D6D6"><a style="text-decoration:none;" href="user_logout.php">Logout</a></td>
      </tr>
    </table>
  </div>
<div id="apDiv2">RTO Management System</div>
</div>
</body>
</html>
