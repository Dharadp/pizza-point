<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>Show Offer</title>

  <link rel='stylesheet' href='http://codepen.io/assets/libs/fullpage/jquery-ui.css'>
    <!--<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Satisfy|Bree+Serif|Candal|PT+Sans">
    <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">-->
    <link rel="stylesheet" href="../css/style_login.css" media="screen" type="text/css" />

</head>

<body class="bg">

   <h1 style="color:#FFFFFF" align="center">Add New Offer</h1>
  <form name="insertfrm" method="get" enctype="multipart/form-data">

<table border="1" align="center">
<tr>
<td style="color:#FFFFFF">Enter Item Quantity  :</td>
<td><input type="text" name="insert_t1"></td>
</tr>
<tr>
<td style="color:#FFFFFF">Enter Item Name  :</td>
<td><input type="text" name="insert_t2"></td>
</tr>
<tr>
<td style="color:#FFFFFF">Enter Item Price  :</td>
<td><input type="text" name="insert_t3"></td>
</tr>
<tr>
<td style="color:#FFFFFF">Description  :</td>
<td><input type="text" name="insert_t4"></td>
</tr>
<tr>
<td style="color:#FFFFFF">Item Image  :</td>
<td><input type="file" name="insert_t5"></td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" value="Save" name="insert_b1" class='btn11'>
<input type="submit" name="insert_b2" value="Clear" onClick="reset()" class='btn11'></td>
</tr>
</table>
</form>

 <div class="login-card" style="width:500px">
  <a href="index.php" style="color:#FF6600" style="left:0">Logout</a>
    <h1>Show Offer</h1><br>
  <?php
  include("../php/connection.php");
  echo "<form method='get' name='frm'>";
  echo "<table border=2 align='center'>";
  $row=mysql_query("select * from discount_offer ");
  //$row=mysql_query("select do_id.discount_offer , item_name.item , do_item_price.discount_offer ,do_item_quantity.discount_offer , description.discount_offer from discount_offer , item");
	while($row1=mysql_fetch_array($row))
	{
	$d_id=$row1['do_id'];
	$i_name=$row1['do_item_name'];
	$d_i_price=$row1['do_item_price'];
	$d_i_qty=$row1['do_item_quantity'];
	$des=$row1['description'];
	
	  echo "<tr><td bordercolordark='#000000'>".$d_id."<td>".$i_name."<td>(₹.)".$d_i_price."<td>(items)".$d_i_qty."<td>".$des."<td><a href='offer_update.php?mode=update&uoid=$d_id'><img src='../img/edit.gif'><td><a onClick='return confirm('are you sure ?')' href='offer_delete.php?mode=update&doid=$d_id' onclick='return del();'><img src='../img/delete.gif'>";
	}
  echo "</table>";
  echo "</form>";

   if (isset($_GET['insert_b1']))
   {
   		$i_qty=$_GET['insert_t1'];
   		$i_name=$_GET['insert_t2'];
		$i_price=$_GET['insert_t3'];
		$i_des=$_GET['insert_t4'];
		$i_image=$_GET['insert_t5'];
		 $target_dir = "admin/offer/";
  //  $target_file = $target_dir . basename($_FILES["insert_t5"]["tmp_name"]);
    $target_file = $target_dir . $i_image;
//echo $target_file;
    /*if (move_uploaded_file($_FILES["insert_t5"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["insert_t5"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
*/
		//$i_image=basename($_FILES['insert_t5']['image']);
		//$ext= GetImageExtension($i_image);
	//	$target_path = "admin/offer/".$i_image;
		//echo $target_path;
		//$res= mysql_query(' insert into discount_offer (do_item_name,do_item_quantity,do_item_price,description)values ('.$i_name.','.$i_qty.','.$i_price.','.$i_des.') ');
		$res=mysql_query(" insert into discount_offer (do_item_name,do_item_quantity,do_item_price,description,do_image)values ('$i_name',$i_qty,$i_price,'$i_des','$target_file') ");
		
		if($res>0)
		{
			/*echo "<script>alert('Item Inserted ')</script>";*/
			header("Location:discount_offer.php");
		}
		else
		{
		    echo "<script>alert(' Plz Try Again....')</script>";
		
		}
		
   }
  if(isset($_GET['b2']))
  {
    header("Location:/Pizza_Point/admin/item_update.php");
  }
  if(isset($_GET['b3']))
  {
     $res=mysql_query("DELETE  from item WHERE item_id=1");
	//$res=mysql_query(" DELETE item (item_id)from(i_id) ");
		
	 if($res>0)
		{
			echo "<script>alert('Item Deleted ')</script>";
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