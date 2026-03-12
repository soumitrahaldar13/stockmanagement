<?php
//echo 1;die;
extract($_REQUEST);
require_once __DIR__ . '/../dbConnection/dbConnection.php';
//echo $del;die;
//echo "$id $uid $SERIAL $ip $emp" ;die;
session_start();

		$text = 'Null';
		// echo"UPDATE `$uid` SET `Delevary_Date`='$text' WHERE `Serial_Number`= '$SERIAL'";
		// echo 1;
		// echo "DELETE FROM `product_add` WHERE `ID`='$id'";die;
		//echo 2;die;
		$count_emp = mysqli_query($con, "SELECT * FROM `product_add` WHERE `IP`='$ip'");
           $count_emp1 = mysqli_num_rows($count_emp); 
           //echo $count1;die;   
           	if($count_emp1 == 1){
               mysqli_query($con, "UPDATE `user` SET `ip_id`='0' WHERE `emp_id`='$emp'");
           	}

		$count = mysqli_query($con, "SELECT * FROM `product_add` WHERE `IP`='$ip'");
           $count1 = mysqli_num_rows($count); 
           //echo $count1;die;   
           	if($count1 == 1){

           		//echo 2;die;
           		mysqli_query($con, "UPDATE `ip` SET `in_use`='0' WHERE `ID`='$ip'");
           		mysqli_query($con,"UPDATE `$uid` SET `Delivery_Date`='$text' WHERE `Serial_Number`= '$SERIAL'");
			
				mysqli_query($con,"DELETE FROM `product_add` WHERE `ID`='$id'");
				echo "<script>alert('PRODUCT return Sucessfully done <br>');window.location.href='admin_Dashboard.php'; </script>";
           	}else{

           		//echo 1;die;
           		mysqli_query($con,"UPDATE `$uid` SET `Delivery_Date`='$text' WHERE `Serial_Number`= '$SERIAL'");		
				mysqli_query($con,"DELETE FROM `product_add` WHERE `ID`='$id'");
				echo "<script>alert('PRODUCT return Sucessfully done.... <br>');window.location.href='admin_Dashboard.php'; </script>";
           	}
         
						 
			

	
?>