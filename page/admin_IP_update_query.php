<?php
 require_once __DIR__ . '/../dbConnection/dbConnection.php';

  if(ISSET($_POST['update_IP'])){
  //echo 1;die;
    $id = $_POST['ID'];
    
    $IP = $_POST['IP'];
    $New_IP= $_POST['New_IP'];
  
  //echo "UPDATE `ip` SET `New_IP`= '$New_IP' WHERE `ID`= '$id'";die;
  
$query=$con->query("UPDATE `ip` SET `New_IP`= '$New_IP' WHERE `ID`= '$id'");

if($query){
echo "<script>alert('your complaint has been done');window.location.href='admin_IP_New.php'; </script>";
} else {
  echo "failed";

}
  }
?>