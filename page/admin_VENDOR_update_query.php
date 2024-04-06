<?php
  require_once 'dbConnection.php';
  
  if(ISSET($_POST['update'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $Address = $_POST['Address'];
    $mobile = $_POST['mobile'];  
    $date= $_POST['date'];
    // echo "UPDATE `vendor` SET `NAME`='$name',`Address`='$Address',`mobile`='$mobile' WHERE `ID`='$id'";die;

    // mysqli_query($conn, "UPDATE `items` SET `name`='$name',`price`='$price',`description`='$description',`category`='$category' WHERE `id`='$id'") or die(mysqli_error());

    // header("location: admin_item_add.php");
  
$query=$con->query("UPDATE `vendor` SET `NAME`='$name',`Address`='$Address',`mobile`='$mobile' WHERE `ID`='$id'");
if($query){
header("location:admin_VENDOR.php");
}

  }
?>