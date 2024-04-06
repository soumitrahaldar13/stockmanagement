<?php
//echo 1;die;
session_start();
if (isset($_POST['submit']))
{
	include_once 'dbConnection.php';
		$name = $_POST['name'];
		$pwd = $_POST["pwd"];
		$_SESSION["name"] = $name;
		$f=0;
	 $result = mysqli_query($con,"select * from login where `NAME`='$name' and password='$pwd'")or die('Error');
$count=mysqli_num_rows($result);
if($count==1)
    {
	echo "<script>alert('login Sucessfully');window.location.href='admin_Dashboard.php'; </script>";
	}
else
	{
		
		 echo "<script>alert('unSucessfully'); window.location='../index.php'</script>";die;
	}

}

?>

 