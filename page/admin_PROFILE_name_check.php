<?php
require_once __DIR__ . '/../dbConnection/dbConnection.php';
if (!empty($_POST["NAME"])){
   $NAME= $_POST['NAME'];
   //echo $NAME;die;
   NAME($NAME);
  
}
function NAME($NAME){
	//echo $NAME;die;

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "sms";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
  //ho "SELECT * FROM `login` WHERE `NAME`='$NAME'";
	 $sql="SELECT * FROM login WHERE NAME='$NAME'";
	
	//echo $sql1;
	$result = $conn->query($sql);
  echo $result;
	if ($result->num_rows > 0) {
		echo "<span style='color:red'>This Serial Number is alredy exists </span>";
	    // output data of each row
	    //echo 11111;
	   
	    
	} else {
	    //echo "0 results";
	}



	
}

?>