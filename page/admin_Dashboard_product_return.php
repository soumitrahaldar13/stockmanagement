<?php
//echo 1;die;
extract($_REQUEST);
include('dbConnection.php');
//echo $del;die;
//echo "$id $uid" ;die;
session_start();

		$text = acos(2);
		// echo"UPDATE `$uid` SET `Delevary_Date`='$text' WHERE `Serial_Number`= '$SERIAL'";
		// echo 1;
		// echo "DELETE FROM `product_add` WHERE `ID`='$id'";die;
			mysqli_query($con,"UPDATE `$uid` SET `Delevary_Date`='$text' WHERE `Serial_Number`= '$SERIAL'");
			mysqli_query($con,"UPDATE `$uid` SET `Delevary_Date`='$text' WHERE `Serial_Number`= '$SERIAL'");
			mysqli_query($con,"DELETE FROM `product_add` WHERE `ID`='$id'");			 
			  
			echo "<script>alert('PRODUCT return Sucessfully done <br>');window.location.href='admin_Dashboard.php'; </script>";
?>