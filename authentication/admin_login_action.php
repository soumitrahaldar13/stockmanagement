<?php
include_once __DIR__ . '/../dbConnection/dbConnection.php';
//echo 1;
session_start();
if (isset($_POST['submit'])) {
	//echo 2;
	$name = $_POST['name'];
	$email= $_POST['email'];
	//$pwd = $_POST['pwd'];
// echo $email;
// echo $name;die;
	// todo: hashing of password to be done on signup of user
	//echo $hashed_password = password_hash($pwd, PASSWORD_BCRYPT);die;
	$result = mysqli_query($con, "select * from login where `NAME`='$name' AND `password`= '$email'") or die('Error');

	$count = mysqli_num_rows($result);
	$array = mysqli_fetch_array($result);
	if(password_verify($email, $array['password']));
	{
		$flag= true;
	}

	// $flag = password_verify($email, $array['password']);
//echo  $flag;die;
	// if ($count != 1 || !$flag) {
	if ($count != 1 || !$flag ) {
		//echo 1;die;
		$_SESSION['error_msg'] = "incorrect username or email";
		header("Location: ../index.php");
	} else {
		//echo 2;die;
		$_SESSION['is_user_logged_in'] = true;
		$_SESSION['name'] = $array['NAME'];
		$_SESSION['role'] = $array['Role'];
		$_SESSION['Cell'] = $array['Cell'];;
        //echo $_SESSION['Cell'].$_SESSION['role'];die;
		header('Location: ../page/admin_index.php');
	}
}
