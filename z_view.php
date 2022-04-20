<?php
session_start();
include "Adminheader.php";
include "connect.php";
$id=$_GET["id"];
$qry12="select * from  tbl_staff where staff_id='$id'";
$ress=mysqli_query($con,$qry12);
$dataa=mysqli_fetch_assoc($ress);
?>
<form action="" method="post"  enctype="">
<table class="table">


<tr>
<td>First Name</td><td><input type="text" value="<?php echo $dataa["s_fname"]; ?>" readonly name="fname" id=""></td><td>Last Name</td><td><input type="text" value="<?php echo $dataa["s_lname"]; ?>" readonly name="lname" id=""></td>
</tr>
<tr>
<td>Email</td><td><input type="text" value="<?php echo $dataa["s_email"]; ?>" readonly name="email" id=""></td><td>Password</td><td><input type="text" value="<?php echo $dataa["s_password"]; ?>" readonly name="password" id=""></td>
</tr>
<tr>
<td>House NO</td><td><input type="text" value="<?php echo $dataa["s_hno"]; ?>" readonly name="hno" id=""></td><td>District</td><td><input type="text" value="<?php echo $dataa["s_district"]; ?> " readonly name="district" id=""></td>
</tr>
<tr>
<td>Street</td><td><input type="text" readonly value="<?php echo $dataa["s_street"]; ?>" name="street" id=""></td><td>Phone No</td><td><input type="text" value="<?php echo $dataa["s_phoneno"]; ?>" readonly name="ph" id=""></td>
</tr>
<tr>
<td>Salary</td><td><input type="text" value="<?php echo $dataa["s_salary"]; ?>" readonly name="salary" id=""></td></tr>
<!-- <tr>
    <td></td><td><input type="submit" value="Submit" name="b1"></td>
</tr> -->
</table>
<?php
if(isset($_REQUEST["b1"]))
{
    $fname=$_REQUEST["fname"];
    $lname=$_REQUEST["lname"];
    $email=$_REQUEST["email"];
    $password=$_REQUEST["password"];
    $hno=$_REQUEST["hno"];
    $district=$_REQUEST["district"];
    $street=$_REQUEST["street"];
    $ph=$_REQUEST["ph"];
    $salary=$_REQUEST["salary"];
    
    $qry="update tbl_staff set `s_fname`='$fname',`s_lname`='$lname',`s_email`='$email',`s_password`='$password',`s_hno`='$hno',`s_district`='$district',`s_street`='$street',`s_phoneno`='$ph',`s_salary`='$salary' where staff_id='$id'";
    mysqli_query($con,$qry);
}

?>
</form>
<?php
include "Adminfooter.php";
?>