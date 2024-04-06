

<?php
//echo 1;die;
require_once 'dbConnection.php';
    extract($_REQUEST);
    include('dbConnection.php');
  $id = $_GET['id'];
//echo $id;die;
//echo "select * from project where id='$del'";die;

$query=mysqli_query($con," SELECT * FROM `monitor` WHERE `id`='$id'")or die(mysqli_error($con));
                            							// echo 1;die;
                            							while($row=mysqli_fetch_array($query)){
                            							$id=$row['id'];
                            							$BRAND_NAME=$row['BRAND_NAME'];
                            							//$product_name= ups;
                            							$Serial_Number=$row['Serial_Number'];
                            							$date = date("Y-m-d");
                            							$text = acos(2);
                            						}
            //echo "INSERT INTO `byback`(`id`, `product_name`, `serial_no`, `ewaste_date`, `date`, `active`) VALUES ('','ups','$Serial_Number','$date','$text','0')";die;             

$query=$con->query("INSERT INTO `byback`(`id`, `product_name`, `serial_no`, `ewaste_date`, `date`, `active`) VALUES ('','monitor','$Serial_Number','$date','$text','0')");

$query1=$con->query("UPDATE `monitor` SET `ewaste`='1' WHERE `id`='$id'");
//echo $del;
echo "<script>alert('send product Ewaste Sucessfully');window.location.href='admin_monitor.php'; </script>";
 // header("Location:admin_Image.php");

?>