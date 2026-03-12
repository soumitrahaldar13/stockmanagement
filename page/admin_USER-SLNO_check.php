<?php
//require_once __DIR__ . '/../dbConnection/dbConnection.php';
if (!empty($_POST["EMP_CODE"])){

	//echo 1;
   $EMP_CODE= $_POST['EMP_CODE'];
    //echo $EMP_CODE;
  EMP_CODE($EMP_CODE);
  
}
function EMP_CODE($EMP_CODE){
	//echo $EMP_CODE;

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "mis_cell";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

	$sql = "SELECT * FROM `user` WHERE `emp_id`='$EMP_CODE'";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		echo "<span style='color:red'>This Serial Number is alredy exists </span>";
	    // output data of each row
	    //echo '11111';
	   
	    
	} else {
	    //echo "0 results";
	}



	
}

?>