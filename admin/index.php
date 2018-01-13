<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>Log-in</title>

  <link rel='stylesheet' href='http://codepen.io/assets/libs/fullpage/jquery-ui.css'>

    <link rel="stylesheet" href="../css/style_login.css" media="screen" type="text/css" />

</head>

<body class="bg">

  <div class="login-card">
    <h1>Log-in</h1><br>
  <form name="frm" method="get">
    <input type="text" name="t1" placeholder="Username" value="admin" disabled="disabled">
    <input type="password" name="t2" placeholder="Password">
	<input type="submit" name="b1" class="login login-submit" value="Login">
   <!-- <input type="submit" name="login" class="login login-submit" value="login" name="b1">-->
  </form>

  <div class="login-help">
  <?php
  include("../php/connection.php");
 // $name=$_GET['t1'];
   echo '<a href="forgot_password.php?mode=edit&name=admin">Forgot Password</a>   • <a href="../index.php">Cancel</a>';
   ?>
  </div>
</div>

<!-- <div id="error"><img src="https://dl.dropboxusercontent.com/u/23299152/Delete-icon.png" /> Your caps-lock is on.</div> -->

  <script src='http://codepen.io/assets/libs/fullpage/jquery_and_jqueryui.js'></script>

</body>
<?php
include("../php/connection.php");
if(isset($_GET['b1']))
{
	//$uname=$_GET['t1'];
	$psw=$_GET['t2'];
	$row=mysql_query("select * from admin_login");
	while($row1=mysql_fetch_array($row))
	{
		//$u=$row1['username'];
		$p=$row1['password'];
		
			if($psw==$p)
			{
				/*echo "<script>alert('Login Sucessfully')</script>";*/
				header("Location:/Pizza_Point/admin/notification.php");				
			}
			else
			{
				echo "<script>alert('Please ! Try Again')</script>";
			}
		}
			
}
?>
</html>
