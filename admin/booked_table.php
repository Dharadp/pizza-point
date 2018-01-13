<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>Booked Table</title>

  <link rel='stylesheet' href='http://codepen.io/assets/libs/fullpage/jquery-ui.css'>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Satisfy|Bree+Serif|Candal|PT+Sans">
    <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="../css/style_login.css" media="screen" type="text/css" />

</head>

<body class="bg">
  <div class="login-card" style="width:700px">
      <a href="index.php" style="color:#FF6600" style="left:0">Logout</a>
    <h1><marquee><b><u>Show Booked Table</u></b></marquee></h1><br>
  <?php
  include("../php/connection.php");
  echo "<table border=1>";
  $row=mysql_query("select * from book_table");
	while($row1=mysql_fetch_array($row))
	{
	$bk_id=$row1['bk_id'];
	$bk_name=$row1['bk_name'];
	$bk_email=$row1['bk_email'];
	$bk_pho=$row1['bk_phone'];
	$bk_date=$row1['bk_date'];
	$bk_time=$row1['bk_time'];
	$bk_people=$row1['bk_people'];
	$bk_msg=$row1['bk_msg'];
	  echo "<tr><td>".$bk_name."<td>".$bk_email."<td>".$bk_pho."<td>".$bk_date."<td>".$bk_time."<td>".$bk_people."(People)<td>".$bk_msg."<td><a href='booked_table_delete.php?mode=delete&id=$bk_id' onclick='return del();'><img src='../img/delete.gif'>";
	  
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