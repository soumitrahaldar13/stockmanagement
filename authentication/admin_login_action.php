<?php
include_once __DIR__ . '/../dbConnection/dbConnection.php';

session_start();
if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$pwd = $_POST['pwd'];

	// todo: hashing of password to be done on signup of user
	// $hashed_password = password_hash($pwd, PASSWORD_BCRYPT);
	$result = mysqli_query($con, "select * from login where `NAME`='$name'") or die('Error');

	$count = mysqli_num_rows($result);
	$array = mysqli_fetch_array($result);

	$flag = password_verify($pwd, $array['password']);

	if ($count != 1 || !$flag) {
		$_SESSION['error_msg'] = "incorrect username or password";
		header("Location: ../index.php");
	} else {
		// echo __DIR__;
		header('Location: ../page/admin_Dashboard.php');
		$_SESSION['is_user_logged_in'] = true;
	}
}
