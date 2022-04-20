<?php
session_start();
include "Adminheader.php";
include "connect.php";
?>
<style>
th{
    text-align: center;
    padding: 0 auto;
}
</style>
<form method="POST">

<table >
    <tr>
    <td>
<select name="vane" >
<?php
$qry1="Select distinct(v_name) from `tbl_ vehicle` ";
$res1=mysqli_query($con,$qry1);
$cnt=1;
while($data1=mysqli_fetch_array($res1))
{
?>
<option value="<?php echo $data1["v_name"]; ?>"><?php echo $data1["v_name"]; ?></option>
<?php
}
?>
</select>

        </td><td><input type="Submit" name="b1" value="Sort"></td>
    </tr>
<tr>
    <th>Sr.No</th>
<th>ID</th>
<th>User Name</th>
<th>Item Name</th>
<th>Date</th>
<th>Price</th>
</tr>
<?php

if(isset($_REQUEST["b1"]))
{
    $vname=$_REQUEST["vane"];
$qry="select * from `tbl_cartmaster` cm join tbl_cartchild cc on(cm.cmaster_id=cc.master_id) join `tbl_ vehicle` tv on(tv.vehicle_id=cc.item_id) join `tbl_customer` cu on(cm.uname=cu.c_email) where cm.cart_status='booked' and tv.v_name='$vname'";

}
else{
    $qry="select * from `tbl_cartmaster` cm join tbl_cartchild cc on(cm.cmaster_id=cc.master_id) join `tbl_ vehicle` tv on(tv.vehicle_id=cc.item_id) join `tbl_customer` cu on(cm.uname=cu.c_email) where cm.cart_status='booked' ";
}

$res=mysqli_query($con,$qry);
$cnt=1;
while($data=mysqli_fetch_array($res))
{
?>
<tr><td><?php echo $cnt; ?></td><td><?php echo $data["cmaster_id"]; ?></td><td><?php echo $data[27]; ?></td><td><?php echo $data["v_name"]; ?></td><td><?php echo $data["cart_date"]; ?></td><td>5000</td></tr>
<?php
$cnt++;
}

?>
</table>
</form>
<?php
include "Adminfooter.php";
?>