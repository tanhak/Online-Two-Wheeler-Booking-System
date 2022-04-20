<?php
session_start();
include "Adminheader.php";
include "connect.php";
?>
<form action="" method="post"  enctype="multipart/form-data">
<table class="table">

<tr>
    <td colspan="2"><h2>Vehicle</td>

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
    </select></td></tr>
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
<td>Vehicle Name</td><td><input type="text" name="vname" id=""></td><td>Descriptio</td><td><input type="text" name="desc" id=""></td>
</tr>
<tr>
<td>Exshowrom</td><td><input type="text" name="ex" id=""></td><td>Segment</td><td><input type="text" name="seg" id=""></td>
</tr>
<tr>
<td>Milage</td><td><input type="text" name="milage" id=""></td><td>Cubic Capacity</td><td><input type="text" name="cc" id=""></td>
</tr>
<tr>
<td>Color</td><td><input type="text" name="color" id=""></td><td>Weight</td><td><input type="text" name="weight" id=""></td>
</tr>
<tr>
<td>BHP</td><td><input type="text" name="bhp" id=""></td><td>Transmission</td><td><input type="text" name="transmition" id=""></td>
</tr>
<tr>
<td>Tank Capacity</td><td><input type="text" name="tc" id=""></td><td>Image</td><td><input type="file" name="image" id=""></td>
</tr>
<tr>
    <td></td><td><input type="submit" value="Submit" name="b1"></td>
</tr>
</table>
<?php
if(isset($_REQUEST["b1"]))
{
    $cid=$_REQUEST["cat"];
    $uname='admin@gmail.com';
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
    $file = $_FILES['image'];
						  $file_name = $file['name'];
						  $file_type = $file ['type'];
						  $file_size = $file ['size'];
						  $file_path = $file ['tmp_name'];
						//   $f = $_REQUEST['key'];
//Restriction to the image. You can upload any types of file for example video file, mp3 file, .doc or .pdf just mention here in OR condition. 

if($file_name!="" && ($file_type="assets/prod_images/jpeg"||$file_type="assets/prod_images/png"||$file_type="assets/prod_images/gif")&& $file_size<=614400)

if(move_uploaded_file ($file_path,'assets/prod_images/'.$file_name))//"images" is just a folder name here we will load the file.

    $qry="insert into `tbl_ vehicle` (`cid`,`uname`,`scat_id`,`brand_id`,`v_name`,`v_desc`,`ex_showroom`,`segmaent`,`milage`,`Cubic_cappacity`,`color`,`Weight`,`bhp`,`transmition`,`tankcapacity`,`Image`) values('$cid','$uname','$scat','$brand','$vname','$desc','$ex','$seg','$milage','$cc','$color','$weight','$bhp','$trans','$tc','$file_name')";
    mysqli_query($con,$qry);
}

?>
</form>
<?php
include "Adminfooter.php";
?>