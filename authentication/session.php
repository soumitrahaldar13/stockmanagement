<?php
//Start session
session_start();
//Check whether the session variable SESS_MEMBER_ID is present or not
if (!isset($_SESSION['name']) || (trim($_SESSION['name']) == '')) {
    header("location: ../index.php");
    exit();
}
$session_name=$_SESSION['name'];

?>