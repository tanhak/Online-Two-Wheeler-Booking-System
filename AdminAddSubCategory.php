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
    <td>Category</td><td><select name="cat" id="">

    <?php
$qry="Select * from tbl_category";
$res=mysqli_query($con,$qry);
while($data=mysqli_fetch_assoc($res))
{
    echo '<option value="'.$data["cat_id"].'">'.$data["cat_name"].'</option>';
}
    ?>
    </select></td>
</tr>
<tr>
    <td>SubCategory</td><td><input type="text" name="scat" id=""></td>
</tr>
<tr>
    <td></td><td><input type="submit" value="Submit" name="b1"></td>
</tr>
</table>
<?php
if(isset($_REQUEST["b1"]))
{
    $cat=$_REQUEST["cat"];
    $scat=$_REQUEST["scat"];
    $qry="insert into tbl_subcategory (cat_id,cat_name) values('$cat','$scat')";
    mysqli_query($con,$qry);
}

?>
</form>
<?php
include "Adminfooter.php";
?>