<?php
require_once __DIR__ . '/../dbConnection/dbConnection.php';
session_start();

if (isset($_POST['submit_id_creation'])) {
    $NAME = $_POST['NAME'];
    $password = $_POST['password'];
    $image = $_POST['image'];
    $role = $_POST['role'];
    $Cell = $_POST['Cell'];

    // prepare statement
    $stmt = $con->prepare("INSERT INTO `login`(`NAME`, `password`, `image`, `Role`, `Cell`) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $NAME, $password, $image, $role, $Cell);

    if ($stmt->execute()) {
        echo "<script>alert('USER Assignment Successfully done');window.location.href='admin_Dashboard.php'; </script>";
    } else {
        echo "Database Error: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "failed";
}
?>