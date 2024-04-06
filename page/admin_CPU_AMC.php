<?php
  require_once 'dbConnection.php';
    extract($_REQUEST);
    include('dbConnection.php');
  $id = $_GET['id'];
$AMC = $_GET['AMC'];
    //echo "UPDATE `ups` SET `AMC`='$AMC' WHERE `id`='$id'";die;
   // echo $AMC;
    if($AMC == 0){
                    $val=1;
                }else{
                 
                   $val=0;
                }

        
 //echo "UPDATE `ups` SET `AMC`='$val' WHERE `id`='$id'";die;
 $query=$con->query("UPDATE `cpu` SET `AMC`='$val' WHERE `id`='$id'");

if($query){
header("location:admin_CPU.php");
}

  
?>