<?php
session_start();
include "Adminheader.php";
include "connect.php";
?>
<form action="" method="post">
<table class="table">

<tr>
    <td colspan="2"><h2>Category</td>

</tr>
<tr>
    <td>Category</td><td><input type="text" name="cat" id=""></td>
</tr>
<tr>
    <td></td><td><input type="submit" value="Submit" name="b1"></td>
</tr>
</table>
<?php
if(isset($_REQUEST["b1"]))
{
    $cat=$_REQUEST["cat"];
    $qry="insert into tbl_category (cat_name) values('$cat')";
    mysqli_query($con,$qry);
}

?>
</form>
<?php
include "Adminfooter.php";
?>