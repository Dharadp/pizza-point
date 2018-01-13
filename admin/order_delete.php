<?php
 include("../php/connection.php");
 $ditem_id=$_GET['id'];
 //echo $ditem_id;
 $delete_item=mysql_query("DELETE from home_delivery WHERE hm_id='".$ditem_id."'");
 if($delete_item)
 {
  // header("Location :Pizza_Point/admin/show_item.php");
   header("Location:notification.php");
  /* echo "<script>alert('Item deleted...')</script>";
   echo '<a href="show_item.php">Go to previous Page</a>';*/
 }
 else
    echo "<script>alert('plz ! try again....')</script>";
?>
