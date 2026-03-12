<?php
  require_once __DIR__ . '/../dbConnection/dbConnection.php';
  
  if(ISSET($_POST['update_call_log'])){

    //echo 1;die;
    $id = $_POST['id'];
   // echo $id;die;
//SELECT * FROM product_add INNER JOIN ip ON product_add.IP = ip.ID LEFT JOIN user ON product_add.emp_code = user.emp_id ;
$query = mysqli_query($con, " SELECT * FROM product_add INNER JOIN ip ON product_add.IP = ip.ID LEFT JOIN user ON product_add.emp_code = user.emp_id WHERE product_add.ID= '$id'") or die(mysqli_error($con));
                // echo 1;die;
                while ($row = mysqli_fetch_array($query)) {

    $name = $row['NAME'];
    $DESIGNATION = $row['DESIGNATION'];
    $CELL = $row['CELL'];  
    $Mobile = $row['MOBILE_NO'];  
    $FLOOR_NO = $row['FLOOR_NO'];  
    $emp_code = $row['emp_code'];  
    $IP = $row['IP'];  
    $PRODUCT_NAME = $row['PRODUCT_NAME'];  
    $Serial_Number = $row['Serial_Number'];  
                                           } 
    $problem = $_POST['problem'];  
     $text = 'Null';
     $date = date("Y-m-d");


    
    //echo "INSERT INTO `amc_working`(`id`, `name`, `designation`, `floor_no`, `mobile_no`, `emp_no`, `IP`, `product_name`, `SERIAL NUMBER`, `PROBLEM`, `product_upgrade`, `upgrade`, `remark`, `done`, `problem_date`, `problem_solved_date`, `cell`) VALUES ('','$name','$DESIGNATION','$FLOOR_NO','$Mobile','$emp_code','$IP','$PRODUCT_NAME','$Serial_Number','$problem','$text','0','$text','0','$date','$text','$CELL')";die;
  
$query=$con->query("INSERT INTO `amc_working`(`id`, `name`, `designation`, `floor_no`, `mobile_no`, `emp_no`, `IP`, `product_name`, `SERIAL_NUMBER`, `PROBLEM`, `product_upgrade`, `upgrade`, `remark`, `done`, `problem_date`, `problem_solved_date`, `cell`) VALUES ('','$name','$DESIGNATION','$FLOOR_NO','$Mobile','$emp_code','$IP','$PRODUCT_NAME','$Serial_Number','$problem','0','0','$text','0','$date','$text','$CELL')");

if($query){
echo "<script>alert('your complaint has been registered');window.location.href='call_log.php'; </script>";
} else {
  echo "failed";

}

  }
?>