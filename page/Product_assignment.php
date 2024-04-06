<?php
//echo 1;die;
session_start();
if (isset($_POST['submit_prodict']))
{
	include_once 'dbConnection.php';
		$SELECT_IP = $_POST['SELECT_IP'];
		$SELECT_USER_M = $_POST["USER"];
		$SELECT_product = $_POST["product"];
		$SELECT_Product_Serial = $_POST["Serial_Number"];
		$date = date("Y-m-d");

		//echo"INSERT INTO `$SELECT_product`(`ID`, `IP`, `USER_MOBILE`, `PRODUCT NAME`, `SERIAL_NO`, `DATE_OF_ISSUE`) VALUES ('','$SELECT_IP','$SELECT_USER','$SELECT_product','$SELECT_Product_Serial','$date'))";
		//echo "UPDATE `$SELECT_product` SET `Delevary_Date`='$date' WHERE `Serial_Number`= '$SELECT_Product_Serial'";die;


		//echo"SELECT * FROM `user` WHERE `MOBILE_NO`='$SELECT_USER_M'";die;
		

$q3=mysqli_query($con,"INSERT INTO `product_add`(`ID`, `IP`, `USER_MOBILE`, `PRODUCT NAME`, `SERIAL_NO`, `DATE_OF_ISSUE`) VALUES ('','$SELECT_IP','$SELECT_USER_M','$SELECT_product','$SELECT_Product_Serial','$date')");
			
			$q1=mysqli_query($con,"UPDATE `$SELECT_product` SET `Delevary_Date`='$date' WHERE `Serial_Number`= '$SELECT_Product_Serial'");

				 echo "<script>alert('USER Assignment Sucessfully done <br>');window.location.href='admin_Dashboard.php'; </script>";
					}
					else {
			   echo "failed";
			  
			
				
}

?>