<?php
include "connect.php";
$id=$_GET["id"];
$qry12="update  `tbl_ vehicle` set status='Active' where vehicle_id='$id'";
mysqli_query($con,$qry12);
header('location:AdminViewProduct.php');
?>
