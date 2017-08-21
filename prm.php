<?php

error_reporting(0);

$con = mysql_connect("localhost","root");
if(!$con)
 {
  die('could not connect:' . mysql_error());
    }
	
	
	mysql_select_db("rto",$con);
	
	session_start();
$user=$_SESSION['name'];
$user_id=$_SESSION['user_id'];

$d1=$_POST['txtlicencevalidity'];
//$d2=$_POST['txtdate'];

if( strtotime($d1) < strtotime('now') )
 {
	

$sql="insert into permanent(fullname,fname,address,email,contact,licence,dob,gender,blood,qualification,licencevalidity,date,usr_id) values('$_POST[txtfullname]','$_POST[txtfname]','$_POST[txtaddress]','$_POST[txtemail]','$_POST[txtcontact]','$_POST[txtlicence]','$_POST[txtdob]','$_POST[txtgender]','$_POST[txtblood]','$_POST[txtqualification]','$_POST[txtlicencevalidity]','$_POST[txtdate]',$user_id)";



if(!mysql_query($sql,$con))
{
die('Error:' . mysql_error());
}
echo "Permanent Licence Has been successfully Applied!!!";
header("refresh:3;url=user_home.php");

while($row = mysql_fetch_array($result))
  {
  //echo "<tr>";
 
  //echo "<td>" . $row['fullname'] . "</td>";

  //echo "<td>" . $row['fname'] . "</td>";
  //echo "</tr>";
  }
//echo "</table>";

?>
<HTML>
<HEAD>
<TITLE> VEHICLE </TITLE>
</HEAD>

<BODY>
<H1 align=center>
</html>

<?php
}
else{
echo 'date should be before current date';
header("refresh:3;url=user_home.php");
}
mysql_close($con);

?>
