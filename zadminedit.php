<?php
session_start();
include "Adminheader.php";
include "connect.php";



$id=$_GET["id"];


if(isset($_REQUEST["b1"]))
{

    // echo "reached";
    $scat=$_REQUEST["scat"];
    $brand=$_REQUEST["brand"];
    $vname=$_REQUEST["vname"];
    $desc=$_REQUEST["desc"];
    $ex=$_REQUEST["ex"];
    $seg=$_REQUEST["seg"];
    $milage=$_REQUEST["milage"];
    $cc=$_REQUEST["cc"];
    $color=$_REQUEST["color"];
    $weight=$_REQUEST["weight"];
    $bhp=$_REQUEST["bhp"];
    $trans=$_REQUEST["transmition"];
    $tc=$_REQUEST["tc"];
    
    $qry="update `tbl_ vehicle` SET `scat_id`='$scat',`brand_id`='$brand',`v_name`='$vname',`v_desc`='$desc',`ex_showroom`='$ex',`segmaent`='$seg',`milage`='$milage',`Cubic_cappacity`='$cc',`color`='$color',`Weight`='$weight',`bhp`='$bhp',`transmition`='$trans',`tankcapacity`='$tc' WHERE vehicle_id='$id'";
    if(!mysqli_query($con,$qry)){
        echo mysqli_error($con)
;    }
}



$qry12="select * from  `tbl_ vehicle` where vehicle_id='$id'";
$ress=mysqli_query($con,$qry12);
$dataa=mysqli_fetch_assoc($ress);
?>
<form action="" method="post"  enctype="">
<table class="table">

<tr>
    <td colspan="2"><h2>Vehicle</td>

</tr>
<tr>
    <td>Sub Category</td><td><select name="scat" id="">

    <?php
$qry="Select * from tbl_subcategory";
$res=mysqli_query($con,$qry);
while($data=mysqli_fetch_assoc($res))
{
    echo '<option value="'.$data["scat_id"].'">'.$data["cat_name"].'</option>';
}
    ?>
    </select></td>

    <td>Brand</td><td><select name="brand" id="">

<?php
$qry="Select * from tbl_brand";
$res=mysqli_query($con,$qry);
while($data=mysqli_fetch_assoc($res))
{
echo '<option value="'.$data["brand_id"].'">'.$data["brand_name"].'</option>';
}
?>
</select></td>
</tr>
<tr>
<td>Vehicle Name</td><td><input type="text"  value="<?php echo $dataa["v_name"]; ?>" name="vname" id=""></td><td>Descriptio</td><td><input type="text" value="<?php echo $dataa["v_desc"]; ?>" name="desc" id=""></td>
</tr>
<tr>
<td>Exshowrom</td><td><input type="text" value="<?php echo $dataa["ex_showroom"]; ?>"  name="ex" id=""></td><td>Segment</td><td><input type="text" value="<?php echo $dataa["segmaent"]; ?>" name="seg" id=""></td>
</tr>
<tr>
<td>Milage</td><td><input type="text" value="<?php echo $dataa["milage"]; ?>" name="milage" id=""></td><td>Cubic Cappacity</td><td><input type="text" value="<?php echo $dataa["Cubic_cappacity"]; ?>" name="cc" id=""></td>
</tr>
<tr>
<td>Color</td><td><input type="text" value="<?php echo $dataa["color"]; ?>" name="color" id=""></td><td>Weight</td><td><input type="text" value="<?php echo $dataa["Weight"]; ?>" name="weight" id=""></td>
</tr>
<tr>
<td>BHP</td><td><input type="text" value="<?php echo $dataa["bhp"]; ?>" name="bhp" id=""></td><td>Transmition</td><td><input type="text" value="<?php echo $dataa["transmition"]; ?>" name="transmition" id=""></td>
</tr>
<tr>
<td>Tank Cappacity</td><td><input type="text" name="tc" value="<?php echo $dataa["tankcapacity"]; ?>" id=""></td>
</tr>
<tr>
    <td></td><td><input type="submit" value="Submit" name="b1"></td>
</tr>
</table>

</form>
<?php
include "Adminfooter.php";
?>