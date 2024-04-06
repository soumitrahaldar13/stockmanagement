<?php
error_reporting(0);
//all the variables defined here are accessible in all the files that include this one
$con= new mysqli('localhost','root','','mis_cell')or die("Could not connect to mysql".mysqli_error($con));

?>