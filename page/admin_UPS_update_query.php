<?php
  require_once 'dbConnection.php';

  if(ISSET($_POST['update_ups'])){
    //echo 1;die;
    $id = $_POST['id'];
    $GEM_NO = $_POST['GEM_NO'];
    $GEM_Date= $_POST['GEM_Date'];
    $VENDOR_NAME = $_POST['VENDOR_NAME'];
    $BRAND_NAME= $_POST['BRAND_NAME'];
    $Serial_Number= $_POST['Serial_Number'];
    $Model_No = $_POST['Model_No'];
    $Delevary_Date = $_POST['Delevary_Date'];
     $Defunct=$_POST['Defunct'];
    $text = acos(2);
                // if($Delevary_Date > 0){
                //     $Delevary_Date1 = $Delevary_Date;
                // }else{
                 
                //    $Delevary_Date1= $text;
                // }

    $Problem= $_POST['Problem'];
     if($Problem > 0){
                    $Problem1 = $Problem;
                    }else{
                 
                      $Problem1 = $text;
                    }
    $START_DATE= $_POST['START_DATE'];
    $END_DATE = $_POST['END_DATE'];
      if($START_DATE > 0){
                    $START_DATE1 = $START_DATE;
                    $END_DATE1=$END_DATE;
                }else{
                 
                   $START_DATE1=  $text;
                   $END_DATE1= $text;
                }

 

   // echo "UPDATE `ups` SET `GEM_NO`='$GEM_NO',`GEM_Date`='$GEM_Date',`VENDOR_NAME`='$VENDOR_NAME',`BRAND_NAME`='$BRAND_NAME',`Serial_Number`='$Serial_Number',`Model_No`='$Model_No',`Delevary_Date`='$Delevary_Date1',`Problem`='$Problem1',`START_DATE`='$START_DATE1',`END_DATE`='$END_DATE1',`Defunct`='$Defunct' WHERE `id`='$id'";die;

    // mysqli_query($conn, "UPDATE `items` SET `name`='$name',`price`='$price',`description`='$description',`category`='$category' WHERE `id`='$id'") or die(mysqli_error());

    // header("location: admin_item_add.php");
  
$query=$con->query("UPDATE `ups` SET `GEM_NO`='$GEM_NO',`GEM_Date`='$GEM_Date',`VENDOR_NAME`='$VENDOR_NAME',`BRAND_NAME`='$BRAND_NAME',`Serial_Number`='$Serial_Number',`Model_No`='$Model_No',`Delevary_Date`='$Delevary_Date1',`Problem`='$Problem1',`START_DATE`='$START_DATE1',`END_DATE`='$END_DATE1',`Defunct`='$Defunct' WHERE `id`='$id'");

if($query){
header("location:admin_UPS.php");
}

  }
?>