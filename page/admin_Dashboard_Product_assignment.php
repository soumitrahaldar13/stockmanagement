<?php
//echo 1;die;
require_once __DIR__ . '/../dbConnection/dbConnection.php';
session_start();
if (isset($_POST['submit_product'])) {
	$SELECT_IP = $_POST['ip-dropdown'];
	$emp_code_input = $_POST["emp-code-input"];
	$SELECT_product = $_POST["product"];
	$SELECT_Product_Serial = $_POST["product_serial_no"];
	$date = date("Y-m-d");

	// echo "INSERT INTO `product_add`(`ID`, `IP`, `emp-code`, `PRODUCT_NAME`, `Serial_Number`, `DATE_OF_ISSUE`)VALUES ('','$SELECT_IP','$emp_code_input','$SELECT_product','$SELECT_Product_Serial','$date')";
	// echo"UPDATE `ip` SET `in_use`='1' WHERE `IP`='$SELECT_IP'";
	// echo "UPDATE `$SELECT_product` SET ``Delivery_Date``='$date' WHERE `Serial_Number`= '$SELECT_Product_Serial'";die;


	//echo 0;


	$q3 = mysqli_query($con, "INSERT INTO `product_add`(`ID`, `IP`, `emp_code`, `PRODUCT_NAME`, `Serial_Number`, `DATE_OF_ISSUE`)VALUES ('','$SELECT_IP','$emp_code_input','$SELECT_product','$SELECT_Product_Serial','$date')");
//echo 1;
	$q4=mysqli_query($con, "UPDATE `user` SET `ip_id`='1' WHERE `emp_id`='$emp_code_input'");
	echo 2;
	$q2 = mysqli_query($con, "UPDATE `ip` SET `in_use`='1' WHERE `ID`='$SELECT_IP'");
//echo 4;
	$q1 = mysqli_query($con, "UPDATE `$SELECT_product` SET `Delivery_Date`='$date' WHERE `Serial_Number`= '$SELECT_Product_Serial'");
	//echo 3;die;
	echo "<script>alert('USER Assignment Sucessfully done <br>');window.location.href='admin_Dashboard.php'; </script>";
} else {
	echo "failed";
}
