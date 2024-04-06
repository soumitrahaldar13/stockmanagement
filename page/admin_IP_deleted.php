

<?php
//echo 1;die;
extract($_REQUEST);
include('dbConnection.php');
//echo $del;die;
//echo "DELETE FROM `ip` where id='$del'";die;

mysqli_query($con,"DELETE FROM `ip` where id='$del'");
//echo $del;
echo "<script>alert('delete Sucessfully');window.location.href='admin_Dashboard.php'; </script>";
 // header("Location:admin_Image.php");

?>