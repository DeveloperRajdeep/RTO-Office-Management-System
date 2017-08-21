<?php
//error_reporting(0);
include 'connect.php';
session_start();
$user=$_SESSION['name'];
$user_id=$_SESSION['user_id'];
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
	width: 1372px;
	height: 634px;
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
	height: 59px;
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
	width: 323px;
	height: 35px;
	z-index: 4;
	left: 45px;
	top: 198px;
	text-align: justify;
	font-family: Verdana, Geneva, sans-serif;
	font-size: 18px;
}
#apDiv5 {
	position: absolute;
	width: 234px;
	height: 27px;
	z-index: 2;
	top: 2px;
}
#apDiv6 {
	position: absolute;
	width: 411px;
	height: 277px;
	z-index: 5;
	left: 385px;
	top: 266px;
}
#apDiv7 {
	position: absolute;
	width: 390px;
	height: 259px;
	z-index: 1;
	left: 10px;
	top: 6px;
}
#apDiv8 {
	position: absolute;
	width: 348px;
	height: 375px;
	z-index: 5;
	left: 445px;
	top: 194px;
}
#apDiv9 {
	position: absolute;
	width: 327px;
	height: 27px;
	z-index: 1;
	font-family: Verdana, Geneva, sans-serif;
	font-size: 18px;
	color: #00F;
}
#apDiv10 {
	position: absolute;
	width: 341px;
	height: 336px;
	z-index: 2;
	left: 3px;
	top: 30px;
}
#apDiv1 #apDiv8 #apDiv10 table {
	font-family: Verdana, Geneva, sans-serif;
	font-size: 14px;
}
</style>
</head>

<body>



<div id="apDiv1">
  <div id="apDiv8">
    <div id="apDiv10">
    
      <table width="332" height="334" border="0">
      <?php
      $sql="select DISTINCT(usr_id),fullname,address,licence from permanent where usr_id=$user_id" ;
  $res=mysql_query($sql);
  while($row=mysql_fetch_array($res))
  {   
  ?>     <tr>
          <td>Licence Id</td>
          <td>:</td>
          <td>
          <input type="text" value='PL00<?php print $row['usr_id'];?>' name="txtfullname" readonly required/></td>
        </tr>
        <tr>
          <td>Name</td>
          <td>:</td>
          <td> <input type="text" value='<?php print $row['fullname'];?>' name="txtfullname" readonly required/></td>
        </tr>
        <tr>
          <td>Address</td>
          <td>:</td>
          <td> <input type="text" value='<?php print $row['address'];?>' name="txtfullname" readonly required/></td>
        </tr>
        <tr>
          <td>Licence Type</td>
          <td>:</td>
          <td> <input type="text" value='<?php print $row['licence'];?> ' name="txtfullname" readonly required/></td>
        </tr>
        <tr>
          <td>Renew for</td>
          <td>:</td>
          <td><label for="select"></label>
            <select name="no_of_years"  id="">
            <option value=' '>== Select ==</option>
               <option value="twoyears">2 years</option>
           <option value="3years">3 years</option>
           <option value="5years">5years</option>
          </select>
           </td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td><input name="submit" type="submit" id="submit" value="Renew" />
         </td>
        </tr>
        <?php
      }
	  ?>
      </table>
      </form>
    </div>
    <div id="apDiv9">Renew Licence</div>
  </div>
  <div id="apDiv4">Welcome 
    <div id="apDiv5"></div>
  </div>
  <div id="apDiv3">
    <table width="1290" height="56" border="0">
      <tr>
        <td width="81" bgcolor="#D6D6D6"><a style="text-decoration:none;" href="user_home.php">Profile</a></td>
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