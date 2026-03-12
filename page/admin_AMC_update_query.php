<?php
  require_once __DIR__ . '/../dbConnection/dbConnection.php';
  // require_once('dbConnection.php');
  if(ISSET($_POST['update'])){
    $id = $_POST['id'];
    $tender = $_POST['tender'];
    $START_DATE = $_POST['START_DATE'];
    $REMINDER_DATE = $_POST['REMINDER_DATE'];
    $END_DATE = $_POST['END_DATE'];
   
    //echo "UPDATE `amc` SET `tender`='$tender',`active`='0',`start_date`='$START_DATE',`end_date`='$END_DATE',`Reminder_date`='$REMINDER_DATE' WHERE `id`='$id'";die;

    // mysqli_query($conn, "UPDATE `items` SET `name`='$name',`price`='$price',`description`='$description',`category`='$category' WHERE `id`='$id'") or die(mysqli_error());

    // header("location: admin_item_add.php");
  
$query=$con->query("UPDATE `amc` SET `tender`='$tender',`active`='0',`start_date`='$START_DATE',`end_date`='$END_DATE',`Reminder_date`='$REMINDER_DATE' WHERE `id`='$id'");
if($query){
header("location:admin_AMC.php");
}

  }
?>