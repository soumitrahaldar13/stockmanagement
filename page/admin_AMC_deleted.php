

<?php
//echo 1;die;
extract($_REQUEST);
include('dbConnection.php');
echo $del;die;
//echo "select * from project where id='$del'";die;
// $sql=mysqli_query($con,"DELETE FROM `amc` where id='$del'");
// $row=mysqli_fetch_array($sql);


mysqli_query($con,"DELETE FROM `amc` where id='$del'");
//echo $del;
echo "<script>alert('delete Sucessfully');window.location.href='admin_AMC.php'; </script>";
 // header("Location:admin_Image.php");





?>