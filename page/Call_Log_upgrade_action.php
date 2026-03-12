<?php
require_once __DIR__ . '/../dbConnection/dbConnection.php';
if (isset($_POST['update_cpu'])) {

  $S_N = $_POST['S_N'];
  $SSD_Capacity = $_POST['SSD_Capacity'];
  $HDD_Capacity = $_POST['HDD_Capacity'];
  $RAM = $_POST['RAM'];
  $Graphic_Card = $_POST['Graphic_Card'];
  $OS = $_POST['OS'];
  $OS_Serial_no = $_POST['OS_Serial_no'];
  $remark = $_POST['remark'];
  $product=$_POST['product'];
  //echo $product;die;
  //echo $remark;
  $amc_working_table_id = $_POST['table_id'];
  //echo $amc_working_table_id ;die;
  $PSD = date("Y-m-d");
  date_default_timezone_set("Asia/Calcutta");
  //echo $S_N . $id;die;
  //echo "UPDATE `cpu` SET `SSD_Capacity`='$SSD_Capacity',`HDD_Capacity`='$HDD_Capacity',`RAM`='$RAM',`Graphic_Card`='$Graphic_Card',`OS`='$OS',`OS_Serial_no`='$OS_Serial_no',`upgrade`='0' WHERE `Serial_Number`='$S_N'";die;
  //echo "UPDATE `amc_working` SET `done`='1',`remark`='$remark' WHERE `done`='1' AND `SERIAL_NUMBER`='$amc_working_table_id'";die;
  //echo "UPDATE `amc_working` SET `remark`='$remark',`done`='1',`problem_solved_date`='$PSD' WHERE `id`='$amc_working_table_id'";die;
  $query = mysqli_query($con, "SELECT * FROM `$product` WHERE `Serial_Number`='$S_N'");
  //$cpuDetails = mysqli_fetch_all($query, MYSQLI_ASSOC);
  //print_r($cpuDetails);
  while ($cpuDetails = mysqli_fetch_array($query)) {

 $H_SDD_Capacity = $cpuDetails['SSD_Capacity'];
 $H_HDD_Capacity = $cpuDetails['HDD_Capacity'];
 $H_RAM = $cpuDetails['RAM'];
 $H_Graphic_Card = $cpuDetails['Graphic_Card'];
 $H_OS = $cpuDetails['OS'];
 $H_OS_Serial_no = $cpuDetails['OS_Serial_no'];
}
    $query_H = $con->query("INSERT INTO `history_cpu`(`id`, `Serial_Number`, `SSD_Capacity`, `HDD_Capacity`, `RAM`, `Graphic_Card`, `OS`, `OS_Serial_no`, `date`,`product`) VALUES ('','$S_N','$H_SDD_Capacity','$H_HDD_Capacity','$H_RAM','$H_Graphic_Card','$H_OS','$H_OS_Serial_no','$PSD','$product')");
    
    // echo "INSERT INTO `history_cpu`(`id`, `Serial_Number`, `SSD_Capacity`, `HDD_Capacity`, `RAM`, `Graphic_Card`, `OS`, `OS_Serial_no`, `date`) VALUES ('','$S_N','$H_SDD_Capacity','$H_HDD_Capacity','$H_RAM','$H_Graphic_Card','$H_OS','$H_OS_Serial_no','$PSD')";die;


  //echo $S_N . $cpuDetails['SSD_Capacity'] . $cpuDetails['HDD_Capacity'] . $cpuDetails['RAM'] . $cpuDetails['Graphic_Card'] . $cpuDetails['OS'] . $cpuDetails['OS_Serial_no'] . $PSD ;die;


  
  



  $query_CPU_UPDATE = $con->query("UPDATE `$product` SET `SSD_Capacity`='$SSD_Capacity',`HDD_Capacity`='$HDD_Capacity',`RAM`='$RAM',`Graphic_Card`='$Graphic_Card',`OS`='$OS',`OS_Serial_no`='$OS_Serial_no',`upgrade`='0' WHERE `Serial_Number`='$S_N'");

  $query_DONE_amc_working = $con->query("UPDATE `amc_working` SET `remark`='$remark',`done`='1',`problem_solved_date`='$PSD' WHERE `id`='$amc_working_table_id'");
  //echo $query_DONE_amc_working;die;
  if ($query_CPU_UPDATE) {
    $name=strtoupper($product);
    echo "<script>alert('$name UPDATE done');window.location.href='admin_$name.php'; </script>";
  } else {
    echo "failed";
  }
}
