<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Forgot Password</title>
</head>


<body>
<form name="frm2" method="get">
<table border="2" align="center">
<tr>
  <td colspan="3" align="center"> Forgot Password</td>
</tr>
<tr>
<td>Username</td>
<td colspan="2"><input type="text"  name="t1">*</td></tr>
<tr><td> New Password</td>
<td colspan="2"><input type="password" name="t2">*</td>
</tr>
<tr><td> Conform Password</td>
<td colspan="2"><input type="password" name="t3">*</td>
</tr>
<tr>
<td align="center" colspan="3"><input type="submit" name="b1" value="Submit">
<input type="submit" name="b2" value="Cancel"></td></tr>
</table>
</form>
</body>
<?php
include("../php/connection.php");

if(isset($_GET['b1']))
{
	$uname=$_GET['t1'];
	$npsw=$_GET['t2'];
	$cpsw=$_GET['t3'];
	if($npsw==$cpsw)
	{
		$row=mysql_query("UPDATE admin_login SET password='".$npsw."' WHERE username='".$uname."'");
		if($row)
		{
			echo "<script>alert('Record Updated Successfully')</script><br>";
		}
		else	
			echo mysql_error(),"<br>";
	}
	else
	  echo "<script>alert('plz...Enter Same Password in new Password and Conform Password')</script><br>";
	
}
if(isset($_GET['b2']))
{
	header("Location:/pizza_point/admin/index.php");
}
?>


</html>
