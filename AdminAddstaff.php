<?php
session_start();
include "Adminheader.php";
include "connect.php";
?>
<form action="" method="post"  enctype="">
<table class="table">


<tr>
<td>First Name</td><td><input type="text" name="fname" id=""></td><td>Last Name</td><td><input type="text" name="lname" id=""></td>
</tr>
<tr>
<td>Email</td><td><input type="text" name="email" id=""></td><td>Password</td><td><input type="password" name="password" id=""></td>
</tr>
<tr>
<td>House NO</td><td><input type="text" name="hno" id=""></td><td>District</td><td><input type="text" name="district" id=""></td>
</tr>
<tr>
<td>Street</td><td><input type="text" name="street" id=""></td><td>Phone No</td><td><input type="text" name="ph" id=""></td>
</tr>
<tr>
<td>Salary</td><td><input type="text" name="salary" id=""></td></tr>
<tr>
    <td></td><td><input type="submit" value="Submit" name="b1"></td>
</tr>
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
    
    $qry="insert into tbl_staff (`s_fname`,`s_lname`,`s_email`,`s_password`,`s_hno`,`s_district`,`s_street`,`s_phoneno`,`s_salary`) values('$fname','$lname','$email','$password','$hno','$district','$street','$ph','$salary')";
    mysqli_query($con,$qry);
    $qry="insert into tbl_login values('$email','$password','Staff')";
    mysqli_query($con,$qry);
}

?>
</form>
<?php
include "Adminfooter.php";
?>