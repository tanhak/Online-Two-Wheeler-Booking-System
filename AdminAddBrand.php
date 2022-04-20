<?php
session_start();
include "Adminheader.php";
include "connect.php";
?>
<form action="" method="post">
<table class="table">

<tr>
    <td colspan="2"><h2>Brand</td>

</tr>
<tr>
    <td>Brand</td><td><input type="text" name="brand" id=""></td>
</tr>
<tr>
    <td></td><td><input type="submit" value="Submit" name="b1"></td>
</tr>
</table>
<?php
if(isset($_REQUEST["b1"]))
{
    $brand=$_REQUEST["brand"];
    $qry="insert into tbl_brand (brand_name) values('$brand')";
    mysqli_query($con,$qry);
}

?>
</form>
<?php
include "Adminfooter.php";
?>