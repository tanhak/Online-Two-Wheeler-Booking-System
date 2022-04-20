<?php
session_start();
include "Adminheader.php";
include "connect.php";
?>

<table class="table">
<tr><td>Sr.No</td>
<td>ID</td><td>Name</td><td>Email</td><td>Phone</td><td>Password</td>
</tr>
<?php
$qry="select * from tbl_vender tv join tbl_login tl on(tv.v_email=tl.username)";
$res=mysqli_query($con,$qry);
$cnt=1;
while($data=mysqli_fetch_assoc($res))
{
?>
<tr><td><?php echo $cnt; ?> </td><td><?php echo $data["vender_id"]; ?></td><td><?php echo $data["v_name"]; ?></td><td><?php echo $data["v_email"]; ?></td><td><?php echo $data["v_phoneno"]; ?></td><td><?php echo $data["password"]; ?></td><td><a href="vedit.php?id=<?php echo $data["vender_id"]; ?>">Edit</a></td><td><a href="vdelete.php?id=<?php echo $data["vender_id"]; ?>">Delete</a></td>
<?php
$cnt++;
}
?>
</table>

<?php
include "Adminfooter.php";
?>