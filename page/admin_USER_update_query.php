<?php
  require_once 'dbConnection.php';
  // require_once('dbConnection.php');
  if(ISSET($_POST['update'])){
    $id = $_POST['id'];
    $NAME = $_POST['NAME'];
    $DESIGNATION= $_POST['DESIGNATION'];
    $CELL = $_POST['CELL'];
    $FLOOR_NO = $_POST['FLOOR_NO'];
    $MOBILE_NO = $_POST['MOBILE_NO'];


    //echo "UPDATE `user` SET `NAME`='$NAME',`DESIGNATION`='$DESIGNATION',`CELL`='$CELL',`FLOOR_NO`='$FLOOR_NO',`MOBILE_NO`='$MOBILE_NO' WHERE `id`='$id'";die;

    // mysqli_query($conn, "UPDATE `items` SET `name`='$name',`price`='$price',`description`='$description',`category`='$category' WHERE `id`='$id'") or die(mysqli_error());

    // header("location: admin_item_add.php");
  
$query=$con->query("UPDATE `user` SET `NAME`='$NAME',`DESIGNATION`='$DESIGNATION',`CELL`='$CELL',`FLOOR_NO`='$FLOOR_NO',`MOBILE_NO`='$MOBILE_NO' WHERE `id`='$id'");
if($query){
header("location:admin_USER.php");
}

  }
?>