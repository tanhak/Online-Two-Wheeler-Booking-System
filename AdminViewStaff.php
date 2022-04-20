<?php
session_start();
include "Adminheader.php";
include "connect.php";
?>
<style>
th{
    text-align: left;
    padding: 0 auto;
}


    </style>

<table class="table"  cellspacing="">
<tr>
<th>Serial No</th>
<th> STAFF ID</th>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>Password</th>
<th colspan="3">Action</th>
</tr>
<?php
$qry="select * from tbl_staff ts join tbl_login tl on (ts.s_email=tl.username)";
$res=mysqli_query($con,$qry);
$cnt=0;
while($data=mysqli_fetch_assoc($res))
{
    $cnt +=1;
?>


<tr><td><?php echo $cnt;?></td><td><?php echo $data["staff_id"]; ?></td><td><?php echo $data["s_fname"]; ?></td><td><?php echo $data["s_email"]; ?></td><td><?php echo $data["s_phoneno"]; ?></td><td><?php echo $data["password"]; ?></td>


<td><a href="seditf.php?id=<?php echo $data["staff_id"]; ?>">Edit</a></td>

<td><a href="z_view.php?id=<?php echo $data["staff_id"]; ?>">View</a></td>


<td><a href="sdelete.php?id=<?php echo $data["staff_id"]; ?>">Delete</a></td>
<?php
}
?>
</table>

<?php
include "Adminfooter.php";
?>