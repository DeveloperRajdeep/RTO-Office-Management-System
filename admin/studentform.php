<?php
include 'connect.php'
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
#apDiv1 {
	position: absolute;
	width: 375px;
	height: 378px;
	z-index: 1;
	left: 415px;
	top: 15px;
}
#apDiv2 {
	position: absolute;
	width: 357px;
	height: 40px;
	z-index: 2;
	left: 425px;
	top: 24px;
}
#apDiv3 {
	position: absolute;
	width: 356px;
	height: 301px;
	z-index: 1;
	left: 11px;
	top: 61px;
}
</style>
</head>

<body>
<div id="apDiv1">
  <div id="apDiv3">
    <table width="355" height="297" border="1">
      <tr>
        <td>Roll No:</td>
        <td><label for="textfield"></label>
        <input type="text" name="textfield" id="textfield" /></td>
      </tr>
      <tr>
        <td>First Name:</td>
        <td><input type="text" name="textfield2" id="textfield2" /></td>
      </tr>
      <tr>
        <td>Last name:</td>
        <td><input type="text" name="textfield3" id="textfield3" /></td>
      </tr>
      <tr>
        <td>Admission_date:</td>
        <td><input type="text" name="textfield4" id="textfield4" /></td>
      </tr>
      <tr>
        <td>address:</td>
        <td><input type="text" name="textfield5" id="textfield5" /></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><input type="submit" name="button" id="button" value="Submit" /></td>
      </tr>
    </table>
  </div>
</div>
<div id="apDiv2">Student Registration Form</div>
</body>
</html>