<?php
include '../config.php';
$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM users WHERE id = '$id'");
header("location: ../views/list.php")
?>
