<?php
session_start();
include "Adminheader.php";
include "connect.php";
?>
<form action="" method="post">
<table class="table">

<tr>
    <td colspan="2"><h2>Change Password</td>

</tr>
<tr>
    <td>Oldpassword</td><td><input type="password" name="t1" id=""></td>
</tr>
<tr>
    <td>Newpassword</td><td><input type="password" name="t2" id=""></td>
</tr>
<tr>
    <td>Confirmpassword</td><td><input type="password" name="t3" id=""></td>
</tr>
<tr>
    <td></td><td><input type="submit" value="Submit" name="b1"></td>
</tr>
</table>
<?php
if(isset($_REQUEST["b1"]))
{
    $old=$_REQUEST["t1"];
    $new=$_REQUEST["t2"];
    $cn=$_REQUEST["t3"];
    if($cn==$new)
    {

    $qry="update tbl_login set password='$new' where username='admin@gmail.com' and password='$old'";
    mysqli_query($con,$qry);
    }
    else
    {
        echo"<script>alert('password mismatch')</script>";
    }
}

?>
</form>
<?php
include "Adminfooter.php";
?>