<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>Show Item</title>

  <link rel='stylesheet' href='http://codepen.io/assets/libs/fullpage/jquery-ui.css'>
    <!--<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Satisfy|Bree+Serif|Candal|PT+Sans">
    <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">-->
    <link rel="stylesheet" href="../css/style_login.css" media="screen" type="text/css" />

</head>
<?php
include("../php/connection.php");
$uoitem_id=$_GET['uoid'];
?>
<body class="bg">

 <div class="login-card" style="width:500px">
  <a href="index.php" style="color:#FF6600" style="left:0">Logout</a>
  <form name="insertfrm" method="get">
  <h1 align="center">Update Offer</h1>
<table border="0" align="center">
<tr>
<td>Enter Item ID  :</td>
<td><input type="text" name="insert_t1" value="<?php echo $uoitem_id ?>"></td>
</tr>
<tr>
<td>Enter Offer Item Qunatity  :</td>
<td><input type="text" name="insert_t2" width="100" height="30"></td>
</tr>
<tr>
<td>Enter Offer Item Name  :</td>
<td><input type="text" name="insert_t3"></td>
</tr>
<tr>
<td>Enter Offer Price  :</td>
<td><input type="text" name="insert_t4"></td>
</tr>
<tr>
<td>Enter Offer Description  :</td>
<td><input type="text" name="insert_t5"></td>
</tr>
<tr>
<td align="center"><input type="submit" value="Save" name="insert_b1" class='btn11' width="50"></td>
<td><input type="submit" name="insert_b2" value="Clear" onClick="reset()" class='btn11' width="50"></td>
</tr>
</table>
</form>

    
  <?php
  
  	if (isset($_GET['insert_b1']))
   {
   		$i_id=$_GET['insert_t1'];
		$i_qty=$_GET['insert_t2'];
  		$i_name=$_GET['insert_t3'];
		$i_price=$_GET['insert_t4'];
		$i_des=$_GET['insert_t5'];
  	//$ser=mysql_query("UPDATE item SET  (insert_t1,insert_t2)WHERE ('$i_name',$i_price)");
	$ser=mysql_query("UPDATE discount_offer SET do_item_name='".$i_name."' , do_item_price='".$i_price."' , do_item_quantity='".$i_qty."' , description='".$i_des."' WHERE do_id='".$i_id."'" );
		if($ser)
		{
			/*echo "<script>alert('Item Updated ')</script>";*/
			header("Location:discount_offer.php");
		}
		else
		{
		    echo "<script>alert(' Plz Try Again....')</script>";
		
		}
	
	}
	
?>
</div>
<!-- <div id="error"><img src="https://dl.dropboxusercontent.com/u/23299152/Delete-icon.png" /> Your caps-lock is on.</div> -->

  <!--<script src='http://codepen.io/assets/libs/fullpage/jquery_and_jqueryui.js'></script>
<script src="js/jquery.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.mixitup.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="contactform/contactform.js"></script>-->
</body>

</html>