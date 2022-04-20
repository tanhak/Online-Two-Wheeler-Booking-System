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
<th>Category Name</th>
<th>Sub Category</th>


</tr>
<?php

$qry="Select tbl_subcategory.*,tbl_category.cat_name as df from tbl_subcategory join tbl_category on tbl_category.cat_id=tbl_subcategory.cat_id";
$res=mysqli_query($con,$qry);
$q=1;
while($data=mysqli_fetch_assoc($res))
{
?>
<tr><td> <?php echo $q; ?>  </td>  <td><?php echo $data["scat_id"]; ?></td><td><?php echo $data["df"]; ?></td><td><?php echo $data["cat_name"]; ?></td></tr>
<?php
$q++;
}

?>
</table>
</form>
<?php
include "Adminfooter.php";
?>