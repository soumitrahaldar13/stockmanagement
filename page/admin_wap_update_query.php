<?php
 require_once __DIR__ . '/../dbConnection/dbConnection.php';

  if(ISSET($_POST['update_IP'])){
  //echo 1;die;
    $id = $_POST['ID'];
    
    $box = $_POST['I/O_box'];
    $Active= $_POST['ACTIVE'];
  
  //echo "UPDATE `i/o_box` SET,`I/O_box`=$box,`Active`=$Active WHERE `ID`= '$id' ";die;
  
$query_iobox=$con->query("UPDATE `i/o_box` SET,`I/O_box`=$box,`Active`=$Active WHERE `ID`= '$id'");

if($query_iobox){
echo "<script>alert('your complaint has been done');window.location.href='admin_IObox_New.php'; </script>";
} else {
  echo "failed";

}
  }
?>