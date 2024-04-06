
<?php
require_once("dbconnection.php");
//echo '1';
if(!empty($_POST["product"])) 
{
	//echo '2';SELECT * FROM `ups` WHERE `ewaste`='0'
$product=$_POST["product"];
$query=mysqli_query($con," SELECT * FROM $product WHERE `ewaste`='0' ORDER BY `Serial_Number` DESC")or die(mysqli_error($con));
?>
<option value="">Select Serial Number</option>
<?php
while($row=mysqli_fetch_array($query))
{
?>
<option value="<?php echo $row["Serial_Number"]; ?>"><?php echo $row["Serial_Number"]; ?></option>
<?php
}
}
?>