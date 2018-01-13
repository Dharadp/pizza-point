<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>Show Item</title>

  <link rel='stylesheet' href='http://codepen.io/assets/libs/fullpage/jquery-ui.css'>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Satisfy|Bree+Serif|Candal|PT+Sans">
    <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="../css/style_login.css" media="screen" type="text/css" />

</head>

<body class="bg">

   <h1 style="color:#FFFFFF" align="center">Add New Item</h1>
  <form name="insertfrm" method="get">

<table border="1" align="center">
<tr>
<td style="color:#FFFFFF">Enter Item Name  :</td>
<td><input type="text" name="insert_t1"></td>
</tr>
<tr>
<td style="color:#FFFFFF">Enter Item Price  :</td>
<td><input type="text" name="insert_t2"></td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" value="Save" name="insert_b1" class='btn11'>
<input type="submit" name="insert_b2" value="Clear" onClick="reset()" class='btn11'></td>
</tr>
</table>
</form>

 <div class="login-card" style="width:500px">
        <a href="index.php" style="color:#FF6600" style="left:0">Logout</a>                   
    <h1>Show Item</h1><br>
	
  <?php
  include("../php/connection.php");
  echo "<form method='get' name='frm'>";
  echo "<table border=2 align='center'>";
  $row=mysql_query("select * from item");
	while($row1=mysql_fetch_array($row))
	{
	$i_id=$row1['item_id'];
	$i_name=$row1['item_name'];
	$i_price=$row1['item_price'];
	
	  /*echo "<tr><td bordercolordark='#000000'>".$i_id."<td>".$i_name."<td>(₹.)".$i_price."<td><input type='submit' class='btn11' name='b2' value='Update'>";
	  echo "<td><input type='submit' class='btn11' name='b3' value='Delete'>";
	  echo  "</td></tr>";*/
	  echo "<tr><td bordercolordark='#000000'>".$i_id."<td>".$i_name."<td>(₹.)".$i_price."<td><a href='item_update.php?mode=update&uid=$i_id'><img src='../img/edit.gif'><td><a href='item_delete.php?mode=delete&id=$i_id' onclick='return del();'><img src='../img/delete.gif'>";
	  
	 /* if($_GET['a']='y')
	   {
	   	$res=mysql_query("DELETE  from item WHERE item_id='".$i_id."'");
		 if($res)
			{
				echo "<script>alert('Item Deleted ')</script>";
			}
			else
			{
				echo "<script>alert(' Plz Try Again....')</script>";
			
			}
	   }*/
	}
  echo "</table>";
  echo "</form>";
   
  /* if(isset($_REQUEST['mode']))
	{
		
		$op=$_REQUEST['mode'];//edit | delete
		$id=$_REQUEST['item_id'];	//city_id
	
		if($op=="delete")
		{
			$res=$objtopic_cntl->delete($id);
	
			if($res)
			{
				echo "<script>alert('Record Deleted Successfully');</script><br>"; 
				//header('Location:topic_view.php');
			}
			else	
				echo mysql_error(),"<br>";
		}	
	
	}*/

   if (isset($_GET['insert_b1']))
   {
   		$i_name=$_GET['insert_t1'];
		$i_price=$_GET['insert_t2'];
		
		$res=mysql_query(" insert into item (item_name,item_price)values ('$i_name',$i_price) ");
		
		if($res>0)
		{
			/*echo "<script>alert('Item Inserted ')</script>";*/
			header("Location:show_item.php");
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