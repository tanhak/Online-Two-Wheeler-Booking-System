<?php
session_start();
include "Adminheader.php";
include "connect.php";
?>
<style>
    table {
        margin:auto;
    }
th{
    text-align: center;
    padding: 0 auto;
}
</style>
<form method="POST">

<table >
<tr>
    <th> S.No</th>
<th>ID</th>
<th> Name</th>



</tr>
<?php

$qry="Select * from tbl_brand";
$res=mysqli_query($con,$qry);
$q=1;
while($data=mysqli_fetch_assoc($res))
{
?>
<tr><td> <?php echo $q; ?>  </td>  <td><?php echo $data["brand_id"]; ?></td><td><?php echo $data["brand_name"]; ?></td></tr>
<?php
$q++;
}

?>
</table>
</form>
<?php
include "Adminfooter.php";
?>