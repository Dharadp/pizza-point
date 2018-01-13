<?php
 include("../php/connection.php");
 $ditem_id=$_GET['doid'];
 //echo $ditem_id;
 $delete_item=mysql_query("DELETE from discount_offer WHERE do_id='".$ditem_id."'");
 if($delete_item)
 {
  // header("Location :Pizza_Point/admin/show_item.php");
   header("Location:discount_offer.php");
  /* echo "<script>alert('Item deleted...')</script>";
   echo '<a href="show_item.php">Go to previous Page</a>';*/
 }
 else
    echo "<script>alert('plz ! try again....')</script>";
?>
