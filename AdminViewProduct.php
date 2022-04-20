<?php
session_start();
include "Adminheader.php";
include "connect.php";
?>

<table class="table">
<tr>
<td>S .no</td><td>ID</td ><td>Name</td><td>Image</td>
</tr>
<?php
$qry="select * from `tbl_ vehicle`";
$res=mysqli_query($con,$qry);
$q=1;
while($data=mysqli_fetch_assoc($res))
{
?>
<tr><td><?php echo $q;?></td><td><?php echo $data["vehicle_id"]; ?></td><td><?php echo $data["v_name"]; ?></td><td><img src="assets/prod_images/<?php echo $data["Image"]; ?>" /></td>


<td><a href="zadminedit.php?id=<?php echo $data["vehicle_id"]; ?>">Edit</a></td>


<td><a href="z.php?id=<?php echo $data["vehicle_id"]; ?>">View</a></td>




</td><td><?php
 if($data["status"]=="Inactive")
 {
     echo '<a style="background-color:red" href="Inactive.php?id='.$data["vehicle_id"] .'">INACTIVE</a>';
 }
 else
 {
    echo '<a  href="Inactive.php?id='.$data["vehicle_id"] .'">INAACTIVE</a>';
 }
 ?>

</td>
</td><td><?php
 if($data["status"]=="Active")
 {
     echo '<a style="background-color:green" href="active.php?id='.$data["vehicle_id"] .'">ACTIVE</a>';
 }
 else
 {
    echo '<a  href="active.php?id='.$data["vehicle_id"] .'">ACTIVE</a>';
 }
 ?></td>
<?php
$q++;
}
?>
</table>

<?php
include "Adminfooter.php";
?>