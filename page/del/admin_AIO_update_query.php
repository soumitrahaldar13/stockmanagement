<?php



  require_once __DIR__ . '/../dbConnection/dbConnection.php';

  if(ISSET($_POST['update_AIO'])){
    //echo 1;die;
    $id = $_POST['id'];
    $GEM_NO = $_POST['GEM_NO'];
    $GEM_Date= $_POST['GEM_Date'];
    $BRAND_NAME= $_POST['BRAND_NAME'];
    $Serial_Number= $_POST['Serial_Number'];
    $Model_No = $_POST['Model_No'];
    $SSD_Capacity = $_POST['SSD_Capacity'];
    $HDD_Capacity = $_POST['HDD_Capacity'];
    $Processor = $_POST['Processor'];
    $Processor_Base_Frequency = $_POST['Processor_Base_Frequency'];
    $ChipSet_Number = $_POST['ChipSet_Number'];
    $RAM = $_POST['RAM'];
    $Optical_Drive = $_POST['Optical_Drive'];
    $Graphic_Card = $_POST['Graphic_Card'];
    $Wireless = $_POST['Wireless'];
    $OS = $_POST['OS'];
    $OS_Serial_no = $_POST['OS_Serial_no'];
    $Problem = $_POST['Problem'];
    $START_DATE = $_POST['START_DATE'];
    $END_DATE = $_POST['END_DATE'];
    $Defunct=$_POST['Defunct'];
    $text = 'Null';
    $Monitor_Size =$_POST['Monitor_Size'];
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
    
  
$query=$con->query("UPDATE `aio` SET `GEM_NO`='$GEM_NO',`GEM_Date`='$GEM_Date',`BRAND_NAME`='$BRAND_NAME',`Serial_Number`='$Serial_Number',`Model_No`='$Model_No',`Problem`='$Problem',`START_DATE`='$START_DATE1',`END_DATE`='$END_DATE1',`Defunct`='$Defunct',`SSD_Capacity`='$SSD_Capacity',`HDD_Capacity`='$HDD_Capacity',`Processor`='$Processor',`Processor_Base_Frequency`='$Processor_Base_Frequency',`ChipSet_Number`='$ChipSet_Number',`RAM`='$RAM',`Optical_Drive`='$Optical_Drive',`Graphic_Card`='$Graphic_Card',`Wireless`='$Wireless',`OS`='$OS',`OS_Serial_no`='$OS_Serial_no' ,`monitor_size`='$Monitor_Size' WHERE `id`='$id'");

if($query){
header("location:admin_AIO.php");
}

  }
?>