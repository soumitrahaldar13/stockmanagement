<?php
  
// Get the user id 
$pan = $_REQUEST['pan'];
  echo $pan;die;
require_once('Admin/page/dbConnection.php');
  
if ($pan !== "") {
      
    // Get corresponding first name and 
    // last name for that user id    
    $query = mysqli_query($con, "SELECT * FROM `donate` WHERE `PAN`='$pan'");
  
    $row = mysqli_fetch_array($query);
  
    // Get the name
    $name = $row["name"];
    // Get the email
    $email= $row["email"];
    // Get the mobile
    $mobile = $row["mobile"];
    // Get the address
    $address = $row["address"];
      // Get the pin
    $pin = $row["pin"];
    // Get the city
    $city= $row["city"];
    // Get the state
    $state = $row["state"];
   

   
}
  
// Store it in a array
$result = array("$name", "$email","$mobile","$address","$pin","$city","$state");
  
// Send in JSON encoded form
$myJSON = json_encode($result);
echo $myJSON;
?>