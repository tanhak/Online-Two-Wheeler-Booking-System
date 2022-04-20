<?php
session_start();
include "Adminheader.php";
include "connect.php";
?>
<form action="" method="post"  enctype="">
<table class="table">


<tr>
<td>Staff Name</td><td><select name="sname" id="">

<?php
$qry="Select * from tbl_staff";
$res=mysqli_query($con,$qry);
while($data=mysqli_fetch_assoc($res))
{
echo '<option value="'.$data["staff_id"].'">'.$data["s_fname"].'</option>';
}
?>
</select></td><td>Vender Name</td><td><input type="text" name="name" id=""></td>
</tr>
<tr>
<td>Email</td><td><input type="text" name="email" id=""></td><td>District</td><td><input type="text" name="district" id=""></td>
</tr>
<tr>
<td>Street</td><td><input type="text" name="street" id=""></td><td>Phone No</td><td><input type="text" name="ph" id=""></td>
</tr>

<tr>
    <td></td><td><input type="submit" value="Submit" name="b1"></td>
</tr>
</table>
<?php
if(isset($_REQUEST["b1"]))
{
    $sname=$_REQUEST["sname"];
    $name=$_REQUEST["name"];
    $email=$_REQUEST["email"];
   
    $district=$_REQUEST["district"];
    $street=$_REQUEST["street"];
    $ph=$_REQUEST["ph"];
    
    
    $qry="insert into tbl_vender (`staff_id`,`v_name`,`v_email`,`v_district`,`v_street`,`v_phoneno`) values('$sname','$name','$email','$district','$street','$ph')";
    mysqli_query($con,$qry);
}

?>
</form>
<?php
include "Adminfooter.php";
?>