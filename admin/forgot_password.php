<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>Forgot Password</title>

  <link rel='stylesheet' href='http://codepen.io/assets/libs/fullpage/jquery-ui.css'>

    <link rel="stylesheet" href="../css/style_login.css" media="screen" type="text/css" />

</head>

<body class="bg">

  <div class="login-card">
    <h1>Forgot Password</h1><br>
  <form name="frm" method="get">
    <input type="text" name="t1" placeholder="Username" value="admin" >
    <input type="password" name="t2" placeholder="New Password">
	<input type="password" name="t3" placeholder="Conform Password">
	<input type="submit" name="b1" class="login login-submit" value="Submit">
   <!-- <input type="submit" name="login" class="login login-submit" value="login" name="b1">-->
  </form>

  <div class="login-help">
    <a href="index.php">Cancel</a>
  </div>
</div>

<!-- <div id="error"><img src="https://dl.dropboxusercontent.com/u/23299152/Delete-icon.png" /> Your caps-lock is on.</div> -->

  <script src='http://codepen.io/assets/libs/fullpage/jquery_and_jqueryui.js'></script>

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
				echo "<script>alert('Password Updated Successfully')</script><br>";
			}
			else	
				echo mysql_error(),"<br>";
		}
		else
		  echo "<script>alert('plz...Enter Same Password in new Password and Conform Password')</script><br>";
	
}
?>
</html>