<?php
  require_once 'dbConnection.php';
  // require_once('dbConnection.php');
  if(ISSET($_POST['update'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $Address = $_POST['Address'];
    $Mobile = $_POST['Mobile'];
    $START_DATE = $_POST['START_DATE'];
    $REMINDER_DATE = $_POST['REMINDER_DATE'];
    $END_DATE = $_POST['END_DATE'];
   
    $description = $_POST['description'];
    //echo "UPDATE `amc` SET `name`='$name',`address`='$Address',`mobile`='$Mobile',`start_date`='$START_DATE',`end_date`='$END_DATE',`Reminder_date`='$REMINDER_DATE' WHERE `id`='$id'";die;

    // mysqli_query($conn, "UPDATE `items` SET `name`='$name',`price`='$price',`description`='$description',`category`='$category' WHERE `id`='$id'") or die(mysqli_error());

    // header("location: admin_item_add.php");
  
$query=$con->query("UPDATE `amc` SET `name`='$name',`address`='$Address',`mobile`='$Mobile',`start_date`='$START_DATE',`end_date`='$END_DATE',`Reminder_date`='$REMINDER_DATE' WHERE `id`='$id'");
if($query){
header("location:admin_AMC.php");
}

  }
?>