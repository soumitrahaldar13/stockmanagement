<?php
require_once __DIR__ . '/../dbConnection/dbConnection.php';
if (!empty($_POST["Serial_Number"])){
   $Serial_Number= $_POST['Serial_Number'];
   // echo $Serial_Number;
   Serial_Number($Serial_Number);
  
}
function Serial_Number($Serial_Number){
	//echo $Serial_Number;

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "SMS";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

	$sql = "SELECT * FROM `laptop` WHERE `Serial_Number`='$Serial_Number'";
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