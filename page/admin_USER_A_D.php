<?php
  require_once 'dbConnection.php';
    extract($_REQUEST);
    include('dbConnection.php');
  $id = $_GET['id'];
$ACT = $_GET['ACT'];
    //echo "UPDATE `ups` SET `AMC`='$AMC' WHERE `id`='$id'";die;
   echo $ACT;
    if($ACT == 0){
                    $val=1;
                }else{
                 
                   $val=0;
                }

        
 // echo "UPDATE `user` SET `active`='$val' WHERE `id`='$id'";die;
 $query=$con->query("UPDATE `user` SET `active`='$val' WHERE `id`='$id'");

if($query){
 header("location:admin_USER.php");
}

  
?>