<?php

// Inialize session
session_start();

// Delete certain session
unset($_SESSION['username']);
unset($_SESSION['error_msg']);
// 	header("Location: ../index.php");
// 	die;
// Delete all session variables
// session_destroy();

// Jump to login page
header('Location: ../index.php');
