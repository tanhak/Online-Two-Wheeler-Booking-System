<?php
session_start();
include "Adminheader.php";
include "connect.php";
?>
<form method="POST">
<p>
<table>
    <tr>
        <td>StartDate</td>
        <td><input type="text" width="400px" name="t1" id=""></td>
        <td>EndDate</td>
        <td><input type="text" name="t2" id=""></td>
        <td><input type="submit" value="Generate" name="b1"></td>
    </tr>
</table>
</p>
<br>
<br>
<script>
function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>
<div id="printableArea">
<table style="width:100%">
    <tr>
        <td style="width:300px"><img src="images/logo-white.png" width="300px"></td><td><b>Motozone pvt ltd<br>Ernakulam<br>Kochi31</b></td>
    </tr>
    </table>
<table >
<tr>
<th>ID</th><th>User Name</th><th>Item Name</th><th>Date</th><th>Price</th>
</tr>
<?php
if (isset($_REQUEST["b1"]))
{
    $d1=$_REQUEST["t1"];
    $d2=$_REQUEST["t2"];
$qry="select * from `tbl_cartmaster` cm join tbl_cartchild cc on(cm.cmaster_id=cc.master_id) join `tbl_ vehicle` tv on(tv.vehicle_id=cc.item_id) where cm.cart_date between '$d1' and '$d2' and cm.cart_status='booked' ";

$res=mysqli_query($con,$qry);
while($data=mysqli_fetch_assoc($res))
{
?>
<tr><td><?php echo $data["cmaster_id"]; ?></td><td><?php echo $data["uname"]; ?></td><td><?php echo $data["v_name"]; ?></td><td><?php echo $data["cart_date"]; ?></td><td><?php echo "5000"; ?></td></tr>
<?php
}
}
?>
</table>

</div>
<input type="button" onclick="printDiv('printableArea')" value="print!" />
</form>
<?php
include "Adminfooter.php";
?>