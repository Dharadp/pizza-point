<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>Order</title>

  <link rel='stylesheet' href='http://codepen.io/assets/libs/fullpage/jquery-ui.css'>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Satisfy|Bree+Serif|Candal|PT+Sans">
    <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="../css/style_login.css" media="screen" type="text/css" />

</head>

<body class="bg">
  <div class="login-card" style="width:700px">
  <div class="col-md-12  text-center gallery-trigger">
                    <ul>
					    <li><a class="filter" data-filter=".category-1" href="booked_table.php">Show Booked Table</a></li>
                        <li><a class="filter" data-filter=".category-1" href="show_item.php">Show Item</a></li>
                        <li><a class="filter" data-filter=".category-2" href="discount_offer.php">New Offer</a></li>
                        <li><a class="filter" data-filter=".category-3" href="index.php">Logout</a></li>
                        
                    </ul>
                </div>
    <h1><marquee><b><u>Today's Order</u></b></marquee></h1><br>
  <?php
  include("../php/connection.php");
  echo "<table border=1>";
  $row=mysql_query("select * from home_delivery");
	while($row1=mysql_fetch_array($row))
	{
	$cust_id=$row1['hm_id'];
	$cust_name=$row1['hm_name'];
	$cust_email=$row1['hm_email'];
	$cust_pho=$row1['hm_phone'];
	$cust_add=$row1['hm_address'];
	  echo "<tr><td>".$cust_name."<td>".$cust_email."<td>".$cust_pho."<td>".$cust_add."<td><a href='order_delete.php?mode=delete&id=$cust_id' onclick='return del();'><img src='../img/delete.gif'>";
	  
	  echo  "</td></tr>";
	}
  echo "</table>";
?>
</div>

<!-- <div id="error"><img src="https://dl.dropboxusercontent.com/u/23299152/Delete-icon.png" /> Your caps-lock is on.</div> -->

  <script src='http://codepen.io/assets/libs/fullpage/jquery_and_jqueryui.js'></script>
<script src="js/jquery.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.mixitup.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="contactform/contactform.js"></script>
</body>

</html>