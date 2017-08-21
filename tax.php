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
else
{
$sql="select fullname,paddress,cno,emailid from user_registration where user_id=$user_id";
$res=mysql_query($sql);
$rs=mysql_fetch_array($res);
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
	width: 419px;
	height: 426px;
	z-index: 5;
	left: 428px;
	top: 196px;
}
#apDiv9 {
	position: absolute;
	width: 417px;
	height: 27px;
	z-index: 1;
	font-family: Verdana, Geneva, sans-serif;
	font-size: 18px;
	color: #00F;
}
#apDiv10 {
	position: absolute;
	width: 413px;
	height: 332px;
	z-index: 2;
	left: 3px;
	top: 32px;
}
#apDiv1 #apDiv8 #apDiv10 table {
	font-family: Verdana, Geneva, sans-serif;
	font-size: 14px;
}
</style>
<script>
function getOrderTotal() {
   var icost = document.myform.myprice.value;
   var iqty = document.myform.myqty.value;
   var itax = getSalesTax();
 
   var recurrency = '^[0-9]{1,6}.[0-9]{2}$';
   var reitems = '^([1-9])([0-9]{0,2})$';
 
   if(!icost.match(recurrency)) {
      alert('Please provide an item cost in 0.00 format!');
   }
   else if(!iqty.match(reitems)) {
      alert('Please provide a quantity of 1 to 999!');
   }
   else {
      var itotal = ((icost * iqty) * itax)/100;
      itotal *= 100;
      itotal = Math.ceil(itotal);
      itotal /= 100;
      if(itotal.toFixed) {
         itotal = itotal.toFixed(2);
      }
 
      document.getElementById('mytotal').value = itotal;
   }
}
</script>
<script>
function getSalesTax() {
   var taxarray = document.myform.mytax;
   var retax = '^[1]{1}.[0-9]{1,4}$';
   var i;
 
   for(i=0; i < taxarray.length; i++) {
      if(taxarray[i].checked) {
         if(!taxarray[i].value.match(retax)) {
            alert('Please provide a tax rate from the button list only!');
            return 0;
         }
         else {
            return parseFloat(taxarray[i].value);
         }
      }
   }
 
   return 1.0;
}
</script>
</head>

<body>
<?php
$date=date('Y-m-d');
if(isset($_POST['submit'])) 
{
	$oktotal = '^([1-9]{1})([0-9]{0,}).([0-9]{2})$';
   if(!ereg($oktotal, $_POST['mytotal'])) 
   {
      $message = "<p><strong>Sorry, your input total is not in correct format.</strong></p>n";
   }
   else {
	   $vehiclenum=$_POST['vnumber'];
      $price = $_POST['myprice'];
      $quan = $_POST['myqty'];
      $tax = $_POST['mytax'];
      $total = $_POST['mytotal'];
 
      $sql = "insert into tax(vnumber,myprice,myqty,mytotal,date,usr_id) values('$vehiclenum',$price,$quan,$total,'$date',$user_id)";
	  
      if($rs = mysql_query($sql)) {
         $message = "<p>Your order total of $total has been entered in the database.</p>n";
      }
      else {
         $message = "<p><strong>There was an error entering your order total.</strong></p>n";
      }
   }
}
else {
   $price = '0.00';
   $quan = '1';
   $tax = '1.00';
   $total = '0.00';
}

?>
<div id="apDiv1">
  <div id="apDiv8">
    <div id="apDiv10">
    <form id="myform" name="myform" method="post" action="tax.php">
      <table width="395" height="329" border="0">
        <tr>
          <td>Vehicle Number</td>
          <td>:</td>
          <td><label for="textfield"></label>
          <input type="text" name="vnumber" id="textfield" placeholder="eg:AS06D4775" /></td>
        </tr>
        <tr>
          <td>Vehicle Valuation</td>
          <td>:</td>
          <td><input name="myprice" type="text" id="myprice"  maxlength="10" onchange="getOrderTotal()" placeholder="Amount of the vehicle" /></td>
        </tr>
        <tr>
          <td>Tax Pay Upto(in years)</td>
          <td>:</td>
          <td><input name="myqty" type="text" id="qty" onchange="getOrderTotal()"  maxlength="3" placeholder="eg:enter 2 or 5"/></td>
        </tr>
        <tr>
          <td>Calculate Tax Pay</td>
          <td>:</td>
          <td><p>
            <label>
             <input name="mytax" type="radio" value="1.05" onclick="getOrderTotal()" <? if($tax == '1.05') { echo "checked="checked""; } ?>
              2 years(%)</label>
            <br />
            <label>
             <input name="mytax" type="radio" value="1.0725" onclick="getOrderTotal()" <? if($tax == '1.0725') { echo "checked="checked""; } ?>
              5 years(%)</label>
            <br />
          </p></td>
        </tr>
        <tr>
          <td>Tax Amount</td>
          <td>:</td>
          <td><input name="mytotal" type="text" id="mytotal" readonly="true"  /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td><input name="submit" type="submit" id="submit" value="Pay Tax" />
          <input type="reset" name="button2" id="button2" value="Reset" /></td>
        </tr>
      </table>
      </form>
    </div>
    <div id="apDiv9">Tax Payment</div>
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